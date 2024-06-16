
<section class="banner-home">
    <?php 
        $banner_id = get_afc_by_page_slug('imagem_do_banner', 'home_config', 'banner-da-home'); 
        $ttexto_banner = get_afc_by_page_slug('frase_do_banner', 'home_config', 'banner-da-home'); 
        echo pipe_get_img($banner_id, false, 'wide', 'lg-total');
    ?>

    <div class="caption-banner ">
        <h2>
             <?php echo $ttexto_banner; ?>
        </h2>
    </div>

</section>