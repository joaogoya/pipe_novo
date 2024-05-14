<section id="produtos" class="produtos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="before-line after-left">
                    Produtos
                </h2>
                <br><br>
            </div>
        </div>
        <div class="row">

            <?php
                $args = array(
                    'post_type' => 'produtos',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'order_by' => 'date' 
                );

                $produtos = new WP_Query($args);

                if($produtos->have_posts()): while($produtos->have_posts()): $produtos->the_post();
            ?>

            <div class="col-md-4">
                <div class="card card-vertical-02">
                    
                    <div class="card-header">
                        <?php  echo pipe_get_img($post->ID, true, 'medium', 'img-produto'); ?>
                    </div>

                    <div class="card-body">
                        <h3 class="card-title"><?php the_title(); ?></h3>
                        <p class="card-text">
                            <?php echo wp_trim_words(get_the_content(), 15, '...'); ?>
                        </p>

                        <a class="btn btn-primary float-right" title="<?php the_title(); ?>"
                            href="<?php the_permalink(); ?>">
                            Leia Mais
                        </a>
                    </div>
                </div>

            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
        </div>
    </div>
</section>