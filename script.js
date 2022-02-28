document.addEventListener("DOMContentLoaded", () => {
   const inputTelephoneList = document.querySelectorAll('input[type="tel"]')

   inputTelephoneList.forEach((e) => {
        console.log(e)
        e.maxLength = 16
        // добавялем + в начало номера
        e.addEventListener('focus', () => {
            if(e.value.length  === 0){
                e.value+='+'
            } 
        })

        e.addEventListener('input', () => {
            switch(e.value.length) {
                case 2: 
                    e.value +='(';
                    break;
                case 6:
                    e.value +=')';
                    break;
                case 10:
                    e.value +='_';
                    break;
                case 13:
                    e.value +='_';
                    break;
            }
        })
    })
});