<?php 
                        $category = get_the_title();
                        $categoryName = strtolower(str_replace("Categoria: ", "", $category));
                        $args = array(
                            'post_type' => 'post',
                            'category_name' => $categoryName,
                            'posts_per_page' => 9,
                        );
                        $query = new WP_Query( $args );
                        
                        while ( $query->have_posts() ) : $query->the_post();
                        ?><li><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                        <?php endwhile;