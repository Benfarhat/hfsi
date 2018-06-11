jQuery( document ).ready(function($) {
	"use strict";

	/**
	 * Based on Repeater Custom Control
	 * from Anthony Hortin <http://maddisondesigns.com>
	 * @license http://www.gnu.org/licenses/gpl-2.0.html
	 * @link https://github.com/maddisondesigns
	 */

	// Update the values for all our input fields and initialise the sortable repeater
	$('.sortable_repeater_control').each(function() {
    // If there is an existing customizer value, populate our rows
    var datas = $(this).find('.customize-control-sortable-repeater').val();
    console.log(datas);
    console.log(JSON.parse(datas));
		var defaultValuesArray = $(this).find('.customize-control-sortable-repeater').val().split(',');
    var numRepeaterItems = defaultValuesArray.length;
    //console.log(JSON.parse(defaultValuesArray[0]));
    //debugger;
    console.log(numRepeaterItems);
		if(numRepeaterItems > 0) {
			// Add the first item to our existing input field
			$(this).find('.repeater-input').val(defaultValuesArray[0]);
			// Create a new row for each new value
			if(numRepeaterItems > 1) {
				var i;
				for (i = 1; i < numRepeaterItems; ++i) {
					skyrocketAppendRow($(this), defaultValuesArray[i]);
				}
			}
		}
	});

  /*

	// Make our Repeater fields sortable
	jQuery(this).find('.sortable').sortable({
		update: function(event, ui) {
			skyrocketGetAllInputs($(this).parent());
		}
	});

  */

	// Remove item starting from it's parent element
	$('.sortable').on('click', '.customize-control-sortable-repeater-delete', function(event) {
		event.preventDefault();
		var numItems = $(this).parent().parent().find('.repeater').length;

		if(numItems > 1) {
			$(this).parent().slideUp('fast', function() {
				var parentContainer = $(this).parent().parent();
				$(this).remove();
				skyrocketGetAllInputs(parentContainer);
			})
		}
		else {
			$(this).parent().find('.repeater-input').val('');
			skyrocketGetAllInputs($(this).parent().parent().parent());
		}
	});

	// Add new item
	$('.customize-control-sortable-repeater-add').click(function(event) {
    console.log("ok");
		event.preventDefault();
		skyrocketAppendRow($(this).parent());
		skyrocketGetAllInputs($(this).parent());
	});

	// Refresh our hidden field if any fields change
	$('.sortable').change(function() {
		skyrocketGetAllInputs($(this).parent());
	})

	// Add https:// to the start of the URL if it doesn't have it
	$('.sortable').on('blur', '.repeater-input', function() {
		var field = $(this);
		var val = field.val();
		if(val && !val.match(/^.+:\/\/.*/)) {
			// Important! Make sure to trigger change event so Customizer knows it has to save the field
			field.val(val).trigger('change');
		}
	});

	// Append a new row to our list of elements
	function skyrocketAppendRow($element, defaultValue = '') {
		//var newRow = '<div class="repeater" style="display:none"><input type="text" value="' + defaultValue + '" class="repeater-input" placeholder="https://" /><span class="dashicons dashicons-sort"></span><a class="customize-control-sortable-repeater-delete" href="#"><span class="dashicons dashicons-no-alt"></span></a></div>';
		//var newRow = '<div class="repeater" style="border:1px solid #ccc;padding:2px;background-color:#fff;margin-top:4px;"><input type="text" value="' + defaultValue + '" class="repeater-input" style="width:100%;border:1px solid #ddd;" placeholder="<?php echo esc_html( $this->description ); ?>" /><select class="repeater-type-input" style="width:100%;border:1px solid #ddd;" ><option value="url">URL</option><option value="text">Text</option><option value="date">Date</option><option value="integer">Integer</option></select><span class="dashicons dashicons-sort"></span><a class="customize-control-sortable-repeater-delete" href="#"><span class="dashicons dashicons-no-alt"></span></a></div>';
		var newRow = `					<div class="repeater" style="border:1px solid #ccc;padding:2px;background-color:#fff;margin-top:4px;">
    <input type="text" value="" class="repeater-input" style="width:100%;border:1px solid #ddd;" placeholder="Fieldname..." />
    <input type="text" value="" class="repeater-label-input" style="width:100%;border:1px solid #ddd;" placeholder="Label for this field..." />
    <select class="repeater-type-input" style="width:100%;border:1px solid #ddd;" >
      <option value="url">URL</option>
      <option value="text">Text</option>
      <option value="date">Date</option>
      <option value="integer">Integer</option>
    </select>
    <input type="text" value="" class="repeater-class-input" style="width:100%;border:1px solid #ddd;" placeholder="Custom class..." />
    <span class="dashicons dashicons-sort"></span><a class="customize-control-sortable-repeater-delete" href="#"><span class="dashicons dashicons-no-alt"></span></a>
  </div>`;

		$element.find('.sortable').append(newRow);
		$element.find('.sortable').find('.repeater:last').slideDown('slow', function(){
			$(this).find('input').focus();
		});
	}

	// Get the values from the repeater input fields and add to our hidden field
	function skyrocketGetAllInputs($element) {
    console.log($element);
		var inputValues = $element.find('.repeater').map(function() {
      return {
        fieldname: $(this).find('.repeater-input').val(),
        label: $(this).find('.repeater-label-input').val(),
        type: $(this).find('.repeater-type-input').val(),
        class: $(this).find('.repeater-class-input').val(),
      };
    }).toArray();
		// Add all the values from our repeater fields to the hidden field (which is the one that actually gets saved)
		$element.find('.customize-control-sortable-repeater').val(JSON.stringify(inputValues));
		// Important! Make sure to trigger change event so Customizer knows it has to save the field
		$element.find('.customize-control-sortable-repeater').trigger('change');
	}




});
