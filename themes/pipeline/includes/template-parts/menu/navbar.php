<nav class="navbar navbar-expand-lg fixed-top navbar-dark on-load-navbar">

    <div class="container">

        <a class="navbar-brand " title="Pipeline Digital" href="<?php bloginfo('home'); ?>">
            <?php 
                $logo_id = get_afc_by_page_slug('logo_versao_01', 'home_config', 'logotipo'); 
                echo pipe_get_img($logo_id, false, 'thumb', 'lg-total');
            ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentFixed"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContentFixed">
            <ul class="navbar-nav mr-auto">
                <?php get_template_part('includes/template-parts/menu/loophome'); ?>
            </ul>
            <?php require('searchform.php'); ?>
        </div>

    </div>

</nav>