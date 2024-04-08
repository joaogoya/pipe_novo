<h3>Mais do cliente</h3>
<?php
    global $post;
    $post_id = get_the_ID();
    $category_id = get_the_category($post_id)[0]->cat_ID;
    //print("<pre>".print_r($category_slug,true)."</pre>");

    $args = array(
        'post_type' => 'post',
        'cat' => $category_id,
        'post__not_in' => array($post_id), 
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'paged' => $paged
    );
    $the_query = new WP_Query($args);
    //print("<pre>".print_r($the_query->posts,true)."</pre>");
    if ( $the_query->have_posts() ) {while ( $the_query->have_posts() ) {$the_query->the_post(); ?>
    <div class="list-group">
        <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?php the_title();?></h5>
                <medium>
                    <span class="badge badge-warning">
                        <?php echo get_the_date('d/m/yy');?>									
                    </span>
                </medium>
            </div>
            <small class="sidebar-post-content"> 
                <?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
            </small>
        </a>
    </div>
    <?php }}
    wp_reset_postdata();
?>
<br><br><br>
<h3>Outros clientes</h3>
<?php
    global $post;
    $post_id = get_the_ID();
    $category_id = get_the_category($post_id)[0]->cat_ID;
    $args = array(
        'post_type' => 'post',
        'category_name' => 'clientes',
        'category__not_in' => array($category_id) ,
        'post_status' => 'publish',
        'posts_per_page' => 3
    );
    $the_query = new WP_Query($args);
    //print("<pre>".print_r($the_query->posts,true)."</pre>");
    if ( $the_query->have_posts() ) {while ( $the_query->have_posts() ) {$the_query->the_post(); ?>
    <div class="list-group">
        <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?php the_title() ;?></h5> 
                <medium>
                    <span class="badge badge-warning">
                        <?php echo get_the_date('d/m/yy');?>									
                    </span>
                </medium>
            </div>
            <small class="sidebar-post-content"><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></small>
        </a>
    </div>
    <?php }}
    wp_reset_postdata();
?>
					
