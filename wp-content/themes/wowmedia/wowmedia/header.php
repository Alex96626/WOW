<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>WOW media</title>
    <?php  wp_head(  )?>
</head>
<body>
<div class="blur"></div>
<header class="header">
    <div class="container header__container">
        <div class="logo">
            <a href="/" class="logo__link">
                <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 108 108" fill="none">
                    <path d="M108 0H86.9995V54H108V0Z" fill="#EBECEC"/>
                    <path d="M87 0H54V54H87V0Z" fill="#C7D4E0"/>
                    <path d="M108 54H54V108H108V54Z" fill="#5B5B5B"/>
                    <path d="M87.6787 81.6292C87.6787 82.5397 87.5106 83.3913 87.1774 84.1837C86.844 84.9792 86.3574 85.6893 85.7172 86.3169C85.0714 86.9387 84.3342 87.4158 83.5053 87.7548C82.6767 88.0906 81.8154 88.2586 80.9248 88.2586C80.0193 88.2586 79.1523 88.0906 78.3265 87.7548C77.5007 87.4158 76.7751 86.9387 76.1468 86.3169C75.4951 85.6893 75.0023 84.9763 74.6633 84.175C74.3271 83.3764 74.1589 82.5279 74.1589 81.6292C74.1589 80.7249 74.3271 79.8762 74.6633 79.0777C75.0023 78.2822 75.4951 77.5692 76.1468 76.9416C76.7751 76.32 77.5007 75.8427 78.3265 75.5039C79.1523 75.1679 80.0193 75 80.9248 75C81.8214 75 82.6884 75.1679 83.5201 75.5039C84.3518 75.8427 85.0832 76.32 85.7172 76.9416C86.3516 77.5634 86.8353 78.2734 87.1743 79.0747C87.5106 79.8732 87.6787 80.7249 87.6787 81.6292ZM80.919 85.3417C81.8745 85.3417 82.6649 84.9911 83.2901 84.2899C83.9153 83.5856 84.2279 82.6989 84.2279 81.6292C84.2279 80.5717 83.9124 79.6877 83.2782 78.9776C82.6442 78.2705 81.8567 77.9168 80.919 77.9168C79.9632 77.9168 79.1727 78.2704 78.5475 78.9746C77.9223 79.6789 77.6097 80.5656 77.6097 81.6292C77.6097 82.7105 77.9165 83.6004 78.5328 84.2957C79.1493 84.994 79.9456 85.3417 80.919 85.3417Z" fill="#FEFEFE"/>
                    <path d="M98.4553 75.2828L100.045 81.2935C100.119 81.5615 100.19 81.8444 100.251 82.1391C100.316 82.4308 100.381 82.7695 100.452 83.1496C100.538 82.6989 100.611 82.3304 100.67 82.0388C100.732 81.7471 100.791 81.4996 100.847 81.2935L102.334 75.2828H105.817L102.239 87.9227H99.0422L97.4791 82.525C97.4201 82.3365 97.3258 81.9651 97.193 81.4112C97.137 81.1637 97.0898 80.9721 97.0545 80.8337C97.0279 80.9545 96.9866 81.1253 96.9335 81.3435C96.8008 81.9032 96.7006 82.2951 96.6327 82.525L95.0932 87.9227H91.8873L88.3157 75.2828H91.8017L93.2528 81.3258C93.3235 81.638 93.3914 81.9475 93.4562 82.2598C93.524 82.5692 93.586 82.8903 93.642 83.2174C93.6951 82.9757 93.7511 82.7224 93.8101 82.4572C93.8722 82.192 93.9635 81.8149 94.0844 81.3258L95.6741 75.2828H98.4553Z" fill="#FEFEFE"/>
                    <path d="M66.1396 75.2828L67.7293 81.2935C67.803 81.5615 67.874 81.8444 67.9358 82.1391C68.0006 82.4308 68.0654 82.7695 68.1364 83.1496C68.2219 82.6989 68.2956 82.3304 68.3546 82.0388C68.4164 81.7471 68.4754 81.4996 68.5314 81.2935L70.018 75.2828H73.5011L69.9237 87.9227H66.7266L65.1635 82.525C65.1044 82.3365 65.0101 81.9651 64.8773 81.4112C64.8214 81.1637 64.7741 80.9721 64.7388 80.8337C64.712 80.9545 64.6709 81.1253 64.6177 81.3435C64.4851 81.9032 64.3848 82.2951 64.317 82.525L62.7773 87.9227H59.5715L56 75.2828H59.486L60.937 81.3258C61.0078 81.638 61.0756 81.9475 61.1404 82.2598C61.2083 82.5692 61.2704 82.8903 61.3263 83.2174C61.3794 82.9757 61.4354 82.7224 61.4944 82.4572C61.5565 82.192 61.6478 81.8149 61.7686 81.3258L63.3585 75.2828H66.1396Z" fill="#FEFEFE"/>
                    <path d="M99.1051 98.2658H101.897L100.848 94.965C100.817 94.8647 100.771 94.7039 100.716 94.4803C100.658 94.2566 100.586 93.9697 100.497 93.6201C100.437 93.8649 100.377 94.1003 100.317 94.3241C100.26 94.5455 100.2 94.76 100.14 94.965L99.1051 98.2658ZM95.1707 102L98.7257 92H102.243L105.8 102H103.008L102.487 100.21H98.5L97.9646 102H95.1707Z" fill="#FEFEFE"/>
                    <path d="M80.1763 102V92H82.3223C83.921 92 85.0518 92.0724 85.7143 92.2192C86.3792 92.3637 86.9602 92.6085 87.4618 92.9487C88.115 93.3917 88.6095 93.9581 88.9455 94.6458C89.284 95.3357 89.4521 96.1235 89.4521 97.0071C89.4521 97.8904 89.284 98.676 88.9455 99.3659C88.6095 100.056 88.115 100.622 87.4618 101.065C86.9651 101.401 86.3985 101.641 85.7598 101.785C85.1238 101.928 84.1347 102 82.7954 102H82.3223H80.1763ZM82.956 99.7622H83.4265C84.5284 99.7622 85.335 99.5432 85.8415 99.1027C86.3481 98.6643 86.6002 97.9674 86.6002 97.0092C86.6002 96.0538 86.3481 95.3544 85.8415 94.9068C85.335 94.4616 84.5284 94.2379 83.4265 94.2379H82.956V99.7622Z" fill="#FEFEFE"/>
                    <path d="M91.2837 102V92H94.121V102H91.2837Z" fill="#FEFEFE"/>
                    <path d="M72.012 102V92H78.3206V94.1958H74.7486V95.9301H78.1166V98.0699H74.7486V99.7622H78.3206V102H72.012Z" fill="#FEFEFE"/>
                    <path d="M70.5022 102H67.8786L67.2759 97.676C67.2327 97.3705 67.1944 97.0326 67.1584 96.6574C67.1249 96.2844 67.0911 95.8765 67.0648 95.436C66.9975 95.8601 66.8703 96.387 66.6781 97.0209C66.6351 97.1516 66.6038 97.2494 66.5845 97.3147L65.1875 102H63.315L61.9181 97.3147C61.8987 97.2494 61.87 97.1516 61.8315 97.0209C61.6348 96.387 61.5074 95.8626 61.4451 95.4429C61.4186 95.8205 61.385 96.1959 61.3465 96.5665C61.3106 96.937 61.2649 97.3076 61.2146 97.676L60.6097 102H58.0002L59.5894 92H62.3667L63.92 97.1562C63.9296 97.1934 63.9488 97.2518 63.9776 97.3356C64.1216 97.7949 64.2129 98.1887 64.2512 98.5175C64.2705 98.338 64.304 98.1421 64.3568 97.9253C64.4073 97.7086 64.4794 97.4476 64.5682 97.1422L66.1357 92H68.9204L70.5022 102Z" fill="#FEFEFE"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M54 54V108L26.9961 80.999L54 54Z" fill="#D10373"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 54V108L27.004 80.999L0 54Z" fill="#78263E"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 108H54L26.999 81L0 108Z" fill="#451C1C"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M87.0148 47C75.5 47 66 37.9093 66 26.5856C66 15.2619 75.5 6.00003 87 6.00003L87.0148 47Z" fill="#2905A1"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M107 26.4937C107 37.8022 98.3222 46.9841 87.0148 47L87 6.00003C98.3218 6.00003 107 15.1754 107 26.4937ZM68.9382 16.1343C67.0791 19.174 66 22.7144 66 26.4937C66 26.509 66 26.5242 66.0001 26.5395C66.0087 22.7485 67.082 19.1899 68.9382 16.1343ZM85.5838 46.953C86.0477 46.9842 86.515 47 86.9852 47C86.9919 47 86.9986 47 87.0053 47C86.5278 46.9998 86.0538 46.984 85.5838 46.953Z" fill="#006EC7"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M54 0V54L27 27.0048L54 0Z" fill="#FCE864"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V54L27 27.0126L0 0Z" fill="#FFE817"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 54H54L26.999 27L0 54Z" fill="#F7D117"/>
                </svg>
            </a>
        </div>
        <div class="wrapper header__wrapper">
            <div class="header__info">
                <ul class="header__info_left">
                    <li class="header__info_item header__info_item-telephone"><a href="tel:+7 (978) 999-00-29">+7 (918) 999-00-29</a></li>
                    <li class="header__info_item">Офис: г. Симферополь, ул. Чехова 2    </li>
                    <li class="header__info_item"> Понедельник - Пятница 9:00 - 18:00  </li> 
                </ul>
                <!-- <div class="header__info_right">
                    <button class="button basket"></button>
                    <button class="button registration">Вход /Регистрация</button>
                </div> -->

            </div>
            <nav class="nav header__nav">
                <ul class="nav__list">
                    <li class="nav__item"> <a href="">полиграфия</a>  </li>
                    <li class="nav__item nav__item--active"> <a href="">широкоформатная печать</a></li>
                    <li class="nav__item"> <a href="our-services">НАШИ УСЛУГИ</a> </li>
                    <li class="nav__item"> <a href="">о компании</a></li>
                    <li class="nav__item"><a href="contacts">КОНТАКТНЫЕ ДАННЫЕ</a></li>
                </ul>
                
            </nav>
        </div>
        <div class="wrapper header__wrapper header__wrapper-mobile">
            <div class="nav__item nav__item-mobile">
                <button class="button mob-menu__button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect width="24" height="3" fill="#5B5B5B">  
                        <animateTransform id="top_an" class="mob-menu--active" attributeName="transform" begin="indefinite" dur="0.3s" type="translate" from="0 0" to="0 11" fill="freeze" additive="sum" repeatCount="1"/>
                        <animateTransform class="mob-menu--active" attributeName="transform" begin="top_an.end" dur="0.6s" type="rotate" from="0" to="45" fill="freeze"  repeatCount="1"/>
                        <animateTransform class="mob-menu--active" attributeName="transform" begin="top_an.end" dur="0.6s" type="translate" from="0 11" to="5 -2" fill="freeze" additive="sum" repeatCount="1"/>
                        <animate attributeName='fill' values='#D10373' begin="top_an.end" dur='0.6s' fill='freeze'/> 
                        <!-- обратная анимация -->
                        <animateTransform id="top_an-end" class="mob-menu--no-active" attributeName="transform" begin="indefinite" dur="0.6s" type="rotate" from="0" to="-45" fill="freeze" additive="sum"  repeatCount="1"/>  
                        <animateTransform class="mob-menu--no-active" attributeName="transform" begin="indefinite" dur="0.6s" type="translate" from="0 0" to="-5 -1.5" fill="freeze" additive="sum"  repeatCount="1"/>
                        <animate class="mob-menu--no-active" attributeName='fill' values='#5B5B5B' begin="indefinite" dur='0.6s' fill='freeze'/>  
                    </rect>
                    <rect y="11" width="24" height="3" fill="#5B5B5B"> 
                         <animate class="mob-menu--active" attributeName="opacity" from="1" to="0" begin="indefinite" dur="0.3s" fill="freeze" repeatCount="1" />
                         <!-- обратная анимация -->
                         <animate class="mob-menu--no-active" attributeName="opacity" from="0" to="1" begin="indefinite" dur="0.3s" fill="freeze" repeatCount="1" />
                    </rect>
                    <rect y="21" width="24" height="3" fill="#5B5B5B"> 
                        <animateTransform id="bottom_an"  class="mob-menu--active" attributeName="transform" begin="indefinite" dur="0.3s" type="translate" from="0 0" to="0 -10" fill="freeze" additive="sum" repeatCount="1"/>
                        <animateTransform class="mob-menu--active" attributeName="transform" begin="bottom_an.end" dur="0.6s" type="rotate" from="0" to="-45" fill="freeze"  repeatCount="1"/>
                        <animateTransform class="mob-menu--active" attributeName="transform" begin="bottom_an.end" dur="0.6s" type="translate" from="0 -10" to="-12 -5" fill="freeze" additive="sum" repeatCount="1"/>
                        <animate attributeName='fill' values='#D10373' begin="bottom_an.end" dur='0.6s' fill='freeze'/> 
                        <!-- обратная анимация -->
                        <animateTransform id="bottom_an-end" class="mob-menu--no-active" attributeName="transform" begin="indefinite" dur="0.6s" type="rotate" from="0" to="45" fill="freeze" additive="sum"  repeatCount="1"/>  
                        <animateTransform class="mob-menu--no-active" attributeName="transform" begin="indefinite" dur="0.6s" type="translate" from="0 0" to="12 -5" fill="freeze" additive="sum"  repeatCount="1"/>
                        <animate class="mob-menu--no-active" attributeName='fill' values='#5B5B5B' begin="indefinite" dur='0.6s' fill='freeze'/> 
                        
                    </rect>
                </svg>
                </button>
            </div>
            <nav class="nav header__nav header__nav-mobile">
                <a  class="nav__item nav__item-mobile" href="tel:+7 (918) 999-00-29">+7 (918) 999-00-29</a>
            </nav>

        </div>
        <div class="nav-mobile">
            <ul class="nav-mobile__list">
                <li class="nav-mobile__item"><a href="" class="nav-mobile__link">ПОЛИГРАФИЯ </a></li>
                <li class="nav-mobile__item"><a href="" class="nav-mobile__link">Широкоформатная печать</a></li>
                <li class="nav-mobile__item"><a href="" class="nav-mobile__link">НАШИ УСЛУГИ </a></li>
                <li class="nav-mobile__item"><a href="" class="nav-mobile__link">О КОМПАНИИ </a></li>
                <li class="nav-mobile__item"><a href="" class="nav-mobile__link">КОНТАКТНЫЕ ДАННЫЕ</a></li>
            </ul>
            <!-- <button class="button nav-mobile__button-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="33" viewBox="0 0 21 21" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 2.1L18.9 0L10.5 8.4L2.1 0L0 2.1L8.4 10.5L0 18.9L2.1 21L10.5 12.6L18.9 21L21 18.9L12.6 10.5L21 2.1Z" fill="#D10373"/>
                </svg>
            </button> -->
        </div>
    </div>
    

</header>
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__list">
            <p class="breadcrumbs__text">Главная</p>
            <p class="breadcrumbs__text">Контактные данные</p>
        </div>
    </div>
</div>