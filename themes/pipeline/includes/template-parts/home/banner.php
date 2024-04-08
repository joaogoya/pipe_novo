
<section class="banner-home">
    <?php 
        $banner_id = get_afc_by_page_slug('imagem_do_banner', 'home_config', 'banner'); 
        $titulo_banner = get_afc_by_page_slug('titulo_do_banner', 'home_config', 'banner'); 
        $ttexto_banner = get_afc_by_page_slug('texto_do_banner', 'home_config', 'banner'); 

        echo pipe_get_img($banner_id, false, 'wide', 'lg-total banner-img');

    ?>

    <div class="caption-banner ">
        <h2>
            <?php echo $titulo_banner; ?>
        </h2>
            <?php echo $ttexto_banner; ?>
    </div>

</section>
<?php get_template_part('includes/template-parts/home/cta-branco'); ?>