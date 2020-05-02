<?php get_header( ); ?>

<span class="activeProduction">
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
        'post_type'   => 'production',
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

<div class="ShortContainerPersent bottom8px">
    <h2 class="bottom6px">
        <?php
            $productionMainHeading = get_post_meta($post->ID, 'production_main_heading', true);

            if(!empty ($productionMainHeading)) {
                echo $productionMainHeading;
            }

            else {
                echo 'Главный заголовок';
            }
        ?>
    </h2>
    
    <p class="MaintextW MoreBold">
        <?php
            $productionHeadingBold = get_post_meta($post->ID, 'production_heading_bold', true);

            if(!empty ($productionHeadingBold)) {
                echo $productionHeadingBold;
            }

            else {
                echo 'Подзаголовок';
            }
        ?>
    </p>

    <p class="MaintextW">
        <?php
            $productionParagraph = get_post_meta($post->ID, 'production_paragraph', true);

            if(!empty ($productionParagraph)) {
                echo $productionParagraph;
            }

            else {
                echo 'Описание продакшн';
            }
        ?>
    </p>

    <div class="ShortContainerFlex2">
        <a href="#" class="slide_link" data-slide="0">
            <figure class="ShortContainerImage">
                <?php 
                    $productionIcon1Img = get_post_meta($post->ID, 'production_icon1_img', false);
            
                    if ($productionIcon1Img)  {
        
                        foreach ( $productionIcon1Img as $gal ) {								        
                    
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
                    <h4 class="iconNames">
                        <?php
                            $productionIcon1Desc = get_post_meta($post->ID, 'production_icon1_desc', true);

                            if(!empty ($productionIcon1Desc)) {
                                echo $productionIcon1Desc;
                            }

                            else {
                                echo 'Описание 1';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>
        
        <a href="#" class="slide_link" data-slide="1">
            <figure class="ShortContainerImage">
                <?php 
                    $productionIcon2Img = get_post_meta($post->ID, 'production_icon2_img', false);
            
                    if ($productionIcon2Img)  {
        
                        foreach ( $productionIcon2Img as $gal ) {								        
                    
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
                    <h4 class="iconNames">
                        <?php
                            $productionIcon2Desc = get_post_meta($post->ID, 'production_icon2_desc', true);

                            if(!empty ($productionIcon2Desc)) {
                                echo $productionIcon2Desc;
                            }

                            else {
                                echo 'Описание 2';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>

        <a href="#" class="slide_link" data-slide="2">
            <figure class="ShortContainerImage">
                <?php 
                    $productionIcon3Img = get_post_meta($post->ID, 'production_icon3_img', false);
            
                    if ($productionIcon3Img)  {
        
                        foreach ( $productionIcon3Img as $gal ) {								        
                    
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
                    <h4 class="iconNames">
                        <?php
                            $productionIcon3Desc = get_post_meta($post->ID, 'production_icon3_desc', true);

                            if(!empty ($productionIcon3Desc)) {
                                echo $productionIcon3Desc;
                            }

                            else {
                                echo 'Описание 3';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>

        <a href="#" class="slide_link" data-slide="3">
            <figure class="ShortContainerImage">
                <?php 
                    $productionIcon4Img = get_post_meta($post->ID, 'production_icon4_img', false);
            
                    if ($productionIcon4Img)  {
        
                        foreach ( $productionIcon4Img as $gal ) {								        
                    
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
                    <h4 class="iconNames">
                        <?php
                            $productionIcon4Desc = get_post_meta($post->ID, 'production_icon4_desc', true);

                            if(!empty ($productionIcon4Desc)) {
                                echo $productionIcon4Desc;
                            }

                            else {
                                echo 'Описание 4';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>         
    </div>

    <div class="down_black2">
        <a href="#productionSlider">
            <img src="https://2big.ru/wp-content/uploads/2019/12/down_black.png" alt="Прокрутка вниз">
        </a>
    </div>
</div>

<section id="portfolio" class="containerWidthColor">
    <h2 class="ideaProductionWord">IDEA</h2>    
    <h2 class="advertizeProductionWord">ADVERTIZE</h2>    

    <div id="productionSlider" class="productionSlider">
        <div>
            <div class="productionSliderWords">
                <h2 class="designProductionWord">DESIGN</h2>
            </div>

            <div class="outdoorSlide">
                <div class="leftSide">                    
                    <?php 
                        $productionSlide1Img = get_post_meta($post->ID, 'production_slide1_img', false);
                
                        if ($productionSlide1Img)  {
            
                            foreach ( $productionSlide1Img as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<div class="fullSlideImg"><p class="fullSlideImgText">Slide 1 image</p></div>';
                                }                            
                            }      
        
                        }                           
                        
                    ?>
                </div>

                <div class="rightProductionSide">
                    <h2 class="sliderHeading padding_top">
                        <?php
                            $productionSlide1Head = get_post_meta($post->ID, 'production_slide1_head', true);

                            if(!empty ($productionSlide1Head)) {
                                echo $productionSlide1Head;
                            }

                            else {
                                echo 'Заголовок слайда 1';
                            }
                        ?>
                    </h2>

                    <p class="sliderLeftText">
                        <?php
                            $productionSlide1Text = get_post_meta($post->ID, 'production_slide1_text', true);

                            if(!empty ($productionSlide1Text)) {
                                echo $productionSlide1Text;
                            }

                            else {
                                echo 'Описание слайда 1';
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>

        <div>
            <div class="productionSliderWords">
                <h2 class="roofProductionWord">ROOF STRUCTURE</h2>
            </div>

            <div class="outdoorSlide">
                <div class="leftSide clearfix">
                    <figure class="leftSideFigure">
                        <?php 
                            $productionSlide2LeftImg = get_post_meta($post->ID, 'production_slide2_left_img', false);
                    
                            if ($productionSlide2LeftImg)  {
                
                                foreach ( $productionSlide2LeftImg as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<div class="fullSlideImg"><p class="fullSlideImgText">Slide 2 left image</p></div>';
                                    }                            
                                }      
            
                            }                           
                            
                        ?>
                    </figure>

                    <figure class="RightSideFigure">
                        <?php 
                            $productionSlide2RightImg = get_post_meta($post->ID, 'production_slide2_right_img', false);
                    
                            if ($productionSlide2RightImg)  {
                
                                foreach ( $productionSlide2RightImg as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<div class="fullSlideImg"><p class="fullSlideImgText">Slide 2 right image</p></div>';
                                    }                            
                                }      
            
                            }                           
                            
                        ?>
                    </figure>
                </div>

                <div class="rightProductionSide">
                    <h2 class="sliderHeading padding_top">
                        <?php
                            $productionSlide2Head = get_post_meta($post->ID, 'production_slide2_head', true);

                            if(!empty ($productionSlide2Head)) {
                                echo $productionSlide2Head;
                            }

                            else {
                                echo 'Заголовок слайда 2';
                            }
                        ?>
                    </h2>

                    <p class="sliderLeftText">
                        <?php
                            $productionSlide2Text = get_post_meta($post->ID, 'production_slide2_text', true);

                            if(!empty ($productionSlide2Text)) {
                                echo $productionSlide2Text;
                            }

                            else {
                                echo 'Описание слайда 2';
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>

        <div>
            <div class="productionSliderWords">
                <h2 class="architectProductionWord">ARCHITECT</h2>
            </div>

            <div class="outdoorSlide">
                <div class="leftSide">                    
                    <?php 
                        $productionSlide3Img = get_post_meta($post->ID, 'production_slide3_img', false);
                
                        if ($productionSlide3Img)  {
            
                            foreach ( $productionSlide3Img as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<div class="fullSlideImg"><p class="fullSlideImgText">Slide 3 image</p></div>';
                                }                            
                            }      
        
                        }                           
                        
                    ?>
                </div>

                <div class="rightProductionSide">
                    <h2 class="sliderHeading padding_top">
                        <?php
                            $productionSlide3Head = get_post_meta($post->ID, 'production_slide3_head', true);

                            if(!empty ($productionSlide3Head)) {
                                echo $productionSlide3Head;
                            }

                            else {
                                echo 'Заголовок слайда 3';
                            }
                        ?>
                    </h2>

                    <p class="sliderLeftText">
                        <?php
                            $productionSlide3Text = get_post_meta($post->ID, 'production_slide3_text', true);

                            if(!empty ($productionSlide3Text)) {
                                echo $productionSlide3Text;
                            }

                            else {
                                echo 'Описание слайда 3';
                            }
                        ?>
                    </p>                    
                </div>
            </div>
        </div>

        <div>
            <div class="productionSliderWords">
                <h2 class="architectProductionWord">VIDEO</h2>
            </div>

            <div class="productionBg">
                <div class="outdoorSlide">                
                    <div class="leftSide clearfix">
                        <figure class="leftSideFigure">
                            <?php 
                                $productionSlide4LeftImg = get_post_meta($post->ID, 'production_slide4_left_img', false);
                        
                                if ($productionSlide4LeftImg)  {
                    
                                    foreach ( $productionSlide4LeftImg as $gal ) {								        
                                
                                        $img = pods_image_url( $gal['ID'], 'large');
                                        //echo $img;                                    
                                
                                        if (!empty ($img)) {
                                            //echo 'Есть изображение';
                                            echo '<img src="' . $img . '">';
                                            
                                        }
                                        else {
                                            //echo 'Нет изображения';
                                            echo '<div class="fullSlideImg"><p class="fullSlideImgText">Slide 4 left image</p></div>';
                                        }                            
                                    }      
                
                                }                           
                                
                            ?>
                        </figure>

                        <figure class="RightSideFigure">
                            <?php 
                                $productionSlide4RightImg = get_post_meta($post->ID, 'production_slide4_right_img', false);
                        
                                if ($productionSlide4RightImg)  {
                    
                                    foreach ( $productionSlide4RightImg as $gal ) {								        
                                
                                        $img = pods_image_url( $gal['ID'], 'large');
                                        //echo $img;                                    
                                
                                        if (!empty ($img)) {
                                            //echo 'Есть изображение';
                                            echo '<img src="' . $img . '">';
                                            
                                        }
                                        else {
                                            //echo 'Нет изображения';
                                            echo '<div class="fullSlideImg"><p class="fullSlideImgText">Slide 4 right image</p></div>';
                                        }                            
                                    }      
                
                                }                           
                                
                            ?>
                        </figure>
                    </div>

                    <div class="rightProductionSide">
                        <h2 class="sliderHeading padding_top">
                            <?php
                                $productionSlide4Head = get_post_meta($post->ID, 'production_slide4_head', true);

                                if(!empty ($productionSlide4Head)) {
                                    echo $productionSlide4Head;
                                }

                                else {
                                    echo 'Заголовок слайда 4';
                                }
                            ?>
                        </h2>

                        <p class="sliderLeftText">
                            <?php
                                $productionSlide4Text = get_post_meta($post->ID, 'production_slide4_text', true);

                                if(!empty ($productionSlide4Text)) {
                                    echo $productionSlide4Text;
                                }

                                else {
                                    echo 'Описание слайда 4';
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="containerWidth">
    <h2>
        <?php
            $productionProjectsHeading = get_post_meta($post->ID, 'production_projects_heading', true);

            if(!empty ($productionProjectsHeading)) {
                echo $productionProjectsHeading;
            }

            else {
                echo 'Заголовок Наши проекты';
            }
        ?>
    </h2>

    <figure class="galleryLink gallProd1 video">
        <a href="
            <?php
                $productionProjectsLink1 = get_post_meta($post->ID, 'production_projects_link1', true);

                if(!empty ($productionProjectsLink1)) {
                    echo $productionProjectsLink1;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $productionProjectsImg1 = get_post_meta($post->ID, 'production_projects_img1', false);
                $videoProduction = get_post_meta($post->ID, 'video_production', true);
        
                if ($productionProjectsImg1)  {
    
                    foreach ( $productionProjectsImg1 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                            if (!empty($videoProduction)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }                            
                        }
                        
                        
                        
                        else {
                            echo '<style>.gallProd1 {display: none;} </style>';
                        }                           
                    }      

                }                           
                
            ?>
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $productionProjectsHead1 = get_post_meta($post->ID, 'production_projects_head1', true);

                    if(!empty ($productionProjectsHead1)) {
                        echo $productionProjectsHead1;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?>
            </p>
        </figcaption>
    </figure>

    <figure class="galleryLink gallProd2 video">
        <a href="
            <?php
                $productionProjectsLink2 = get_post_meta($post->ID, 'production_projects_link2', true);                

                if(!empty ($productionProjectsLink2)) {
                    echo $productionProjectsLink2;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $productionProjectsImg2 = get_post_meta($post->ID, 'production_projects_img2', false);
                $videoProduction2 = get_post_meta($post->ID, 'video_production2', true);
        
                if ($productionProjectsImg2)  {
    
                    foreach ( $productionProjectsImg2 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoProduction2)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }                        
                            
                        } 
                        
                        else {
                            echo '<style>.gallProd2 {display: none;} </style>';
                        }                           
                    }      

                }                           
                
            ?>           
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $productionProjectsHead2 = get_post_meta($post->ID, 'production_projects_head2', true);

                    if(!empty ($productionProjectsHead2)) {
                        echo $productionProjectsHead2;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?>
            </p>
        </figcaption>
    </figure>

    <figure class="galleryLink gallProd3 video">
        <a href="
            <?php
                $productionProjectsLink3 = get_post_meta($post->ID, 'production_projects_link3', true);
                
                if(!empty ($productionProjectsLink3)) {
                    echo $productionProjectsLink3;
                }
                
            ?>" data-fancybox="gallery" data-caption="">
                    
            <?php 
                $productionProjectsImg3 = get_post_meta($post->ID, 'production_projects_img3', false);
                $videoProduction3 = get_post_meta($post->ID, 'video_production3', true);
        
                if ($productionProjectsImg3)  {
    
                    foreach ( $productionProjectsImg3 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoProduction3)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }                           
                            
                        } 
                        
                        else {
                            echo '<style>.gallProd3 {display: none;} </style>';
                        }                           
                    }      

                }                           
                
            ?>
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $productionProjectsHead3 = get_post_meta($post->ID, 'production_projects_head3', true);

                    if(!empty ($productionProjectsHead3)) {
                        echo $productionProjectsHead3;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?>
            </p>
        </figcaption>
    </figure>

    <figure class="galleryLink gallProd4 video">
        <a href="
            <?php
                $productionProjectsLink4 = get_post_meta($post->ID, 'production_projects_link4', true);
                
                if(!empty ($productionProjectsLink4)) {
                    echo $productionProjectsLink4;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $productionProjectsImg4 = get_post_meta($post->ID, 'production_projects_img4', false);
                $videoProduction4 = get_post_meta($post->ID, 'video_production4', true);
        
                if ($productionProjectsImg4)  {
    
                    foreach ( $productionProjectsImg4 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoProduction4)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }                           
                            
                        } 
                        
                        else {
                            echo '<style>.gallProd4 {display: none;} </style>';
                        }                           
                    }      

                }                           
                
            ?>

            
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $productionProjectsHead4 = get_post_meta($post->ID, 'production_projects_head4', true);

                    if(!empty ($productionProjectsHead4)) {
                        echo $productionProjectsHead4;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?>
            </p>
        </figcaption>
    </figure>

    <figure class="galleryLink gallProd5 video">
        <a href="
            <?php
                $productionProjectsLink5 = get_post_meta($post->ID, 'production_projects_link5', true);

                if(!empty ($productionProjectsLink5)) {
                    echo $productionProjectsLink5;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $productionProjectsImg5 = get_post_meta($post->ID, 'production_projects_img5', false);
                $videoProduction5 = get_post_meta($post->ID, 'video_production5', true);
        
                if ($productionProjectsImg5)  {
    
                    foreach ( $productionProjectsImg5 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoProduction5)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }                           
                            
                        } 
                        
                        else {
                            echo '<style>.gallProd5 {display: none;} </style>';
                        }                           
                    }      

                }                           
                
            ?>
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $productionProjectsHead5 = get_post_meta($post->ID, 'production_projects_head5', true);

                    if(!empty ($productionProjectsHead5)) {
                        echo $productionProjectsHead5;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?>
            </p>
        </figcaption>
    </figure>

    <figure id="video" class="galleryLink gallProd6 video">
        <a href="
            <?php
                $productionProjectsLink6 = get_post_meta($post->ID, 'production_projects_link6', true);

                if(!empty ($productionProjectsLink6)) {
                    echo $productionProjectsLink6;
                }
                
            ?>" data-fancybox="gallery" data-caption="">  

            <?php 
                $productionProjectsImg6 = get_post_meta($post->ID, 'production_projects_img6', false);
                $videoProduction6 = get_post_meta($post->ID, 'video_production6', true);
        
                if ($productionProjectsImg6)  {
    
                    foreach ( $productionProjectsImg6 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoProduction6)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }                            
                            
                        }
                                      
                        
                        else {
                            echo '<style>.gallProd6 {display: none;} </style>';
                        }                           
                    }      

                }                           
                
            ?> 
            
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $productionProjectsHead6 = get_post_meta($post->ID, 'production_projects_head6', true);

                    if(!empty ($productionProjectsHead6)) {
                        echo $productionProjectsHead6;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?>
            </p>
        </figcaption>
    </figure>
</section>

<section class="container_fullWidth">
    <h2 class="revealator-fade revealator-delay1 revealator-duration14">
        <?php
            $productionFormHeading = get_post_meta($post->ID, 'production_form_heading', true);

            if(!empty ($productionFormHeading)) {
                echo $productionFormHeading;
            }

            else {
                echo 'Заголовок в контактной форме';
            }
        ?>
    </h2>

    <div class="productionForm">
        <div class="productionFormContain">
            <div class="leftProduction">

            </div>

            <div class="rightProduction">
                <h3 class="rightProductionHeading">
                    <?php
                        $productionFormText = get_post_meta($post->ID, 'production_form_text', true);

                        if(!empty ($productionFormText)) {
                            echo $productionFormText;
                        }

                        else {
                            echo 'Текст в контактной форме';
                        }
                    ?>
                </h3>            

                <div class="ok"></div>
                    <form id="FormProductionConnect" method="POST" enctype="text/plain" action="https://2big.ru/wp-content/themes/oceanwp/mailing-production.php" autocomplete="on">
                        <input id="nameFull" size="80" required="required" type="text" name="first_name" placeholder="*Ваше имя">

                        <input id="phoneNumber" class="YourphoneNumber" size="50" required="required" type="tel" placeholder="*Телефон" name="phone">

                        <input id="emailAddress" size="50" required="required" type="email" placeholder="*Ваш E-mail" name="email">

                        <textarea id="message" cols="50" rows="5" maxlength="500" placeholder="Ваши пожелания" name="message"></textarea>    
                        
                        <div class="buttonMainForm"><button class="buttonGoNestand buttonProduction revealator-slideup revealator-once revealator-delay3 revealator-duration8 minheight" type="submit">ПОЛУЧИТЬ КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ                    
                        </button></div>
                    </form>
                <div class="note"></div>
            </div> 
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