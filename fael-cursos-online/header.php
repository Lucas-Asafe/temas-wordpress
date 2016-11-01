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
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
        <!--<link rel="stylesheet" type="text/css" href="?php bloginfo('stylesheet_url'); ?>" media="screen, handheld, tv" />-->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <!--MENU CENTRAL INDEX--> 
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function () {
                /**
                 * for each menu element, on mouseenter, 
                 * we enlarge the image, and show both sdt_active span and 
                 * sdt_wrap span. If the element has a sub menu (sdt_box),
                 * then we slide it - if the element is the last one in the menu
                 * we slide it to the left, otherwise to the right
                 */
                $('#sdt_menu > li').bind('mouseenter', function () {
                    var $elem = $(this);
                    $elem.find('img')
                            .stop(true)
                            .animate({
                                'width': '100%',
                                'height': '250%',
                                'left': '0px'
                            }, 400, 'easeOutBack')
                            .andSelf()
                            .find('.sdt_wrap')
                            .stop(true)
                            .animate({'top': '180%'}, 500, 'easeOutBack')
                            .andSelf()
                            .find('.sdt_active')
                            .stop(true)
                            .animate({'height': '210%'}, 300, function () {
                                var $sub_menu = $elem.find('.sdt_box');
                                if ($sub_menu.length) {
                                    var left = '150px';
                                    if ($elem.parent().children().length == $elem.index() + 1)
                                        left = '-150px';
                                    $sub_menu.show().animate({'left': left}, 200);
                                }
                            });
                }).bind('mouseleave', function () {
                    var $elem = $(this);
                    var $sub_menu = $elem.find('.sdt_box');
                    if ($sub_menu.length)
                        $sub_menu.hide().css('left', '0px');

                    $elem.find('.sdt_active')
                            .stop(true)
                            .animate({'height': '0px'}, 300)
                            .andSelf().find('img')
                            .stop(true)
                            .animate({
                                'width': '0px',
                                'height': '0px',
                                'left': '85px'}, 400)
                            .andSelf()
                            .find('.sdt_wrap')
                            .stop(true)
                            .animate({'top': '20px'}, 500);
                });
            });
        </script>

        <script type="text/javascript">/*Accordion Texto*/
            $(document).ready(function () {
                $('h2.accordion').click(function () {
                    $(this).parent().find('div.accordion').slideToggle("slow");
                });
            });
        </script>

        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>

        <?php
        if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment_reply');
        }

        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="pai">
            <div id="topo">
                <div id="logo_esq">
                    <a href="<?php bloginfo('home'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/logoFael.png" alt="Logo Fael" />
                    </a>
                </div><!--logo_esq-->

                <div id="menus">
                <ul class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
                    <li><a href="<?php bloginfo('home'); ?>">Início</a></li>
                    <li><a href="javascript:void(0)">Curso</a>
                        <ul class="sub-menu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                        <?php
                        $id_da_categoria = get_cat_id('criadouro');
                        $categories = get_categories('child_of='."$id_da_categoria".''); ?>
                            <?php foreach ($categories as $category){
                            query_posts( 'cat='.$category->cat_ID ); ?>
                                <li>
                                    <a href="<?php echo get_category_link( $category->cat_ID ); ?>" title="<?php echo $category->name; ?>"><?php echo $category->name; ?></a>
                                    <ul class="sub-menu-2">
                                        <?php while (have_posts()) {
                                        the_post(); ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php if ( get_the_title() ) { the_title(); } else { echo "Artigo sem T&iacute;tulo"; } ?></a></li>
                                <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Metodologia</a></li>
                    <li><a href="#">Institucional</a></li>

                </ul>
                </div>

                 <?php
                // wp_nav_menu(
                //         array(
                //             'menu' => 'menu_topo',
                //             'theme_location' => 'menu_topo',
                //             'container' => 'div',
                //             'container_id' => 'menus',
                //             'container_class' => '',
                //             'menu_class' => 'menu',
                //             'menu_id' => '',
                //             'echo' => true,
                //             'before' => '',
                //             'after' => '',
                //             'link_before' => '',
                //             'link_after' => '',
                //             'depth' => 3,
                //             'walker' => ''
                //         )
                // );
                // ?>
                <div id="logo_dir">
                    <a href="<?php bloginfo('home'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/logoCts.png" alt="Logo Cts" />
                    </a>
                </div><!--logo_dir-->
            </div><!--topo-->