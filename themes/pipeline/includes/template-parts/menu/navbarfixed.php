<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary fixed-mobile-menu">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentFixed" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

