<?php get_header(); ?>
<div class="principal">
    <div class="container">
        <div class="cbox">
            <div class="inicio">
                <img src="/wp-content/themes/mp-theme/icons/home.svg" style="height:20px" />
                <div class="alinhar">
                    <li><a href="">INÍCIO</a></li>
                </div>
            </div>
        </div>
        <?php
        global $wp_query;
        $arg = array_merge( $wp_query->query_vars, ['posts_per_page' => 10000, 'category_name' => 'significados' ] );
        query_posts( $arg );
        $array = ['', '', ''];
        $cont = 0;
        if ( have_posts() ) : while ( have_posts() && $cont < 3) : the_post();
            $terms = get_the_terms(get_the_ID(), 'category');
            foreach ($terms as $item){
                if($item->slug != "significados"){
                    if($item->slug != $array[$cont-1] && $cont != 0){
                        if(!($cont > 1 && $item->slug == $array[$cont-2])){
                            $array[$cont] = $item->slug;
                            $cont++;
                        }
                    }else if($cont == 0){
                        $array[0] = $item->slug;
                        $cont++;
                    }
                }
            }
        endwhile; endif;
        ?>
        <div class="topicos">
            <div class="topico cbox">
                <div class="title"><?php echo $array[0]; ?></div>
                <div class="box-flex">
                    <?php
                        wp_reset_query();
                        global $wp_query;
                        $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 9, 'category_name' => $array[0] ] );
                        query_posts( $args );
                        $cont2 = 0;
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                            if($cont2 % 3 == 0 && $cont2 != 9 && $cont2 != 0){
                                ?>
                                    </div>
                                    <div class="box">
                                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                                <?php
                            } else if($cont2 == 0) {
                                ?>
                                    <div class="box">
                                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                                <?php
                            } else if($cont2 == 8){
                                ?>
                                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                                    </div>
                                <?php
                            } else {
                                ?>
                                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                                <?php
                            }
                            $cont2++;
                            endwhile;

                            while ($cont2 < 9){
                                if($cont2 % 3 == 0 && $cont2 != 9 && $cont2 != 0){
                                ?>
                                    </div>
                                    <div class="box">
                                        <li><a href="#"> S/ Conteudo</a></li>
                                        <?php
                                        } else if($cont2 == 0) {
                                            ?>
                                            <div class="box">
                                            <li><a href="#"> S/ Conteudo</a></li>
                                            <?php
                                        } else if($cont2 == 8){
                                            ?>
                                            <li><a href="#"> S/ Conteudo</a></li>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <li><a href="#"> S/ Conteudo</a></li>
                                            <?php
                                        }
                                $cont2++;
                            }

                            else: ?>
                        <div class="box">
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                        <div class="box">
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                        <div class="box">
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="topico cbox">
                <div class="title"><?php echo $array[1]; ?></div>
                <div class="box-flex">
                    <?php
                    wp_reset_query();
                    global $wp_query;
                    $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 9, 'category_name' => $array[1] ] );
                    query_posts( $args );
                    $cont3 = 0;
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    if($cont3 % 3 == 0 && $cont3 != 9 && $cont3 != 0){
                    ?>
                </div>
                <div class="box">
                    <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                    <?php
                    } else if($cont3 == 0) {
                        ?>
                        <div class="box">
                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                        <?php
                    } else if($cont3 == 8){
                        ?>
                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                        </div>
                        <?php
                    } else {
                        ?>
                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                        <?php
                    }
                    $cont3++;
                    endwhile;

                    while ($cont3 < 9){
                    if($cont3 % 3 == 0 && $cont3 != 9 && $cont3 != 0){
                    ?>
                </div>
                <div class="box">
                    <li><a href="#"> S/ Conteudo</a></li>
                    <?php
                    } else if($cont3 == 0) {
                        ?>
                        <div class="box">
                        <li><a href="#"> S/ Conteudo</a></li>
                        <?php
                    } else if($cont3 == 8){
                        ?>
                        <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                        <?php
                    } else {
                        ?>
                        <li><a href="#"> S/ Conteudo</a></li>
                        <?php
                    }
                    $cont3++;
                    }

                    else: ?>
                        <div class="box">
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                        <div class="box">
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                        <div class="box">
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="topico cbox">
                <div class="title"><?php echo $array[2]; ?></div>
                <div class="box-flex">
                    <?php
                    wp_reset_query();
                    global $wp_query;
                    $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 9, 'category_name' => $array[2] ] );
                    query_posts( $args );
                    $cont4 = 0;
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    if($cont4 % 3 == 0 && $cont4 != 9 && $cont4 != 0){
                    ?>
                </div>
                <div class="box">
                    <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                    <?php
                    } else if($cont4 == 0) {
                        ?>
                        <div class="box">
                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                        <?php
                    } else if($cont4 == 8){
                        ?>
                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                        </div>
                        <?php
                    } else {
                        ?>
                        <li><a href="<?php the_permalink(); ?>"> <?php echo substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                        <?php
                    }
                    $cont4++;
                    endwhile;

                    while ($cont4 < 9){
                    if($cont4 % 3 == 0 && $cont4 != 9 && $cont4 != 0){
                    ?>
                </div>
                <div class="box">
                    <li><a href="#"> S/ Conteudo</a></li>
                    <?php
                    } else if($cont4 == 0) {
                        ?>
                        <div class="box">
                        <li><a href="#"> S/ Conteudo</a></li>
                        <?php
                    } else if($cont4 == 8){
                        ?>
                        <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                        <?php
                    } else {
                        ?>
                        <li><a href="#"> S/ Conteudo</a></li>
                        <?php
                    }
                    $cont4++;
                    }

                    else: ?>
                        <div class="box">
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                        <div class="box">
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                        <div class="box">
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                            <li><a href="#"> S/ Conteudo</a></li>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="blog cbox">
            <div class="title">Blog</div>
            <?php
            wp_reset_query();
            global $wp_query;
            mb_internal_encoding("UTF-8");
            $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 3, 'category_name' => 'blog' ] );
            query_posts( $args );
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink();?>">
                    <div class="posts">
                        <?php if(has_post_thumbnail(get_the_ID())){?><div class="img"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" /></div> <?php } ?>
                        <div class="conteudo">
                            <h3><?php the_title(); ?></h3>
                            <article>
                                <?php echo mb_substr(get_the_excerpt(), 0, 220); if (strlen(get_the_excerpt()) > 220) echo "..."; ?>
                            </article>
                            <ul>
                                <li style="float: left;"><?php the_date(); ?></li>
                                <li style="float: right;"><a href="<?php the_permalink(); ?>">continuar lendo...</a></li>
                            </ul>
                        </div>
                    </div>
                </a>
            <?php endwhile?>
            <?php else: ?>
                <div class="posts">
                    <div class="img"><img src="img/lady.jpg" alt="direito" /></div>
                    <div class="conteudo">
                        <h3>Blog sem conteudo...</h3>
                        <article>
                            Blog sem conteudo...
                        </article>

                        <li><a href="#">continuar lendo...</a></li>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
