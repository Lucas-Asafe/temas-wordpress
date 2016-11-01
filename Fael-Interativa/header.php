<!DOCTYPE HTML>
<html lang="pt-br">
    <meta charset="<?php bloginfo('charset'); ?>" /> <!--iso=8859-1-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <head>
        <title><?php
            global $page, $paged;

            wp_title('|', true, 'right');

            bloginfo('name');

            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() )) {
                echo " | $site_description";
            }
            if ($page >= 2 || $paged >= 2) {
                echo ' | ' . sprintf(__('Page %s', 'Fael-Interativa'), max($paged, $page));
            }
            ?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.js"></script>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
<!--        <link rel="shortcut icon" href="<?php ?>" type="image/x-png" /> -->
        <script type="text/javascript">
            $(document).ready(function () {

//                var color_esq = $('.esq_slide').css('background-color');
//                var color_dir = $('.dir_slide').css('background-color');
//
//                if (color_esq === 'rgb(0,102,0)' || color_dir === 'rgb(150,255,150)') // =='blue' <- IE hack
//                    alert("it's blue!\nColor detected: ");

                $('.slides ul').cycle({
                    fx: 'fade',
                    speed: 2000,
                    timeout: 3000
                });

                $(".show_menu").click(function () {
                    $("#menu").show();
                });
                $("#conteudo").click(function () {
                    $("#menu").hide();
                });
            });
        </script>
        <?php
        if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment_reply');
        }

        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?>>
    <div id="pai">
        <?php
// Links de redes sociais
#Twitter
        $linkTwitter = "https://twitter.com/GuimaraesFuck";
#Facebook
        $linkFacebook = "https://www.facebook.com/lucas.dossantosguimaraes.39";
#Linkedin
        $linkLinkedin = "https://www.linkedin.com/in/lucas-guimar%C3%A3es-423bbabb?trk=hp-identity-name";
#YouTube
        $linkYouTube = "https://www.youtube.com/channel/UCGMOZls7PuDC25NOt0d4PxQ"
        ?>
            <div id="topo">
                <div id="logo">
                    <a href="http://faelinterativa.com/" title="Ir para o início">
                        <img src="<?php bloginfo('template_url'); ?>/images/fael.png" alt="logo_fael" />
                    </a>
                    <svg class="show_menu" viewBox="0 0 24.00 24.00" >
                        <path d="M 3,6L 21,6L 21,8L 3,8L 3,6 Z M 3,11L 21,11L 21,13L 3,13L 3,11 Z M 3,16L 21,16L 21,18L 3,18L 3,16 Z "/>
                    </svg>
                </div> <!--logo-->
                <?php
                wp_nav_menu(
                        array(
                            'menu' => 'menu_topo',
                            'theme_location' => 'menu_topo',
                            'container' => 'div',
                            'container_id' => 'menu',
                            'container_class' => '',
                            'menu_class' => '',
                            'menu_id' => '',
                            'echo' => true,
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'depth' => 2,
                            'walker' => ''
                        )
                );
                ?>
            </div><!--topo-->