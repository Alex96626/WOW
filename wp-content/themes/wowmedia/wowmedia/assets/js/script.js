document.addEventListener("DOMContentLoaded", () => {

    const buttonMobMenuActive = document.querySelector('.mob-menu__button')
    const navMobile = document.querySelector('.nav-mobile');
    const blurSite = document.querySelector('.blur')
    const mobMenuActive = document.querySelectorAll('.mob-menu--active')
    const mobMenuNoActive = document.querySelectorAll('.mob-menu--no-active')
    
    const buttonMobileMenuClose = document.querySelector('.nav-mobile__button-close')
    buttonMobMenuActive.addEventListener('click', ()=>{
        navMobile.classList.toggle('nav-mobile--active')
        blurSite.classList.toggle('blur--active');
        if(!buttonMobMenuActive.classList.contains('mob-menu__button--open')) {
            mobMenuActive[0].beginElement();
            mobMenuActive[3].beginElement();
            mobMenuActive[4].beginElement();
        } else {
            mobMenuNoActive[0].beginElement();
            mobMenuNoActive[1].beginElement();
            mobMenuNoActive[2].beginElement();
            mobMenuNoActive[3].beginElement();
            mobMenuNoActive[4].beginElement();
            mobMenuNoActive[5].beginElement();
            mobMenuNoActive[6].beginElement();
        }
        buttonMobMenuActive.classList.toggle('mob-menu__button--open')
        
        
        
    })
    // скрытие меню по клику на блюр
    blurSite.addEventListener('click', ()=>{
    if(navMobile.classList.contains('nav-mobile--active')) {
        navMobile.classList.toggle('nav-mobile--active')
        blurSite.classList.toggle('blur--active');
    }
    
    })

    // buttonMobileMenuClose.addEventListener('click', ()=>{
    // navMobile.classList.toggle('nav-mobile--active')
    //     blurSite.classList.toggle('blur--active');
    // })



    const promotionSwiper = new Swiper('.promotion-swiper', {
        // Default parameters
        
        slidesPerView: 1,
        navigation: {
            nextEl: '.pagination__item_next--promotion',
            prevEl: '.pagination__item_prev--promotion',
        },
        // Responsive breakpoints
        breakpoints: {
        375:  {
            slidesPerView: 1,
            spaceBetween:18,
        } ,

        768:  {
            slidesPerView: 1,
            spaceBetween:0,
            // width:500,
        } ,

        920:  {
            slidesPerView: 2,
            spaceBetween:32 ,
        },

        1200:  {
                slidesPerView: 2,
                spaceBetween:71.5 ,
            },
        
        // when window width is >= 1319px
        1320: {
            slidesPerView: 3,
            spaceBetween: 21,

            
        }
        }
    })

    const productionSwiper = new Swiper('.production-swiper', {
        // Default parameters
        
        slidesPerView: 1,
        navigation: {
            nextEl: '.pagination__item_next--production',
            prevEl: '.pagination__item_prev--production',
            },
        // Responsive breakpoints
        breakpoints: {

        500:  {
            slidesPerView: 2,
            spaceBetween:17,
        } ,

        768:  {
            slidesPerView: 3,
            spaceBetween:25,
        } ,

        992:  {
            slidesPerView: 3,
            spaceBetween:69,
        },
        
        // when window width is >= 1319px
        1320: {
            slidesPerView: 4,
            spaceBetween: 21,

           
        }
        }
    })

    // деактивация кнопки при не согласии на обработку персональных данных

    const personalInformation = document.querySelector('#personal_information');
    const formFeedbackButton = document.querySelector('.form-feedback__button');
    personalInformation.addEventListener('change', ()=>{
        if(personalInformation.checked) {
            formFeedbackButton.setAttribute("disabled", "disabled");
            formFeedbackButton.classList.add('form-feedback__button--disable')
        } else {
            formFeedbackButton.removeAttribute("disabled", "disabled");
            formFeedbackButton.classList.remove('form-feedback__button--disable')
        }
    })
})

