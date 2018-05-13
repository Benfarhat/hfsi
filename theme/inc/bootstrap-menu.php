<?php
/**
 * Custom bootstrap nav and navbar menus (walker implementation)
 *
 * @see: https://github.com/SimonPadbury/b4st/blob/master/functions/navbar.php
 *
 * @package hfsi
 */

class hfsi_walker_navbar_menu extends Walker_Nav_menu {
	function start_lvl( &$output, $depth = 0, $args = array() ){ // ul
		$indent = str_repeat("\t",$depth); // indents the outputted HTML
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
	}
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
    $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    $li_attributes = '';
		$class_names = $value = '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;
		if( $depth && $args->walker->has_children ){
			$classes[] = 'dropdown-menu dropdown-menu-right';
		}
		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr($class_names) . '"';
		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
		$attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';
		$item_output = $args->before;
		$item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}




class hfsi_walker_nav_menu extends Walker_Nav_menu {

    /**
     * Starts the list before the elements are added.
     *
     * @see Walker::start_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
	public function start_lvl( &$output, $depth = 0, $args = array() ){ // ul
		$indent = str_repeat("\t",$depth); // indents the outputted HTML
    $output .= preg_replace('#\s+#', ' ', "\n$indent<div class=\"dropdown-menu ".$args->submenu_class." animated fadeIn\">\n");
  }

      /**
     * Ends the list of after the elements are added.
     *
     * @see Walker::end_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
  public function end_lvl( &$output, $depth = 0, $args = array() ) {
      $indent = str_repeat("\t", $depth);
      $output .= "$indent</div>\n";
  }

    /**
     * Start the element output.
     *
     * @see Walker::start_el()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
  public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
    $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
		$class_names = $value = $class_link = $li_attributes = '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes = '';
		// $classes[] = ($args->walker->has_children) ? 'dropdown-toggle' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
    $classes[] = 'nav-item';
    if($args->walker->has_children) $classes[] = "dropdown";

		if( $depth && $args->walker->has_children ){
			$classes[] = 'dropdown';
		}
		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

    if( $depth == 0 )
    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
    $attributes .= ( $args->walker->has_children ) ? ' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : '';

    $class_link .= ( $depth > 0 ) ? 'dropdown-item' : 'nav-link';
    $class_link .= ( $args->walker->has_children ) ? ' dropdown-toggle ' : '';

		$item_output = $args->before;
		$item_output .= '<a class="'.$class_link.'"' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
    $item_output .= $args->after;

    // If we reach the highest level / depth
    // we don't need to display link for hidden that will automatically not be displayed

    if(($depth == ($args->depth - 1)) && ($args->walker->has_children)):
      $item_output = '';
    endif;
    $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

  }
    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Page data object. Not used.
     * @param int    $depth  Depth of page. Not Used.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
      if ($depth === 0) {
          $output .= "</li>\n";
      }
  }
}
