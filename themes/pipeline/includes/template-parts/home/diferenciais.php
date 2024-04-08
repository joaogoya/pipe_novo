<section class="diferenciis bg-extraLightGray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="before-line after-left">
                    Porquê a Reat? 
                </h2>
                <br><br>
            </div>
        </div>
        <div class="row">

            <?php
                $args = array(
                    'post_type' => 'diferenciais',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'order_by' => 'date',
                    'posts_per_page' => '2'
                );

                $difrenciais = new WP_Query($args);

                if($difrenciais->have_posts()): while($difrenciais->have_posts()): $difrenciais->the_post();
            
            ?>
                <div class="col-md-6">
                    <div class="card card-vertical-01">
                        <div class=" card-header">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <div class="card-body">
                            <p class="card-text">
                                <span><?php the_title(); ?></span> <br>
                                <small>
                                        <?php echo wp_trim_words(get_the_content(), 15, '...'); ?>
                                </small>
                            </p>
                        </div>

                        <div class="card-footer bg-light clearfix">
                            <a class="btn btn-primary float-right" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                Leia Mais
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_postdata();?>
        </div>
    </div>
</section>