<!DOCTYPE HTML>
<html lang="pt-br">
    <meta charset="<?php bloginfo('charset'); ?>" /> <!--iso=8859-1-->
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
                echo ' | ' . sprintf(__('Página %s', 'AD-Tema'), max($paged, $page));
            }
            ?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.12.1.min.js"></script>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <script type="text/javascript">
            $(document).ready(function () {
                
//                $("#menu ul li a").hover(
//                        
//                        function () {
//                            $("this").children("ul li a").addClass("fake_hover");
//                            $("this").children("ul").addClass("sub_menu_ativo_jquery").css('display','inline');
//                        },
//                        function () {
//                            $("this").children("ul li a").removeClass("fake_hover");
//                            $("this").children("ul").removeClass("sub_menu_ativo_jquery").css('display','none');
//                        }
//                );
//        
                $(".um").click(function () {
                    $(".slide_post_2").hide("slow");
                    $(".slide_post_3").hide("slow");
                    $(".slide_post_4").hide("slow");
                    $(".slide_post_1").show("slow");
                });
                $(".dois").click(function () {
                    $(".slide_post_1").hide("slow");
                    $(".slide_post_3").hide("slow");
                    $(".slide_post_4").hide("slow");
                    $(".slide_post_2").show("slow");
                });
                $(".tres").click(function () {
                    $(".slide_post_1").hide("slow");
                    $(".slide_post_2").hide("slow");
                    $(".slide_post_4").hide("slow");
                    $(".slide_post_3").show("slow");
                });
                $(".quatro").click(function () {
                    $(".slide_post_1").hide("slow");
                    $(".slide_post_2").hide("slow");
                    $(".slide_post_3").hide("slow");
                    $(".slide_post_4").show("slow");
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
        <?php
// Links de redes sociais
#Twitter
        $linkTwitter = "https://twitter.com/LucasLucasasafe";
#Facebook
        $linkFacebook = "https://www.facebook.com/lucas.dossantosguimaraes.39";
#Linkedin
        $linkLinkedin = "https://www.linkedin.com/in/lucas-guimar%C3%A3es-423bbabb?trk=hp-identity-name";
#YouTube
        $linkYouTube = "https://www.youtube.com/channel/UCGMOZls7PuDC25NOt0d4PxQ"
        ?>
        <div id="topo">
            <div id="logo"></div>
            <div id="sociais">
                <a href="<?php echo $linkFacebook; ?>" title="Curta-nos" target="_blank">
                    <svg class="facebook-box" viewBox="0 0 24.00 24.00" >
                    <path d="M 18.9994,3.99807L 18.9994,6.99807L 16.9994,6.99807C 16.4474,6.99807 15.9994,7.44507 15.9994,7.99807L 15.9994,9.99807L 18.9994,9.99807L 18.9994,12.9981L 15.9994,12.9981L 15.9994,19.9981L 12.9994,19.9981L 12.9994,12.9981L 10.9994,12.9981L 10.9994,9.99807L 12.9994,9.99807L 12.9994,7.49807C 12.9994,5.56407 14.5664,3.99807 16.4994,3.99807M 19.9994,1.99807L 3.99939,1.99807C 2.89539,1.99807 2.0094,2.89306 2.0094,3.99807L 1.99939,19.9981C 1.99939,21.1016 2.89539,21.9981 3.99939,21.9981L 19.9994,21.9981C 21.1034,21.9981 21.9994,21.1016 21.9994,19.9981L 21.9994,3.99807C 21.9994,2.89306 21.1034,1.99807 19.9994,1.99807 Z "/>
                    </svg>
                </a>
                <a href="<?php echo $linkTwitter; ?>" title="Siga-nos" target="_blank">
                    <svg class="twitter-box" viewBox="0 0 24.00 24.00">
                    <path d="M 17.7074,9.32817C 17.6434,13.9472 14.6904,17.1112 10.2824,17.3102C 8.46442,17.3922 7.14542,16.8072 5.99942,16.0782C 7.34342,16.2932 9.00842,15.7562 9.90142,14.9922C 8.58342,14.8632 7.80542,14.1932 7.43742,13.1152C 7.81742,13.1822 8.21842,13.1642 8.58142,13.0862C 7.39342,12.6872 6.54442,11.9532 6.49842,10.4142C 6.83342,10.5662 7.18142,10.7092 7.64242,10.7362C 6.75142,10.2302 6.0961,8.38117 6.84942,7.15617C 8.17042,8.60517 9.75942,9.78517 12.3664,9.94517C 11.7124,7.14817 15.4244,5.63017 16.9744,7.51017C 17.6314,7.38317 18.1634,7.13517 18.6764,6.86317C 18.4664,7.51417 18.0584,7.96717 17.5604,8.33217C 18.1044,8.25817 18.5894,8.12517 18.9994,7.92117C 18.7474,8.45117 18.1864,8.92817 17.7074,9.32817 Z M 19.9994,1.99817L 3.99942,1.99817C 2.89542,1.99817 2.00942,2.89317 2.00942,3.99817L 1.99942,19.9982C 1.99942,21.1022 2.89542,21.9982 3.99942,21.9982L 19.9994,21.9982C 21.1034,21.9982 21.9994,21.1022 21.9994,19.9982L 21.9994,3.99817C 21.9994,2.89317 21.1034,1.99817 19.9994,1.99817 Z "/>
                    </svg>
                </a>
                <a href="<?php echo $linkLinkedin; ?>" title="Contate-nos" target="_blank">
                    <svg class="linkedin-box" viewBox="0 0 24.00 24.00">
                    <path d="M 18.9994,18.9981L 15.9994,18.9981L 15.9994,13.6981C 15.9994,12.8701 15.3274,12.1981 14.4994,12.1981C 13.6714,12.1981 12.9994,12.8701 12.9994,13.6981L 12.9994,18.9981L 9.9994,18.9981L 9.9994,9.99807L 12.9994,9.99807L 12.9994,11.1981C 13.5174,10.3601 14.5854,9.79807 15.4994,9.79807C 17.4324,9.79807 18.9994,11.3651 18.9994,13.2981M 6.4994,8.31007C 5.4984,8.31007 4.6864,7.50007 4.6864,6.49807C 4.6864,5.49607 5.4984,4.68507 6.4994,4.68507C 7.5004,4.68507 8.3114,5.49607 8.3114,6.49807C 8.3114,7.50007 7.5004,8.31007 6.4994,8.31007 Z M 7.9994,18.9981L 4.9994,18.9981L 4.9994,9.99807L 7.9994,9.99807M 19.9994,1.99807L 3.9994,1.99807C 2.8944,1.99807 2.00917,2.89307 2.00917,3.99807L 1.9994,19.9981C 1.9994,21.1016 2.8944,21.9981 3.9994,21.9981L 19.9994,21.9981C 21.1029,21.9981 21.9994,21.1016 21.9994,19.9981L 21.9994,3.99807C 21.9994,2.89307 21.1029,1.99807 19.9994,1.99807 Z "/>
                    </svg>
                </a>
            </div>
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
        <div id="destaque">
            <div class="agrupar">
                <?php
                query_posts('show_posts=4&category_name=Destaque');
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        $i++;
                        ?>
                        <div class="slide_post_<?php echo $i; ?>">
                            <div class="thumbnail">
                                <?php if (has_post_thumbnail()) { ?>
                                    <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                        <?php the_post_thumbnail('thumbdestaque'); ?>
                                    </a>
                                <?php } else { ?>
                                    <img src="<?php bloginfo('template_url'); ?>/img/empty.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                <?php } ?>
                            </div><!--thumbnail-->
                            <div class="z_post">
                                <div class="titulo">
                                    <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div class="autor">
                                    <div class="img_autor">
                                        <?php echo get_avatar(get_the_author_meta('ID'), 49); ?>
                                    </div><!--img_autor-->
                                    <div class="info_autor">
                                        Por: <span class="big">
                                            <a href="<?php the_author_meta('user_url'); ?>" title="<?php
                                            the_author_meta('first_name');
                                            echo "&nbsp;";
                                            the_author_meta('last_name');
                                            ?>" target="_blank">
                                                   <?php
                                                   the_author_meta('first_name');
                                                   echo "&nbsp;";
                                                   the_author_meta('last_name');
                                                   ?>
                                            </a>
                                        </span>
                                        <span class="italico">
                                            <a href="<?php echo $linkTwitter; ?>" title="@LucasLucasasafe" target="_blank">
                                                @LucasLucasasafe
                                            </a>
                                        </span>
                                    </div><!--info_autor-->
                                </div><!--autor-->
                            </div><!--z_post-->
                        </div><!--slide_post_<?php echo $i; ?>-->
                        <?php
                    } //fim do while
                } else { //fim do if 
                    $i = 1;
                    ?>
                    <div class="slide_post_<?php echo $i; ?>">
                        <div class="thumbnail">
                            <a href="javascript:;" title="Aviso!" alt="Aviso!">
                                <img src="<?php bloginfo('template_url'); ?>/img/Koala.png" alt="Aviso!" title="Aviso!" />
                            </a>
                        </div><!--thumbnail-->
                        <div class="z_post">
                            <div class="titulo">
                                <a href="javascript:;" title="Aviso!" alt="Aviso!">Nenhum post foi econtrado na categoria Destaque.</a>
                            </div>
                            <div class="autor">
                                <div class="img_autor"><?php echo get_avatar(1, 49); ?></div><!--img_autor-->
                                <div class="info_autor">
                                    Por: <span class="big">
                                        <a href="javascript:;" title="admin" target="_blank">admin</a>
                                    </span>
                                    <span class="italico">
                                        <a href="javascript:;" title="@twitterdousuario" target="_blank">
                                            @twitterdousuario
                                        </a>
                                    </span>
                                </div><!--info_autor-->
                            </div><!--autor-->
                        </div><!--z_post-->
                    </div><!--slide_post_<?php echo $i; ?>-->
                <?php } //fim do else   ?>
                <div class="controles">
                    <ul>
                        <?php if ($i > 0) { ?>
                            <li class="um"></li>
                            <?php
                        }
                        if ($i > 1) {
                            ?>
                            <li class="dois"></li>
                            <?php
                        }
                        if ($i > 2) {
                            ?>
                            <li class="tres"></li>
                            <?php
                        }
                        if ($i > 3) {
                            ?>
                            <li class="quatro"></li>
                        <?php } ?>
                    </ul>
                </div><!--controles-->
            </div><!--agupar-->
        </div><!--destaque-->
        <div id="busca">
            <div class="agrupar">
                <div class="form">
                    <svg class="magnify" viewBox="0 0 24.00 24.00">
                        <path d="M 9.5,3C 13.0899,3 16,5.91015 16,9.5C 16,11.1149 15.411,12.5923 14.4362,13.7291L 14.7071,14L 15.5,14L 20.5,19L 19,20.5L 14,15.5L 14,14.7071L 13.7291,14.4362C 12.5923,15.411 11.1149,16 9.5,16C 5.91015,16 3,13.0899 3,9.5C 3,5.91015 5.91015,3 9.5,3 Z M 9.5,5.00001C 7.01472,5.00001 5,7.01473 5,9.50001C 5,11.9853 7.01472,14 9.5,14C 11.9853,14 14,11.9853 14,9.50001C 14,7.01473 11.9853,5.00001 9.5,5.00001 Z "/>
                    </svg>
                    <div class="input">
                        <?php get_search_form(); ?>
                    </div><!--input-->
                </div><!--form-->
            </div><!--agupar-->
        </div><!--busca-->
        