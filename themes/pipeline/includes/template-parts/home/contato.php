<section id="contato" class="contato">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="before-line after-left">
                    Fale conosco
                </h2>
                <br><br>
            </div>
        </div>

        <div class="desk">
        <?php
            $whats = get_afc_by_page_slug('telefone', 'home_config', 'informacoes-de-contato');
            $e_mail = get_afc_by_page_slug('e-mail', 'home_config', 'informacoes-de-contato');
            $youtube = get_afc_by_page_slug('youtube', 'home_config', 'informacoes-de-contato');
            $horario_de_funcionamento = get_afc_by_page_slug('horario_de_funcionamento', 'home_config', 'informacoes-de-contato');
            $dias_da_semana = get_afc_by_page_slug('dias_da_semana', 'home_config', 'informacoes-de-contato');
        ?>
        <div class="row">
            <div class="col-sm-4">
                <div class="card card-horizontal-01">
                    <div class="row no-gutters">
                        <div class="col-md-3 card-header">
                            <i class="fa-solid fa-phone-flip"></i>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <p class="card-text">
                                    <span>(51) <?php echo $whats; ?></span> <br>
                                    <small class="text-muted">
                                        <?php echo $e_mail; ?>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card card-horizontal-01">
                    <div class="row no-gutters">
                        <div class="col-md-3 card-header">
                            <i class="fa-solid fa-house-chimney"></i>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <p class="card-text">
                                    <span>Porto Alegre</span> <br>
                                    <small class="text-muted">
                                        Rio Grande do Sul
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card card-horizontal-01">
                    <div class="row no-gutters">
                        <div class="col-md-3 card-header">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <p class="card-text">
                                    <span><?php echo $horario_de_funcionamento; ?></span> <br>
                                    <small class="text-muted">
                                        <?php echo $dias_da_semana; ?>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        



        <div class="row">
        <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
            </div>
            <div class="col-md-6">
                <?php 
                    $mapa = get_afc_by_page_slug('mapa', 'home_config', 'informacoes-de-contato');
                    echo $mapa;    
                ?>
            </div>
        </div>
    </div>
</section>