// document.addEventListener("DOMContentLoaded", () => {
//    const inputTelephoneList = document.querySelectorAll('input[type="tel"]')

//    inputTelephoneList.forEach((e) => {
//         console.log(e)
//         e.maxLength = 18
//         e.value = '+7 (___) ___ __ __'
//         // добавялем + в начало номера
//         // e.addEventListener('focus', () => {
//         //     if(e.value.length  === 0){
//         //         e.value+='+'
//         //     } 
//         // })
//         inputValueList = e.value.split('').filter((e)=> {return e !== ' '})
//         console.log(inputValueList)
//         e.addEventListener('input', (elem) => {
//             console.log(e.target)   
//         })

//         // e.addEventListener('input', () => {
//         //     switch(e.value.length) {
//         //         case 2: 
//         //             e.value +='(';
//         //             break;
//         //         case 6:
//         //             e.value +=')';
//         //             break;
//         //         case 10:
//         //             e.value +='_';
//         //             break;
//         //         case 13:
//         //             e.value +='_';
//         //             break;
//         //     }
//         // })
//     })
// });