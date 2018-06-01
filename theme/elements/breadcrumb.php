<!-- Breadcrumb -->
<div class="row entry-header animated slideInRight">
  <div class="col-sm-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
<?php
if (is_page() && !is_front_page() || is_single() || is_category()) {
 echo '<li class="breadcrumb-item"><a title="Accueil" rel="nofollow" href="'.home_url('/').'">Accueil</a></li>';

 if (is_page()) {
 $ancestors = get_post_ancestors($post);

 if ($ancestors) {
 $ancestors = array_reverse($ancestors);

 foreach ($ancestors as $crumb) {
 echo '<li class="breadcrumb-item"><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li>';
 }
 }
 }

 if (is_single()) {
 $category = get_the_category();
 echo '<li class="breadcrumb-item"><a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a></li>';
 }

 if (is_category()) {
 $category = get_the_category();
 echo '<li class="breadcrumb-item">'.$category[0]->cat_name.'</li>';
 }

 // Current page
 if (is_page() || is_single()) {
 echo '<li class="breadcrumb-item">'.get_the_title().'</li>';
 };
 } elseif (is_front_page()) {
 // Front page

 echo '<li class="breadcrumb-item"><a title="Accueil" rel="nofollow" href="'.home_url('/').'">Accueil</a></li>';

 }
?>
      </ol>
    </nav>
  </div>
</div>
<!-- /Breadcrumb -->
