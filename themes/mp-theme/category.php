<h1><?php single_cat_title();?></h1>
<?php
$category = get_the_category()[0];
                        print_r($category);
                        $args = array(
                            'post_type' => 'post',
                            'category_name' => $category->name,
                            'posts_per_page' => 9,
                        );
                        $query = new WP_Query( $args );
                        $cont = 0;
                        while ( $query->have_posts() ) : $query->the_post();?>
                                    <li><a href="<?php the_permalink(); ?>"><?php echo $category->cat_name ; ?></a></li>
                        <?php endwhile ?>

<?php
                        $cats = array();
foreach (get_the_category(0) as $c) {
$cat = get_category($c);
array_push($cats, $cat->name);
}

if (sizeOf($cats) > 0) {
$post_categories = implode(', ', $cats);
} else {
$post_categories = 'Not Assigned';
}

echo $post_categories;