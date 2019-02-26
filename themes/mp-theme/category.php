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

$query = new WP_Query( array( 'category_name' => 'significados' ) ); 
// The Query
 ?> <h1> the new loop</h1><?php
// The Loop
if ( $query->have_posts() ) {
    echo '<ul>';
    while ( $query->have_posts() ) {
        $query->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>


 

    <?php wp_list_categories( $args ); ?>
