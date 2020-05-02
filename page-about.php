<?php get_header( ); ?>

<?php 

    $posts = get_posts( array(
        'numberposts' => 30,
        /*'category'    => 0,*/
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        /*'meta_key'    => '',
        'meta_value'  =>'',*/
        'post_type'   => 'company',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

?>

<?php 
    if (!empty($posts)) {
?>

    

    <section class="ShortContainerPersent">
    <?php

        foreach( $posts as $post ){
            setup_postdata($post);    

    ?>
        <aside class="aboutUsHeading">
            <h1 class="mainHeadAboutus">О НАС</h1>

            <h2 class="aboutUsHead">ABOUT US</h2>
        </aside>

        <div class="aboutUsDescription">
            <figure class="director">
                <?php 
                    $founderPhoto = get_post_meta($post->ID, 'founder_photo', false);
            
                    if ($founderPhoto)  {
        
                        foreach ( $founderPhoto as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';
                                
                            }
                            else {
                                //echo 'Нет изображения';
                                echo '<div class="director_full"></div>';
                            }                            
                        }      

                    }                           
                    
                ?> 
                

                <figcaption class="directorName">
                    <h3 class="directorNameMain">
                        <?php
                            $founderName = get_post_meta($post->ID, 'founder_name', true);

                            if(!empty ($founderName)) {
                                echo $founderName;
                            }

                            else {
                                echo 'Имя основателя';
                            }
                        ?>
                    </h3>

                    <h4 class="directorNameSecond">
                        <?php
                            $founderPosition = get_post_meta($post->ID, 'founder_position', true);

                            if(!empty ($founderPosition)) {
                                echo $founderPosition;
                            }

                            else {
                                echo 'Должность основателя';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>

            <div class="directorSpeachContain">
                <figure class="speachMark">
                    <img id="portf1" src="https://2big.ru/wp-content/uploads/2019/12/About/kav1.png" alt="Левые кавычки">
                </figure>

                <!--
                <p class="directorSpeach">Я ЧАСТО СЛЫШУ, В ПРОФЕССИОНАЛЬНОМ СООБЩЕСТВЕ РЕКЛАМНЫХ И КОММУНИКАЦИОННЫХ
                    АГЕНТСТВ, ЧТО РЕГИОНАЛЬНЫЕ КОМПАНИИ НЕ МОГУТ И НЕ УМЕЮТ СООТВЕТСТВОВАТЬ НОРМАМ,
                    КОТОРЫЕ ДИКТУЕТ ВРЕМЯ...<br>
                    МЫ, КАТЕГОРИЧЕСКИ НЕ СОГЛАСНЫ!...
                </p>
                
                <div class="readMore">
                    <a href="#" class="readMoreSend">                
                        <h4 class="readMoreWord">>>&nbsp;ЧИТАТЬ ДАЛЕЕ</h4>
                    </a>
                </div>

                <div class="directorSpeach2">
                    <p class="directorSpeach">НА СОБСТВЕННОМ ПРИМЕРЕ, МЫ - КАК РЕГИОНАЛЬНАЯ КОМПАНИЯ, ДОКАЗЫВАЕМ В КАЖДОЙ
                        ВЫПОЛНЕННОЙ ЗАДАЧЕ, ЧТО ВЫСОКИЕ ФЕДЕРАЛЬНЫЕ СТАНДАРТЫ КАЧЕСТВА И УРОВНЯ СЕРВИСА ВОЗМОЖНЫ!<br>
                        КЛИЕНТСКАЯ УДОВЛЕТВОРЕННОСТЬ, ЦЕЛЬ НОМЕР 1, ВНЕ ЗАВИСИМОСТИ ОТ ПОТСАВЛЕННОЙ ЗАДАЧИ.<br>
                        9 ИЗ 10 КЛИЕНТОВ СТАНОВЯТСЯ НАШИМИ ПОСТОЯННЫМИ ПАРТНЕРАМИ! Я УБЕЖДЕН, ЧТО УСПЕХ И БЛАГОПОЛУЧИЕ
                        НАШИХ ЗАКАЗЧИКОВ, ЕДИНСТВЕННЫЙ РЕЦЕПТ НАШЕГО УСПЕХА!
                    </p>

                    <figure class="speachMark2">
                        <img id="portf1" src="https://2big.ru/wp-content/uploads/2019/12/About/kav2.png" alt="Правые кавычки">
                    </figure>

                    <a href="#" class="readMoreClose">
                        <h4 class="readClose">>>&nbsp;СКРЫТЬ</h4>
                    </a>
                </div>
                -->

                <p class="directorSpeach">
                    <?php
                        $founderSpach = get_post_meta($post->ID, 'founder_spach', true);

                        if(!empty ($founderSpach)) {
                            echo $founderSpach;
                        }

                        else {
                            echo 'Речь основателя';
                        }
                    ?>   
                </p>

                <figure class="speachMark2">
                    <img id="portf1" src="https://2big.ru/wp-content/uploads/2019/12/About/kav2.png" alt="Правые кавычки">
                </figure>
            </div>
        </div>
    </section>

    <section class="containerWidthColor">
        <h2 class="principlesWord">PRINCIPLES</h2>

        <h2 class="missionWord">MISSION</h2>
        
        <div class="ContainerMission">
            <p class="directorSpeach">
                <?php
                    $mission = get_post_meta($post->ID, 'mission', true);

                    if(!empty ($mission)) {
                        echo $mission;
                    }

                    else {
                        echo 'Миссия компании';
                    }
                ?> 
            </p>
        </div>

    <?php
    }

    wp_reset_postdata(); // Закрытие запроса в БД

    ?>

<?php
} 
?>

    <?php 

        $posts = get_posts( array(
            'numberposts' => 30,
            /*'category'    => 0,*/
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            /*'meta_key'    => '',
            'meta_value'  =>'',*/
            'post_type'   => 'values',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

    ?>

    <?php 
        if (!empty($posts)) {
    ?>

        
        <div class="aboutSlider">

            <?php

            foreach( $posts as $post ){
                setup_postdata($post);    

            ?>

            <div>
                <p class="slideAboutNum">
                    <?php
                        $valuesNumber = get_post_meta($post->ID, 'values_number', true);

                        if(!empty ($valuesNumber)) {
                            echo $valuesNumber;
                        }

                        else {
                            echo 'Номер миссии.';
                        }
                    ?>.
                </p> 
                
                <p class="uppercase">
                    <?php
                        $valuesText = get_post_meta($post->ID, 'values_text', true);

                        if(!empty ($valuesText)) {
                            echo $valuesText;
                        }

                        else {
                            echo 'Текст миссии.';
                        }
                    ?>   
                </p>
            </div>

            <?php
            }

            wp_reset_postdata(); // Закрытие запроса в БД

            ?>
        </div>
     
    <?php
        }

        else {
            echo '<h4 class="noVacancyText">На данный момент миссии не добавлены</h4>';

            echo '<a class="noVacancyLink" href="https://2big.ru/">
                    <h4 class="noVacancyTextLink">Перейти на главную</h4>
                </a>';
        } 
    ?>

    </section>

    <?php 

        $posts = get_posts( array(
            'numberposts' => 30,
            /*'category'    => 0,*/
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            /*'meta_key'    => '',
            'meta_value'  =>'',*/
            'post_type'   => 'company',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

    ?>
    
    <section class="containerForTeam white_background">

        <?php

        foreach( $posts as $post ){
            setup_postdata($post);    

        ?>

        <h2 class="forTeamHead">
            <?php
                $teamHeading = get_post_meta($post->ID, 'team_heading', true);

                if(!empty ($teamHeading)) {
                    echo $teamHeading;
                }

                else {
                    echo 'Заголовок Наша команда';
                }
            ?>
        </h2>
        
        <?php
        }

        wp_reset_postdata(); // Закрытие запроса в БД

        ?>

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
                'post_type'   => 'staff',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

        ?>

        <?php 
            if (!empty($posts)) {
        ?>

            <div class="mainOurTeamSlider">

                <?php

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        // формат вывода the_title() ...

                        /*echo "<pre>";
                        print_r($post);
                        echo "</pre>"; // - Распечатка информации из БД отладка.*/

                ?>

                    <div>
                        <div class="ourTeamSlide">
                            <figure class="employeeBig">
                                <?php 
                                    if ( get_post_meta( get_the_ID(), 'staff_photo', false ) ){ 
                                        $staffphoto = get_post_meta( get_the_ID(), 'staff_photo', false ); }
                            
                                    if ( $staffphoto ) {

                                        foreach ( $staffphoto as $gal ) {								        
                                                                
                                            $img = pods_image_url( $gal['ID'], 'large');
                                            //echo $img;

                                            if ($img) {
                                                //echo 'Есть галерея';
                                                echo '									
                                                    <img src="' . $img . '">';
                                                
                                            } else {
                                                //echo 'Нет галереи';
                                                echo '<img src="' . $fullimg . '">';
                                            }
                                    
                                        }
                                    }
                                ?>

                            </figure>

                            <div class="ourTeamText">
                                <h2 class="bigOurTeamHeading"><?php the_title(); ?></h2>

                                <h3 class="bigOurTeamDesc">
                                    <?php
                                        if ( get_post_meta( get_the_ID(), 'staff_position', false ) ){ 
                                        $staff = get_post_meta( get_the_ID(), 'staff_position', false ); }

                                        if ( $staff ) {

                                            foreach ( $staff as $staff_one ) {
                                                echo $staff_one;
                                            }
                                        }

                                    ?>
                                </h3>
                            </div>
                        </div>
                    </div>

                <?php
                }

                wp_reset_postdata(); // Закрытие запроса в БД

                ?>
                
            </div>
        <?php
            } else {
                echo '<h4 class="noVacancyText">На данный момент сотрудники не добавлены</h4>';

                echo '<a class="noVacancyLink" href="https://2big.ru/about/">
                        <h4 class="noVacancyTextLink">Перейти на страницу "О нас"</h4>
                    </a>';
            }
        ?>

        
    </section>

    <?php 

        $posts = get_posts( array(
            'numberposts' => 10,
            /*'category'    => 0,*/
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            /*'meta_key'    => '',
            'meta_value'  =>'',*/
            'post_type'   => 'company',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

    ?>

        <?php
            foreach( $posts as $post ){
                setup_postdata($post);
        ?>


    <aside class="PartnersUndergraund">    
        <h3 class="undergroundPartnersHeading">SOME OF OUR PARTNERS</h3>    
    </aside>



    <section class="container_fullWidth marginTop-">
        <h2 class="BrandsHeading">
            <?php
                $ourPartnersHeading = get_post_meta($post->ID, 'our_partners_heading', true);

                if(!empty ($ourPartnersHeading)) {
                    echo $ourPartnersHeading;
                }

                else {
                    echo 'Заголовок Наши партнеры';
                }
            ?>
        </h2>

        <?php
        }

        wp_reset_postdata(); // Закрытие запроса в БД

        ?>

    <?php 

    $posts = get_posts( array(
        'numberposts' => 100,
        /*'category'    => 0,*/
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        /*'meta_key'    => '',
        'meta_value'  =>'',*/
        'post_type'   => 'partners_logos',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    ?>

    <?php 
    if (!empty($posts)) {
    ?>

        <div class="BrandsItems">
            <?php
            foreach( $posts as $post ){
                setup_postdata($post);
            ?>

            <div class="BrandsItem audi">
                <?php 
                    $partnerLogo = get_post_meta($post->ID, 'partner_logo1', false);
                    $partnerLogoHover = get_post_meta($post->ID, 'partner_logo1_hover', false);
            
                    if ($partnerLogo)  {
        
                        foreach ( $partnerLogo as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogoHover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.audi::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.audi {display: none;}</style>';
                            }
                            
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem bmw">
                <?php 
                    $partnerLogo2 = get_post_meta($post->ID, 'partner_logo2', false);
                    $partnerLogo2Hover = get_post_meta($post->ID, 'partner_logo2_hover', false);
            
                    if ($partnerLogo2)  {
        
                        foreach ( $partnerLogo2 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo2Hover as $gal ) {
                                    $imgHover2Partner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.bmw::after {background-image: url("' . $imgHover2Partner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.bmw {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem cadillac">
                <?php 
                    $partnerLogo3 = get_post_meta($post->ID, 'partner_logo3', false);
                    $partnerLogo3Hover = get_post_meta($post->ID, 'partner_logo3_hover', false);
            
                    if ($partnerLogo3)  {
        
                        foreach ( $partnerLogo3 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo3Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.cadillac::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.cadillac {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem coca-cola">
                <?php 
                    $partnerLogo4 = get_post_meta($post->ID, 'partner_logo4', false);
                    $partnerLogo4Hover = get_post_meta($post->ID, 'partner_logo4_hover', false);
            
                    if ($partnerLogo4)  {
        
                        foreach ( $partnerLogo4 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo4Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.coca-cola::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.coca-cola {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem m_video">
                <?php 
                    $partnerLogo5 = get_post_meta($post->ID, 'partner_logo5', false);
                    $partnerLogo5Hover = get_post_meta($post->ID, 'partner_logo5_hover', false);
            
                    if ($partnerLogo5)  {
        
                        foreach ( $partnerLogo5 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo5Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.m_video::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.m_video {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem mts">
                <?php 
                    $partnerLogo6 = get_post_meta($post->ID, 'partner_logo6', false);
                    $partnerLogo6Hover = get_post_meta($post->ID, 'partner_logo6_hover', false);
            
                    if ($partnerLogo6)  {
        
                        foreach ( $partnerLogo6 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo6Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.mts::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.mts {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem pepsi">
                <?php 
                    $partnerLogo7 = get_post_meta($post->ID, 'partner_logo7', false);
                    $partnerLogo7Hover = get_post_meta($post->ID, 'partner_logo7_hover', false);
            
                    if ($partnerLogo7)  {
        
                        foreach ( $partnerLogo7 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo7Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.pepsi::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.pepsi {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem post">
                <?php 
                    $partnerLogo8 = get_post_meta($post->ID, 'partner_logo8', false);
                    $partnerLogo8Hover = get_post_meta($post->ID, 'partner_logo8_hover', false);
            
                    if ($partnerLogo8)  {
        
                        foreach ( $partnerLogo8 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo8Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.post::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.post {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem rosneft">
                <?php 
                    $partnerLogo9 = get_post_meta($post->ID, 'partner_logo9', false);
                    $partnerLogo9Hover = get_post_meta($post->ID, 'partner_logo9_hover', false);
            
                    if ($partnerLogo9)  {
        
                        foreach ( $partnerLogo9 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo9Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.rosneft::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.rosneft {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem rostelecom">
                <?php 
                    $partnerLogo10 = get_post_meta($post->ID, 'partner_logo10', false);
                    $partnerLogo10Hover = get_post_meta($post->ID, 'partner_logo10_hover', false);
            
                    if ($partnerLogo10)  {
        
                        foreach ( $partnerLogo10 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo10Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.rostelecom::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.rostelecom {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem sber">
                <?php 
                    $partnerLogo11 = get_post_meta($post->ID, 'partner_logo11', false);
                    $partnerLogo11Hover = get_post_meta($post->ID, 'partner_logo11_hover', false);
            
                    if ($partnerLogo11)  {
        
                        foreach ( $partnerLogo11 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo11Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.sber::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.sber {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem tele2">
                <?php 
                    $partnerLogo12 = get_post_meta($post->ID, 'partner_logo12', false);
                    $partnerLogo12Hover = get_post_meta($post->ID, 'partner_logo12_hover', false);
            
                    if ($partnerLogo12)  {
        
                        foreach ( $partnerLogo12 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo12Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.tele2::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.tele2 {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem turkish">
                <?php 
                    $partnerLogo13 = get_post_meta($post->ID, 'partner_logo13', false);
                    $partnerLogo13Hover = get_post_meta($post->ID, 'partner_logo13_hover', false);
            
                    if ($partnerLogo13)  {
        
                        foreach ( $partnerLogo13 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo13Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.turkish::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.turkish {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem vtb">
                <?php 
                    $partnerLogo14 = get_post_meta($post->ID, 'partner_logo14', false);
                    $partnerLogo14Hover = get_post_meta($post->ID, 'partner_logo14_hover', false);
            
                    if ($partnerLogo14)  {
        
                        foreach ( $partnerLogo14 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo14Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.vtb::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.vtb {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <div class="BrandsItem yota">
                <?php 
                    $partnerLogo15 = get_post_meta($post->ID, 'partner_logo15', false);
                    $partnerLogo15Hover = get_post_meta($post->ID, 'partner_logo15_hover', false);
            
                    if ($partnerLogo15)  {
        
                        foreach ( $partnerLogo15 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                foreach ( $partnerLogo15Hover as $gal ) {
                                    $imgHoverPartner = pods_image_url( $gal['ID'], 'large');
                                    
                                    echo '<style>.yota::after {background-image: url("' . $imgHoverPartner . '");}</style>' ;
                                }
                                
                            } else {
                                echo '<style>.yota {display: none;}</style>';
                            }
                                                        
                        }      

                    }                           
                    
                ?>
            </div>

            <?php
            }

            wp_reset_postdata(); // Закрытие запроса в БД

            ?>

        </div>    
    </section>

    <?php
        } else {
            echo '<h4 class="noVacancyText">На данный логотипы партнеров не добавлены</h4>';

        }
    ?>

    <section class="containerForm">
        <img src="https://2big.ru/wp-content/uploads/2019/12/Contact_form_bg.png" alt="Свяжитесь с нами!">

        <article class="contactFormAbout">
            <h2>ВАШЕ ПЕРСОНАЛЬНОЕ КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ</h2>
                
            <div class="ok"></div>
            <form id="FormConnectAbout" method="POST" enctype="text/plain" action="https://2big.ru/wp-content/themes/oceanwp/mailing-about.php" autocomplete="on">
                <input id="nameFull" size="80" required="required" type="text" name="first_name" placeholder="*Ваше имя">

                <input id="phoneNumber" class="YourphoneNumber" size="50" required="required" type="tel" placeholder="*Телефон" name="phone">

                <input id="emailAddress" size="50" required="required" type="email" placeholder="*Ваш E-mail" name="email">

                <textarea id="message" cols="50" rows="5" maxlength="500" placeholder="Ваши пожелания" name="message"></textarea>    
                
                <div class="buttonMainForm  revealator-slideup revealator-delay2 revealator-duration6 revealator-once"><button class="buttonSend minheight" type="submit">ПОЛУЧИТЬ КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ                    
                </button></div>
            </form>
            <div class="note"></div>
        </article>           
    </section>



<?php get_footer(); ?>