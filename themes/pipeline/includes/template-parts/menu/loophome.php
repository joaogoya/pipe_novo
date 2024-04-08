<?php

$main_menu = get_custom_menu('main-menu');

foreach ($main_menu as $item) : ?>

    <?php if (empty($item->child_items)) : // se nao tem filhos ?>
        <li class="nav-item">
            <?php
                if($item->title == 'Inicio'): //Inicio é um link personalizado, e nao uma página
                    $post_type = $item->post_type;
                else:
                    $post_type = 'page';
                endif;

                $post = get_page_data_by_title($item->title, $post_type);
                $slug = $post->post->post_name;
            ?>
            <a class="nav-link <?php if (is_front_page()) : echo 'smooth'; endif; ?>" title="Vá para a página <?php echo $item->title;  ?>" href="<?php if (!is_front_page()) : echo  bloginfo('url'); endif; ?>/#<?php echo $slug; ?>">
                <?php  echo $item->title; ?>
            </a>
        </li>
    <?php else : // se tem filhos ?>

        <!-- desk -->
        <li class="nav-item dropdown d-none d-md-block">

            <a class="nav-link dropdown-toggle" href="/#<?php echo $slug; ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <?php echo $item->title ?> <i class="far fa-caret-square-down"></i>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach ($item->child_items as $key => $child_item) : ?>
                    <a class="nav-link" title="Vá para a página <?php echo $child_item->title; ?>" href="/#<?php echo $slug; ?>">
                        <?php echo $child_item->title ?>
                    </a>
                <?php endforeach; ?>
            </div>

        </li>

        <!-- mobile -->
        <li class="nav-item dropdown d-block d-md-none">

            <a class="nav-link dropdown-toggle" href="/#<?php echo $slug; ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                <?php echo $item->title ?> <i class="far fa-caret-square-down"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach ($item->child_items as $key => $child_item) : ?>
                    <a class="nav-link" title="Vá para a página <?php echo $child_item->title; ?>" href="<?php if (!is_front_page()) : echo  bloginfo('home'); endif; ?>/#<?php echo $slug; ?>">
                        <?php echo $child_item->title ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </li>
    <?php endif; ?>
<?php endforeach; ?>
















