<?php get_header(); ?>

<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/mp-theme/css/post.css" />
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2"></script>

<div id="fb-root"></div>
<div class="principal">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blog cbox">
                <div class="inicio">
                    <img src="/wp-content/themes/mp-theme/icons/open-book.svg" style="height:20px" />
                    <div class="alinhar">
                    <li><a href="#">Publicações</a></li>
                        <ul class="post-categories">
                            <li>
                            <?php

                            $cats = get_the_category(); //retrieve cats for post

                            foreach ($cats as $cat) { //go thru to find child one - means cat which has specified parent id
                                if ($cat->category_parent != 0) {
                                    $child = $cat->term_taxonomy_id;
                                }
                            }
                             get_category_parents( $child, TRUE, '</li> <li>' );
                            ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="posts">
                    <div class="conteudo">
                        <div class="title"><?php the_title(); ?>
                    <div class="icons">
                    <div data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                    <i class="fab fa-facebook" style="color:#4064ac;margin-right:0.4rem;"></i></a>
                    </div>
                   <a href="#"><i class="fab fa-whatsapp" style="color:#169552;margin-right:0.4rem;"></i></a>
                    <a href="#"><i class="fab fa-linkedin" style="color:#0274b3;margin-right:0.4rem;"></i></a>
                    <a href="#"><i class="fab fa-instagram" style="color:#8e49c6;margin-right:0.4rem;"></i></a></div></div>
                        <h1 style="display: none;"><?php the_title(); ?></h1>
                        <article>
                            <?php the_content(); ?>
                        </article>
                        <section class="conteudo" style="">
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
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

    .alinhar li::before{
        content: ">";
    }

    .alinhar li:last-child::before, .alinhar li:first-child::before{
        content: "";
    }

    .alinhar li{
        float: left;
    }
</style>
