<?php get_header(); ?>
<div id="conteudo_post">
    <?php
    wp_reset_query();
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $i++;
            ?>
            <!--Primeiro Post-->
            <div class="post">
                <div class="agrupa_post">
                    <div class="t_post">
                        <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div><!--t_post-->
                        <div class="relative">
                            <div class="linha"></div><!--linha-->
                        </div><!--relative-->
                    <div class="content_post">
                        <div class="tags"></div><!--tags-->
                        <div class="tx_post">
                            <?php the_content('Continue Lendo &gt;'); ?>
                        </div><!--tx_post-->
                    </div><!--content_post-->
                </div><!--agrupa_post-->
            </div><!--post-->
            <?php
        } //fim do while
    }//fim do if
    else {
        ?>
        <div class="post">
            <div class="agrupa_post">
                <div class="t_post">
                    <a href="javascript:;" title="">
                        erro: Nenhum post encontrado!
                    </a>
                </div><!--t_post-->
                <div class="info_post">
                    <div class="relative">
                        <div class="img_autor p_left"><?php echo get_avatar(1, 49); ?></div>
                        <div class="info_autor_post p_right" style="right: 17px !important;">
                            <span class="big">Por: <a href="javascript:;" title="">
                                    <?php
                                    the_author_meta('first_name');
                                    echo "&nbsp;";
                                    the_author_meta('last_name');
                                    ?>
                                </a></span><span class="p_right link_categoria"><a href="javascript:;" title="">404</a></span>
                            <div class="linha"><hr /></div><!--linha-->
                            <span class="italico">
                                <a href="javascript:;" title="">
                                    @Twitter
                                </a></span><span class="italico cinza_medio pb_right" style="bottom: 10px; ">Hoje</span>
                        </div><!--info_autor_post-->
                    </div><!--relative-->
                </div><!--info_post-->
                <div class="content_post">
                    <div class="thumb_post">
                        <div class="relative">
                            <a href="javascript:;" title=""><img src="<?php bloginfo('template_directory'); ?>/img/keep-calm.png" alt="" title="" /></a>
                            <div class="tarja"></div><!--tarja-->
                        </div><!--relative-->
                    </div><!--thumb_post-->
                    <div class="tx_post">
                        <p>Verifique se existe posts no sistema, pois não foi encontrado nenhum registro</p><br />
                    </div><!--tx_post-->
                </div><!--content_post-->
            </div><!--agrupa_post-->
        </div><!--post-->
        <?php
    }
    ?>
</div><!--conteudo-->
<?php get_footer(); ?>