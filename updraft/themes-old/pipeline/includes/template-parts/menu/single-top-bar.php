<!--  Top bar é a barra que exibe o breadcrum e o titulo da página -->

<!-- Se é a home, esconde o topbar -->
<?php if (!is_front_page()) : ?>

    <section class="single-top-bar bg-extraLightGray text-dark">

        <div class="container">

            <div class="row">

                <div class="col-12 text-center">

                    <!-- 
                        breadcrumb do yoast
                        se é resultado de pesquisa esconde o breadcrumb
                    -->
                    <?php if (!is_search()) : ?>
                        <div id="breadcrumbs" class="text-dark">
                            <?php
                            if (function_exists('yoast_breadcrumb')) {
                                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <!-- Título da página -->
                    <h2 class="text-primary e-large">

                        <!-- Not found -->
                        <?php if (is_404()) : ?>
                            Página não encontrada

                        <!-- Resultado de pesquisa -->
                        <?php elseif (is_search()) : ?>
                            Resultado da pesquisa

                        <!-- Lista de posts do blog -->
                        <?php elseif(is_home()): ?>
                            Blog

                        <!-- Diferenciais -->
                        <?php elseif(is_singular('diferenciais')):
                            if((get_queried_object()->post_name == 'analises-de-gases') || (get_queried_object()->post_name == 'licencas-de-operacao')):
                                $url = get_home_url() .'/diferenciais/nao-polui-o-meio-ambiente/';
                                header('Location: '.$url);
                            else:
                                the_title();
                            endif;
                        ?>

                        <!-- Produtos -->
                        <?php elseif(is_singular('produtos')):
                            echo get_post_title_by_slug(get_queried_object()->post_name, 'produtos');
                        ?>
                        
                        <!-- Página comum -->
                        <?php else : ?>
                            <?php the_title(); ?>

                        <?php endif; ?>
                    </h2>

                </div>

            </div>

        </div>

    </section>

<?php endif; ?>