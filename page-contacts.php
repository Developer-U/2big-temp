<?php get_header( ); ?>

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
        'post_type'   => 'contacts',
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

<section class="ShortContainerPersent">
    <aside class="aboutUsHeading">
        <h1 class="mainHeadContact">
            <?php
                $contactsHeading = get_post_meta($post->ID, 'contacts_heading', true);

                if(!empty ($contactsHeading)) {
                    echo $contactsHeading;
                }

                else {
                    echo 'Главный заголовок';
                }
            ?>
        </h1>

        <h2 class="ContactHead">CONTACTS</h2>
    </aside>

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

    <div class="contactItems">
        <div class="contactItem1">
            <a href="mailto:<?php
                    $emailLink = get_post_meta($post->ID, 'email_link', true);

                    if(!empty ($emailLink)) {
                        echo $emailLink;
                    }
                    
                ?>">

                <figure class="mailContacts">
                    <?php 
                        $contactsIconEmail = get_post_meta($post->ID, 'contacts_icon_email', false);
                        $contactsIconEmailHover = get_post_meta($post->ID, 'contacts_icon_email_hover', false);
                
                        if ($contactsIconEmail)  {
            
                            foreach ( $contactsIconEmail as $gal ) {								        
                        
                                $img = pods_image_url( $gal['ID'], 'large');
                                //echo $img;                                    
                        
                                if (!empty ($img)) {
                                    //echo 'Есть изображение';
                                    echo '<img src="' . $img . '">';

                                    foreach ( $contactsIconEmailHover as $gal ) {
                                        $imgHover = pods_image_url( $gal['ID'], 'large');
                                        
                                        echo '<style>.mailContacts::after {background-image: url("' . $imgHover . '");}</style>' ;
                                    }
                                    
                                }
                                else {
                                    //echo 'Нет изображения';
                                    echo '<img src="https://2big.ru/wp-content/uploads/2019/12/Contacts/mail_n.svg" alt="E-mail">';
                                    echo '<style>.mailContacts::after {background-image: none;}</style>' ;
                                }                            
                            }      
        
                        }                           
                        
                    ?>
                </figure>
            </a>

            <div class="contactsDesc">
                <a href="mailto:<?php
                        $emailLink = get_post_meta($post->ID, 'email_link', true);

                        if(!empty ($emailLink)) {
                            echo $emailLink;
                        }
                        
                    ?>">

                    <p class="contactsText">
                        <?php
                            $emailText = get_post_meta($post->ID, 'email_text', true);

                            if(!empty ($emailText)) {
                                echo $emailText;
                            }

                            else {
                                echo 'E-mail';
                            }
                            
                        ?>
                    </p>
                </a>
            </div>
        </div>

        <div class="contactItem2">
            <div class="contactsAll">
                <a href="tel:+7<?php
                        $phoneLink = get_post_meta($post->ID, 'phone_link', true);

                        if(!empty ($phoneLink)) {
                            echo $phoneLink;
                        }
                        
                    ?>">

                    <figure class="phoneContacts">                        
                        <?php 
                            $contactsIconPhone = get_post_meta($post->ID, 'contacts_icon_phone', false);
                            $contactsIconPhoneHover = get_post_meta($post->ID, 'contacts_icon_phone_hover', false);
                    
                            if ($contactsIconPhone)  {
                
                                foreach ( $contactsIconPhone as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';

                                        foreach ( $contactsIconPhoneHover as $gal ) {
                                            $imgHover = pods_image_url( $gal['ID'], 'large');
                                            
                                            echo '<style>.phoneContacts::after {background-image: url("' . $imgHover . '");}</style>' ;
                                        }
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<img src="https://2big.ru/wp-content/uploads/2019/12/Contacts/phone_n.svg">';
                                        echo '<style>.phoneContacts::after {background-image: none;}</style>' ;
                                    }                            
                                }            
                            }                           
                        ?>                       
                    </figure>
                </a>

                <a href="https://<?php
                        $socialProfile = get_post_meta($post->ID, 'social_profile1', true);

                        if(!empty ($socialProfile)) {
                            echo $socialProfile;
                        }
                    ?>">

                    <figure class="whatsAppContacts">
                        <?php 
                            $contactsSocialIcon1 = get_post_meta($post->ID, 'contacts_social_icon1', false);
                            $contactsSocialIcon1Hover = get_post_meta($post->ID, 'contacts_social_icon1_hover', false);
                    
                            if ($contactsSocialIcon1)  {
                
                                foreach ( $contactsSocialIcon1 as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';

                                        foreach ( $contactsSocialIcon1Hover as $gal ) {
                                            $imgHover = pods_image_url( $gal['ID'], 'large');
                                            
                                            echo '<style>.whatsAppContacts::after {background-image: url("' . $imgHover . '");}</style>' ;
                                        }
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<style>.whatsAppContacts {display: none;}</style>';
                                        echo '<style>.whatsAppContacts::after {background-image: none;}</style>' ;
                                    }                            
                                }            
                            }                           
                        ?>
                    </figure>
                </a>

                <a href="https://<?php
                        $socialProfile2 = get_post_meta($post->ID, 'social_profile2', true);

                        if(!empty ($socialProfile2)) {
                            echo $socialProfile2;
                        }
                    ?>">

                    <figure class="telegramContacts">
                        <?php 
                            $contactsSocialIcon2 = get_post_meta($post->ID, 'contacts_social_icon2', false);
                            $contactsSocialIcon2Hover = get_post_meta($post->ID, 'contacts_social_icon2_hover', false);
                    
                            if ($contactsSocialIcon2)  {
                
                                foreach ( $contactsSocialIcon2 as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';

                                        foreach ( $contactsSocialIcon2Hover as $gal ) {
                                            $imgHover = pods_image_url( $gal['ID'], 'large');
                                            
                                            echo '<style>.telegramContacts::after {background-image: url("' . $imgHover . '");}</style>' ;
                                        }
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<style>.telegramContacts {display: none;}</style>';
                                        echo '<style>.telegramContacts::after {background-image: none;}</style>' ;
                                    }                            
                                }            
                            }                           
                        ?>
                    </figure>
                </a>

                <a href="https://<?php
                        $socialProfile3 = get_post_meta($post->ID, 'social_profile3', true);

                        if(!empty ($socialProfile3)) {
                            echo $socialProfile3;
                        }
                    ?>">

                    <figure class="viberContacts">
                        <?php 
                            $contactsSocialIcon3 = get_post_meta($post->ID, 'contacts_social_icon3', false);
                            $contactsSocialIcon3Hover = get_post_meta($post->ID, 'contacts_social_icon3_hover', false);
                    
                            if ($contactsSocialIcon3)  {
                
                                foreach ( $contactsSocialIcon3 as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';

                                        foreach ( $contactsSocialIcon3Hover as $gal ) {
                                            $imgHover = pods_image_url( $gal['ID'], 'large');
                                            
                                            echo '<style>.viberContacts::after {background-image: url("' . $imgHover . '");}</style>' ;
                                        }
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<style>.viberContacts {display: none;}</style>';
                                        echo '<style>.viberContacts::after {background-image: none;}</style>' ;
                                    }                            
                                }            
                            }                           
                        ?>
                    </figure>
                </a>

                <a href="https://<?php
                        $socialProfile4 = get_post_meta($post->ID, 'social_profile4', true);

                        if(!empty ($socialProfile4)) {
                            echo $socialProfile4;
                        }
                    ?>">

                    <figure class="facebookContacts">
                        <?php 
                            $contactsSocialIcon4 = get_post_meta($post->ID, 'contacts_social_icon4', false);
                            $contactsSocialIcon4Hover = get_post_meta($post->ID, 'contacts_social_icon4_hover', false);
                    
                            if ($contactsSocialIcon4)  {
                
                                foreach ( $contactsSocialIcon4 as $gal ) {								        
                            
                                    $img = pods_image_url( $gal['ID'], 'large');
                                    //echo $img;                                    
                            
                                    if (!empty ($img)) {
                                        //echo 'Есть изображение';
                                        echo '<img src="' . $img . '">';

                                        foreach ( $contactsSocialIcon4Hover as $gal ) {
                                            $imgHover = pods_image_url( $gal['ID'], 'large');
                                            
                                            echo '<style>.facebookContacts::after {background-image: url("' . $imgHover . '");}</style>' ;
                                        }
                                        
                                    }
                                    else {
                                        //echo 'Нет изображения';
                                        echo '<style>.facebookContacts {display: none;}</style>';
                                        echo '<style>.facebookContacts::after {background-image: none;}</style>' ;
                                    }                            
                                }            
                            }                           
                        ?>
                    </figure>
                </a>
            </div>

            <div class="contactsDesc">
                <a href="tel:+7<?php
                        $phoneLink = get_post_meta($post->ID, 'phone_link', true);

                        if(!empty ($phoneLink)) {
                            echo $phoneLink;
                        }
                        
                    ?>">

                    <p class="contactsText">8&nbsp;
                        <?php
                            $phone = get_post_meta($post->ID, 'phone', true);

                            if(!empty ($phone)) {
                                echo $phone;
                            }

                            else {
                                echo 'Телефон';
                            }
                        ?>
                    </p>
                </a>
            </div>
        </div>
    </div>

    <div class="down_black">
        <a href="#contactUs">
            <img src="https://2big.ru/wp-content/uploads/2019/12/down_black.png" alt="Прокрутка вниз">
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
        'post_type'   => 'contacts',
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

<section id="contactUs" class="containerWidthColor top80px">
    <h2 class="ContactsWord">CONTACT</h2> 
    
    <h2 class="usContactsWord">US</h2>

    <figure class="contactMainImg">
        <?php 
            $contactsImg = get_post_meta($post->ID, 'contacts_img', false);
    
            if ($contactsImg)  {

                foreach ( $contactsImg as $gal ) {								        
            
                    $img = pods_image_url( $gal['ID'], 'large');
                    //echo $img;                                    
            
                    if (!empty ($img)) {
                        //echo 'Есть изображение';
                        echo '<img src="' . $img . '">';
                        
                    }
                    else {
                        //echo 'Нет изображения';
                        echo '<div class="fullSlideImg"><p class="fullCardText">Contact Us Image</p></div>';
                    }                            
                }      

            }                           
            
        ?>
    </figure>
</section>

<article id="onMap" class="container_fullWidth">
    <h2>
        <?php
            $contactsHeadingMap = get_post_meta($post->ID, 'contacts_heading_map', true);

            if(!empty ($contactsHeadingMap)) {
                echo $contactsHeadingMap;
            }

            else {
                echo 'Заголовок Мы на карте';
            }
        ?>        
    </h2>    
    
    <?php
        $contactsMap = get_post_meta($post->ID, 'contacts_map', true);

        if(!empty ($contactsMap)) {
            echo $contactsMap;
        }

        else {
            echo '<style>#onMap {display: none;}</style>';
        }
    ?>
</article>
  
<div class="ContactsGo">
    <a href="#" class="buttonContactSend">                
        <button class="contactsButton revealator-slideup revealator-delay2 revealator-duration6 revealator-once" type="submit">ПОЛУЧИТЬ ПЕРСОНАЛЬНОЕ ПРЕДЛОЖЕНИЕ</button>
    </a>
</div>

    <?php
    }

    wp_reset_postdata(); // Закрытие запроса в БД

    ?>

<?php
} 
?>

<?php get_footer(); ?>