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
        </div>
        <div class="topicos">
            <?php
                mb_internal_encoding("UTF-8");
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
                        <a href="<?php the_permalink(); ?>">
                            <div class="topico cbox posts">
                                <?php if(has_post_thumbnail(get_the_ID())){?><div class="img"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" /></div> <?php } ?>
                                <div class="conteudo">
                                    <div class="title"><?php the_title(); ?></div>
                                    <article>
                                        <?php echo mb_substr(get_the_excerpt(), 0, 200); if (strlen(get_the_excerpt()) > 200) echo "[...]"; ?>
                                    </article>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                } else {
                    ?>
                    <div class="topico cbox">
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
