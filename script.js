document.addEventListener("DOMContentLoaded", () => {

    //маска для input tel
    const inputTelephoneList = document.querySelectorAll('input[type="tel"]');
    inputTelephoneList.forEach( (elem)=> {
        elem.addEventListener("input", mask, false);
    })

    // menu active
    const menu = document.querySelector('.header-button__open-menu')
    const burgerMenuContent = document.querySelector('.burger-menu__content')
    const body = document.querySelector('body')
    menu.addEventListener('click', (event) => {
        menu.classList.toggle('burger-menu--active')
        burgerMenuContent.classList.toggle('burger-menu__content--active')
        body.classList.toggle('body-overflow')
    })

    // прилипание бургера при скроле
        // console.log(menu.scrollTop)
    document.addEventListener('scroll', function() {
        if (window.pageYOffset >= 50) {
            menu.classList.add('header-button__open-menu--scroll')
        }
        else {
            menu.classList.remove('header-button__open-menu--scroll')
        }
    })

    // отправка письма 

    const feedbackForm = document.querySelector('.feedback__form')
    feedbackForm.addEventListener('submit', (event) => {
        event.preventDefault()
        const phone = feedbackForm.querySelector('.feedback__input_phone').value
        const mail = feedbackForm.querySelector('.feedback__input_email').value
        const paramsString = {
            phone,
            mail
        }
        const urlParams = new URLSearchParams(paramsString).toString()
        fetch('/hendler/form-hendler.php?' + urlParams)
        .then( () => {
            feedbackForm.querySelector('.feedback__input_phone').value = ''
            feedbackForm.querySelector('.feedback__input_email').value = ''
            // console.log('письмо успешно отправленно')
            showMassageSentModal()
        })
    })

    // письмо отправленно
    const massageSent = document.querySelector('.massage-sent')
    const showMassageSentModal =  () => {
        massageSent.classList.add('massage-sent--active')
        setTimeout( () => {
            massageSent.classList.remove('massage-sent--active')
        }, 5000)
    }

    // slidera
//    window.addEventListener('resize', () => {
        if(document.documentElement.clientWidth > 767) {
        
            var swiper = new Swiper(".services", {
                slidesPerView: 2,
                spaceBetween: 67,
                arrow: true,
                navigation: {
                    nextEl: '.service-nav__next',
                    prevEl: '.service-nav__prev',
                  },
                breakpoints: {
                    // when window width is >= 320px
                    767: {
                      slidesPerView: 2,
                      spaceBetween: 67
                    },
                    1215: {
                        slidesPerView: 3,
                        spaceBetween: 67
                      },
                } 
               

              });
        }

        if(document.documentElement.clientWidth > 767) {
        
            var swiper = new Swiper(".partners-swiper", {
                slidesPerView: 3,
                spaceBetween: 50,
                loop: true,
                autoplay: {
                    delay: 1000,
                },
                breakpoints: {
                    // when window width is >= 320px
                    767: {
                      slidesPerView: 3,
                      spaceBetween: 50
                    },
                    1215: {
                        slidesPerView: 5,
                        spaceBetween: 50
                      },
                } 
              });
        }
    // })
    
   

});



function setCursorPosition(pos, e) {
    e.focus();
    if (e.setSelectionRange) e.setSelectionRange(pos, pos);
    else if (e.createTextRange) {
      var range = e.createTextRange();
      range.collapse(true);
      range.moveEnd("character", pos);
      range.moveStart("character", pos);
      range.select()
    }
}

function mask(e) {
    let matrix = this.placeholder,// .defaultValue
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, "");
    def.length >= val.length && (val = def);
    matrix = matrix.replace(/[_\d]/g, function(a) {
        return val.charAt(i++) || "_"
    });
    this.value = matrix;
    i = matrix.lastIndexOf(val.substr(-1));
    i < matrix.length && matrix != this.placeholder ? i++ : i = matrix.indexOf("_");
    setCursorPosition(i, this)
}
  
    
    
   
