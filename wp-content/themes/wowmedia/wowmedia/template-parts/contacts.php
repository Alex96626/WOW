
<!-- Template name: Contacts -->


<?php  get_header(); ?>

<main>
    <section class="contact">
        <div class="container">
            <h1 class="title main-title">Контактные данные</h1>
            <div class="contact__content">
                <ul class="contact__list">
                    <li class="contact__item"> <span class="contact__item_title">Адрес:</span>  <span class="contact__text">295001,  Россия,  Р-ка Крым,  г. Симферополь,  ул. Чехова, д. 2</span></li>
                    <li class="contact__item contact__item_mr"> <span class="contact__item_title">Электронная почта:</span> <a class="contact__link contact__text" href="mailto:zakaz@wowmedia.pro">zakaz@wowmedia.pro</a> </li>
                    <li class="contact__item "> <span class="contact__item_title">Понедельник-Пятница:</span> <span class="contact__text">09:00 - 18:00</span></li>
                    <li class="contact__ite"><span class="contact__item_title">Суббота-Воскресение:</span> <span class="contact__text">Выходной</span></li>
                </ul> 
                <ul class="contact__list">
                    <li class="contact__item contact__item_title">Юлия Иванова</li>
                    <li class="contact__item">Менеджер по работе с клиентами </li>
                    <li class="contact__item contact__item_mr"><a class="contact__text contact__link_icon contact__link_tel" href="tel:++7 (987) 000-00-00">+7 (987) 000-00-00</a> </li>
                    <li class="contact__item"> <a class="contact__text contact__link_icon contact__link_mail" href="mailto:zakaz@wowmedia.pro">zakaz@wowmedia.pro</a></span></li> 
                </ul> 
                <ul class="contact__list">
                    <li class="contact__item contact__item_mr"><a class="contact__text contact__link_icon contact__link_instagram" href="#">@wowmedia.pro</a> </li>
                    <li class="contact__item"><a class="contact__text contact__link_icon contact__link_facebook" href="#">facebook.com/wowmedia.pro</a> </li>
                </ul> 
            </div>
        </div>
    </section>
    <section class="map">
        <div class="container">
            <div class="map__content">
                <div class="map-yandex">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af24340da5b038f15c8713e9699b12260f435b02a1a7e66349c763da6ebebe2b6&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <img src="http://wowmedia.pro/wp-content/uploads/2021/11/scheme.jpg" alt=""> 
            </div>
        </div>
    </section>
    <div class="contact-info-block">
        <div class="container">
            <div class="title contact-info-block__title">Уточнить детали</div>
            <p class="contact-info-block__text">Если вы не нашли ответа на свой вопрос, заполните <br>
                эту форму, а мы как можно быстрее ответим вам.
            </p>
        </div>
    </div>
    <section class="feedback">
        <div class="container">
            <div class="feedback__content">
                <div class="feedback__info">
                    <h2 class="title feedback__title">У Вас возникли вопросы? 
                        Мы всегда готовы помочь!
                    </h2>
                    <p class="text feedback__text">Оставьте свои данные — мы перезвоним и решим вопрос. <br>
                        Помните, оставляя контакты вы даете согласие на <br> обработку персональных данных.
                    </p>
                </div>
                <form action="" method="" class="form form-feedback">
                    <label for="fullname" class="form-feedback__label">
                        <p class="text feedback__text">Имя Фамилия</p>
                        <input type="text" name="fullname" placeholder="Иван Иванов" class="feedback__input">
                    </label>
                    <label for="phone" class="form-feedback__label">
                        <p class="text feedback__text">Телефон</p>
                        <input type="tel" name="phone" placeholder="+7 000 000 00 00" class="feedback__input">
                    </label>
                    <label for="email" class="form-feedback__label">
                        <p class="text feedback__text">Электронная почта</p>
                        <input type="email" name="email" placeholder="ivan@mail.ru" class="feedback__input">
                    </label>
                    <label for="personal_information" class="form-feedback__label form-feedback__label_check-box  ">
                        <div class="check-box"></div>
                        <p class="text feedback__text">Согласиие на обработку персональныхданных </p>
                        <input type="checkbox" name="personal_information" id="personal_information" class="feedback__input sr-only">
                        
                    </label>
                    <button class="button form-feedback__button">ОТПРАВИТЬ</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php  get_footer(); ?>