<?php get_header(); ?>
<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery4-4" data-filter="true" style="background-color: rgb(32, 32, 32); padding-top: 2rem; padding-bottom: 0rem;">

    <!-- Filter -->
    <div class="mbr-gallery-filter container gallery-filter-active">
        <ul>
            <li class="mbr-gallery-filter-all active">Todas</li>
        </ul>
    </div>

    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                <?php
                        //EM CASO DE POST EXIBE CONTEÚDO
                        wp_reset_query();
                        $i = 0;
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                $i++;
                                ?>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"  data-tags="<?php echo get_cat_name(the_category_ID(false)); ?>" data-video-url="false">
                        <div href="#lb-gallery4-4" data-slide-to="<?php echo $i-1; ?>" data-toggle="modal">
                            
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbpost'); 
                             } else { ?>
                                <img alt="<?php the_title(); ?>" src="<?php bloginfo('template_url'); ?>/assets/images/empty.jpg">
                            <?php } ?>
                            <span class="icon-focus"></span>
                            
                        </div>
                    </div>
                    <?php
                           } //fim do while
                        }//fim do if
                        
                        //SE NÃO HOUVER POSTAGEM VAI PREENCHER COM FORMULÁRIO PADRÃO
                        else {
                            ?>
                            <h2 class="buscando">Ops: Nada encontrado!</h2>
                            <h2 class="erro_de_busca">Desculpe! Não há nenhum post no sistema!</h2>
                            <?php
                        }
                        ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery4-4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery4-4" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-4" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-4" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-4" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-4" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-4" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-4" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-4" class=" active" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                    <?php
                        //EM CASO DE POST EXIBE CONTEÚDO
                        wp_reset_query();
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                if (has_post_thumbnail()) {
                                    if (($wp_query->current_post +1) == ($wp_query->post_count)) { ?>
                                    <div class="carousel-item active">
                                        <?php the_post_thumbnail('thumbpost'); ?>
                                    </div>
                        <?php } else {
                            ?>
                            <div class="carousel-item">
                                <?php the_post_thumbnail('thumbpost'); ?>
                            </div>
                            <?php
                        }
                        } else { ?>
                                <div class="carousel-item active">
                                        <img alt="<?php the_title(); ?>" src="<?php bloginfo('template_url'); ?>/assets/images/empty.jpg">
                                </div>
                            <?php } 
                            } //fim do while
                        }//fim do if
                        
                        //SE NÃO HOUVER POSTAGEM VAI PREENCHER COM FORMULÁRIO PADRÃO
                        else {
                            ?>
                            <h2 class="buscando">Ops: Nada encontrado!</h2>
                            <h2 class="erro_de_busca">Desculpe! Não há nenhum post no sistema!</h2>
                            <?php
                        }
                        ?>

                        <!--<div class="carousel-item active">
                            <img alt="" src="<?php bloginfo('template_url'); ?>/assets/images/whatsapp-image-2017-02-02-at-23-2000x1500.png">
                        </div>-->
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery4-4">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery4-4">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>