<?php get_header(); ?>

<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/mp-theme/css/post.css" />

<div class="principal">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blog cbox">
                <div class="inicio">
                    <img src="/wp-content/themes/mp-theme/icons/open-book.svg" style="height:20px" />
                    <div class="alinhar">
                        <ul class="post-categories">
                            <li>
                            <?php

                            $cats = get_the_category(); //retrieve cats for post

                            foreach ($cats as $cat) { //go thru to find child one - means cat which has specified parent id
                                if ($cat->category_parent != 0) {
                                    $child = $cat->term_taxonomy_id;
                                }
                            }
                            echo get_category_parents( $child, TRUE, '</li> <li>' );
                            ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="posts">
                    <div class="conteudo">
                        <div class="title"><?php the_title(); ?>
                    <div class="icons"><a href="#"><i class="fab fa-facebook" style="color:#4064ac;margin-right:0.4rem;"></i></a>
                   <a href="#"><i class="fab fa-whatsapp" style="color:#169552;margin-right:0.4rem;"></i></a>
                    <a href="#"><i class="fab fa-linkedin" style="color:#0274b3;margin-right:0.4rem;"></i></a>
                    <a href="#"><i class="fab fa-instagram" style="color:#8e49c6;margin-right:0.4rem;"></i></a></div></div>
                        <h1 style="display: none;"><?php the_title(); ?></h1>
                        <article>
                            <?php the_content(); ?>
                        </article>
                        <section class="conteudo" style="">

                        </section>
                        <div class="description">
                            <div class="dtitle">Por <?php the_author(); ?></div>
                            <div class="texto">
                                <?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php comments_template(); ?>
        <?php endwhile; else: ?>
            <div class="blog cbox">
                <div class="inicio">
                    <img src="icons/open-book.svg" style="height:20px" />
                    <div class="alinhar">
                        <li><a href="">&nbsp;ERRO ></a></li>
                    </div>
                </div>

                <div class="posts">
                    <div class="conteudo">
                        <div class="title">ERRO 404</div>
                        <article>
                            Desculpe, a pagina que voce esta procurando nao existe.
                        </article>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>

<style>
    p{
        display: block;
        margin-block-start: 1em  !important;
        margin-block-end: 1em !important;
        margin-inline-start: 0px !important;
        margin-inline-end: 0px !important;
    }
    .alinhar ul{
        list-style-type: none;
    }

    .alinhar li::after{
        content: ">";
    }

    .alinhar li:last-child::after{
        content: "";
    }

    .alinhar li{
        float: left;
    }
</style>
