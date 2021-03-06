<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
    <title><?php wp_title(''); ?></title>
</head>
<body>

<header>
    <div class="container2">
        <div class="logo">
            <a href="/"><img src="/wp-content/themes/mp-theme/img/logo.svg" alt="" style="height:70px;width:300px;" /></a>
        </div>

        <div class="flex-container" style="width:100%;">
            <ul class="menu">
                <li><a href="/category/significados">SIGNIFICADOS</a></li>
                <li><a href="/category/blog/">PUBLICAÇÕES</a></li>
                <li><a href="/quem-somos">QUEM SOMOS</a></li>
            </ul>

            <form action="/" method="get" class="busca">
                <div class="mini-logo">
                    <a href="/"><img src="/wp-content/themes/mp-theme/img/logo-mini.png" alt="" /></a>
                </div>
                <input type="text"
                       placeholder="O que você está procurando?"
                       name="s"
                /><button><img src="/wp-content/themes/mp-theme/icons/lupa2.svg" alt="lupa" /></button>
            </form>
        </div>
    </div>
</header>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-5041420412525265",
        enable_page_level_ads: true
    });
</script>
