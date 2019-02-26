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
                                    <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                        <?php endwhile ?>