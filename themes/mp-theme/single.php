<?php get_header(); ?>

<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/mp-theme/css/post.css" />
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2"></script>
<div class="principal">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blog cbox">
                <div class="inicio">
                    <img src="/wp-content/themes/mp-theme/icons/open-book.svg" style="height:20px" />
                    <div class="alinhar">
                        <ul class="post-categories">
                            <li class="path">
                            <?php
                            global $post;
                            
               $category_detail=get_the_category($post->ID);//$post->ID
               $contador=0;
               $array=[];
               foreach($category_detail as $cd){
                   if($cd->cat_name=="Artigos"){

                    ?><a href="https://desvendandodireito.com.br/category/blog/"><?php

                    echo $cd->cat_name;


                    $contador++;

                   }
                    else if($cd->cat_name=="Significado"){
                        
                       ?><a href="https://desvendandodireito.com.br/category/significados/"><?php

                       echo $cd->cat_name;
                       if($category_detail[$contador+1]->cat_name){
                             echo ">";
                            
                    }
                     $contador++;
    
                    }   
                        
                    else{
                        $nameLink=strtolower($cd->cat_name);
                        $newName=str_replace(" ","-",$nameLink);       
                   ?><a href="<?php echo "/category/significados/".$newName?>"><?php

                   echo $cd->cat_name;
                   if($category_detail[$contador+1]->cat_name){
                             echo ">";
                            
                    }
                    $contador++;
               }
            }?>
               </a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="posts">
                    <div class="conteudo">
                        <div class="title"><?php the_title(); ?>
                       
                    <div class="icons">
                    <a href="whatsapp://send?text=<?php echo get_permalink();?>" data-action="share/whatsapp/share" class="whats"><i class="fab fa-whatsapp" style="color:#169552;margin-right:0.4rem;"></i></a>

                   <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
<script type="IN/Share" data-url="<?echo get_permalink();?>" style="padding:0.5rem 0;"></script>
  <!-- coloque o link para a rede social                 -->
<a href="https://www.instagram.com/amon.cruz/"><i class="fab fa-instagram" style="color:#8e49c6;margin-right:0.4rem;"></i></a></div></div>
                        <h1 style="display: none;"><?php the_title(); ?></h1>
                        <article>
                            <?php the_content(); ?>
                        </article>
                        <section class="conteudo" style="">
                        <div class="fb-like" data-href="<? echo get_permalink();?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        </section>
                        <div class="description">
                            <div class="dtitle">Por <?php the_author(); ?></div>
                            <div class="texto">
                                <p><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></p>
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
