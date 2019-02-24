<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
    <p class="nocomments">Este artigo está protegido por password. Insira-a para ver os comentários.</p>
    <?php
    return;
}
?>

<div class="comentar cbox">
    <div class="title">PRINCIPAIS COMENTARIOS</div>
    <?php if ( comments_open() ) : ?>
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                    <div class="input">
                        <input type="text" name="author" placeholder="Seu Nome" style="" />
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <input type="text"  id="comentario"  name="comment" placeholder="Escreva seu comentário" />

                    <input type="submit" class="commentsubmit" value="Enviar Comentário" />

                    <?php comment_id_fields(); ?>
                    <?php do_action('comment_form', $post->ID); ?>
            </form>
            <?php
            // The Query
            $args = array(
              'post_id' => get_the_ID(),
            );
            $comments_query = new WP_Comment_Query;
            $comments = $comments_query->query( $args );

            // Comment Loop
            if ($comments) {
                foreach ( $comments as $comment ) {
                    echo "<div class='post'>";
                    echo '<div class="date">' . $comment->comment_date . '</div>';
                    echo '<div class="title">Por ' . $comment->comment_author  . '</div>';
                    echo '<article style="margin: 0;">' . $comment->comment_content . '</article>';
                    echo "</div>";
                }
            } else {
                echo 'Seja o primeiro a comentar!';
            }
            ?>
    <?php else : ?>
        <h3>Os comentários estão fechados.</h3>
    <?php endif; ?>
</div>

<style>
    .commentsubmit {
        float: left;
        background: transparent;
        border-radius: 6px;
        border: none;
        margin: 4px;
        padding: 4px;
        margin-top: 8px;
        cursor: pointer !important;
        color: #f07d30;
        outline: none;
    }

    .commentsubmit:hover{
        text-decoration: underline;
    }
</style>