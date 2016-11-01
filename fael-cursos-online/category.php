<?php get_header(); ?>
<div id="conteudo" class="centralizar">
    <?php
    $endereco_www = $_SERVER['SERVER_NAME'];
    $pagina_atual = $_SERVER['REQUEST_URL'];
    $end_face = $endereco_www . $pagina_atual;

    wp_reset_query();
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <!--Primeiro Post-->
            <div class="thumb_curso">
                <?php
                if (has_post_thumbnail()) {
                    ?>
                    <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(''); ?></a>
                <?php } else { ?>
                    <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/img/empty.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                    </a>
                <?php } ?>
                <div class="titulo">
                    <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </div>
                <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="rodape">
                        <div class="tx_post">
                                <?php
                                 the_excerpt('Continue Lendo &gt;');
                                 ?>
                        </div><!--tx_post-->
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
                    <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/
                                    .test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'twitter-wjs');</script>

                    <!--GOOGLE-->
                    <!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
                    <script src="https://apis.google.com/js/platform.js" async defer>
                        {
                            lang: 'pt-BR'
                        }
                    </script>

                    <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
                    <div class="g-plusone" data-size="medium"></div>
                </div><!--compartilhar-->
                    </div><!--rodape-->
                </a>
            </div><!--thumb_curso-->
            <?php
        } //fim do while
    }//fim do if
    else {
        ?>
        <h2 class="buscando">Ops: Nada encontrado!</h2>
        <h2 class="erro_de_busca">Desculpe! Não há nenhum post nesssa categoria!</h2>
        <?php
    }
    ?>
</div><!--conteudo-->
<?php get_footer(); ?>