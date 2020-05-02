<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta https-equiv="X-UA-Compatible" content="ie=edge">

    <title>Наружная реклама в Сочи</title>

    <style>@font-face {font-family: 'NoirPro-Bold';	src: url('https://2big.ru/wp-content/themes/oceanwp/assets/fonts/NoirPro-Bold/NoirPro-Bold.woff') format('woff'); font-style: normal;}</style>
    <style>@font-face {font-family: 'IBMPlexSans-Bold';	src: url('https://2big.ru/wp-content/themes/oceanwp/assets/fonts/IBMPlexSans/IBMPlexSans-Bold.woff') format('woff');}</style>
    <style>@font-face {font-family: 'IBMPlexSans-Medium'; src: url('https://2big.ru/wp-content/themes/oceanwp/assets/fonts/IBMPlexSans/IBMPlexSans-Medium.woff') format('woff');}</style>
    <style>@font-face {font-family: 'IBMPlexSans-MediumItalic'; src: url('https://2big.ru/wp-content/themes/oceanwp/assets/fonts/IBMPlexSans/IBMPlexSans-MediumItalic.woff') format('woff');}</style>
    <style>@font-face {font-family: 'IBMPlexSans-Light'; src: url('https://2big.ru/wp-content/themes/oceanwp/assets/fonts/IBMPlexSans/IBMPlexSans-Light.woff') format('woff');}</style>
    <style>*{margin: 0;}</style>
    <style>a {text-decoration: none;}</style>

    <!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
	<script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="_fonts.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script>

    <link rel="stylesheet" href="https://2big.ru/wp-content/themes/oceanwp/assets/css/style.min.css">
    <link rel="stylesheet" href="https://2big.ru/wp-content/themes/oceanwp/assets/css/jquery.fancybox.min.css">    
    <link rel="stylesheet" href="https://2big.ru/wp-content/themes/oceanwp/assets/css/slick.css">
    <link rel="stylesheet" href="https://2big.ru/wp-content/themes/oceanwp/assets/css/slick-theme.css">
    <link rel="stylesheet" href="https://2big.ru/wp-content/themes/oceanwp/assets/css/fm.revealator.jquery.css">
    

    <?php wp_head(); ?>
</head>

<body>
    <div class="container_header">
    
        
        <header class="container_83_flex">
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
        
            <figure class="headerImage">

            <?php

                foreach( $posts as $post ){
                    setup_postdata($post);    

            ?>
                <a href="https://2big.ru/">
                    <?php 
                        $headerLogo = get_post_meta($post->ID, 'header_logo', false);
                
                        if ($headerLogo)  {
            
                            foreach ( $headerLogo as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<span class="logoAltContain">
                                            <p class="logoAlt">ЛОГО</p>
                                            </span>';
                                }                            
                            }      
        
                        }                           
                        
                    ?>                     
                </a>               

                <div class="burgerMenu">                
                    <a href="#" class="headerBurger">
                        <span></span>
                        <span></span>
                        <span></span>                        
                    </a>
                </div>
            </figure>           
            
            <nav class="mainMobileMenu">                                  
                <ul class="mainMobileMenuItems">
                    <li><a href="https://2big.ru/">главная</a></li>
                    <li><a href="https://2big.ru/map/">карта объектов</a></li>
                    <li><a href="https://2big.ru/about/">о нас</a></li>
                    <li><a href="https://2big.ru/outdoor/">услуги</a></li>
                    <li><a href="https://2big.ru/job-openings/">вакансии</a></li>
                    <li><a href="https://2big.ru/contacts/">контакты</a></li>
                </ul>
                
                <a href="#" class="headerNavClose">
                    <span></span>
                    <span></span>
                </a>
            </nav>

            <!--
            <nav class="mainMenu">                                  
                <ul class="mainMenuItems">
                    <li><a href="https://2big.ru/">главная</a></li>
                    <li><a href="https://2big.ru/map/">карта объектов</a></li>
                    <li><a href="https://2big.ru/about/">о нас</a></li>
                    <li class="worksMenuContainer"><a class="worksMenuButton" href="https://2big.ru/outdoor/">услуги</a>
                        <div class="worksMenu">
                            <ul class="worksItems">
                                <li><a href="https://2big.ru/outdoor/">наружная реклама</a></li>
                                <li><a href="https://2big.ru/gifts/">брендированная продукция</a></li>
                                <li><a href="https://2big.ru/buying/">баинг</a></li>
                                <li><a href="https://2big.ru/wi-fi/">wi-fi аналитика</a></li>
                                <li><a href="https://2big.ru/production/">продакшн</a></li>
                            </ul>
                        </div>                
                    </li>
                    <li><a href="https://2big.ru/job-openings/">вакансии</a></li>
                    <li><a href="https://2big.ru/contacts/">контакты</a></li>
                </ul>                 
            </nav>
            -->

            <nav class="mainMenu">                                  
                <ul class="mainMenuItems">
                    <li><a href="https://2big.ru/">главная</a></li>
                    <li><a href="https://2big.ru/map/">карта объектов</a></li>
                    <li><a href="https://2big.ru/about/">о нас</a></li>
                    <li><a href="https://2big.ru/outdoor/">услуги</a></li>
                    <li><a href="https://2big.ru/job-openings/">вакансии</a></li>
                    <li><a href="https://2big.ru/contacts/">контакты</a></li>
                </ul>                 
            </nav>
            
            <div class="contact">
                <a href="tel:+78002229595">8&nbsp;
                    <?php
                        $phone = get_post_meta($post->ID, 'phone', true);

                        if(!empty ($phone)) {
                            echo $phone;
                        }

                        else {
                            echo 'Телефон';
                        }
                    ?>
                </a>
            </div>            
        </header>    
    </div>

        <?php
        }

        wp_reset_postdata(); // Закрытие запроса в БД

        ?>

    <?php
        } 
    ?>

</body>
</html>


