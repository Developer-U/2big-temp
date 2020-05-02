<?php get_header( ); ?>

<span class="activeWifi">
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
        'post_type'   => 'wi-fi',
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

<article class="ShortContainerPersent">
    <h2>
        <?php
            $wifiMainHead = get_post_meta($post->ID, 'wi-fi_main_head', true);

            if(!empty ($wifiMainHead)) {
                echo $wifiMainHead;
            }

            else {
                echo 'Главный заголовок WI-FI';
            }
        ?>
    </h2>

    <div class="WiFicontainerFlex">
        <figure class="WiFi_img">
            <?php 
                $wifiMainImg = get_post_meta($post->ID, 'wi-fi_main_img', false);
        
                if ($wifiMainImg)  {

                    foreach ( $wifiMainImg as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], 'large');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        } 
                        
                        else {
                            echo '<div class="fullCardImg"><p class="fullLeftText">
                            Image WI-FI</p></div>';
                        }                           
                    }      

                }                           
                
            ?>
        </figure>

        <div class="WiFiDescription">
            <table class="WiFitable">
                <tr>
                    <td>
                        <figure class="NumberImage">
                            <img id="firstDo" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-1.svg" alt="Первое">
                        </figure>
                    </td>

                    <td>
                        <h3 id="firstDoText">
                            <?php
                                $wifiDescription1 = get_post_meta($post->ID, 'wi-fi_description1', true);

                                if(!empty ($wifiDescription1)) {
                                    echo $wifiDescription1;
                                }

                                else {
                                    echo 'Описание 1';
                                }
                            ?>
                        </h3>
                    </td>
                <tr>

                <tr>
                    <td>
                        <figure class="NumberImage">
                            <img id="secondDo" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-2.svg" alt="Второе">
                        </figure>
                    </td>

                    <td>
                        <h3 id="secondDoText">
                            <?php
                                $wifiDescription2 = get_post_meta($post->ID, 'wi-fi_description2', true);

                                if(!empty ($wifiDescription2)) {
                                    echo $wifiDescription2;
                                }

                                else {
                                    echo 'Описание 2';
                                }
                            ?>
                        </h3>
                    </td>
                <tr>

                <tr>
                    <td>
                        <figure class="NumberImage">
                            <img id="thirdDo"src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-3.svg" alt="Третье">
                        </figure>
                    </td>

                    <td>
                        <h3 id="thirdDoText">
                            <?php
                                $wifiDescription3 = get_post_meta($post->ID, 'wi-fi_description3', true);

                                if(!empty ($wifiDescription3)) {
                                    echo $wifiDescription3;
                                }

                                else {
                                    echo 'Описание 3';
                                }
                            ?>
                        </h3>
                    </td>
                <tr>
            </table>
        </div>
    </div>

</article>

<section class="containerWidthColor">
    <h2 class="howWiFiWord">HOW</h2>
    <h2 class="itWiFiWord">IT</h2>
    <h2 class="worksWiFiWord">WORKS</h2>

    <h2 class="WiFiFirstHeading">
        <?php
            $wifiWorksHeading = get_post_meta($post->ID, 'wi-fi_works_heading', true);

            if(!empty ($wifiWorksHeading)) {
                echo $wifiWorksHeading;
            }

            else {
                echo 'Заголовок Как это работает';
            }
        ?>
    </h2>

    <div class="ShortContainerPersent">
        <div class="ShortContainerFlex">
            <div  class="RightArrow1">
                <img id="firstImg2" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/line_2.png" alt="Стрелка вправо">
            </div>

            <div class="RightArrow2">
                <img id="firstImg5" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/line_2.png" alt="Стрелка вправо">
            </div>


            <figure class="howitWorksImage">
                <div id="firstImg">
                    <?php 
                        $wifiIcon1 = get_post_meta($post->ID, 'wi-fi_icon1', false);
                
                        if ($wifiIcon1)  {
            
                            foreach ( $wifiIcon1 as $gal ) {								        
                        
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

            <div class="howItWorksDesc1">
                <p>
                    <?php
                        $wifiIcon1Text = get_post_meta($post->ID, 'wi-fi_icon1_text', true);

                        if(!empty ($wifiIcon1Text)) {
                            echo $wifiIcon1Text;
                        }

                        else {
                            echo 'Описание 1';
                        }
                    ?>
                </p>
            </div>

            <figure class="howitWorksImage">
                <div id="SecondImg">
                    <?php 
                        $wifiIcon2 = get_post_meta($post->ID, 'wi-fi_icon2', false);
                
                        if ($wifiIcon2)  {
            
                            foreach ( $wifiIcon2 as $gal ) {								        
                        
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
                    <img id="firstImg3" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-2.svg" alt="2">
                </div>
            </figure>

            <div class="howItWorksDesc2">
                <p>
                    <?php
                        $wifiIcon2Text = get_post_meta($post->ID, 'wi-fi_icon2_text', true);

                        if(!empty ($wifiIcon2Text)) {
                            echo $wifiIcon2Text;
                        }

                        else {
                            echo 'Описание 2';
                        }
                    ?>
                </p>
            </div>

            <figure class="howitWorksImage">
                <div id="ThirdImgUp">
                    <?php 
                        $wifiIcon3 = get_post_meta($post->ID, 'wi-fi_icon3', false);
                
                        if ($wifiIcon3)  {
            
                            foreach ( $wifiIcon3 as $gal ) {								        
                        
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
                    <img id="firstImg4" src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-3.svg" alt="3">
                </div>
            </figure>

            <div class="howItWorksDesc3">
                <p>
                    <?php
                        $wifiIcon3Text = get_post_meta($post->ID, 'wi-fi_icon3_text', true);

                        if(!empty ($wifiIcon3Text)) {
                            echo $wifiIcon3Text;
                        }

                        else {
                            echo 'Описание 3';
                        }
                    ?>
                </p> 
            </div>
        </div>

        <figure class="centralImageWifi">
            <div class="iconToGo1">
                <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/how_1.png" alt="Планшет, как это работает1">
            </div>

            <div class="iconToGo2">
                <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/how_2.png" alt="Планшет, как это работает2">
            </div>

            <div class="iconToGo3">
                <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/how_3.png" alt="Планшет, как это работает3">
            </div>

            <div class="iconToGo4">
                <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/how_4.png" alt="Планшет, как это работает4">
            </div>


            <div class="iconToGoHeading1">
                <h4 class="iconToGoHeading">ПЕРЕСЕЧЕНИЯ С ДРУГИМИ ЛОКАЦИЯМИ (ТЦ, МАГАЗИНЫ)</h4>
            </div>

            <div class="iconToGoHeading2">
                <h4 class="iconToGoHeading">КОЛИЧЕСТВО ПРОСМОТРОВ РЕКЛАМНОЙ КАМПАНИИ</h4>
            </div>

            <div class="iconToGoHeading3">
                <h4 class="iconToGoHeading">ФОРМИРОВАНИЕ<br> ПОРТРЕТА ПОТРЕБИТЕЛЯ</h4>
            </div>

            <div class="iconToGoHeading4">
                <h4 class="iconToGoHeading">ДОЛЯ НОВЫХ<br> И ПОВТОРНЫХ ПРОСМОТРОВ</h4>
            </div>
        
        

            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/howitworks.png" alt="Планшет, как это работает">
        </figure>
    </div>
</section>

<aside id="howWorksMobile">
    <ul class="howWorksMobileItems">
        <li class="howWorksMobileItem">
            ПЕРЕСЕЧЕНИЯ С ДРУГИМИ ЛОКАЦИЯМИ (ТЦ, МАГАЗИНЫ)
        </li>    

        <li class="howWorksMobileItem">
            КОЛИЧЕСТВО ПРОСМОТРОВ РЕКЛАМНОЙ КАМПАНИИ
        </li>

        <li class="howWorksMobileItem">
            ФОРМИРОВАНИЕ ПОРТРЕТА ПОТРЕБИТЕЛЯ
        </li>

        <li class="howWorksMobileItem">
            ДОЛЯ НОВЫХ И ПОВТОРНЫХ ПРОСМОТРОВ    
        </li>
    </ul>
</aside>

<div class="GoToButton revealator-slideup revealator-delay5 revealator-duration6 revealator-once">
    <a href="#" class="buttonWiFiSend">                
        <button class="buttonGoNestand" type="submit">ЗАКАЗАТЬ</button>
    </a>
</div>

<section class="container_fullWidth">
    <h2>ВОЗМОЖНЫЕ БИЗНЕС-КЕЙСЫ</h2>

    <div class="KeisSlider">
        <div>
            <div class="Head1Keis">
                <h3 class="KeisHeading">РЕКРУТМЕНТ В ПРОГРАММУ ЛОЯЛЬНОСТИ 1</h3>
            </div>        

            <div class="MainKeisContainer">
                <div class="LeftKeisContainer">
                    <div class="KeisContain">
                        <figure class="keisFigure">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/shop_icon_keis.png" alt="Магазин">
                        </figure>

                        <figure class="keisNumber">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-1.svg" alt="1">
                        </figure>

                        <div class="KeisText">
                            <h4 class="Keish4Heading">ПОКУПАТЕЛЬ ЗАХОДИТ В МАГАЗИН</h4>

                            <p class="KeisParagraph">У ПОКУПАТЕЛЯ ЕСТЬ СМАРТФОН<br>
                                С ВКЛЮЧЕННЫМ НА НЕМ WI-FI МОДУЛЕМ
                            </p>
                        </div>
                    </div>

                    <div class="KeisContain">
                        <figure class="keisFigure">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/wifi_icon_keis.png" alt="Роутер">
                        </figure>

                        <figure class="keisNumber">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-2.svg" alt="2">
                        </figure>

                        <div class="KeisText">
                            <h4 class="Keish4Heading">SHOPSTER ИДЕНТИФИЦИРУЕТ КЛИЕНТОВ</h4>

                            <p class="KeisParagraph">ЕЩЕ НА ВХОДЕ РОУТЕРЫ ЛОВЯТ СИГНАЛЫ СО СМАРТФОНОВ
                                ПОСЕТИТЕЛЕЙ И ПЕРЕНАПРАВЛЯЮТ ИХ ПАРТНЕРУ ТЕЛЕКОМ ОПЕРАТОРУ
                            </p>
                        </div>
                    </div>

                    <div class="KeisContain">
                        <figure class="keisFigure">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/sms_icon_keis.png" alt="Смс">
                        </figure>

                        <figure class="keisNumber">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-3.svg" alt="3">
                        </figure>

                        <div class="KeisText">
                            <h4 class="Keish4Heading">ТЕЛЕКОМ ОПЕРАТОР ОТПРАВЛЯЕТ СООБЩЕНИЯ</h4>

                            <p class="KeisParagraph">СООБЩЕНИЯ С ПРЕДЛОЖЕНИЕМ СТАТЬ УЧАСТНИКОМ ПРЯМО СЕЙЧАС
                                И ПОЛУЧИТЬ ПОДАРОК ПРИХОДЯТ ПОСЕТИТЕЛЯМ ИМЕННО В ТОТ МОМЕНТ, КОГДА ОНИ
                                НАХОДЯТСЯ В МАГАЗИНЕ, И ЕЩЁ НЕ РАСПЛАТИЛИСЬ
                            </p>
                        </div>
                    </div>

                </div>

                <div class="RightKeisContainer">
                    <figure class="RightImageKeis">
                        <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/phone_wi-fi.png" alt="Смартфон">   
                    </figure>   
                </div>
            </div>
        </div>

        <div>
            <div class="Head1Keis">
                <h3 class="KeisHeading">БИЛБОРД + 020</h3>
            </div>        

            <div class="MainKeisContainer">
                <div class="LeftKeisContainer">
                    <div class="KeisContain">
                        <figure class="keisFigure">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/bilboard_icon_keis.png" alt="Билборд">
                        </figure>

                        <figure class="keisNumber">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-1.svg" alt="1">
                        </figure>

                        <div class="KeisText">                            

                            <p class="KeisParagraph">WI-FI СЕНСОР СОБИРАЕТ В ПАСИИВНОМ РЕЖИМЕ ДАННЫЕ АВТОМОБИЛЬНОГО
                            ТРАФИКА
                            </p>
                        </div>
                    </div>

                    <div class="KeisContain">
                        <figure class="keisFigure">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/wifi_icon_keis.png" alt="Роутер">
                        </figure>

                        <figure class="keisNumber">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-2.svg" alt="2">
                        </figure>

                        <div class="KeisText">                            

                            <p class="KeisParagraph">СОБРАННЫЕ ДАННЫЕ ЗАГРУЖАЮТСЯ В DMP-ПЛАТФОРМЫ ДЛЯ
                            ПОСЛЕДУЮЩЕГО РЕТАРГЕТИНГА
                            </p>
                        </div>
                    </div>

                    <div class="KeisContain">
                        <figure class="keisFigure">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/sms_icon_keis.png" alt="Смс">
                        </figure>

                        <figure class="keisNumber">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-3.svg" alt="3">
                        </figure>

                        <div class="KeisText">                            

                            <p class="KeisParagraph">ОПРЕДЕЛЕНИЕ ФАКТИЧЕСКИХ РЕЗУЛЬТАТОВ ЭФФЕКТИВНОСТИ НАРУЖНОЙ
                            РЕКЛАМЫ И РЕКЛАМЫ ОНЛАЙН ЧЕРЕЗ КОНВЕРСИЮ В ВИЗИТ В ТОЧКУ ПРОДАЖ
                            </p>
                        </div>
                    </div>

                </div>

                <div class="RightKeisContainer">
                    <figure class="RightImageBoard">
                        <div class="forBilboard">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/for_bolboard.png" alt="Суперсайт">  
                        </div>  

                        <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/Giff.gif" alt="Суперсайт">                          
                    </figure>   
                </div>
            </div>
        </div>

        <div>
            <div class="Head1Keis">
                <h3 class="KeisHeading">ОЦЕНКА ПОТЕНЦИАЛА/ЭФФЕКТИВНОСТИ ЛОКАЦИИ/МАГАЗИНА</h3>
            </div>        

            <div class="MainKeisAnalitycsContainer">
                <div class="LeftKeisContainer">
                    <div class="KeisContain">
                        <figure class="keisFigure">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/shop_icon_keis.png" alt="Магазин">
                        </figure>

                        <figure class="keisNumber">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-1.svg" alt="1">
                        </figure>

                        <div class="KeisTextWidth">
                            <h4 class="Keish4Heading">РОУТЕРЫ SHOPSTER СОБИРАЮТ ДАННЫЕ</h4>                            

                            <p class="KeisParagraph">СОБРАННЫЕ В МАГАЗИНАХ СИГНАЛЫ В ОБЛАКЕ ПРЕВРАЩАЮТСЯ В АНАЛИТИКУ
                                ТРАФИКА ПО МАГАЗИНАМ
                            </p>
                        </div>
                    </div>

                    <div class="KeisContain">
                        <figure class="keisFigure middle">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/diagram_icon_keis.png" alt="Анализ метрики">
                        </figure>

                        <figure class="keisNumber middle">
                            <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-2.svg" alt="2">
                        </figure>

                        <div class="KeisTextWidth">
                            <h4 class="Keish4Heading">ДОСТУПНЫЕ ДЛЯ АНАЛИЗА МАГАЗИНОВ МЕТРИКИ</h4>
                            
                            <ul class="keisItems">
                                <li><p class="KeisParagraph">ДОЛЯ ЗАХОДЯЩИХ ПОСЕТИТЕЛЕЙ
                                </p></li>

                                <li><p class="KeisParagraph">ДЛИТЕЛЬНОСТЬ ПРЕБЫВАНИЯ
                                </p></li>

                                <li><p class="KeisParagraph">ЧАСТОТА ПОСЕЩЕНИЙ
                                </p></li>

                                <li><p class="KeisParagraph">ПЕРЕСЕЧЕНИЯ АУДИТРИИ РАЗЛИЧНЫХ МАГАЗИНОВ
                                </p></li>

                                <li><p class="KeisParagraph">АНАЛИЗ ПРОФИЛЯ ПОСЕТИТЕЛЕЙ
                                </p></li>                                
                            </ul>
                        </div>
                    </div>

                    <div class="KeisContain">
                    <figure class="keisFigure">
                        <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/sms_icon_keis.png" alt="Смс">
                    </figure>

                    <figure class="keisNumber">
                        <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/icon-3.svg" alt="3">
                    </figure>

                    <div class="KeisTextWidthBottom"> 
                        <h4 class="Keish4Heading">РЕЗУЛЬТАТЫ АНАЛИЗА</h4>                           

                        <ul class="keisItems">
                            <li><p class="KeisParagraph">ПЕРСПЕКТИВНОСТЬ ЛОКАЦИИ С ТОЧКИ ЗРЕНИЯ ЗАКРЫТИЯ/
                                ОТКРЫТИЯ ОДНОГО МАГАЗИНА (ИЛИ УВЕЛИЧЕНИЯ ПЛОЩАДИ)
                            </p></li>

                            <li><p class="KeisParagraph">ЗАГРУЗКА МАГАЗИНА, ПРАВИЛЬНОЕ ПЛАНИРОВАНИЕ ГРАФИКА ПЕРСОНАЛА
                            </p></li>

                            <li><p class="KeisParagraph">ФОРМАТ МАГАЗИНА, НЕОБХОДИМЫЙ В ЛОКАЦИИ
                            </p></li>
                        </ul>
                    </div>
                </div>  
                </div>

                <div class="RightKeisContainer">
                    <figure class="RightImageAnalitycsBoard">
                        <img src="https://2big.ru/wp-content/uploads/2019/12/wi-fi/effective.png" alt="Эффективность">                          
                    </figure>   
                </div>                
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