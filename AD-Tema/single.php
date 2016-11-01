<?php get_header(); ?>
<div id="conteudo">
    <div id="content">
        <?php
        $endereco_www = $_SERVER['SERVER_NAME'];
        $pagina_atual = $_SERVER['REQUEST_URL'];
        $end_face = $endereco_www.$pagina_atual;
        
        wp_reset_query();
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $i++;
                ?>
                <!--Primeiro Post-->
                <div class="post">
                    <div class="header_post">
                        <div class="relative">
                            <div class="n_comentarios">
                                <svg class="comment" viewBox="0 0 24.00 24.00">
                                <path d="M 9,22C 8.44771,22 8,21.5523 8,21L 7.99999,18L 4,18C 2.89543,18 2,17.1046 2,16L 2.0094,3.99808C 2.0094,2.89308 2.89538,1.99809 3.99939,1.99809L 19.9994,1.99809C 21.1034,1.99809 21.9994,2.89308 21.9994,3.99808L 21.9994,15.9981C 21.9994,17.1021 21.1034,17.9981 19.9994,17.9981L 13.904,17.9997L 10.1979,21.7058C 10.0053,21.8984 9.75367,21.996 9.50123,21.9986L 9.49999,22L 9,22 Z " />
                                <text x="4" y="13"><?php comments_popup_link('00', '01', '%'); ?></text>
                                </svg>
                            </div><!--n_comentarios-->
                            <div class="compartilhar">

                                <!--FACEBOOK-->
                                <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2F
                                <?php echo $end_face; ?>&width=90&layout=button_count&action=like
                                &size=small&show_faces=false&share=true&height=46&appId"
                                        width="90" height="46" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowTransparency="true"></iframe>

                                <!--TWITTER-->
                                <a href="https://twitter.com/share" class="twitter-share-button"
                                   data-via="LucasLucasasafe">Tweet</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/
                                        .test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);
                                        js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
                                        fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                                <!--GOOGLE-->
                                <!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
                                <script src="https://apis.google.com/js/platform.js" async defer>
                                    {lang: 'pt-BR'}
                                </script>

                                <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
                                <div class="g-plusone" data-size="medium"></div>

                            </div><!--compartilhar-->
                        </div><!--relative-->
                    </div><!--header_post-->
                    <div class="agrupa_post">
                        <div class="t_post">
                            <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div><!--t_post-->
                        <div class="info_post">
                            <div class="relative">
                                <div class="img_autor p_left"><?php echo get_avatar(get_the_author_meta('ID'), 49); ?></div>
                                <div class="info_autor_post p_right" style="right: 17px !important;">
                                    <span class="big">Por: <a href="<?php the_author_meta('user_url'); ?>" title="<?php
                                        the_author_meta('first_name');
                                        echo "&nbsp;";
                                        the_author_meta('last_name');
                                        ?>" target="_blank">
                                                                  <?php
                                                                  the_author_meta('first_name');
                                                                  echo "&nbsp;";
                                                                  the_author_meta('last_name');
                                                                  ?>
                                        </a></span><span class="p_right link_categoria"><?php the_category(); ?></span>
                                    <div class="linha"><hr /></div><!--linha-->
                                    <span class="italico">
                                        <a href="<?php echo $linkTwitter; ?>" class="cinza_claro" title="@LucasLucasasafe" target="_blank">
                                            @LucasLucasasafe
                                        </a></span><span class="italico cinza_medio pb_right" style="bottom: 10px; "><?php the_time('j/m/Y'); ?> ás <?php the_time(); ?></span>
                                </div><!--info_autor_post-->
                            </div><!--relative-->
                        </div><!--info_post-->
                        <div class="content_post">
                            <div class="thumb_post">
                                <div class="relative">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        ?>
                                        <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbpost'); ?></a>
                                    <?php } else { ?>
                                        <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/empty.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                                    <?php } ?>
                                    <div class="tarja"></div><!--tarja-->
                                </div><!--relative-->
                            </div><!--thumb_post-->
                            <div class="tags"><?php the_tags(); ?></div><!--tags-->
                            <div class="tx_post">
                                <?php the_content('Continue Lendo &gt;'); ?>
                            </div><!--tx_post-->
                            <div style="clear: both;" id="comentarios_template">
                                <?php comments_template(); ?>
                            </div>
                        </div><!--content_post-->
                    </div><!--agrupa_post-->
                </div><!--post-->
                <?php
            } //fim do while
        }//fim do if
        else {
            ?>
            <h2 class="buscando">Ops: Nada encontrado!</h2>
            <h2 class="erro_de_busca">Desculpe! Post não encontrado!</h2>
            <?php
        }
        ?>
    </div><!--content-->

    <?php get_sidebar(); ?>

</div><!--conteudo-->
<?php get_footer(); ?>