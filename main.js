jQuery(function($) {
    $('.headerBurger').click(function(e) {
    e.preventDefault(); 
    
    $('.mainMobileMenu').addClass('mainMobileMenu_open');
    });

    /*$('.worksMenuButton').click(function(e) {
      e.preventDefault(); 
      
      
      $('.worksMenu').addClass('worksMenu_open');
      $('.worksMenuButton').addClass('mainMenuItems_active');

        setTimeout(function() {         
          $('.worksMenu').removeClass('worksMenu_open');       
          $('.worksMenuButton').removeClass('mainMenuItems_active');               
        },4000);

        $('.worksMenuButton').click(function(e) {
          e.preventDefault(); 
          
          $('.worksMenu').addClass('worksMenu_open');
          $('.worksMenuButton').addClass('mainMenuItems_active');
        });
        
        $('.worksItems li a').click(function(e) {
            
          $('.worksMenu').removeClass('worksMenu_open');
          $('.worksMenuButton').removeClass('mainMenuItems_active');
        });
    });*/
  
    $('.headerNavClose').click(function(e) {
    e.preventDefault(); 
      
    $('.mainMobileMenu').removeClass('mainMobileMenu_open');
    });
  
    $('.mainMobileMenuItems a').click(function(e) {
            
    $('.mainMobileMenu').removeClass('mainMobileMenu_open');
    });

    
  
  });


/*----Бургер в футере-----*/

jQuery(function($) {
  $('.footer_burger').click(function(e) {
  e.preventDefault(); 
  
  $('.footerMenuBurger').addClass('footerMenuBurger_open');
  });

  $('.footerNavClose').click(function(e) {
  e.preventDefault(); 
    
  $('.footerMenuBurger').removeClass('footerMenuBurger_open');
  });

  $('.footerMenuBurgerItems a').click(function(e) {
          
  $('.footerMenuBurger').removeClass('footerMenuBurger_open');
  });

  

});




/*----Выпадающее меню услуги-----*/

jQuery(function($) {
    /*---Начинаем цикл - при нажатии на кнопку:---*/
    $('.worksMenuButton').click(function(e) {
    e.preventDefault(); 
    
    /*--Будет открываться меню и кнопка станет активной--*/
    $('.worksMenu').addClass('worksMenu_open');
    $('.worksMenuButton').addClass('mainMenuItems_active');

    /*---Внутри этого цикла меню будет сбрасываться через 4с,
          если не наступило другое событие--*/
      setTimeout(function() {         
        $('.worksMenu').removeClass('worksMenu_open');       
        $('.worksMenuButton').removeClass('mainMenuItems_active');               
      },10000);

      /*--После того, как меню сбросилось, и кнопка стала снова
       не активной, возвращаем все в изначальное состояние - 
       чтобы при клике открывалось меню---*/
      
      $('.worksMenuButton').click(function(e) {
        e.preventDefault(); 
        
        $('.worksMenu').addClass('worksMenu_open');
        $('.worksMenuButton').addClass('mainMenuItems_active');
      }); 
      /*---Этим заканчиваем цикл, если меню сбрасывается---*/   
    
      /*--Другой цикл - если в открытом меню нажимаем один из пунктов,
      то проваливаемся по указанной ссылке и меню сбрасывается
      при клике---*/  
      $('.worksItems li a').click(function(e) {
            
        $('.worksMenu').removeClass('worksMenu_open');
        $('.worksMenuButton').removeClass('mainMenuItems_active');
      });
    
    });   
     

    
  });


/*----Выпадающее меню услуги Футер Footer-----*/

jQuery(function($) {
    /*---Начинаем цикл - при нажатии на кнопку:---*/
    $('#worksFooterButton').click(function(e) {
    e.preventDefault(); 
    
    /*--Будет открываться меню и кнопка станет активной--*/
    $('.MainMainFooter').addClass('MainMainFooter_open');
    $('#worksFooterButton').addClass('mainFooterMenuItems_active');

    /*---Внутри этого цикла меню будет сбрасываться через 4с,
          если не наступило другое событие--*/
      setTimeout(function() {         
        $('.MainMainFooter').removeClass('MainMainFooter_open');       
        $('#worksFooterButton').removeClass('mainFooterMenuItems_active');               
      },4000);

      /*--После того, как меню сбросилось, и кнопка стала снова
      не активной, возвращаем все в изначальное состояние - 
      чтобы при клике открывалось меню---*/
      
      $('#worksFooterButton').click(function(e) {
        e.preventDefault(); 
        
        $('.MainMainFooter').addClass('MainMainFooter_open');
        $('#worksFooterButton').addClass('mainFooterMenuItems_active');
      }); 
      /*---Этим заканчиваем цикл, если меню сбрасывается---*/   
    
      /*--Другой цикл - если в открытом меню нажимаем один из пунктов,
      то проваливаемся по указанной ссылке и меню сбрасывается
      при клике---*/  
      $('.worksFooterItems li a').click(function(e) {
            
        $('.MainMainFooter').removeClass('MainMainFooter_open');
        $('#worksFooterButton').removeClass('mainFooterMenuItems_active');
      });
    
    });   
    

    
  });



/*----Попап речь основателя-----*/

jQuery(function($) {
  $('.readMoreSend').click(function(e) {
  e.preventDefault(); 
  
  $('.directorSpeach2').addClass('directorSpeach2_open');
  });

  $('.readMoreClose').click(function(e) {
  e.preventDefault(); 
    
  $('.directorSpeach2').removeClass('directorSpeach2_open');
  });

  
});

/*---Слайдер Отзывы-----*/

jQuery(function($) {
  $('.reviewSlider').slick({ 
    infinite: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: '<button class="slick-prevDark" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-nextDark" aria-label="Next" type="button">Next</button>',
    dotsClass: 'slick-dotsCircle',
    responsive: [
      {
        breakpoint: 850,
        settings: {
          arrows: false,       
        }
      }
    ]
  });
});

jQuery(function($) {
  $('.ourTeamSlider').slick({ 
    infinite: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: '<button class="slick-prevDark" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-nextDark" aria-label="Next" type="button">Next</button>',
    dotsClass: 'slick-dotsCircle',
  }); 
  
});

/*---Слайдер Наша команда Our Team на главной-----*/

jQuery(function($) {
  $('.mainOurTeamSlider').slick({ 
    infinite: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: '<button class="slick-prevDark" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-nextDark" aria-label="Next" type="button">Next</button>',
    dotsClass: 'slick-dotsCircle',
    /*responsive: [
      {
        breakpoint: 995,
        settings: {
          .slick-prevDark: slick-prevDark {
            top: 33%;
            left: 20px;
          }         
        }
      }
    ]*/
  });

});

/*---Слайдер Миссия и ценности-----*/

jQuery(function($) {
  $('.aboutSlider').slick({ 
    infinite: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    initialSlide: 0,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    adaptiveHeight: false,
    prevArrow: '<button class="slick-prev-double" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-next-double" aria-label="Next" type="button">Next</button>',
    dotsClass: 'slick-dotsCircle',
  });   
  
});

/*---Слайдер Вакаснии-----*/

jQuery(function($) {
  $('.jobslider').slick({ 
    initialSlide: 0,    
    infinite: true,
    dots: false,
    slidesToShow: 2,   
    autoplay: false,
    autoplaySpeed: 5000,
    arrows: true,
    prevArrow: '<button class="slick-prevDark" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-nextDark" aria-label="Next" type="button">Next</button>', 
    responsive: [
      {
        breakpoint: 805,
        settings: {          
          slidesToShow: 1
        }            
      },

      {
        breakpoint: 500,
        settings: {          
          slidesToShow: 1
        }            
      }
    ]   
  });   
  
});


/*----Слайдер на странице Наружная реклама----*/

jQuery(function($) {
  $('.outdoorSlider').slick({ 
    infinite: true,
	  dots: true,
	  slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: '<button class="slick-prevDark" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-nextDark" aria-label="Next" type="button">Next</button>',
    dotsClass: 'slick-dotsCircle bottom_130',
  }); 

  $('.slide_link').click(function() {
    
    let slideNum = $(this).attr('data-slide');
    let portfolioOffsetTop = $('#portfolio').offset().top;

    $('html, body').stop().animate({
      scrollTop: portfolioOffsetTop
    }, 800); 

    $('.outdoorSlider').slick('slickGoTo', slideNum);

    return false;
  });
  
});


/*----Слайдер на странице Продакшн----*/

jQuery(function($) {
  $('.productionSlider').slick({ 
    infinite: true,
	  dots: true,
	  slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: '<button class="slick-prevDark" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-nextDark" aria-label="Next" type="button">Next</button>',
    dotsClass: 'slick-dotsCircle bottom_90',
  }); 

  $('.slide_link').click(function() {
    
    let slideNum = $(this).attr('data-slide');
    let portfolioOffsetTop = $('#portfolio').offset().top;

    $('html, body').stop().animate({
      scrollTop: portfolioOffsetTop
    }, 800); 

    $('.productionSlider').slick('slickGoTo', slideNum);

    return false;
  });
  
});



/*----Слайдер на странице GIFTS----*/

jQuery(function($) {
  $('.giftsSlider').slick({ 
    infinite: true,
	  dots: true,
	  slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: '<button class="slick-prevDark" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-nextDark" aria-label="Next" type="button">Next</button>',
    dotsClass: 'slick-dotsCircle bottom_90',
  }); 

  $('.slide_link').click(function() {
    
    let slideNum = $(this).attr('data-slide');
    let portfolioOffsetTop = $('#portfolio').offset().top;

    $('html, body').stop().animate({
      scrollTop: portfolioOffsetTop
    }, 800); 

    $('.giftsSlider').slick('slickGoTo', slideNum);

    return false;
  });
  
});


/*----Слайдер на странице WI_FI----*/

jQuery(function($) {
  $('.KeisSlider').slick({ 
    infinite: true,
	  dots: true,
	  slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    adaptiveHeight: false,
    prevArrow: '<button class="slick-prevDark upArrow" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-nextDark upArrow" aria-label="Next" type="button">Next</button>',
    dotsClass: 'slick-dotsCircle',
  });   
  
});


/*-----Контактная форма на главной--------*/

jQuery(document).ready(function($) {	
	$('#FormConnect').submit(function() {
		var formData = new FormData();		
		var userName = $('#FormConnect input[name="first_name"]').val();
    var userPhone = $('#FormConnect input[name="phone"]').val();
    var email = $('#FormConnect input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля 
		
    formData.append('first_name', userName);
    formData.append('phone', userPhone);
    formData.append('message', $('#FormConnect textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "https://2big.ru/wp-content/themes/oceanwp/mailing.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, //указываем что отправляем		
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.note').html(result);
  
      $("#FormConnect").find('input, textarea').each(function() {
      $(this).val('');
      });   
      
      setTimeout(function() {
      $('.contactForm .note').hide();
      }, 3000);               
      
    }

    
    });	 
    
    return false;    

	});
});



jQuery(function($) {
  $(".YourphoneNumber").mask("+7 (999) 999-9999");
  $("#phone2").mask("+7 (999) 999-9999");
});


/*-----Контактная форма на странице О нас--------*/

jQuery(document).ready(function($) {	
	$('#FormConnectAbout').submit(function() {
		var formData = new FormData();		
		var userName = $('#FormConnectAbout input[name="first_name"]').val();
    var userPhone = $('#FormConnectAbout input[name="phone"]').val();
    var email = $('#FormConnectAbout input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля 
		
    formData.append('first_name', userName);
    formData.append('phone', userPhone);
    formData.append('message', $('#FormConnectAbout textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "https://2big.ru/wp-content/themes/oceanwp/mailing-about.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, //указываем что отправляем		
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.note').html(result);
  
      $("#FormConnectAbout").find('input, textarea').each(function() {
      $(this).val('');
      });   
      
      setTimeout(function() {
      $('.contactFormAbout .note').hide();
      }, 3000);               
      
    }

    
    });	 
    
    return false;    

	});
});


/*-----Контактная форма Вакансии с файлом------*/

jQuery(document).ready(function($) {	
	$('#FormConnectJob').submit(function() {
		var formData = new FormData();
		var file = $('#file');
		var userName = $('#FormConnectJob input[name="first_name"]').val();
    var userPhone = $('#FormConnectJob input[name="phone"]').val();
    var emailInput = $('#FormConnectJob input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля и файл, если есть
		if (file.val()!=='') {

			jQuery.each(file[0].files, function(i, file) {
				formData.append('file', file);
			}); 
			
			}
			formData.append('first_name', userName);
			formData.append('phone', userPhone);
      formData.append('message', $('#FormConnectJob textarea').val());
      formData.append('email', emailInput);

			console.log(formData);		  

			$.ajax({
			url: "https://2big.ru/wp-content/themes/oceanwp/mailing-vacancy.php",
			type: "POST",
			dataType : "json", 
			cache: false,
			contentType: false,
			processData: false,  
			data: formData, //указываем что отправляем		
      success: function(msg) {
        if(msg == 'Message has been sent') {
        result = '<div class="ok"><h3>Спасибо за Ваше резюме!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
        
        
        }
        
        
        else {result = msg;}
        $('.note').html(result);
    
        $("#FormConnectJob").find('input, textarea').each(function() {
        $(this).val('');
        });   
        
        setTimeout(function() {
        $('.contactFormJob .note').hide();
        }, 3000);               
        
			}
		});
	
		
		return false;

	});
});


/*-----Контактная форма Одна Вакансия Single с файлом------*/

jQuery(document).ready(function($) {	
	$('#FormConnectVacant').submit(function() {
		var formData = new FormData();
		var file = $('#file');
		var userName = $('#FormConnectVacant input[name="first_name"]').val();
    var userPhone = $('#FormConnectVacant input[name="phone"]').val();
    var vacancyOne = $('#FormConnectVacant select[name="vacancyOne"]').val();
    var emailInput = $('#FormConnectVacant input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля и файл, если есть
		if (file.val()!=='') {

			jQuery.each(file[0].files, function(i, file) {
				formData.append('file', file);
			}); 
			
			}
			formData.append('first_name', userName);
      formData.append('phone', userPhone);
      formData.append('vacancyOne', vacancyOne);
      formData.append('email', emailInput);
			/*formData.append('vacancyOne', $('#FormConnectVacant select').val());*/

			console.log(formData);		  

			$.ajax({
			url: "https://2big.ru/wp-content/themes/oceanwp/mailing-vacant.php",
			type: "POST",
			dataType : "json", 
			cache: false,
			contentType: false,
			processData: false,  
			data: formData, //указываем что отправляем		
      success: function(msg) {
        if(msg == 'Message has been sent') {
        result = '<div class="ok"><h3>Спасибо за Ваше резюме!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
        
        
        }
        
        
        else {result = msg;}
        $('.note').html(result);
    
        $("#FormConnectVacant").find('input, select').each(function() {
        $(this).val('');
        });   
        
        setTimeout(function() {
        $('.contactFormVacant .note').hide();
        }, 3000);               
        
			}
		});
	
		
		return false;

	});
});

/*-----Контактная форма на странице GIFTS--------*/


jQuery(document).ready(function($) {	
	$('#FormGiftsConnect').submit(function() {
		var formData = new FormData();		
		var userName = $('#FormGiftsConnect input[name="first_name"]').val();
    var userPhone = $('#FormGiftsConnect input[name="phone"]').val();
    var email = $('#FormGiftsConnect input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля 
		
    formData.append('first_name', userName);
    formData.append('phone', userPhone);
    formData.append('message', $('#FormGiftsConnect textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "https://2big.ru/wp-content/themes/oceanwp/mailing_gifts.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, //указываем что отправляем		
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.note').html(result);
  
      $("#FormGiftsConnect").find('input, textarea').each(function() {
      $(this).val('');
      });   
      
      setTimeout(function() {
      $('.rightgifts .note').hide();
      }, 3000);               
      
    }

    
    });	 
    
    return false;    

	});
});


/*-----Контактная форма на странице Productrion--------*/

jQuery(document).ready(function($) {	
	$('#FormProductionConnect').submit(function() {
		var formData = new FormData();		
		var userName = $('#FormProductionConnect input[name="first_name"]').val();
    var userPhone = $('#FormProductionConnect input[name="phone"]').val();
    var email = $('#FormProductionConnect input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля 
		
    formData.append('first_name', userName);
    formData.append('phone', userPhone);
    formData.append('message', $('#FormProductionConnect textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "https://2big.ru/wp-content/themes/oceanwp/mailing-production.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, //указываем что отправляем		
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.note').html(result);
  
      $("#FormProductionConnect").find('input, textarea').each(function() {
      $(this).val('');
      });   
      
      setTimeout(function() {
      $('.rightProduction .note').hide();
      }, 3000);               
      
    }

    
    });	 
    
    return false;    

	});
});



/*---Контактная форма в попапе заказать нестандартное размещение---*/

jQuery(document).ready(function($) {	
	$('#FormPopupConnect').submit(function() {
		var formData = new FormData();		
		var userName = $('#FormPopupConnect input[name="first_name"]').val();
    var userPhone = $('#FormPopupConnect input[name="phone"]').val();
    var email = $('#FormPopupConnect input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля 
		
    formData.append('first_name', userName);
    formData.append('phone', userPhone);
    formData.append('message', $('#FormPopupConnect textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "https://2big.ru/wp-content/themes/oceanwp/mailing1.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, //указываем что отправляем		
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.noteConnect .note').html(result);
      $('.noteConnect .note').show();

      $("#FormPopupConnect").find('input, textarea').each(function() {
        $(this).val('');
      });   
      
      setTimeout(function() {
        $('.ContactFormPopup .note').hide();
        $('.ContactFormPopup').removeClass('ContactFormPopup_open');
      }, 3000);              
      
    }

    
    });	 
    
    return false;    

	});
});

/*---Логика всплывашки---*/

jQuery(function($) {
  $('.buttonFormSend').click(function(e) {
  e.preventDefault();  
  
  $('.ContactFormPopup').addClass('ContactFormPopup_open');
  });

  $('.ContactFormClose').click(function(e) {
  e.preventDefault(); 
    
  $('.ContactFormPopup').removeClass('ContactFormPopup_open');
  });
 
});


/*---Контактная форма в попапе заказать WI-FI---*/

jQuery(document).ready(function($) {	
	$('#FormPopupWIFIConnect').submit(function() {
		var formData = new FormData();		
		var userName = $('#FormPopupWIFIConnect input[name="first_name"]').val();
    var userPhone = $('#FormPopupWIFIConnect input[name="phone"]').val();
    var email = $('#FormPopupWIFIConnect input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля 
		
    formData.append('first_name', userName);
    formData.append('phone', userPhone);
    formData.append('message', $('#FormPopupWIFIConnect textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "https://2big.ru/wp-content/themes/oceanwp/mailing-wifi.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, //указываем что отправляем		
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.noteConnect .note').html(result);
      $('.noteConnect .note').show();

      $("#FormPopupWIFIConnect").find('input, textarea').each(function() {
        $(this).val('');
      });   
      
      setTimeout(function() {
        $('.WiFiFormPopup .note').hide();
        $('.WiFiFormPopup').removeClass('WiFiFormPopup_open');
      }, 3000);           
      
    }

    
    });	 
    
    return false;    

	});
});


/*---Логика всплывашки---*/

jQuery(function($) {
  $('.buttonWiFiSend').click(function(e) {
  e.preventDefault();  
  
  $('.WiFiFormPopup').addClass('WiFiFormPopup_open');
  });

  $('.ContactFormClose').click(function(e) {
  e.preventDefault(); 
    
  $('.WiFiFormPopup').removeClass('WiFiFormPopup_open');
  });
 
});


/*---Контактная форма в попапе Контакты---*/

jQuery(document).ready(function($) {	
	$('#FormPopupContactsConnect').submit(function() {
		var formData = new FormData();		
		var userName = $('#FormPopupContactsConnect input[name="first_name"]').val();
    var userPhone = $('#FormPopupContactsConnect input[name="phone"]').val();
    var email = $('#FormPopupContactsConnect input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля 
		
    formData.append('first_name', userName);
    formData.append('phone', userPhone);
    formData.append('message', $('#FormPopupContactsConnect textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "https://2big.ru/wp-content/themes/oceanwp/mailing-contacts.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, //указываем что отправляем		
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.noteConnect .note').html(result);
      $('.noteConnect .note').show();

      $("#FormPopupContactsConnect").find('input, textarea').each(function() {
        $(this).val('');
      });   
      
      setTimeout(function() {
        $('.ContactsFormPopup .note').hide();
        $('.ContactsFormPopup').removeClass('ContactsFormPopup_open');
      }, 3000);         
      
    }

    
    });	 
    
    return false;    

	});
});


/*---Логика всплывашки---*/

jQuery(function($) {
  $('.buttonContactSend').click(function(e) {
  e.preventDefault();  
  
  $('.ContactsFormPopup').addClass('ContactsFormPopup_open');
  });

  $('.ContactFormClose').click(function(e) {
  e.preventDefault(); 
    
  $('.ContactsFormPopup').removeClass('ContactsFormPopup_open');
  });
 
});


/*---Контактная форма в попапе заказать BUYING---*/

jQuery(document).ready(function($) {	
	$('#FormPopupBuyingConnect').submit(function() {
		var formData = new FormData();		
		var userName = $('#FormPopupBuyingConnect input[name="first_name"]').val();
    var userPhone = $('#FormPopupBuyingConnect input[name="phone"]').val();
    var email = $('#FormPopupBuyingConnect input[name="email"]').val();
		
		//не забываем проверить поля на заполнение

		
		//присоединяем поля 
		
    formData.append('first_name', userName);
    formData.append('phone', userPhone);
    formData.append('message', $('#FormPopupBuyingConnect textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "https://2big.ru/wp-content/themes/oceanwp/mailing-byuing.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, //указываем что отправляем		
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.noteConnect .note').html(result);
      $('.noteConnect .note').show();

      $("#FormPopupBuyingConnect").find('input, textarea').each(function() {
        $(this).val('');
      });   
      
      setTimeout(function() {
        $('.BuyingFormPopup .note').hide();
        $('.BuyingFormPopup').removeClass('BuyingFormPopup_open');
      }, 3000);        
      
    }

    
    });	 
    
    return false;    

	});
});


/*---Логика всплывашки---*/

jQuery(function($) {
  $('.buttonBuyingSend').click(function(e) {
  e.preventDefault();  
  
  $('.BuyingFormPopup').addClass('BuyingFormPopup_open');
  });

  $('.ContactFormClose').click(function(e) {
  e.preventDefault(); 
    
  $('.BuyingFormPopup').removeClass('BuyingFormPopup_open');
  });
 
});

jQuery(function($) {
  $('[data-fancybox]').fancybox({
    protect: true
  });

});


/*--------Слайдер Наши партнеры----------*/

jQuery(function($) {
  $('.sliderPartners').slick({ 
    infinite: true,
	  dots: false,
	  slidesToShow: 8,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 900,    
    arrows: true,
    prevArrow: '<button class="slick-prevDark" aria-label="Previous" type="button">Previous</button>',
    nextArrow: '<button class="slick-nextDark" aria-label="Next" type="button">Next</button>',
    responsive: [
	    {
	      breakpoint: 1150,
	      settings: {
	        slidesToShow: 6,
	      }
      },

      {
	      breakpoint: 992,
	      settings: {
	        arrows: false,
	      }
      }, 
      
      {
	      breakpoint: 900,
	      settings: {
          slidesToShow: 5,
          arrows: false,
	      }
      },

      {
	      breakpoint: 770,
	      settings: {
          slidesToShow: 4,
          arrows: false,
	      }
      },
      
	    {
	      breakpoint: 660,
	      settings: {
          slidesToShow: 2,
          arrows: false,
	      }
      },
      
      {
	      breakpoint: 505,
	      settings: {
          slidesToShow: 1,
          arrows: false,
	      }
	    },
    ]
  }); 
 
  
});


