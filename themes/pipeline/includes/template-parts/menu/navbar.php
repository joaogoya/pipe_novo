<nav class="navbar navbar-expand-lg fixed-top navbar-dark on-load-navbar">

    <div class="container">

    <a class="navbar-brand mx-auto" href="<?php bloginfo('home'); ?>">
            <img class="nav-scroll thumbnail" src="<?php bloginfo('template_url'); ?>/assets//img/logo.png"
                title="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" alt="Logo da empresa">
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