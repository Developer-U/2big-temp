<?php get_header( ); ?>

<span class="activeOutdoor">
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
        'post_type'   => 'outdoor',
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
            $outdoorMainHeading = get_post_meta($post->ID, 'outdoor_main_heading', true);

            if(!empty ($outdoorMainHeading)) {
                echo $outdoorMainHeading;
            }

            else {
                echo 'Главный заголовок';
            }
        ?>
    </h2>
    
    <p class="Maintext">
        <?php
            $outdoorParagraph = get_post_meta($post->ID, 'outdoor_paragraph', true);

            if(!empty ($outdoorParagraph)) {
                echo $outdoorParagraph;
            }

            else {
                echo 'Описание страницы';
            }
        ?>
    </p>

    <div class="ShortContainerFlex">
        <a href="#slideIt_1" class="slide_link" data-slide="0">
            <figure class="ShortContainerImage">
                <?php 
                    $outdoorIcon1Img = get_post_meta($post->ID, 'outdoor_icon1_img', false);
            
                    if ($outdoorIcon1Img)  {
        
                        foreach ( $outdoorIcon1Img as $gal ) {								        
                    
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
                            $outdoorIcon1Desc = get_post_meta($post->ID, 'outdoor_icon1_desc', true);

                            if(!empty ($outdoorIcon1Desc)) {
                                echo $outdoorIcon1Desc;
                            }

                            else {
                                echo 'Название иконки1';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>
        
        <a href="#slideIt_1" class="slide_link" data-slide="1">
            <figure class="ShortContainerImage">
                <?php 
                    $outdoorIcon2Img = get_post_meta($post->ID, 'outdoor_icon2_img', false);
            
                    if ($outdoorIcon2Img)  {
        
                        foreach ( $outdoorIcon2Img as $gal ) {								        
                    
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
                            $outdoorIcon2Desc = get_post_meta($post->ID, 'outdoor_icon2_desc', true);

                            if(!empty ($outdoorIcon2Desc)) {
                                echo $outdoorIcon2Desc;
                            }

                            else {
                                echo 'Название иконки2';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>

        <a href="#slideIt_1" class="slide_link" data-slide="2">
            <figure class="ShortContainerImage">
                <?php 
                    $outdoorIcon3Img = get_post_meta($post->ID, 'outdoor_icon3_img', false);
            
                    if ($outdoorIcon3Img)  {
        
                        foreach ( $outdoorIcon3Img as $gal ) {								        
                    
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
                            $outdoorIcon3Desc = get_post_meta($post->ID, 'outdoor_icon3_desc', true);

                            if(!empty ($outdoorIcon3Desc)) {
                                echo $outdoorIcon3Desc;
                            }

                            else {
                                echo 'Название иконки3';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>

        <a href="#slideIt_1" class="slide_link" data-slide="3">
            <figure class="ShortContainerImage">
                <?php 
                    $outdoorIcon4Img = get_post_meta($post->ID, 'outdoor_icon4_img', false);
            
                    if ($outdoorIcon4Img)  {
        
                        foreach ( $outdoorIcon4Img as $gal ) {								        
                    
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
                            $outdoorIcon4Desc = get_post_meta($post->ID, 'outdoor_icon4_desc', true);

                            if(!empty ($outdoorIcon4Desc)) {
                                echo $outdoorIcon4Desc;
                            }

                            else {
                                echo 'Название иконки4';
                            }
                        ?>
                    </h4>
                </figcaption>
            </figure>
        </a>         
    </div>

    <div class="down_black">
        <a href="#outdoorSlide">
            <img src="https://2big.ru/wp-content/uploads/2019/12/down_black.png" alt="Прокрутка вниз">
        </a>
    </div>
</div>

<section id="portfolio" class="container_fullWidth">
    <h2 class="publicWord">PUBLIC</h2>
    <h2 class="strategyWord">STRATEGY</h2>
    <h2 class="doohOutdoorWord">DOOH</h2>
    <h2 class="outdoorWord">OUTDOOR</h2>

    <div class="outdoorSlider">
        <div>
            <div  class="outdoorSlide">
                <div class="leftSide">                   
                    <?php 
                        $outdoorSlide1Img = get_post_meta($post->ID, 'outdoor_slide1_img', false);
                
                        if ($outdoorSlide1Img)  {
            
                            foreach ( $outdoorSlide1Img as $gal ) {								        
                        
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

                <div class="rightSide">
                    <h2 class="sliderHeading">
                        <?php
                            $outdoorSlide1Head = get_post_meta($post->ID, 'outdoor_slide1_head', true);

                            if(!empty ($outdoorSlide1Head)) {
                                echo $outdoorSlide1Head;
                            }

                            else {
                                echo 'Заголовок слайда 1';
                            }
                        ?>
                    </h2>

                    <p class="sliderLeftText">
                        <?php
                            $outdoorSlide1Text = get_post_meta($post->ID, 'outdoor_slide1_text', true);

                            if(!empty ($outdoorSlide1Text)) {
                                echo $outdoorSlide1Text;
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
            <div class="outdoorSlide">
                <div class="leftSide">                   
                    <?php 
                        $outdoorSlide2Img = get_post_meta($post->ID, 'outdoor_slide2_img', false);
                
                        if ($outdoorSlide2Img)  {
            
                            foreach ( $outdoorSlide2Img as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<div class="fullSlideImg"><p class="fullSlideImgText">Slide 2 image</p></div>';
                                }                            
                            }      
        
                        }                           
                        
                    ?>
                </div>

                <div class="rightSide">
                    <h2 class="sliderHeading">
                        <?php
                            $outdoorSlide2Head = get_post_meta($post->ID, 'outdoor_slide2_head', true);

                            if(!empty ($outdoorSlide2Head)) {
                                echo $outdoorSlide2Head;
                            }

                            else {
                                echo 'Заголовок слайда 2';
                            }
                        ?>
                    </h2>

                    <p class="sliderLeftText">
                        <?php
                            $outdoorSlide2Text = get_post_meta($post->ID, 'outdoor_slide2_text', true);

                            if(!empty ($outdoorSlide2Text)) {
                                echo $outdoorSlide2Text;
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
            <div class="outdoorSlide">
                <div class="leftSide">                   
                    <?php 
                        $outdoorSlide3Img = get_post_meta($post->ID, 'outdoor_slide3_img', false);
                
                        if ($outdoorSlide3Img)  {
            
                            foreach ( $outdoorSlide3Img as $gal ) {								        
                        
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

                <div class="rightSide">
                    <h2 class="sliderHeading">
                        <?php
                            $outdoorSlide3Head = get_post_meta($post->ID, 'outdoor_slide3_head', true);

                            if(!empty ($outdoorSlide3Head)) {
                                echo $outdoorSlide3Head;
                            }

                            else {
                                echo 'Заголовок слайда 3';
                            }
                        ?>
                    </h2>

                    <p class="sliderLeftText">
                        <?php
                            $outdoorSlide3Text = get_post_meta($post->ID, 'outdoor_slide3_text', true);

                            if(!empty ($outdoorSlide3Text)) {
                                echo $outdoorSlide3Text;
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
            <div class="outdoorSlide">
                <div class="leftSide">                   
                    <?php 
                        $outdoorSlide4Img = get_post_meta($post->ID, 'outdoor_slide4_img', false);
                
                        if ($outdoorSlide4Img)  {
            
                            foreach ( $outdoorSlide4Img as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<div class="fullSlideImg"><p class="fullSlideImgText">Slide 4 image</p></div>';
                                }                            
                            }      
        
                        }                           
                        
                    ?>  
                </div>

                <div class="rightSide">
                    <h2 class="sliderHeading">
                        <?php
                            $outdoorSlide4Head = get_post_meta($post->ID, 'outdoor_slide4_head', true);

                            if(!empty ($outdoorSlide4Head)) {
                                echo $outdoorSlide4Head;
                            }

                            else {
                                echo 'Заголовок слайда 4';
                            }
                        ?>
                    </h2>

                    <p class="sliderLeftText">
                        <?php
                            $outdoorSlide4Text = get_post_meta($post->ID, 'outdoor_slide4_text', true);

                            if(!empty ($outdoorSlide4Text)) {
                                echo $outdoorSlide4Text;
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
</section>

<section id="outdoorSlide" class="containerWidth">
    <h2>
        <?php
            $ourProjects = get_post_meta($post->ID, 'our_projects', true);

            if(!empty ($ourProjects)) {
                echo $ourProjects;
            }

            else {
                echo 'Заголовок Наши проекты';
            }
        ?>
    </h2>

    <figure class="galleryLink gall1 video">
        <a href="
            <?php
                $projectsLink1 = get_post_meta($post->ID, 'projects_link1', true);

                if(!empty ($projectsLink1)) {
                    echo $projectsLink1;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $projectsImg1 = get_post_meta($post->ID, 'projects_img1', false);
                $videoOutdoor = get_post_meta($post->ID, 'video_outdoor', true);
        
                if ($projectsImg1)  {
    
                    foreach ( $projectsImg1 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoOutdoor)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }  
                            
                        } 
                        
                        else {
                            echo '<style>.gall1 {display: none;}</style>';
                        }                           
                    }      

                }                           
                
            ?>

        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $projectsHead1 = get_post_meta($post->ID, 'projects_head1', true);

                    if(!empty ($projectsHead1)) {
                        echo $projectsHead1;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?>
            </p>
        </figcaption>
    </figure>

    <figure class="galleryLink gall2 video">
        <a href="
            <?php
                $projectsLink2 = get_post_meta($post->ID, 'projects_link2', true);

                if(!empty ($projectsLink2)) {
                    echo $projectsLink2;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $projectsImg2 = get_post_meta($post->ID, 'projects_img2', false);
                $videoOutdoor2 = get_post_meta($post->ID, 'video_outdoor2', true);
        
                if ($projectsImg2)  {
    
                    foreach ( $projectsImg2 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoOutdoor2)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            } 
                            
                        } 
                        
                        else {
                            echo '<style>.gall2 {display: none;}</style>';
                        }                           
                    }      

                }                           
                
            ?>
            
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $projectsHead2 = get_post_meta($post->ID, 'projects_head2', true);

                    if(!empty ($projectsHead2)) {
                        echo $projectsHead2;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?> 
            </p>
        </figcaption>
    </figure>

    <figure class="galleryLink gall3 video">
        <a href="
            <?php
                $projectsLink3 = get_post_meta($post->ID, 'projects_link3', true);                

                if(!empty ($projectsLink3)) {
                    echo $projectsLink3;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $projectsImg3 = get_post_meta($post->ID, 'projects_img3', false);
                $videoOutdoor3 = get_post_meta($post->ID, 'video_outdoor3', true);
        
                if ($projectsImg3)  {
    
                    foreach ( $projectsImg3 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoOutdoor3)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }
                            
                        } 
                        
                        else {
                            echo '<style>.gall3 {display: none;}</style>';
                        }                           
                    }      

                }                           
                
            ?>            
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $projectsHead3 = get_post_meta($post->ID, 'projects_head3', true);

                    if(!empty ($projectsHead3)) {
                        echo $projectsHead3;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?> 
            </p>
        </figcaption>
    </figure>

    <figure class="galleryLink gall4 video">
        <a href="
            <?php
                $projectsLink4 = get_post_meta($post->ID, 'projects_link4', true);

                if(!empty ($projectsLink4)) {
                    echo $projectsLink4;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $projectsImg4 = get_post_meta($post->ID, 'projects_img4', false);
                $videoOutdoor4 = get_post_meta($post->ID, 'video_outdoor4', true);
        
                if ($projectsImg4)  {
    
                    foreach ( $projectsImg4 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoOutdoor4)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }
                            
                        } 
                        
                        else {
                            echo '<style>.gall4 {display: none;}</style>';
                        }                           
                    }      

                }                           
                
            ?>
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $projectsHead4 = get_post_meta($post->ID, 'projects_head4', true);

                    if(!empty ($projectsHead4)) {
                        echo $projectsHead4;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?>                 
            </p>
        </figcaption>
    </figure>

    <figure class="galleryLink gall5 video">
        <a href="
            <?php
                $projectsLink5 = get_post_meta($post->ID, 'projects_link5', true);

                if(!empty ($projectsLink5)) {
                    echo $projectsLink5;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $projectsImg5 = get_post_meta($post->ID, 'projects_img5', false);
                $videoOutdoor5 = get_post_meta($post->ID, 'video_outdoor5', true);
        
                if ($projectsImg5)  {
    
                    foreach ( $projectsImg5 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoOutdoor5)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }
                            
                        } 
                        
                        else {
                            echo '<style>.gall5 {display: none;}</style>';
                        }                           
                    }      

                }                           
                
            ?>
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $projectsHead5 = get_post_meta($post->ID, 'projects_head5', true);

                    if(!empty ($projectsHead5)) {
                        echo $projectsHead5;
                    }

                    else {
                        echo 'Описание проекта';
                    }
                ?>   
            </p>
        </figcaption>
    </figure>

    <figure class="galleryLink gall6 video">
        <a href="
            <?php
                $projectsLink6 = get_post_meta($post->ID, 'projects_link6', true);

                if(!empty ($projectsLink6)) {
                    echo $projectsLink6;
                }
                
            ?>" data-fancybox="gallery" data-caption="">

            <?php 
                $projectsImg6 = get_post_meta($post->ID, 'projects_img6', false);
                $videoOutdoor6 = get_post_meta($post->ID, 'video_outdoor6', true);
        
                if ($projectsImg6)  {
    
                    foreach ( $projectsImg6 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';

                            if (!empty($videoOutdoor6)) {
                                echo '<img class="playButton" src="https://2big.ru/wp-content/uploads/2019/12/play-button.png" alt="Видео">';
                            }
                            
                        } 
                        
                        else {
                            echo '<style>.gall6 {display: none;}</style>';
                        }                           
                    }      

                }                           
                
            ?>
        </a>

        <figcaption class="galleryText">
            <p class="galleryParagraph">
                <?php
                    $projectsHead6 = get_post_meta($post->ID, 'projects_head6', true);

                    if(!empty ($projectsHead6)) {
                        echo $projectsHead6;
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
    <h2>
        <?php
            $nonStandardHead = get_post_meta($post->ID, 'non_standard_head', true);

            if(!empty ($nonStandardHead)) {
                echo $nonStandardHead;
            }

            else {
                echo 'Заголовок нестандартное размещение';
            }
        ?>    
    </h2>

    <div class="containerWidthColor">
        <h2 class="NestandideaWord">IDEA</h2>
        <h2 class="ledWord">LED</h2>
        <h2 class="NestandstrategyWord">STRATEGY</h2>
        <h2 class="NestandoutdoorWord">OUTDOOR</h2>
        <h2 class="digitalWord">DIGITAL</h2>

        <div class="container_83_flex_Up">
            <div class="NestandFlix">
                <figure class="flip">
                    <div class="cardNestand">
                        <div class="cardNestand-face front">            
                            <?php 
                                $nonStandardImg1 = get_post_meta($post->ID, 'non_standard_img1', false);
                        
                                if ($nonStandardImg1)  {
                    
                                    foreach ( $nonStandardImg1 as $gal ) {								        
                                
                                        $img = pods_image_url( $gal['ID'], 'large');
                                        //echo $img;                                    
                                
                                        if (!empty ($img)) {
                                            //echo 'Есть изображение';
                                            echo '<img src="' . $img . '">';
                                            
                                        } 
                                        
                                        else {
                                            echo '<div class="fullCardImg"><p class="fullCardText">
                                            Card<br>photo</p></div>';
                                        }                           
                                    }      

                                }                           
                                
                            ?>
                        </div>

                        <figcaption class="cardNestand-face back">
                            <p class="cardNestandText">
                                <?php
                                    $nonStandardBack1 = get_post_meta($post->ID, 'non_standard_back1', true);

                                    if(!empty ($nonStandardBack1)) {
                                        echo $nonStandardBack1;
                                    }

                                    else {
                                        echo 'Описание 1';
                                    }
                                ?> 
                            </p>
                            
                            <a href="#" class="buttonFormSend">                
                                <button class="buttonGo" type="submit">ЗАКАЗАТЬ</button>
                            </a>
                        </figcaption>
                    </div>
                </figure>

                <figure class="flip">
                    <div class="cardNestand">
                        <div class="cardNestand-face front">            
                            <?php 
                                $nonStandardImg2 = get_post_meta($post->ID, 'non_standard_img2', false);
                        
                                if ($nonStandardImg2)  {
                    
                                    foreach ( $nonStandardImg2 as $gal ) {								        
                                
                                        $img = pods_image_url( $gal['ID'], 'large');
                                        //echo $img;                                    
                                
                                        if (!empty ($img)) {
                                            //echo 'Есть изображение';
                                            echo '<img src="' . $img . '">';
                                            
                                        } 
                                        
                                        else {
                                            echo '<div class="fullCardImg"><p class="fullCardText">
                                            Card<br>photo</p></div>';
                                        }                           
                                    }      

                                }                           
                                
                            ?>
                        </div>

                        <figcaption class="cardNestand-face back">
                            <p class="cardNestandText">
                                <?php
                                    $nonStandardBack2 = get_post_meta($post->ID, 'non_standard_back2', true);

                                    if(!empty ($nonStandardBack2)) {
                                        echo $nonStandardBack2;
                                    }

                                    else {
                                        echo 'Описание 2';
                                    }
                                ?>  
                            </p>
                            
                            <a href="#" class="buttonFormSend">                
                                <button class="buttonGo" type="submit">ЗАКАЗАТЬ</button>
                            </a>
                        </figcaption>
                    </div>
                </figure>

                <figure class="flip">
                    <div class="cardNestand">
                        <div class="cardNestand-face front">            
                            <?php 
                                $nonStandardImg3 = get_post_meta($post->ID, 'non_standard_img3', false);
                        
                                if ($nonStandardImg3)  {
                    
                                    foreach ( $nonStandardImg3 as $gal ) {								        
                                
                                        $img = pods_image_url( $gal['ID'], 'large');
                                        //echo $img;                                    
                                
                                        if (!empty ($img)) {
                                            //echo 'Есть изображение';
                                            echo '<img src="' . $img . '">';
                                            
                                        } 
                                        
                                        else {
                                            echo '<div class="fullCardImg"><p class="fullCardText">
                                            Card<br>photo</p></div>';
                                        }                           
                                    }      

                                }                           
                                
                            ?>
                        </div>

                        <figcaption class="cardNestand-face back">
                            <p class="cardNestandText">
                                <?php
                                    $nonStandardBack3 = get_post_meta($post->ID, 'non_standard_back3', true);

                                    if(!empty ($nonStandardBack3)) {
                                        echo $nonStandardBack3;
                                    }

                                    else {
                                        echo 'Описание 3';
                                    }
                                ?>
                            </p>
                            
                            <a href="#" class="buttonFormSend">                
                                <button class="buttonGo" type="submit">ЗАКАЗАТЬ</button>
                            </a>
                        </figcaption>
                    </div>
                </figure>

                <figure class="flip">
                    <div class="cardNestand">
                        <div class="cardNestand-face front">            
                            <?php 
                                $nonStandardImg4 = get_post_meta($post->ID, 'non_standard_img4', false);
                        
                                if ($nonStandardImg4)  {
                    
                                    foreach ( $nonStandardImg4 as $gal ) {								        
                                
                                        $img = pods_image_url( $gal['ID'], 'large');
                                        //echo $img;                                    
                                
                                        if (!empty ($img)) {
                                            //echo 'Есть изображение';
                                            echo '<img src="' . $img . '">';
                                            
                                        } 
                                        
                                        else {
                                            echo '<div class="fullCardImg"><p class="fullCardText">
                                            Card<br>photo</p></div>';
                                        }                           
                                    }      

                                }                           
                                
                            ?>
                        </div>

                        <figcaption class="cardNestand-face back">
                            <p class="cardNestandText">
                                <?php
                                    $nonStandardBack4 = get_post_meta($post->ID, 'non_standard_back4', true);

                                    if(!empty ($nonStandardBack4)) {
                                        echo $nonStandardBack4;
                                    }

                                    else {
                                        echo 'Описание 4';
                                    }
                                ?>
                            </p>
                            
                            <a href="#" class="buttonFormSend">                
                                <button class="buttonGo" type="submit">ЗАКАЗАТЬ</button>
                            </a>
                        </figcaption>
                    </div>
                </figure>
            </div>

            <div class="NestandText">
                <p class="NestandLeftText">
                    <?php
                        $nonStandardText = get_post_meta($post->ID, 'non_standard_text', true);

                        if(!empty ($nonStandardText)) {
                            echo $nonStandardText;
                        }

                        else {
                            echo 'Текст - описание Нестандартное размещение рекламы';
                        }
                    ?>
                </p>
            </div>
        </div>

        <div class="GoToButton revealator-slideup revealator-delay5 revealator-duration6 revealator-once">
            <a href="https://2big.ru/map/">                
                <button class="buttonGoNestand" type="submit">ПЕРЕЙТИ К КАРТЕ ОБЪЕКТОВ</button>
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

<?php get_footer(); ?>