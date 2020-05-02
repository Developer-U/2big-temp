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
        'post_type'   => 'vacancy_pages',
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

<aside class="triggerJob">
    <?php 
        $triggerJobImg = get_post_meta($post->ID, 'trigger-job-img', false);

        if ($triggerJobImg)  {

            foreach ( $triggerJobImg as $gal ) {								        
        
                $img = pods_image_url( $gal['ID'], '1920px' );
                //echo $img;                                    
        
                if (!empty ($img)) {
                    //echo 'Есть изображение';
                    echo '<style>.triggerJob {background-image: url("' . $img . '");}</style>';                   
                }

                else {
                    echo '<div class="fullTrigger"><p class="fullTriggerText">
                    Our team photo</p></div>';
                }
                                            
            }      

        }                           
        
    ?>
    <h2 class="jobOurWord">OUR</h2> 
    <h2 class="jobVacancyWord">VACANCIES</h2>    
</aside>

<div class="ShortContainerPersent">
    <p class="jobText1">
        <?php
            $jobMainText1 = get_post_meta($post->ID, 'job_main_text1', true);

            if(!empty ($jobMainText1)) {
                echo $jobMainText1;
            }

            else {
                echo 'Первый абзац текста';
            }
        ?>
    </p>

    <p class="jobText2">
        <?php
            $jobMainText2 = get_post_meta($post->ID, 'job_main_text2', true);

            if(!empty ($jobMainText2)) {
                echo $jobMainText2;
            }

            else {
                echo 'Второй абзац текста';
            }
        ?>
    </p>

    <div class="down_black">
        <a href="#profession">
            <img src="https://2big.ru/wp-content/uploads/2019/12/down_black.png" alt="Прокрутка вниз">
        </a>
    </div>
</div>

<section class="containerWidthColor">
    <h2 id="profession" class="jobProfessionWord">PROFESSION</h2> 
    <h2 class="jobCareerWord">CAREER</h2>    
    <h2 class="jobActivityWord">ACTIVITY</h2>  

    <h2 class="jobHeading">
        <?php
            $jobMainHeading = get_post_meta($post->ID, 'job_main_heading', true);

            if(!empty ($jobMainHeading)) {
                echo $jobMainHeading;
            }

            else {
                echo 'Заголовок Работая у нас';
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
    'include'     => array(),
    'exclude'     => array(),
    /*'meta_key'    => '',
    'meta_value'  =>'',*/
    'post_type'   => 'job_benefits',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

?>

<?php 
if (!empty($posts)) {
?>

    <div class="jobBenefits">

        <?php

        foreach( $posts as $post ){
            setup_postdata($post);    

        ?>

        <div class="jobBenefit revealator-slideleft revealator-delay1 revealator-duration6 revealator-once">
            <figure class="jobBenefitIcon">
            </figure>

            <p class="jobBenefitText"><?php the_title(); ?></p>
        </div>

        <?php
        }

        wp_reset_postdata(); // Закрытие запроса в БД

        ?>
    </div>

<?php
    } else {
        echo '<h4 class="noVacancyText">На данный выгоды не добавлены</h4>';

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
        'post_type'   => 'vacancy_pages',
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

    <div class="JobGo">
        <a href="https://2big.ru/vacancy-all/">                
            <button class="jobGoButton revealator-slideup revealator-delay3 revealator-duration6 revealator-once" type="submit">СМОТРЕТЬ ВСЕ ВАКАНСИИ</button>
        </a>
    </div>
</section>

<section class="container_fullWidth">
    <h2>
        <?php
            $jobYoursHeading = get_post_meta($post->ID, 'job_yours_heading', true);

            if(!empty ($jobYoursHeading)) {
                echo $jobYoursHeading;
            }

            else {
                echo 'Заголовок Твой год в компании';
            }
        ?>
    </h2>

    <div class="jobslider">
        <div class="job1">
            <?php 
                $jobSlide1 = get_post_meta($post->ID, 'job_slide1', false);
        
                if ($jobSlide1)  {
    
                    foreach ( $jobSlide1 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job1 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?>
        </div>

        <div class="job2">
            <?php 
                $jobSlide2 = get_post_meta($post->ID, 'job_slide2', false);
        
                if ($jobSlide2)  {
    
                    foreach ( $jobSlide2 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job2 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?>
        </div>

        <div class="job3">
            <?php 
                $jobSlide3 = get_post_meta($post->ID, 'job_slide3', false);
        
                if ($jobSlide3)  {
    
                    foreach ( $jobSlide3 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job3 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?>
        </div>

        <div class="job4">
            <?php 
                $jobSlide4 = get_post_meta($post->ID, 'job_slide4', false);
        
                if ($jobSlide4)  {
    
                    foreach ( $jobSlide4 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job4 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?>
        </div>

        <div class="job5">
            <?php 
                $jobSlide5 = get_post_meta($post->ID, 'job_slide5', false);
        
                if ($jobSlide5)  {
    
                    foreach ( $jobSlide5 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job5 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?>
        </div>

        <div class="job6">
            <?php 
                $jobSlide6 = get_post_meta($post->ID, 'job_slide6', false);
        
                if ($jobSlide6)  {
    
                    foreach ( $jobSlide6 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job6 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?>
        </div>

        <div class="job7">
            <?php 
                $jobSlide7 = get_post_meta($post->ID, 'job_slide7', false);
        
                if ($jobSlide7)  {
    
                    foreach ( $jobSlide7 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job7 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?>
        </div>

        <div class="job8">
            <?php 
                $jobSlide8 = get_post_meta($post->ID, 'job_slide8', false);
        
                if ($jobSlide8)  {
    
                    foreach ( $jobSlide8 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job8 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?>
        </div>

        <div class="job9">
            <?php 
                $jobSlide9 = get_post_meta($post->ID, 'job_slide9', false);
        
                if ($jobSlide9)  {
    
                    foreach ( $jobSlide9 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job9 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?> 
        </div>

        <div class="job10">
            <?php 
                $jobSlide10 = get_post_meta($post->ID, 'job_slide10', false);
        
                if ($jobSlide10)  {
    
                    foreach ( $jobSlide10 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job10 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?> 
        </div>

        <div class="job11">
            <?php 
                $jobSlide11 = get_post_meta($post->ID, 'job_slide11', false);
        
                if ($jobSlide11)  {
    
                    foreach ( $jobSlide11 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job11 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?>
        </div>

        <div class="job12">
            <?php 
                $jobSlide12 = get_post_meta($post->ID, 'job_slide12', false);
        
                if ($jobSlide12)  {
    
                    foreach ( $jobSlide12 as $gal ) {								        
                
                        $img = pods_image_url( $gal['ID'], '758px');
                        //echo $img;                                    
                
                        if (!empty ($img)) {
                            //echo 'Есть изображение';
                            echo '<img src="' . $img . '">';
                            
                        }

                        else {
                            echo '<style>.job12 {display: none;}</style>';
                        }
                                                    
                    }      

                }                           
                
            ?> 
        </div>
    </div>
</section>

<section class="containerForm">
    <img src="https://2big.ru/wp-content/uploads/2019/12/Contact_form_bg.png" alt="Свяжитесь с нами!">

    <article class="contactFormJob">
        <h2 class="jobsHeading">
            <?php
                $jobResumeHeading = get_post_meta($post->ID, 'job_resume_heading', true);

                if(!empty ($jobResumeHeading)) {
                    echo $jobResumeHeading;
                }

                else {
                    echo 'Заголовок Отправь резюме';
                }
            ?>
        </h2>

        <div class="ok"></div>
        <form id="FormConnectJob" method="POST" enctype="multipart/form-data" action="https://2big.ru/wp-content/themes/oceanwp/mailing-vacancy.php" autocomplete="on">
            <input id="nameFull" size="80" required="required" type="text" name="first_name" placeholder="*Ваше имя">

            <input id="phoneNumber" class="YourphoneNumber" size="50" required="required" type="tel" placeholder="*Телефон" name="phone">

            <input id="emailAddress" size="50" required="required" type="email" placeholder="*Ваш E-mail" name="email">

            <textarea id="message" cols="50" rows="5" maxlength="500" placeholder="Ваши пожелания к будущей работе" name="message"></textarea>
            
            <div class="input__wrapper">
                <input id="file" type="file" placeholder="Добавить файл с резюме" name="file" class="input input__file">
                <label for="file" class="input__file-button">
                    <span class="input__file-icon-wrapper"><img class="input__file-icon" src="https://2big.ru/wp-content/uploads/2019/12/download.svg" alt="Выбрать файл" width="25"></span>
                    <span class="input__file-button-text">Прикрепить файл</span>
                </label>
            </div>


            <script>
                let inputs = document.querySelectorAll('.input__file');
                Array.prototype.forEach.call(inputs, function (input) {
                let label = input.nextElementSibling,
                    labelVal = label.querySelector('.input__file-button-text').innerText;
            
                input.addEventListener('change', function (e) {
                    let countFiles = '';
                    if (this.files && this.files.length >= 1)
                    countFiles = this.files.length;
            
                    if (countFiles)
                    label.querySelector('.input__file-button-text').innerText = 'Выбрано файлов: ' + countFiles;
                    else
                    label.querySelector('.input__file-button-text').innerText = labelVal;
                });
                });
            </script>
            
            <div class="buttonMainForm revealator-slideup revealator-delay2 revealator-duration6 revealator-once"><button class="buttonSend" type="submit">ОТПРАВИТЬ АНКЕТУ                    
            </button></div>
        </form>
        <div class="note"></div>
    </article>     
</section>

    <?php
    }

    wp_reset_postdata(); // Закрытие запроса в БД

    ?>

<?php
} 
?>

<?php get_footer(); ?>