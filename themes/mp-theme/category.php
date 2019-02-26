<h1><?php single_cat_title();?></h1>
<?php
$orderby      = 'name'; 
$show_count   = false;
$pad_counts   = false;
$hierarchical = true;
$title        = '';
 
$args = array(
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title
);
?>
 
<ul>
    <?php wp_list_categories( $args ); ?>
</ul>