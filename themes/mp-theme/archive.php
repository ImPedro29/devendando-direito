<?php get_header(); ?>
<?php if (is_category('blog')) { ?>
    <div class="principal">
        <div class="container">
            <div class="categoria">
                <div class="cbox">
                    <div class="inicio">
                            <img src="/wp-content/themes/mp-theme/icons/open-book.svg" style="height:20px" />
                        <div class="alinhar">
                            <li><a href="/category/blog">&nbsp;Publicações</a></li>
                        </div>
                    </div>
                </div>
                <div class="categorias">
                        <div class="coluna-1">
                            <div class="topico">
                            <?php
              $the_query = new WP_Query(  array(
                'post_type' => 'post',
                'category_name' => 'blog',
                
            ) );
                // The Query
             
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                        <a href="<?php the_permalink();?>">
                            <div class="topico cbox">
                                <div class="img"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" /></div>
                                <div class="conteudo">
                                    <div class="title"><?php the_title(); ?></div>
                                    <article>
                                        <?php the_excerpt(); ?>
                                    </article>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                }?>
                               
                            </div> 
                </div>
            </div>
           
        
        
            </div>
            
            </div>
            <?php get_sidebar(); ?>
            </div>
   
<?php } else if (is_category()) { ?>
    <?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; ?>
    <div class="principal">
        <div class="container">
            <div class="cbox">
                <div class="inicio">
                    <img src="/wp-content/themes/mp-theme/icons/open-book.svg" style="height:20px" />
                    <div class="alinhar">
                        <li><a href="/">INICIO ></a></li>
                        <li><a href="/category/significados">SIGNIFICADOS</a></li>
                        </li>
                    </div>
                </div>
            </div>

            <div class="topicos">
                <div class="topico cbox">
                    <div class="title"><?php single_cat_title(); ?> - Posts recentes</div>
                    <div class="box-flex">
                        <?php
                        $category = get_the_archive_title();	               
                        $categoryName = strtolower(str_replace("Categoria: ", "", $category));
                        if($categoryName=="significado"){
                            $categoryName="significados";
                        }

                        $query = new WP_Query(  array(
                            'post_type' => 'post',
                            'category_name' => $categoryName,
                            'posts_per_page' => 9,
                        ) );
                        $cont = 0;
                        mb_internal_encoding("UTF-8");
                        while ( $query->have_posts() ) : $query->the_post();?>
                            <?php if($cont == 0){  ?>
                                <div class="box">
                                    <li><a href="<?php the_permalink(); ?>"><?php echo mb_substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                            <?php }else if($cont % 3 == 0 && $cont < 8){ ?>
                                </div>
                                <div class="box">
                                    <li><a href="<?php the_permalink(); ?>"><?php echo mb_substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                            <?php }else if($cont == 8){ ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php echo mb_substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                                </div>
                            <?php } else{ ?>
                                <li><a href="<?php the_permalink(); ?>"><?php echo mb_substr(get_the_title(), 0, 16); if (strlen(get_the_title()) > 16) echo "..."; ?></a></li>
                        <?php } $cont++; endwhile;

                        while ($cont < 9){
                            if($cont % 3 == 0 && $cont != 9 && $cont != 0){
                        ?>
                            </div>
                            <div class="box">
                                <li><a href="#"> S/ Conteudo</a></li>
                            <?php
                            } else if($cont == 0) {
                                ?>
                                <div class="box">
                                    <li><a href="#"> S/ Conteudo</a></li>
                                <?php
                            } else if($cont == 8){
                                ?>
                                    <li><a href="#"> S/ Conteudo</a></li>
                                </div>
                                <?php
                            } else {
                                ?>
                                    <li><a href="#"> S/ Conteudo</a></li>
                                <?php
                            }
                            $cont++;
                        }
                        ?>
                        </div>
                     </div>
                </div>
                <div class="topico cbox">
                    <div class="title"><?php echo single_cat_title(); ?></div>
                    <div class="box-flex">
                        <?php
                        if (is_category('significados')) {
                        wp_reset_query();
                        $args = array(
                            'post_type' => 'post',
                            'category_name' => $categoryName,
                            'orderby' => 'name',
                            'paged' => $paged,
                            'order' => 'ASC');

                        $query = new WP_Query( $args );
                        ?>
                        <div class="box" style="display:block;">
                            <?php
                        while ( $query->have_posts() ) : $query->the_post();?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                                </div>
                            <?php }else{?>

<div class="box" style="display:block;"><?php
wp_reset_query();
$args = array(
    'post_type' => 'post',
    'category_name' => $categoryName,
    'orderby' => 'name',
    'paged' => $paged,
    'order' => 'ASC');
    $query = new WP_Query( $args );
    while ( $query->have_posts() ) : $query->the_post();?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
                    <?php        
                           endwhile;?></div><?php } ?>
                    </div>
                </div>
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $query)); } ?>
            </div>
            <?php
            if($cont>=9){
                get_sidebar(); 
                }?> 
        </div>
        <?php
              if($cont<9){
                get_sidebar();
              }
              ?>
    </div>

    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    Pagina Desabilitada.
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    Pagina Desabilitada.
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    Pagina Desabilitada.
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    Pagina Desabilitada.
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    Pagina Desabilitada.
<?php } ?>

<?php get_footer(); ?>
