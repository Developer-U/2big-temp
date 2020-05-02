<?php get_header( ); ?>

<span class="activeGifts">
    <?php get_sidebar( ); ?>
</span>

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
        'post_type'   => 'gifts',
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

<div class="ShortDescription">
    <h2>
        <?php
            $giftsMainHeading = get_post_meta($post->ID, 'gifts_main_heading', true);

            if(!empty ($giftsMainHeading)) {
                echo $giftsMainHeading;
            }

            else {
                echo 'Главный заголовок';
            }
        ?>
    </h2>    

    <div class="ShortContainerFlex">
        <a href="#" class="slide_link" data-slide="0">
            <figure class="ShortContainerImage">
                <?php 
                    $giftsIcon1Img = get_post_meta($post->ID, 'gifts_icon1_img', false);
            
                    if ($giftsIcon1Img)  {
        
                        foreach ( $giftsIcon1Img as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';                                   
                            } 
                            
                            else {
                                echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/nar.png">';
                            }                           
                        }      

                    }                           
                    
                ?>

                <figcaption>
                    <h4 class="iconNames">
                        <?php
                            $giftsIcon1Heading = get_post_meta($post->ID, 'gifts_icon1_heading', true);

                            if(!empty ($giftsIcon1Heading)) {
                                echo $giftsIcon1Heading;
                            }

                            else {
                                echo 'Название иконки 1';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>
        
        <a href="#" class="slide_link" data-slide="1">
            <figure class="ShortContainerImage">
                <?php 
                    $giftsIcon2Img = get_post_meta($post->ID, 'gifts_icon2_img', false);
            
                    if ($giftsIcon2Img)  {
        
                        foreach ( $giftsIcon2Img as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';                                   
                            } 
                            
                            else {
                                echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/nar.png">';
                            }                           
                        }      

                    }                           
                    
                ?>
                
                <figcaption>
                    <h4 class="iconNames">
                        <?php
                            $giftsIcon2Heading = get_post_meta($post->ID, 'gifts_icon2_heading', true);

                            if(!empty ($giftsIcon2Heading)) {
                                echo $giftsIcon2Heading;
                            }

                            else {
                                echo 'Название иконки 2';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>

        <a href="#" class="slide_link" data-slide="2">
            <figure class="ShortContainerImage">
                <?php 
                    $giftsIcon3Img = get_post_meta($post->ID, 'gifts_icon3_img', false);
            
                    if ($giftsIcon3Img)  {
        
                        foreach ( $giftsIcon3Img as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';                                   
                            } 
                            
                            else {
                                echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/nar.png">';
                            }                           
                        }      

                    }                           
                    
                ?>
                
                <figcaption>
                    <h4 class="iconNames">
                        <?php
                            $giftsIcon3Heading = get_post_meta($post->ID, 'gifts_icon3_heading', true);

                            if(!empty ($giftsIcon3Heading)) {
                                echo $giftsIcon3Heading;
                            }

                            else {
                                echo 'Название иконки 3';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>

        <a href="#" class="slide_link" data-slide="3">
            <figure class="ShortContainerImage">
                <?php 
                    $giftsIcon4Img = get_post_meta($post->ID, 'gifts_icon4_img', false);
            
                    if ($giftsIcon4Img)  {
        
                        foreach ( $giftsIcon4Img as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';                                   
                            } 
                            
                            else {
                                echo '<img src="https://2big.ru/wp-content/uploads/2019/12/main/nar.png">';
                            }                           
                        }      

                    }                           
                    
                ?>
                
                <figcaption>
                    <h4 class="iconNames">
                        <?php
                            $giftsIcon4Heading = get_post_meta($post->ID, 'gifts_icon4_heading', true);

                            if(!empty ($giftsIcon4Heading)) {
                                echo $giftsIcon4Heading;
                            }

                            else {
                                echo 'Название иконки 4';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>         
    </div>

    <div class="down_black">
        <a href="#portfolio1">
            <img src="https://2big.ru/wp-content/uploads/2019/12/down_black.png" alt="Прокрутка вниз">
        </a>
    </div>
</div>

<section id="portfolio" class="container_fullWidth">
    <h2 class="brandingGiftsWord">BRANDING</h2>
    <h2 class="giftsWord">GIFTS</h2>
    <h2 class="doohGiftsWord">LOGO</h2>    

    <div id="portfolio1" class="giftsSlider">        
        <div class="giftsSlide">
            <?php 
                $giftsSlide1 = get_post_meta($post->ID, 'gifts_slide1', false);
        
                if ($giftsSlide1)  {

                    foreach ( $giftsSlide1 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        } 
                        
                        else {
                            echo '<div class="fullCardImg"><p class="fullCardText">
                            Slide 1</p></div>';
                        }                           
                    }      

                }                           
                
            ?>
        </div>

        <div class="giftsSlide">
            <?php 
                $giftsSlide2 = get_post_meta($post->ID, 'gifts_slide2', false);
        
                if ($giftsSlide2)  {

                    foreach ( $giftsSlide2 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        } 
                        
                        else {
                            echo '<div class="fullCardImg"><p class="fullCardText">
                            Slide 2</p></div>';
                        }                           
                    }      

                }                           
                
            ?>
        </div>

        <div class="giftsSlide">
            <?php 
                $giftsSlide3 = get_post_meta($post->ID, 'gifts_slide3', false);
        
                if ($giftsSlide3)  {

                    foreach ( $giftsSlide3 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        } 
                        
                        else {
                            echo '<div class="fullCardImg"><p class="fullCardText">
                            Slide 3</p></div>';
                        }                           
                    }      

                }                           
                
            ?>
        </div>

        <div class="giftsSlide">
            <?php 
                $giftsSlide4 = get_post_meta($post->ID, 'gifts_slide4', false);
        
                if ($giftsSlide4)  {

                    foreach ( $giftsSlide4 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        } 
                        
                        else {
                            echo '<div class="fullCardImg"><p class="fullCardText">
                            Slide 4</p></div>';
                        }                           
                    }      

                }                           
                
            ?>
        </div>
    </div>
</section>

<article class="containerWidthColor">
    <h2 class="identityWord">IDENTITY</h2>
    <h2 class="projectsWord">PROJECTS</h2>

    <h2>
        <?php
            $giftsProjectsHeading = get_post_meta($post->ID, 'gifts_projects_heading', true);

            if(!empty ($giftsProjectsHeading)) {
                echo $giftsProjectsHeading;
            }

            else {
                echo 'Заголовок Наши проекты';
            }
        ?>
    </h2>

    <div class="ShortContainerPersent">
        <figure class="galleryBigLink revealator-slideright revealator-delay1 revealator-duration6 revealator-once gallBig1 video">
            <a href="
                <?php
                    $giftsProjectsLink1 = get_post_meta($post->ID, 'gifts_projects_link1', true);

                    if(!empty ($giftsProjectsLink1)) {
                        echo $giftsProjectsLink1;
                    }
                    
                ?>" data-fancybox="gallery" data-caption="Айдентика для фитнес-центра «Валентин">

                <?php 
                    $giftsProjectsImg1 = get_post_meta($post->ID, 'gifts_projects_img1', false);
                    $videoGifts = get_post_meta($post->ID, 'video_gifts', true);
            
                    if ($giftsProjectsImg1)  {
        
                        foreach ( $giftsProjectsImg1 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                if (!empty($videoGifts)) {
                                    echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                                }
                                
                            } 
                            
                            else {
                                echo '<style>.gallBig1 {display: none;}
                                .projectsWord {z-index: -1;}</style>';
                            }                           
                        }      

                    }                           
                    
                ?>
            </a>

            <figcaption class="galleryText">
                <p class="galleryParagraph">
                    <?php
                        $giftsProjectsHead1 = get_post_meta($post->ID, 'gifts_projects_head1', true);

                        if(!empty ($giftsProjectsHead1)) {
                            echo $giftsProjectsHead1;
                        }

                        else {
                            echo 'Описание проекта';
                        }
                    ?>
                </p>
            </figcaption>
        </figure>

        <figure class="galleryBigLink revealator-slideright revealator-delay1 revealator-duration6 revealator-once gallBig2 video">
            <a href="
                <?php
                    $giftsProjectsLink2 = get_post_meta($post->ID, 'gifts_projects_link2', true);

                    if(!empty ($giftsProjectsLink2)) {
                        echo $giftsProjectsLink2;
                    }
                    
                ?>" data-fancybox="gallery" data-caption="Айдентика для фитнес-центра «Валентин">

                <?php 
                    $giftsProjectsImg2 = get_post_meta($post->ID, 'gifts_projects_img2', false);
                    $videoGifts2 = get_post_meta($post->ID, 'video_gifts2', true);
            
                    if ($giftsProjectsImg2)  {
        
                        foreach ( $giftsProjectsImg2 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                if (!empty($videoGifts2)) {
                                    echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                                }
                                
                            } 
                            
                            else {
                                echo '<style>.gallBig2 {display: none;}
                                .projectsWord {z-index: -1;}</style>';
                            }                           
                        }      

                    }                           
                    
                ?>
            </a>

            <figcaption class="galleryText">
                <p class="galleryParagraph">
                    <?php
                        $giftsProjectsHead2 = get_post_meta($post->ID, 'gifts_projects_head2', true);

                        if(!empty ($giftsProjectsHead2)) {
                            echo $giftsProjectsHead2;
                        }

                        else {
                            echo 'Описание проекта';
                        }
                    ?>
                </p>
            </figcaption>
        </figure>

        <figure class="galleryBigLink revealator-slideleft revealator-delay3 revealator-duration6 revealator-once gallBig3 video">
            <a href="
                <?php
                    $giftsProjectsLink3 = get_post_meta($post->ID, 'gifts_projects_link3', true);

                    if(!empty ($giftsProjectsLink3)) {
                        echo $giftsProjectsLink3;
                    }
                    
                ?>" data-fancybox="gallery" data-caption="Айдентика для медицинского центра «Медиэстетик»">

                <?php 
                    $giftsProjectsImg3 = get_post_meta($post->ID, 'gifts_projects_img3', false);
                    $videoGifts3 = get_post_meta($post->ID, 'video_gifts3', true);
            
                    if ($giftsProjectsImg3)  {
        
                        foreach ( $giftsProjectsImg3 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                if (!empty($videoGifts3)) {
                                    echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                                }
                                
                            } 
                            
                            else {
                                echo '<style>.gallBig3 {display: none;}
                                .projectsWord {z-index: -1;}</style>';
                            }                           
                        }      

                    }                           
                    
                ?>
            </a>

            <figcaption class="galleryText">
                <p class="galleryParagraph">
                    <?php
                        $giftsProjectsHead3 = get_post_meta($post->ID, 'gifts_projects_head3', true);

                        if(!empty ($giftsProjectsHead3)) {
                            echo $giftsProjectsHead3;
                        }

                        else {
                            echo 'Описание проекта';
                        }
                    ?>
                </p>
            </figcaption>
        </figure>

        <figure class="galleryBigLink revealator-slideleft revealator-delay3 revealator-duration6 revealator-once gallBig4 video">
            <a href="
                <?php
                    $giftsProjectsLink4 = get_post_meta($post->ID, 'gifts_projects_link4', true);

                    if(!empty ($giftsProjectsLink4)) {
                        echo $giftsProjectsLink4;
                    }
                    
                ?>" data-fancybox="gallery" data-caption="Айдентика для стоматологической клиники «Medicus»">
                
                <?php 
                    $giftsProjectsImg4 = get_post_meta($post->ID, 'gifts_projects_img4', false);
                    $videoGifts4 = get_post_meta($post->ID, 'video_gifts4', true);
            
                    if ($giftsProjectsImg4)  {
        
                        foreach ( $giftsProjectsImg4 as $gal ) {								        
                    
                            $img = pods_image_url( $gal['ID'], 'large');
                            //echo $img;                                    
                    
                            if (!empty ($img)) {
                                //echo 'Есть изображение';
                                echo '<img src="' . $img . '">';

                                if (!empty($videoGifts4)) {
                                    echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                                }
                                
                            } 
                            
                            else {
                                echo '<style>.gallBig4 {display: none;}
                                .projectsWord {z-index: -1;}</style>';
                            }                           
                        }      

                    }                           
                    
                ?>
            </a>

            <figcaption class="galleryText">
                <p class="galleryParagraph">
                    <?php
                        $giftsProjectsHead4 = get_post_meta($post->ID, 'gifts_projects_head4', true);

                        if(!empty ($giftsProjectsHead4)) {
                            echo $giftsProjectsHead4;
                        }

                        else {
                            echo 'Описание проекта';
                        }
                    ?>
                </p>
            </figcaption>
        </figure>
    </div>
</article>

<section class="giftsConnect">
    <div class="containgiftsConnect">
        <div class="leftgifts">

        </div>

        <div class="rightgifts">
            <h2 class="giftsConnectHeading revealator-slideleft revealator-delay2 revealator-duration6 revealator-once">
                <?php
                    $giftsFormHeading = get_post_meta($post->ID, 'gifts_form_heading', true);

                    if(!empty ($giftsFormHeading)) {
                        echo $giftsFormHeading;
                    }

                    else {
                        echo 'Заголовок в контактной форме';
                    }
                ?>
            </h2>

            <p class="giftsConnectText revealator-once revealator-slideleft revealator-delay4 revealator-duration6">
                <?php
                    $giftsFormText = get_post_meta($post->ID, 'gifts_form_text', true);

                    if(!empty ($giftsFormText)) {
                        echo $giftsFormText;
                    }

                    else {
                        echo 'Текст в контактной форме';
                    }
                ?>
            </p>

            <div class="ok"></div>
                <form id="FormGiftsConnect" method="POST" enctype="text/plain" action="https://2big.ru/wp-content/themes/oceanwp/mailing_gifts.php" autocomplete="on">
                    <input id="nameFull" size="80" required="required" type="text" name="first_name" placeholder="*Ваше имя">

                    <input id="phoneNumber" class="YourphoneNumber" size="50" required="required" type="tel" placeholder="*Телефон" name="phone">

                    <input id="emailAddress" size="50" required="required" type="email" placeholder="*Ваш E-mail" name="email">

                    <textarea id="message" cols="50" rows="5" maxlength="500" placeholder="Ваши пожелания" name="message"></textarea>    
                    
                    <div class="buttonMainForm revealator-slideup revealator-delay5 revealator-duration6 revealator-once"><button class="buttonGiftsSend" type="submit">ПОЛУЧИТЬ КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ                    
                    </button></div>
                </form>
            <div class="note"></div>
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

<?php get_footer(); ?>