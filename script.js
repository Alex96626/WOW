document.addEventListener("DOMContentLoaded", () => {
    //маска для input tel
    const inputTelephoneList = document.querySelectorAll('input[type="tel"]');
    inputTelephoneList.forEach( (elem)=> {
        elem.addEventListener("input", mask, false);
    })

    // menu active
    const menu = document.querySelector('.header-button__open-menu')
    const blur = document.querySelector('.blur')
    menu.addEventListener('click', (event) => {
        menu.classList.toggle('burger-menu--active')
        blur.classList.toggle('blur--active')
    })

    // slider

    const swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },
        loop:true,
        slidesPerView: 1,
        
        breakpoints: {
            // when window width is >= 375px
            375: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            // when window width is >= 1110px
            1250: {
              slidesPerView: 3,
              spaceBetween: 22
            },
        }
        
    });
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
  
    
    
   
