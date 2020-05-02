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
        'post_type'   => 'main',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

?>

<?php 
    if (!empty($posts)) {
?>


<section class="mainDisplay">
    <div class="video-layer">
        <div class="blockOnVideo">
            <div class="leftBlockVideo">

            </div>

        <?php
            foreach( $posts as $post ){
                setup_postdata($post); 
        ?>

            <div class="rightBlockVideo">
                <h1>
                    <?php
                        $mainHeading = get_post_meta($post->ID, 'main_heading', true);

                        if(!empty ($mainHeading)) {
                            echo $mainHeading;
                        }

                        else {
                            echo 'Главный заголовок';
                        }
                    ?>
                </h1>

                <h3>
                    <?php
                        $headerDesc = get_post_meta($post->ID, 'header_description', true);

                        if(!empty ($headerDesc)) {
                            echo $headerDesc;
                        }

                        else {
                            echo 'Описание деятельности';
                        }
                    ?>
                </h3>
            </div>        

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
    'numberposts' => 10,
    /*'category'    => 0,*/
    'orderby'     => 'date',
    'order'       => 'DESC',
    /*'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',*/
    'post_type'   => 'company_data',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

?>

    <?php 
    if (!empty($posts)) {
    ?>

    <?php

    foreach( $posts as $post ){
        setup_postdata($post);    

    ?>
        
        <div class="socialIconsMain">
            <div class="down">
                <a href="#wePresent">
                    <img src="https://2big.ru/wp-content/uploads/2019/12/down.png" alt="Прокрутка вниз">
                </a>
            </div>

            <div class="IconsMain">
                <a href="https://<?php
                        $socialProfile = get_post_meta($post->ID, 'social_profile1', true);

                        if(!empty ($socialProfile)) {
                            echo $socialProfile;
                        }
                    ?>">

                    <?php 
                        $mainSocialIcon1 = get_post_meta($post->ID, 'main_social_icon1', false);                        
                
                        if ($mainSocialIcon1)  {
            
                            foreach ( $mainSocialIcon1 as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';                                    
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<p class="Social_footer">1</p>';                                   
                                }                            
                            }                    
                        }                                   
                    ?>
                </a>
                
                <a href="https://<?php
                        $socialProfile2 = get_post_meta($post->ID, 'social_profile2', true);

                        if(!empty ($socialProfile2)) {
                            echo $socialProfile2;
                        }
                    ?>">

                    <?php 
                        $mainSocialIcon2 = get_post_meta($post->ID, 'main_social_icon2', false);                        
                
                        if ($mainSocialIcon2)  {
            
                            foreach ( $mainSocialIcon2 as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';                                    
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<p class="Social_footer">2</p>';                                   
                                }                            
                            }                    
                        }                                   
                    ?>
                </a>

                <a href="https://<?php
                        $socialProfile3 = get_post_meta($post->ID, 'social_profile3', true);

                        if(!empty ($socialProfile3)) {
                            echo $socialProfile3;
                        }
                    ?>">

                    <?php 
                        $mainSocialIcon3 = get_post_meta($post->ID, 'main_social_icon3', false);                        
                
                        if ($mainSocialIcon3)  {
            
                            foreach ( $mainSocialIcon3 as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';                                    
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<p class="Social_footer">3</p>';                                   
                                }                            
                            }                    
                        }                                   
                    ?>
                </a>
            </div>
        </div>
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
        'post_type'   => 'main',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

?>

<?php 
    if (!empty($posts)) {
?>

    <?php

        foreach( $posts as $post ){
            setup_postdata($post);    

    ?>

    <div class="bgForvideo"></div>
    
    <video loop muted autoplay playsinline class="bg_video">        
        <source src="https://2big.ru/wp-content/uploads/2019/12/Video_trigger.mp4" type="video/mp4">        
    </video>
</section>

<section class="mainDisplayMobile">
    <div class="bgForvideo"></div>
    
    <div class="container_83_center">
        <h1 class="mainh1">
            <?php
                $mainHeading = get_post_meta($post->ID, 'main_heading', true);

                if(!empty ($mainHeading)) {
                    echo $mainHeading;
                }

                else {
                    echo 'Главный заголовок';
                }
            ?>
        </h1>

        <h3 class="mainh3">
            <?php
                $headerDesc = get_post_meta($post->ID, 'header_description', true);

                if(!empty ($headerDesc)) {
                    echo $headerDesc;
                }

                else {
                    echo 'Описание деятельности';
                }
            ?>
        </h3>
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
    'numberposts' => 10,
    /*'category'    => 0,*/
    'orderby'     => 'date',
    'order'       => 'DESC',
    /*'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',*/
    'post_type'   => 'company_data',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

?>

    <?php 
    if (!empty($posts)) {
    ?>

    <?php

    foreach( $posts as $post ){
        setup_postdata($post);    

    ?>

    <div class="socialIconsMain">            
        <div class="IconsMain">
            <a href="https://<?php
                    $socialProfile = get_post_meta($post->ID, 'social_profile1', true);

                    if(!empty ($socialProfile)) {
                        echo $socialProfile;
                    }
                ?>">

                <?php 
                    $mainSocialIcon1 = get_post_meta($post->ID, 'main_social_icon1', false);                        
            
                    if ($mainSocialIcon1)  {
        
                        foreach ( $mainSocialIcon1 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';                                    
                                
                            }
                            else {
                                //echo 'Нет изображения';
                                echo '<p class="Social_footer">1</p>';                                   
                            }                            
                        }                    
                    }                                   
                ?>
            </a>
            
            <a href="https://<?php
                    $socialProfile2 = get_post_meta($post->ID, 'social_profile2', true);

                    if(!empty ($socialProfile2)) {
                        echo $socialProfile2;
                    }
                ?>">

                <?php 
                    $mainSocialIcon2 = get_post_meta($post->ID, 'main_social_icon2', false);                        
            
                    if ($mainSocialIcon2)  {
        
                        foreach ( $mainSocialIcon2 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';                                    
                                
                            }
                            else {
                                //echo 'Нет изображения';
                                echo '<p class="Social_footer">2</p>';                                   
                            }                            
                        }                    
                    }                                   
                ?>
            </a>

            <a href="https://<?php
                    $socialProfile3 = get_post_meta($post->ID, 'social_profile3', true);

                    if(!empty ($socialProfile3)) {
                        echo $socialProfile3;
                    }
                ?>">

                <?php 
                    $mainSocialIcon3 = get_post_meta($post->ID, 'main_social_icon3', false);                        
            
                    if ($mainSocialIcon3)  {
        
                        foreach ( $mainSocialIcon3 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';                                    
                                
                            }
                            else {
                                //echo 'Нет изображения';
                                echo '<p class="Social_footer">3</p>';                                   
                            }                            
                        }                    
                    }                                   
                ?>
            </a>
        </div>
    </div>
</section>

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
        'post_type'   => 'main',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

?>

<?php 
    if (!empty($posts)) {
?>

    <?php

        foreach( $posts as $post ){
            setup_postdata($post);    

    ?>

<article id="wePresent" class="container_fullWidth">
    <h2>
        <?php
            $ourOffer = get_post_meta($post->ID, 'our_offer', true);

            if(!empty ($ourOffer)) {
                echo $ourOffer;
            }

            else {
                echo 'Заголовок в блоке Мы предлагаем';
            }
        ?>
    </h2>

    <div class="ShortContainer width100">
        <div class="ShortContainerFlex">
            <figure class="flip">
                <div class="card">
                    <div class="card-face front">            
                        <?php 
                            $ourOfferImg1 = get_post_meta($post->ID, 'our_offer_img1', false);
                    
                            if ($ourOfferImg1)  {
              
                                foreach ( $ourOfferImg1 as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/nar.png">';
                                    }                            
                                }      
            
                            }                           
                            
                        ?> 

                        <figcaption>
                            <h4 class="iconNamesMain">
                                <?php
                                    $ourOffer1 = get_post_meta($post->ID, 'our_offer_1', true);

                                    if(!empty ($ourOffer1)) {
                                        echo $ourOffer1;
                                    }

                                    else {
                                        echo '<p>Заголовок 1</p>';
                                    }
                                ?>                               
                            </h4>
                        </figcaption>
                    </div>

                    <figcaption class="card-face back">
                        <p>
                            <?php
                                $ourOfferText1 = get_post_meta($post->ID, 'our_offer_text1', true);

                                if(!empty ($ourOfferText1)) {
                                    echo $ourOfferText1;
                                }

                                else {
                                    echo 'Описание для первого flip-card';
                                }
                            ?> 
                        </p>
                        
                        <a href="https://2big.ru/outdoor/">                
                            <button class="buttonMore" type="submit">Подробнее</button>
                        </a>
                    </figcaption>
                </div>
            </figure>

            <figure class="flip">
                <div class="card">
                    <div class="card-face front">                                   
                        <?php 
                            $ourOfferImg2 = get_post_meta($post->ID, 'our_offer_img2', false);
                    
                            if ($ourOfferImg2)  {
              
                                foreach ( $ourOfferImg2 as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/nar.png">';
                                    }                            
                                }      
            
                            }                           
                            
                        ?>  
                        
                        <figcaption>
                            <h4 class="iconNamesMain">
                                <?php
                                    $ourOffer2 = get_post_meta($post->ID, 'our_offer_2', true);

                                    if(!empty ($ourOffer2)) {
                                        echo $ourOffer2;
                                    }

                                    else {
                                        echo 'Заголовок 2';
                                    }
                                ?>
                            </h4>
                        </figcaption>
                    </div>

                    <figcaption class="card-face back">
                        <p>
                            <?php
                                $ourOfferText2 = get_post_meta($post->ID, 'our_offer_text2', true);

                                if(!empty ($ourOfferText2)) {
                                    echo $ourOfferText2;
                                }

                                else {
                                    echo 'Описание для второго flip-card';
                                }
                            ?>
                        </p>
                        
                        <a href="https://2big.ru/wi-fi/">                
                            <button class="buttonMore" type="submit">Подробнее</button>
                        </a>    
                    </figcaption>
                </div>
            </figure>

            <figure class="flip">
                <div class="card">
                    <div class="card-face front">            
                        <?php 
                            $ourOfferImg3 = get_post_meta($post->ID, 'our_offer_img3', false);
                    
                            if ($ourOfferImg3)  {
              
                                foreach ( $ourOfferImg3 as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/nar.png">';
                                    }                            
                                }      
            
                            }                           
                            
                        ?>  

                        <figcaption>
                            <h4 class="iconNamesMain">
                                <?php
                                    $ourOffer3 = get_post_meta($post->ID, 'our_offer_3', true);

                                    if(!empty ($ourOffer3)) {
                                        echo $ourOffer3;
                                    }

                                    else {
                                        echo 'Заголовок 3';
                                    }
                                ?>
                            </h4>
                        </figcaption>
                    </div>

                    <figcaption class="card-face back">
                        <p>
                            <?php
                                $ourOfferText3 = get_post_meta($post->ID, 'our_offer_text3', true);

                                if(!empty ($ourOfferText3)) {
                                    echo $ourOfferText3;
                                }

                                else {
                                    echo 'Описание для третьего flip-card';
                                }
                            ?>                           
                        </p>
                        
                        <a href="https://2big.ru/buying/">                
                            <button class="buttonMore" type="submit">Подробнее</button>
                        </a>
                    </figcaption>
                </div>
            </figure>

            <figure class="flip">
                <div class="card">
                    <div class="card-face front">            
                        <?php 
                            $ourOfferImg4 = get_post_meta($post->ID, 'our_offer_img4', false);
                    
                            if ($ourOfferImg4)  {
              
                                foreach ( $ourOfferImg4 as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/nar.png">';
                                    }                            
                                }      
            
                            }                           
                            
                        ?> 

                        <figcaption>
                            <h4 class="iconNamesMain">
                                <?php
                                    $ourOffer4 = get_post_meta($post->ID, 'our_offer_4', true);

                                    if(!empty ($ourOffer4)) {
                                        echo $ourOffer4;
                                    }

                                    else {
                                        echo 'Заголовок 4';
                                    }
                                ?>
                            </h4>
                        </figcaption>
                    </div>

                    <figcaption class="card-face back">
                        <p>
                            <?php
                                $ourOfferText4 = get_post_meta($post->ID, 'our_offer_text4', true);

                                if(!empty ($ourOfferText4)) {
                                    echo $ourOfferText4;
                                }

                                else {
                                    echo 'Описание для четвертого flip-card';
                                }
                            ?>                         
                        </p>
                        
                        <a href="https://2big.ru/production/">                
                            <button class="buttonMore" type="submit">Подробнее</button>
                        </a>
                    </figcaption>
                </div>
            </figure>

            <figure class="flip">
                <div class="card">
                    <div class="card-face front">            
                        <?php 
                            $ourOfferImg5 = get_post_meta($post->ID, 'our_offer_img5', false);
                    
                            if ($ourOfferImg5)  {
              
                                foreach ( $ourOfferImg5 as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/nar.png">';
                                    }                            
                                }      
            
                            }                           
                            
                        ?>  

                        <figcaption>
                            <h4 class="iconNamesMain">
                                <?php
                                    $ourOffer5 = get_post_meta($post->ID, 'our_offer_5', true);

                                    if(!empty ($ourOffer5)) {
                                        echo $ourOffer5;
                                    }

                                    else {
                                        echo 'Заголовок 5';
                                    }
                                ?>
                            </h4>
                        </figcaption>
                    </div>

                    <figcaption class="card-face back">
                        <p>
                            <?php
                                $ourOfferText5 = get_post_meta($post->ID, 'our_offer_text5', true);

                                if(!empty ($ourOfferText5)) {
                                    echo $ourOfferText5;
                                }

                                else {
                                    echo 'Описание для пятого flip-card';
                                }
                            ?>                        
                        </p>
                        
                        <a href="https://2big.ru/gifts/">                
                            <button class="buttonMore" type="submit">Подробнее</button>
                        </a>
                    </figcaption>
                </div>
            </figure>
        </div>
    </div>
</article>

<article class="mapBlock">
    <?php 
        $mapBackground = get_post_meta($post->ID, 'map_background', false);
        $mapBackgroundHover = get_post_meta($post->ID, 'map_background_hover', false);        

        if ($mapBackground)  {

            foreach ( $mapBackground as $gal ) {								        
        
                $img = pods_image_url( $gal['ID'], '1920px');
                //echo $img;                                    
        
                if (!empty ($img)) {
                    //echo 'Есть изображение';
                    echo '<img src="' . $img . '">';

                    foreach ( $mapBackgroundHover as $gal ) {
                        $imgHover = pods_image_url( $gal['ID'], '1920px');
                        
                        echo '<style>.mapBlock::after {background-image: url("' . $imgHover . '");}</style>' ;
                    }
                                                      
                    
                }
                else {
                    //echo 'Нет изображения';
                    echo '<div class="fullTrigger"><p class="fullTriggerText">
                    Background image</p></div>';
                    echo '<style>.mapBlock::after {display: none;}</style>' ;                    
                }                            
            }      

        }                           
        
    ?>    
    
    <div class="mapHeading">
        <h2>
            <?php
                $mapНeading = get_post_meta($post->ID, 'map_heading', true);

                if(!empty ($mapНeading)) {
                    echo $mapНeading;
                }

                else {
                    echo 'Заголовок карта рекламных мест';
                }
            ?>
        </h2>

        <a href="https://2big.ru/map/">                
            <button class="buttonToMap revealator-slideup revealator-delay2 revealator-duration6 revealator-once" type="submit">ПЕРЕЙТИ К КАРТЕ</button>
        </a>
    </div>
</article>

<section class="container_fullWidth">
    <h2>
        <?php
            $wiFiHeading = get_post_meta($post->ID, 'wi_fi_heading', true);

            if(!empty ($wiFiHeading)) {
                echo $wiFiHeading;
            }

            else {
                echo 'Заголовок 3-й экран WI-FI технология';
            }
        ?>        
    </h2>

    <div class="Transformation">
        <div class="transformationLeft">
            <img src="https://2big.ru/wp-content/uploads/2019/12/main/logo-grey.svg" alt="Логотип 2 этаж">
        </div>

        <div class="transformationCenter">
            <h3>+</h3>
        </div>

        <div class="transformationRight">
            <img src="https://2big.ru/wp-content/uploads/2019/12/main/Log2.png" alt="Логотип Shopster">
        </div>
    </div>

    <article class="containerWiFi">
        <div class="leftContainerWiFi">
            <div class="leftWiFiHeading">
                СОВМЕСТНО С КОМПАНИЕЙ SHOPSTER<br>
                МЫ ОСУЩЕСТВЛЯЕМ:
            </div>

            <div class="leftWiFiHeading1280">
                СОВМЕСТНО С КОМПАНИЕЙ SHOPSTER
                МЫ ОСУЩЕСТВЛЯЕМ:
            </div>

            <div class="leftWiFiItems slideRight1">
                <figure class="leftWiFiItem fadeIn">
                    <img src="https://2big.ru/wp-content/uploads/2019/12/main/analit.svg" alt="Wi-Fi аналитика">

                    <figcaption>
                        <h3 class="HeadingItem">WI-FI АНАЛИТИКУ</h3>

                        <a href="https://2big.ru/wi-fi/" class="detailedLink" target="blank">ПОДРОБНЕЕ</a>
                    </figcaption>
                </figure>

                <figure class="leftWiFiItem">
                    <img src="https://2big.ru/wp-content/uploads/2019/12/main/retarg.svg" alt="Ретаргетинг">

                    <figcaption>
                        <h3 class="HeadingItem">РЕТАРГЕТИНГ</h3>

                        <a href="https://2big.ru/wi-fi/" class="detailedLink" target="blank">ПОДРОБНЕЕ</a>
                    </figcaption>
                </figure>

                <figure class="leftWiFiItem">
                    <img src="https://2big.ru/wp-content/uploads/2019/12/main/atribut.svg" alt="Атрибуция">

                    <figcaption>
                        <h3 class="HeadingItem">АТРИБУЦИЮ</h3>

                        <a href="https://2big.ru/wi-fi/" class="detailedLink" target="blank">ПОДРОБНЕЕ</a>
                    </figcaption>
                </figure>
            </div>

            <div class="greyBg">
                <p>
                    <?php
                        $wifiDescription = get_post_meta($post->ID, 'wifi-description', true);

                        if(!empty ($wifiDescription)) {
                            echo $wifiDescription;
                        }

                        else {
                            echo 'Описание WI-FI технологии';
                        }
                    ?>
                </p>
            </div>

            <a href="https://2big.ru/wi-fi/" target="blank">                
                <button class="buttonWiFi" type="submit">ПОДРОБНЕЕ О WI-FI ТЕХНОЛОГИИ</button>
            </a>
        </div>

        <div class="RightContainerWiFi">
            <img class="slideLeft1" src="https://2big.ru/wp-content/uploads/2019/12/main/Slide1.png" alt="Описание технологии1"> 
            
            <img class="slideLeft2" src="https://2big.ru/wp-content/uploads/2019/12/main/Slide2.png" alt="Описание технологии2">

            <img class="slideLeft3" src="https://2big.ru/wp-content/uploads/2019/12/main/Slide33.png" alt="Описание технологии3">
        </div>
    </article>
</section>

<section class="benefits">
    <div class="benefitsWords">
        <h2 class="HeadingWhite">
            <?php
                $benefitsHeading = get_post_meta($post->ID, 'benefits_heading', true);

                if(!empty ($benefitsHeading)) {
                    echo $benefitsHeading;
                }

                else {
                    echo 'Заголовок Почему с нами выгодно';
                }
            ?>
        </h2>

        <h2 class="creativeWord">CREATIVE</h2>
        <h2 class="outOfHomeWord">OUT OF HOME</h2>
        <h2 class="ideaWord">IDEA</h2>
        <h2 class="doohWord">DOOH</h2>

        <div class="ShortContainer">
            <div class="ShortContainerFlex">
                <figure class="benefitsItems revealator-zoomin revealator-delay0 revealator-duration3 revealator-once">
                    <?php 
                        $benefitsImg1 = get_post_meta($post->ID, 'benefits_img1', false);
                
                        if ($benefitsImg1)  {
            
                            foreach ( $benefitsImg1 as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/Objects.png" alt="Сложные объекты">';
                                }                            
                            }      
        
                        }                           
                        
                    ?>                    

                    <figcaption class="benefitsItem">
                        <h4 class="whiteHeadingh4">
                            <?php
                                $benefitsHead1 = get_post_meta($post->ID, 'benefits_head1', true);

                                if(!empty ($benefitsHead1)) {
                                    echo $benefitsHead1;
                                }

                                else {
                                    echo 'Заголовок 1';
                                }
                            ?>
                        </h4>

                        <p class="whiteText">
                            <?php
                                $benefitsText1 = get_post_meta($post->ID, 'benefits_text1', true);

                                if(!empty ($benefitsText1)) {
                                    echo $benefitsText1;
                                }

                                else {
                                    echo 'Описание 1';
                                }
                            ?>
                        </p>
                    </figcaption>
                </figure>

                <figure class="benefitsItems revealator-zoomin revealator-delay1 revealator-duration3 revealator-once">
                    <?php 
                        $benefitsImg2 = get_post_meta($post->ID, 'benefits_img2', false);
                
                        if ($benefitsImg2)  {
            
                            foreach ( $benefitsImg2 as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/Objects.png" alt="Сложные объекты">';
                                }                            
                            }      
        
                        }                           
                        
                    ?>

                    <figcaption class="benefitsItem">
                        <h4 class="whiteHeadingh4">
                            <?php
                                $benefitsHead2 = get_post_meta($post->ID, 'benefits_head2', true);

                                if(!empty ($benefitsHead2)) {
                                    echo $benefitsHead2;
                                }

                                else {
                                    echo 'Заголовок 2';
                                }
                            ?>
                        </h4>

                        <p class="whiteText">
                            <?php
                                $benefitsText2 = get_post_meta($post->ID, 'benefits_text2', true);

                                if(!empty ($benefitsText2)) {
                                    echo $benefitsText2;
                                }

                                else {
                                    echo 'Описание 2';
                                }
                            ?>
                        </p>
                    </figcaption>
                </figure>

                <figure class="benefitsItems revealator-zoomin revealator-delay2 revealator-duration3 revealator-once">
                    <?php 
                        $benefitsImg3 = get_post_meta($post->ID, 'benefits_img3', false);
                
                        if ($benefitsImg3)  {
            
                            foreach ( $benefitsImg3 as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/Objects.png" alt="Сложные объекты">';
                                }                            
                            }      
        
                        }                           
                        
                    ?>

                    <figcaption class="benefitsItem">
                        <h4 class="whiteHeadingh4">
                            <?php
                                $benefitsHead3 = get_post_meta($post->ID, 'benefits_head3', true);

                                if(!empty ($benefitsHead3)) {
                                    echo $benefitsHead3;
                                }

                                else {
                                    echo 'Заголовок 3';
                                }
                            ?>
                        </h4>

                        <p class="whiteText">
                            <?php
                                $benefitsText3 = get_post_meta($post->ID, 'benefits_text3', true);

                                if(!empty ($benefitsText3)) {
                                    echo $benefitsText3;
                                }

                                else {
                                    echo 'Описание 3';
                                }
                            ?>                            
                        </p>
                    </figcaption>
                </figure>

                <figure class="benefitsItems revealator-zoomin revealator-delay3 revealator-duration3 revealator-once">
                    <?php 
                        $benefitsImg4 = get_post_meta($post->ID, 'benefits_img4', false);
                
                        if ($benefitsImg4)  {
            
                            foreach ( $benefitsImg4 as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/Objects.png" alt="Сложные объекты">';
                                }                            
                            }      
        
                        }                           
                        
                    ?>

                    <figcaption class="benefitsItem benefitsItem">
                        <h4 class="whiteHeadingh4">
                            <?php
                                $benefitsHead4 = get_post_meta($post->ID, 'benefits_head4', true);

                                if(!empty ($benefitsHead4)) {
                                    echo $benefitsHead4;
                                }

                                else {
                                    echo 'Заголовок 4';
                                }
                            ?>
                        </h4>

                        <p class="whiteText">
                            <?php
                                $benefitsText4 = get_post_meta($post->ID, 'benefits_text4', true);

                                if(!empty ($benefitsText4)) {
                                    echo $benefitsText4;
                                }

                                else {
                                    echo 'Описание 4';
                                }
                            ?>                            
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>


<section class="containerForTeam">
    <h2 class="forTeamHead">
        <?php
            $mainOurteamHeading = get_post_meta($post->ID, 'main_ourteam_heading', true);

            if(!empty ($mainOurteamHeading)) {
                echo $mainOurteamHeading;
            }

            else {
                echo 'Заголовлок Наша команда';
            }
        ?>
    </h2>

    <?php
        }

        wp_reset_postdata(); // Закрытие запроса в БД

    ?>

<?php
} 
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

<aside class="teamUndergraund">
    <div class="ShortContainerPersent bottom">
        <h3 class="undergroundHeading">OUR TEAM</h3>
    </div>
</aside>

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
        'post_type'   => 'main',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

?>

    <?php
        foreach( $posts as $post ){
            setup_postdata($post);
    ?>

<section class="container_fullWidth">
    
    <h2>
        <?php
            $rewiewsMainHeading = get_post_meta($post->ID, 'rewiews_main_heading', true);

            if(!empty ($rewiewsMainHeading)) {
                echo $rewiewsMainHeading;
            }

            else {
                echo 'Заголовок блока Отзывы';
            }
        ?>
    </h2>

    <div class="ShortContainer">
        <div class="CenteredThinHeading">
            <?php
                $reviewsBlockDescription = get_post_meta($post->ID, 'reviews_block_description', true);

                if(!empty ($reviewsBlockDescription)) {
                    echo $reviewsBlockDescription;
                }

                else {
                    echo 'Описание блока Отзывы';
                }
            ?>
        </div>
    
    <?php
    }

    wp_reset_postdata(); // Закрытие запроса в БД

    ?>




    <?php 

        $posts = get_posts( array(
            'numberposts' => 30,
            /*'category'    => 0,*/
            'orderby'     => 'date',
            'order'       => 'DESC',
            /*'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',*/
            'post_type'   => 'reviews',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

    ?>

    <?php 
        if (!empty($posts)) {
    ?>

    

        <div class="reviewSlider">
            <?php

            foreach( $posts as $post ){
                setup_postdata($post);
                // формат вывода the_title() ...

                /*echo "<pre>";
                print_r($post);
                echo "</pre>"; // - Распечатка информации из БД отладка.*/

            ?>

                <div>
                    <div class="rewiewSlide">
                        <figure class="rewiewSlideImg">
                            <?php 
                                $reviewerPhoto = get_post_meta($post->ID, 'reviewer_photo', false);
                        
                                if ($reviewerPhoto)  {
                    
                                    foreach ( $reviewerPhoto as $gal ) {								        
                                
                                        $img = pods_image_url( $gal['ID'], 'large');
                                        //echo $img;                                    
                                
                                        if (!empty ($img)) {
                                            //echo 'Есть изображение';
                                            echo '<img src="' . $img . '">';
                                            
                                        }
                                        else {
                                            //echo 'Нет изображения';
                                            echo '<p class="photoRewiewer">photo</p>';
                                        }                            
                                    }      
                
                                }                           
                                
                            ?> 
                        </figure>

                        <div class="rewiewSlideText">
                            <h3 class="rewiewSlideHeading">
                                <?php
                                    $reviewerName = get_post_meta($post->ID, 'reviewer_name', true);

                                    if(!empty ($reviewerName)) {
                                        echo $reviewerName;
                                    }

                                    else {
                                        echo 'Имя';
                                    }
                                ?>
                            <h3>

                            <h5 class="HeadingDescription">
                                <?php
                                    $reviewerPosition = get_post_meta($post->ID, 'reviewer_position', true);

                                    if(!empty ($reviewerPosition)) {
                                        echo $reviewerPosition;
                                    }

                                    else {
                                        echo 'Должность';
                                    }
                                ?>
                            </h5>
                        </div>
                    </div>

                    <div class="rewiewText">
                        <p>&nbsp; &nbsp; &nbsp;«
                            <?php
                                $reviewText = get_post_meta($post->ID, 'review_text', true);

                                if(!empty ($reviewText)) {
                                    echo $reviewText;
                                }

                                else {
                                    echo 'Содержание отзыва';
                                }
                            ?>» 
                        </p>
                    </div>

                    <figure class="rewiewsLogo">
                        <?php 
                            $rewiewerLogo = get_post_meta($post->ID, 'rewiewer_logo', false);
                    
                            if ($rewiewerLogo)  {
                
                                foreach ( $rewiewerLogo as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<span class="rewiewSlideImg img hidden">
                                                ЛОГО</span>';
                                    }                            
                                }      
            
                            }                           
                            
                        ?>
                    </figure> 
                </div>

            <?php
            }

            wp_reset_postdata(); // Закрытие запроса в БД

            ?>

                <!--
                <div>
                    <div class="rewiewSlide">
                        <figure class="rewiewSlideImg">
                                <img src="https://2big.ru/wp-content/uploads/2019/12/main/icon_recommend4.png" alt="Владимир Сон">
                        </figure>

                        <div class="rewiewSlideText">
                            <h3 class="rewiewSlideHeading">ВЛАДИМИР СОН<h3>

                            <h5 class="HeadingDescription">DEPUTY OOH DIRECTOR</h5>
                        </div>
                    </div>

                    <div class="rewiewText">
                            <p>&nbsp; &nbsp; &nbsp;« Для нас "Второй этаж" является надёжным партнером
                                в городе Сочи, а надёжность в любом деле безусловно важна. За годы
                                сотрудничества было реализовано много кампаний разного уровня сложности - 
                                и всё успешно, за что отдельное спасибо коллегам »</p>
                    </div>

                    <figure class="rewiewsLogo">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/main/MediaInstinctGroup.png" alt="Лого Media Instinct Group">
                    </figure> 
                </div>

                <div>
                    <div class="rewiewSlide">
                        <figure class="rewiewSlideImg">
                                <img src="https://2big.ru/wp-content/uploads/2019/12/main/icon_recommend2.png" alt="Кристина Стрижаченко">
                        </figure>

                        <div class="rewiewSlideText">
                            <h3 class="rewiewSlideHeading">КРИСТИНА СТРИЖАЧЕНКО<h3>

                            <h5 class="HeadingDescription">МАРКЕТОЛОГ</h5>
                        </div>
                    </div>

                    <div class="rewiewText">
                            <p>&nbsp; &nbsp; &nbsp;« Спасибо компании "Второй этаж" за отзывчивость, оперативное выполнение
                                поставленных задач, лояльность и высокое качество)<br>
                                Приятно работать с профессионалами! »</p>
                    </div>

                    <figure class="rewiewsLogo">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/main/ExtremeMoto_Logo.png" alt="Лого ExtremeMoto">
                    </figure> 
                </div>

                <div>
                    <div class="rewiewSlide">
                        <figure class="rewiewSlideImg">
                                <img src="https://2big.ru/wp-content/uploads/2019/12/main/icon_recommend3.png" alt="Олеся Попова">
                        </figure>

                        <div class="rewiewSlideText">
                            <h3 class="rewiewSlideHeading">ОЛЕСЯ ПОПОВА<h3>

                            <h5 class="HeadingDescription">РУКОВОДИТЕЛЬ ОТДЕЛА РЕГИОНАЛЬНЫХ ЗАКУПОК</h5>
                        </div>
                    </div>

                    <div class="rewiewText">
                            <p>&nbsp; &nbsp; &nbsp;« За длительный период сотрудничества мы в полной мере убедились
                                в надежности компании, ее профессионализме и эффективности в решении рабочих задач.
                                Ребята неординарно, творчески, ответственно подходят к выполнению различных проектов.
                                Мы полностью удовлетворены результатом совместной деятельности с компанией "Второй этаж",
                                как с ответственным и надежным партнёром, и рекомендуем её всем. »</p>
                    </div>

                    <figure class="rewiewsLogo">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/main/ADV_group_rus.png" alt="Лого ADV_group_rus">
                    </figure> 
                </div>
            -->
        </div>

    <?php

    } else {
        echo '<h4 class="noVacancyText">На данный момент отзывы не добавлены</h4>';

        echo '<a class="noVacancyLink" href="https://2big.ru/about/">
                <h4 class="noVacancyTextLink">Перейти на страницу "О нас"</h4>
            </a>';
    }

    ?>

    </div>
</section>

<section class="containerForm">
    <img src="https://2big.ru/wp-content/uploads/2019/12/Contact_form_bg.png" alt="Свяжитесь с нами!">

    <article class="contactForm">
        <h2>СВЯЖИТЕСЬ С НАМИ</h2>

        <div class="ok"></div>
        <form id="FormConnect" method="POST" enctype="text/plain" action="https://2big.ru/wp-content/themes/oceanwp/mailing.php" autocomplete="on">
            <input id="nameFull" size="80" required="required" type="text" name="first_name" placeholder="*Ваше имя">

            <input id="phoneNumber" class="YourphoneNumber" size="50" required="required" type="tel" placeholder="*Телефон" name="phone">

            <input id="emailAddress" size="50" required="required" type="email" placeholder="*Ваш E-mail" name="email">

            <textarea id="message" cols="50" rows="5" maxlength="500" placeholder="Ваше сообщение (необязательно)" name="message"></textarea>    
            
            <div class="buttonMainForm revealator-slideup revealator-delay2 revealator-duration6 revealator-once"><button class="buttonSend" type="submit">ОТПРАВИТЬ                    
            </button></div>
        </form>
        <div class="note"></div>
    </article>
</section>


<?php get_footer(); ?>