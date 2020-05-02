<?php get_header(); ?>

<section class="container_fullWidth height70vh">
    <h2 class="vacancyCareerWord">CAREER</h2>
    <h2 class="vacancyProfessionWord">PROFESSION</h2>

    <h2 class="vacancyHeading">НАШИ ВАКАНСИИ:</h2>

    <?php 

    $posts = get_posts( array(
        'numberposts' => 10,
        /*'category'    => 0,*/
        'orderby'     => 'date',
        'order'       => 'DESC',
        /*'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',*/
        'post_type'   => 'vacancy',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    ?>

    <?php 
        if (!empty($posts)) {
    ?>
        <ul class="vacancyAllContainer">

            <?php

            foreach( $posts as $post ){
                setup_postdata($post);
                // формат вывода the_title() ...

                /*echo "<pre>";
                print_r($post);
                echo "</pre>"; // - Распечатка информации из БД отладка.*/

            ?>

                <li class="vacancyContainer">
                    <?php if ( has_post_thumbnail()) { ?>
                    
                        <?php the_post_thumbnail('thumbnail'); ?>
                    
                    <?php } ?>

                        <a href="<?php the_permalink(); ?>"><h3 class="vacancyContainerText"><?php the_title(); ?></h3></a>            
                    <!--<p><?php the_content(); ?></p>-->

                        <h3 class="vacancyContainerDate">/&nbsp;&nbsp;<?php the_date(); ?></h3>
                </li>

            <?php
            }



            wp_reset_postdata(); // Закрытие запроса в БД

            ?>
        </ul>
    <?php
        } else {
            echo '<h4 class="noVacancyText">На данный момент вакансий нет</h4>';

            echo '<a class="noVacancyLink" href="https://2big.ru/job-openings/">
                    <h4 class="noVacancyTextLink">Перейти на страницу Вакансии</h4>
                </a>';
        }
    ?>

</section>

<?php get_footer(); ?>