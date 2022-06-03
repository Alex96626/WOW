<!-- /*
Template name: Our Services
*/ -->

<?php get_header()  ?>


<main>
<section class="our-services">
    <div class="container">
    <h1 class="title main-title">Наши услуги</h1>
    <div class="our-services__list">
	<?php  
		if ( have_posts() )
				$args = array(
					'cat' => '6',
					'order' => 'ASC',
					'orderby' => 'data'
				);
	  $recent = new WP_Query($args);
	  while($recent->have_posts()) : $recent->the_post();
	  ?>
	 	<div class="our-services__item">
            <h2 class="title our-services__item_title"> <?php the_title(); ?></h2>
            <p class="text our-services__text"> <?php the_content(); ?> </p>
			<!-- <img class="our-services__item-img" src="images/our-servieces_1.png" alt=""> -->
			<?php  
			$img_settings_attr = array(
				'src'   => $src,
				'class' => "our-services__item-img",
				'alt'   => trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt )),
			);
			the_post_thumbnail('full' ,$img_settings_attr); ?>
		</div>
		<?php  endwhile ?>
	
	
        <!-- <div class="our-services__item">
            <h2 class="title our-services__item_title">Полиграфия</h2>
            <p class="text our-services__text">Полиграфические услуги широко используются в разных сферах: в предпринимательстве, политологии, маркетинге. Вау МЕДИА предоставляет следующие виды полиграфических услуг: листовки и буклеты, брошюры, бланки, блокноты, папки и конверты.
                У на с вы можно заказать календари, визитные карточки, кубарики, ярлыки , этикетки, бланки, открытки ...</p>
        <img class="our-services__item-img" src="images/our-servieces_1.png" alt="">
        </div>
        <div class="our-services__item">
            <h2 class="title our-services__item_title">Широкоформатная печать</h2>
            <p class="text our-services__text">Вид цифровой печати, которая производится на специализированных широкоформатных принтерах и плоттерах.
                Широкоформатная печать делится на два основных направления — интерьерная печать, которая предусматривает создание изображений для использования внутри помещений, и экстерьерная печать (наружная реклама) — для размещения на улице. Осуществляется на различных видах материалов: виниловая плёнка, бумага, сетка, баннерная ткань.
                Полученное посредством широкоформатной печати изображение можно использовать на разных конструкциях: растяжках, пресс-воллах, стендах, ролл-апах, штендерах, лайтбоксах и др.
                Широкоформатная печать осуществляется на принтерах, позволяющих создать качественное изображение крупного размера. Это даёт возможность выполнять рекламные </p>
        </div>
        <div class="our-services__item">

            <h2 class="title our-services__item_title">Сувениры</h2>
            <p class="text our-services__text">Формирование имиджа компании – одна из составляющих успешного бизнеса, поэтому важно продумывать каждую деталь корпоративной культуры. Сувениры с нанесенным логотипом – это важный инструмент взаимодействия с партнерами и конечными потребителями для закрепления уже знакомого имиджа как идеального и необходимого в жизни.
                Правильно подобранная и качественно изготовленная сувенирная продукция с логотипом компании является не только важной составляющей маркетинга, но и прекрасным подарком по любому случаю. Рекламное агентство Panda </p>

        <img class="our-services__item-img" src="images/our-servieces_2.png" alt="">
        </div>
        <div class="our-services__item">
            <h2 class="title our-services__item_title">Рекламные конструкции</h2>
            <p class="text our-services__text">Вид цифровой печати, которая производится на специализированных широкоформатных принтерах и плоттерах.
                Широкоформатная печать делится на два основных направления — интерьерная печать, которая предусматривает создание изображений для использования внутри помещений, и экстерьерная печать (наружная реклама) — для размещения на улице. Осуществляется на различных видах материалов: виниловая плёнка, бумага, сетка, баннерная ткань.
                Полученное посредством широкоформатной печати изображение можно использовать на разных конструкциях: растяжках, пресс-воллах, стендах, ролл-апах, штендерах, лайтбоксах и др.
                Широкоформатная печать осуществляется на принтерах, позволяющих создать качественное изображение крупного размера. Это даёт возможность выполнять рекламные </p>
        </div>
        <div class="our-services__item">

            <h2 class="title our-services__item_title">Услуги дизайнера</h2>
            <p class="text our-services__text">Наши профессиональные дизайнеры выполнят любую задачу: от подготовки ваших макетов к печати до разработки концепции будущей рекламной кампании с нуля.

                *Точная стоимость работ определяется после получения или составления технического задания. В стоимость работ не входит отдельно приобретаемый контент, используемый при создании макетов (фотобанки, лицензии на использование шрифтов и т.д.).</p>

        <img class="our-services__item-img" src="images/our-servieces_3.png" alt="">
        </div> -->
    </div>
</div>
</section>
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


<?php  get_footer() ?>