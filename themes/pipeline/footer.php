<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
</section>




<footer class="footer-border-top">

    <!-- CTA
                <?php //get_template_part('includes/template-parts/home/cta-azul'); ?>

                <!-- rodape -->
    <section class="bg-secondary text-light footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="after-left">
                        Sobre
                    </h2>
                    <br>
                    <?php //echo get_afc_by_page_slug('sobre', 'home_config', 'informacoes-de-rodape'); ?>
                    <ul class="nav social-primary">
                        <?php
                                    //$whats = get_afc_by_page_slug('telefone', 'home_config', 'informacoes-de-contato');
                                    //$e_mail = get_afc_by_page_slug('e-mail', 'home_config', 'informacoes-de-contato');
                                   // $youtube = get_afc_by_page_slug('youtube', 'home_config', 'informacoes-de-contato');
                                    //$horario_de_funcionamento = get_afc_by_page_slug('horario_de_funcionamento', 'home_config', 'informacoes-de-contato');
                                   // $dias_da_semana = get_afc_by_page_slug('dias_da_semana', 'home_config', 'informacoes-de-contato');
                                    ?>
                        <!-- <li class="nav-item">
                                        <a class="nav-link" title="Fala conosco pelo WhatsApp" rel="noreferrer" target="_blank" href="https://wa.me/5551<?php echo str_replace(' ', '', $whats); ?>">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" title="Clique para enviar um e-mail" href="mailto:<?php echo $e_mail; ?>">
                                            <i class="fa-regular fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" title="Visite nosso Youtube" rel="noreferrer" target="_blank" href="<?php echo $youtube; ?>">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </li> -->
                    </ul>
                </div>
                <div class="col-lg-6 desk">
                    <h2 class="after-left">
                        Imagens
                    </h2>
                    <br>
                    <div class="row">
                        <?php
                                    // $images_ids = //pipe_get_galery_from_afc('informacoes-de-rodape', 'home_config', 'imagens');
                                    // foreach ($images_ids as $key => $image_id) : ?>
                        // <div class="col-lg-3 align-self-center">
                            // <?php //echo pipe_get_img($image_id, false, 'small', 'lg-total'); ?>
                            // </div>
                        // <?php //endforeach; ?>
                    </div>
                </div>

                <div class="col-lg-3 fale-conosco">
                    <br class="mobile"><br class="mobile">
                    <h2 class="after-left">
                        Fale conosco
                    </h2>
                    <br>
                    <p>
                        <i class="fa-solid fa-house-chimney"></i> <span class="text-gray">Porto Alegre / Rio Grande do
                            Sul</span>
                    </p>
                    <p>
                        <i class="fa-solid fa-phone-flip"></i> (51) <span class="text-gray"><?php echo $whats; ?></span>
                    </p>
                    <p>
                        <i class="fa-regular fa-envelope"></i><span class="text-gray"><?php echo $e_mail; ?></span>
                    </p>
                    <p>
                        <i class="fa-regular fa-clock"></i> <span
                            class="text-gray"><?php echo $horario_de_funcionamento; ?> /
                            <?php echo $dias_da_semana; ?></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Créditos e navbar -->
    <section class="bg-info text-light bottom-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="text-primary creditos">
                        Desenvolvido por
                        <a href="https://pipeline-digital.com.br/" rel="noreferrer" target="blank"
                            title="Desenvolvido por: Pipelin Digital">
                            Pipeline Digital
                        </a>
                    </span>
                </div>
                <div class="col-lg-6">
                    <div class="menu">
                        <?php get_template_part('includes/template-parts/footer/loop-nav-menu'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
</main>
</body> -->
<?php wp_footer(); ?>

</html>