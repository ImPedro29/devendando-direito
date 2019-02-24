<?php get_header(); ?>

<div class="principal">
    <div class="container">
        <div class="blog cbox">
            <div class="inicio">
                <img src="/wp-content/themes/mp-theme/icons/open-book.svg" style="height:20px" />
                <div class="alinhar">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="#"> >Pesquisa</a></li>
                </div>
            </div>

            <?php
                $s=get_search_query();
                $args = array(
                    's' =>$s
                );
                // The Query
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                        <div class="posts">
                            <div class="conteudo">
                                <div class="title"><?php the_title(); ?></div>
                                <article>
                                    <?php the_excerpt(); ?>
                                </article>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="posts">
                        <div class="conteudo">
                            <div class="title">Nada Encontrado!</div>
                            <article>
                                Nada foi encontrado, tente pesquisar com outras palavras.
                            </article>
                        </div>
                    </div>
                    <?php
                }
            ?>

        </div>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
