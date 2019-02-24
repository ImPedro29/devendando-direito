<?php get_header(); ?>

<div class="principal">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blog cbox">
                <div class="inicio">
                    <img src="/wp-content/themes/mp-theme/icons/open-book.svg" style="height:20px" />
                    <div class="alinhar">
                        <li><a href="">&nbsp;QUEM SOMOS</a></li>
                    </div>
                </div>

                <div class="posts">
                    <div class="conteudo">
                        <div class="title"><?php the_title(); ?>
                        <i class="fab fa-instagram"></i>
                        
                    </div>
                        <h1 style="display: none;"><?php the_title(); ?></h1>
                        <article>
                            <?php the_content(); ?>
                        </article>
                    </div>
                </div>
            </div>
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
