<?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; mb_internal_encoding("UTF-8");?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="css/post.css">


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
        <div class="blog">
            <?php
                $s=get_search_query();
                $args = array(
                    's' =>$s,
                    'paged' => $paged,
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="cbox posts" style="margin: 0.7em 10px;">
                                <?php if(has_post_thumbnail(get_the_ID())){?><div class="img"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" /></div> <?php } ?>
                                <div class="conteudo">
                                    <h3><?php the_title(); ?></h3>
                                    <article>
                                        <?php echo mb_substr(get_the_excerpt(), 0, 220); if (strlen(get_the_excerpt()) > 220) echo "..."; ?>
                                    </article>
                                    <ul>
                                        <li style="float: left;"><?php the_date(); ?></li>
                                        <li style="float: right; color: #f07c00;"><a href="<?php the_permalink(); ?>">continuar lendo...</a></li>
                                    </ul>
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
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $the_query)); } ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
