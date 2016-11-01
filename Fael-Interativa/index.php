<?php get_header(); ?>
<div id="conteudo">
    <div class="slides">
        <ul>
            <?php
            query_posts('show_posts=4');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    $i++;
                    ?>
                    <li>
                        <div class="slide_post_<?php echo $i; ?>">
                            <?php
                            if ($i === 4) {
                                ?>
                                <div class = "esq_slide_<?php echo $i; ?>"></div>
                                <div class = "dir_slide_<?php echo $i; ?>"></div>
                                <div class="centro_slide">
                                    <div class="img_esq">
                                        <img src="<?php bloginfo('template_url'); ?>/images/esqFael.png" alt="Logo da FAEL" />
                                    </div>
                                    <div class="img_dir">
                                        <img src="<?php bloginfo('template_url'); ?>/images/dirFael.png" alt="Logo da FAEL" />
                                    </div>
                                    <div class="img_centro">
                                        <?php the_post_thumbnail('thumbpost'); ?>
                                    </div>
                                    <div style="background-color: RGBA(36,159,90,255); z-index: 99999;" class="titulo">
                                        <a href="http://fael.edu.br/cursos/pos-graduacao/" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </div>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="esq_slide_<?php echo $i; ?>"></div>
                                <div class="dir_slide_<?php echo $i; ?>">
                                    <div class="faixa_dir">
                                        <img class="logo_fael_slide" src="<?php bloginfo('template_url'); ?>/images/logoFael.png" alt="Logo da FAEL" />
                                        <img class="logo_cts_slide" src="<?php bloginfo('template_url'); ?>/images/logoCts.png" alt="Logo da CTS" />
                                    </div>
                                    <img class="logo_ashi_slide"
                                         src="<?php bloginfo('template_url'); ?>/images/logoAshiCinza.png" alt="Logo da ASHI" /> 
                                </div>
                                <div class="titulo">
                                    <a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div class="imgs">
                                    <div class="imgs_slide_<?php echo $i; ?>">
                                        <div class="faixa_esq">
                                            <?php the_post_thumbnail('thumbpost'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div><!--slide_post_<?php echo $i; ?>-->
                    </li>
                    <?php
                } //fim do while
            } else { //fim do if 
                $i = 1;
                ?>
                <div class="slide_post_<?php echo $i; ?>">
                    <div class="z_post">
                        <div class="titulo">
                            <a href="javascript:;" title="Aviso!" alt="Aviso!">Nenhum post foi econtrado na categoria Destaque.</a>
                        </div>
                    </div><!--z_post-->
                </div><!--slide_post_<?php echo $i; ?>-->
            <?php } //fim do else    ?>
        </ul>
    </div><!--slides-->
<!--    <div class="controles">
        <svg class="anterior" viewBox="0 0 24.00 24.00">
        <path d="M 22,12C 22,17.5228 17.5228,22 12,22C 6.47715,22 2,17.5228 2,12C 2,6.47715 6.47715,2 12,2C 17.5228,2 22,6.47715 22,12 Z M 14,7L 8.99999,12L 14,17L 14,7 Z "/>
        </svg>
        <svg class="proximo" viewBox="0 0 24.00 24.00">
        <path d="M 1.99999,12C 1.99999,6.47717 6.47719,1.99998 12,1.99998C 17.5228,1.99998 22,6.47717 22,12C 22,17.5228 17.5228,22 12,22C 6.47718,22 1.99999,17.5228 1.99999,12 Z M 9.99999,17L 15,12L 9.99999,6.99999L 9.99999,17 Z "/>
        </svg>
    </div>controles -->
</div><!--conteudo-->
<?php get_footer(); ?>