<?php get_header( ); ?>

<span class="activeBuying">
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
        'post_type'   => 'buying',
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

<article class="ShortContainerBuying">    
        <h2 class="revealator-slideup revealator-delay3 revealator-once">
            <?php
                $buyingMainHead = get_post_meta($post->ID, 'buying_main_head', true);

                if(!empty ($buyingMainHead)) {
                    echo $buyingMainHead;
                }

                else {
                    echo 'Главный заголовок Баинг';
                }
            ?>
        </h2>

        <div class="WiFicontainerFlex top">            
            <figure class="Buying_img">
                <img src="https://2big.ru/wp-content/uploads/2019/12/buying/map.png" alt="Карта">
            </figure>

            <div class="buyingDescription">
                <h3>
                    <?php
                        $buyingDescription = get_post_meta($post->ID, 'buying_description', true);

                        if(!empty ($buyingDescription)) {
                            echo $buyingDescription;
                        }

                        else {
                            echo 'Описание Баинга';
                        }
                    ?>
                </h3>
            </div>            
        </div>
    
</article>

<section class="buingHowItWorks">
    <h2>
        <?php
            $buyingWorkHead = get_post_meta($post->ID, 'buying_work_head', true);

            if(!empty ($buyingWorkHead)) {
                echo $buyingWorkHead;
            }

            else {
                echo 'Заголовок Как это работает';
            }
        ?>
    </h2>

    <div id="buyingDesctop" class="ShortContainerPersent positionBlock bottom">
        <div class="buyingItWorksDesc1">
            <h4>
                <?php
                    $buyingIcon1Text = get_post_meta($post->ID, 'buying_icon1_text', true);

                    if(!empty ($buyingIcon1Text)) {
                        echo $buyingIcon1Text;
                    }

                    else {
                        echo 'Текст иконки 1';
                    }
                ?>
            </h4>
        </div>

        <div class="buyingItWorksDesc2">
            <h4>
                <?php
                    $buyingIcon2Text = get_post_meta($post->ID, 'buying_icon2_text', true);

                    if(!empty ($buyingIcon2Text)) {
                        echo $buyingIcon2Text;
                    }

                    else {
                        echo 'Текст иконки 2';
                    }
                ?>
            </h4>
        </div>

        <div class="buyingItWorksDesc3">
            <h4>
                <?php
                    $buyingIcon3Text = get_post_meta($post->ID, 'buying_icon3_text', true);

                    if(!empty ($buyingIcon3Text)) {
                        echo $buyingIcon3Text;
                    }

                    else {
                        echo 'Текст иконки 3';
                    }
                ?>
            </h4>
        </div>

        <div class="buyingScheme">
            <figure class="buyingSchemeImage">
                <div id="firstImgBuying" class="revealator-slideright revealator-delay1 revealator-duration4">
                    <?php 
                        $buyingIcon1 = get_post_meta($post->ID, 'buying_icon1', false);
                
                        if ($buyingIcon1)  {
            
                            foreach ( $buyingIcon1 as $gal ) {								        
                        
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
                </div>

                <div class="smallWifi revealator-slideright revealator-delay5 revealator-duration3">                    
                    <img id="firstImg1" class="firstImg1" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-1.svg" alt="1">
                </div>
            </figure>
           
            <div class="forRightArrow">                    
                
            </div>

            <figure class="buyingSchemeImage">
             
            </figure>
        </div>

        <figure class="buyingverticalArrow smallWifi revealator-slideright revealator-delay10 revealator-duration3">
            <img id="firstImg4" src="https://2big.ru/wp-content/uploads/2019/12/buying/line1.png" alt="Стрелка вниз">
        </figure>

        <div class="buyingScheme">
            <figure class="buyingSchemeImage">
                <div id="SecondImgBuying" class="revealator-slideright revealator-delay2 revealator-duration4">
                    <?php 
                        $buyingIcon2 = get_post_meta($post->ID, 'buying_icon2', false);
                
                        if ($buyingIcon2)  {
            
                            foreach ( $buyingIcon2 as $gal ) {								        
                        
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
                </div>    

                <div class="smallWifi revealator-slideright revealator-delay6 revealator-duration3">                    
                    <img id="firstImg2" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-2.svg" alt="2">
                </div>
            </figure>
           
            <div class="forRightArrow smallWifi revealator-slideup revealator-delay12 revealator-duration3">                    
                <img id="firstImg5" src="https://2big.ru/wp-content/uploads/2019/12/buying/line2.png" alt="Вправо">  
            </div>

            <figure class="buyingSchemeImage">
                <div id="ThirdImgUp" class="revealator-slideup revealator-delay3 revealator-duration4">
                    <?php 
                        $buyingIcon3 = get_post_meta($post->ID, 'buying_icon3', false);
                
                        if ($buyingIcon3)  {
            
                            foreach ( $buyingIcon3 as $gal ) {								        
                        
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
                </div>

                <div class="smallWifi revealator-slideup revealator-delay7 revealator-duration3">                    
                    <img id="firstImg3" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-3.svg" alt="3">
                </div>
            </figure>
        </div>
    </div>

    <div id="buyingMobile" class="ShortContainerPersent positionBlock bottom">        
        <div class="buyingScheme">
            <figure class="buyingSchemeImage">
                <div id="firstImgBuying">
                    <?php 
                        $buyingIcon1 = get_post_meta($post->ID, 'buying_icon1', false);
                
                        if ($buyingIcon1)  {
            
                            foreach ( $buyingIcon1 as $gal ) {								        
                        
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
                </div>

                <div class="smallWifi">                    
                    <img id="firstImg1" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-1.svg" alt="1">
                </div>
            </figure>

            <div class="buyingItWorksDesc1">
                <h4>
                    <?php
                        $buyingIcon1Text = get_post_meta($post->ID, 'buying_icon1_text', true);

                        if(!empty ($buyingIcon1Text)) {
                            echo $buyingIcon1Text;
                        }

                        else {
                            echo 'Текст иконки 1';
                        }
                    ?>
                </h4>
            </div>           
        </div>

        
        <div class="buyingScheme">
            <figure class="buyingSchemeImage">
                <div id="SecondImgBuying">
                    <?php 
                        $buyingIcon2 = get_post_meta($post->ID, 'buying_icon2', false);
                
                        if ($buyingIcon2)  {
            
                            foreach ( $buyingIcon2 as $gal ) {								        
                        
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
                </div>

                <div class="smallWifi">                    
                    <img id="firstImg2" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-2.svg" alt="2">
                </div>
            </figure>

            <div class="buyingItWorksDesc2">
                <h4>
                    <?php
                        $buyingIcon2Text = get_post_meta($post->ID, 'buying_icon2_text', true);

                        if(!empty ($buyingIcon2Text)) {
                            echo $buyingIcon2Text;
                        }

                        else {
                            echo 'Текст иконки 2';
                        }
                    ?>
                </h4>
            </div>
           
            <div class="forRightArrow">                    
                <img id="firstImg5" src="https://2big.ru/wp-content/uploads/2019/12/buying/line2.png" alt="Вправо">  
            </div>

            <figure class="buyingSchemeImage">
                <div id="ThirdImgUp">
                    <?php 
                        $buyingIcon3 = get_post_meta($post->ID, 'buying_icon3', false);
                
                        if ($buyingIcon3)  {
            
                            foreach ( $buyingIcon3 as $gal ) {								        
                        
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
                </div>

                <div class="smallWifi">                    
                    <img id="firstImg3" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-3.svg" alt="3">
                </div>
            </figure>

            <div class="buyingItWorksDesc3">
                <h4>
                    <?php
                        $buyingIcon3Text = get_post_meta($post->ID, 'buying_icon3_text', true);

                        if(!empty ($buyingIcon3Text)) {
                            echo $buyingIcon3Text;
                        }

                        else {
                            echo 'Текст иконки 3';
                        }
                    ?>
                </h4>
            </div>
        </div>
    </div>

    <div id="buttonToUpSlow" class="GoToButton">
        <a href="#" class="buttonBuyingSend">                
            <button class="buttonGoNestand" type="submit">УЗНАТЬ БОЛЬШЕ</button>
        </a>
    </div>
</section>

<section class="containerWidthColorFlex minWidth">
    <div class="flashHeading">
        <h2>
            <?php
                $buyingBenefitsHead = get_post_meta($post->ID, 'buying_benefits_head', true);

                if(!empty ($buyingBenefitsHead)) {
                    echo $buyingBenefitsHead;
                }

                else {
                    echo 'Заголовок Почему это выгодно';
                }
            ?>
        </h2>
    </div>

    <div class="ContainFlash">
        <div class="leftRightContainFlash">
            <img src="https://2big.ru/wp-content/uploads/2019/12/buying/left_if.png" alt="Если Вы работаете сами">

            <div class="ContainFlashText">
                <p>
                    <?php
                        $buyingBenefitsLeftText = get_post_meta($post->ID, 'buying_benefits_left_text', true);

                        if(!empty ($buyingBenefitsLeftText)) {
                            echo $buyingBenefitsLeftText;
                        }

                        else {
                            echo 'Текст в левой колонке';
                        }
                    ?>
                </p>
            </div>            

            <div class="result_dislike">
                <div class="resultContain">
                    <h3 class="resultHead">ИТОГ: ДОЛГО И ТРУДНО ):</h3>

                    <figure class="like_dislike">
                        <img src="https://2big.ru/wp-content/uploads/2019/12/buying/dislike.svg" alt="dislike">
                    </figure>
                </div>
            </div>
        </div>

        <div class="leftRightContainFlash">
            <img src="https://2big.ru/wp-content/uploads/2019/12/buying/right_if.png" alt="Если Вы работаете с нами">

            <div class="ContainFlashText">
                <p>
                    <?php
                        $buyingBenefitsRightText = get_post_meta($post->ID, 'buying_benefits_right_text', true);

                        if(!empty ($buyingBenefitsRightText)) {
                            echo $buyingBenefitsRightText;
                        }

                        else {
                            echo 'Текст в правой колонке';
                        }
                    ?>
                </p>
            </div>            

            <div class="result_like">
                <div class="resultContain">
                    <h3 class="resultHead">ИТОГ: ЛЕГКО И УСПЕШНО (:</h3>

                    <figure class="like_dislike">
                        <img src="https://2big.ru/wp-content/uploads/2019/12/buying/like.svg" alt="like">
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <div class="leftFlash">
        <img src="https://2big.ru/wp-content/uploads/2019/12/buying/left_flashlight.png" alt="Левый фонарь">
    </div>

    <div class="rightFlash">
        <img src="https://2big.ru/wp-content/uploads/2019/12/buying/right_flashlight.png" alt="Правый фонарь">
    </div>
</section>

<section class="container_fullWidth">
    <h2 class="buyingWord">BUYING</h2>

    <h2>
        <?php
            $buyingAdvantages = get_post_meta($post->ID, 'buying_advantages', true);

            if(!empty ($buyingAdvantages)) {
                echo $buyingAdvantages;
            }

            else {
                echo 'Заголовок преимущества Баинга';
            }
        ?>
    </h2>

    <div class="buyingAdvantages">
       <div class="buyingAdvantage">
           <div class="oneAdvantage revealator-once revealator-slideright revealator-delay0 revealator-duration4 adv1">
               <img src="https://2big.ru/wp-content/uploads/2019/12/buying/galka.svg" alt="Преимущество баинга">

               <div class="oneAdvantageText">
                    <p>
                        <?php
                            $buyingAdvantage1 = get_post_meta($post->ID, 'buying_advantage1', true);

                            if(!empty ($buyingAdvantage1)) {
                                echo $buyingAdvantage1;
                            }

                            else {
                                echo '<style>.adv1 {display: none;}</style>';
                            }
                        ?>
                    </p>                    
               </div>
           </div>

           <div class="oneAdvantage revealator-once revealator-slideright revealator-delay1 revealator-duration4 adv2">
               <img src="https://2big.ru/wp-content/uploads/2019/12/buying/galka.svg" alt="Преимущество баинга">

               <div class="oneAdvantageText">
                    <p>
                        <?php
                            $buyingAdvantage2 = get_post_meta($post->ID, 'buying_advantage2', true);

                            if(!empty ($buyingAdvantage2)) {
                                echo $buyingAdvantage2;
                            }

                            else {
                                echo '<style>.adv2 {display: none;}</style>';
                            }
                        ?>
                    </p>
               </div>
           </div>

           <div class="oneAdvantage revealator-once revealator-slideright revealator-delay2 revealator-duration4 adv3">
               <img src="https://2big.ru/wp-content/uploads/2019/12/buying/galka.svg" alt="Преимущество баинга">

               <div class="oneAdvantageText">
                    <p>
                        <?php
                            $buyingAdvantage3 = get_post_meta($post->ID, 'buying_advantage3', true);

                            if(!empty ($buyingAdvantage3)) {
                                echo $buyingAdvantage3;
                            }

                            else {
                                echo '<style>.adv3 {display: none;}</style>';
                            }
                        ?>                     
                    </p>
               </div>
           </div>
       </div>
       
       <div class="buyingAdvantage">
           <div class="oneAdvantage revealator-once revealator-slideleft revealator-delay3 revealator-duration4 adv4">
               <img src="https://2big.ru/wp-content/uploads/2019/12/buying/galka.svg" alt="Преимущество баинга">

               <div class="oneAdvantageText">
                    <p>
                        <?php
                            $buyingAdvantage4 = get_post_meta($post->ID, 'buying_advantage4', true);

                            if(!empty ($buyingAdvantage4)) {
                                echo $buyingAdvantage4;
                            }

                            else {
                                echo '<style>.adv4 {display: none;}</style>';
                            }
                        ?>
                    </p>                    
               </div>
           </div>

           <div class="oneAdvantage revealator-once revealator-slideleft revealator-delay4 revealator-duration4 adv5">
               <img src="https://2big.ru/wp-content/uploads/2019/12/buying/galka.svg" alt="Преимущество баинга">

               <div class="oneAdvantageText">
                    <p>
                        <?php
                            $buyingAdvantage5 = get_post_meta($post->ID, 'buying_advantage5', true);

                            if(!empty ($buyingAdvantage5)) {
                                echo $buyingAdvantage5;
                            }

                            else {
                                echo '<style>.adv5 {display: none;}</style>';
                            }
                        ?>
                    </p>
               </div>
           </div>

           <div class="oneAdvantage revealator-once revealator-slideleft revealator-delay5 revealator-duration4 adv6">
               <img src="https://2big.ru/wp-content/uploads/2019/12/buying/galka.svg" alt="Преимущество баинга">

               <div class="oneAdvantageText">
                    <p>
                        <?php
                            $buyingAdvantage6 = get_post_meta($post->ID, 'buying_advantage6', true);

                            if(!empty ($buyingAdvantage6)) {
                                echo $buyingAdvantage6;
                            }

                            else {
                                echo '<style>.adv6 {display: none;}</style>';
                            }
                        ?>                
                    </p>
               </div>
           </div>
       </div> 
    </div>

    <div class="GoToButton revealator-slideup revealator-delay5 revealator-duration4 revealator-once">
        <a href="#" class="buttonBuyingSend">                
            <button class="buttonGoNestand" type="submit">ЗАКАЗАТЬ</button>
        </a>
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

