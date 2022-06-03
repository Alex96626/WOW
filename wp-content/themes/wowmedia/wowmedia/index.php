<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wowMedia
 */

get_header();
wp_head() 
?>

<main>
        <section class="banner">
            <div class="container">
                <div class="banner__content">
                    <div class="wrapper banner__wrapper">
                        <!-- <h1 class="title banner__title">Исполняем мечты вашего бизнеса</h1>
                        <p class="text banner__text">Полиграфические услуги широко используются в разных сферах: 
                            в предпринимательстве, политологии, маркетинге. 
                            ВАУ МЕДИА предоставляет следующие виды полиграфических 
                        </p> -->
						<?php  query_posts('cat=3');
							while (have_posts()) : the_post();?>
                                <h1 class="title banner__title"><?php the_title(); ?></h2>
                                <p class="text banner__text"><?php the_content(); ?></p>
                                <?php
                            endwhile;
                            wp_reset_query();
						?>


                        <button class="button banner__button">ЗАКАЗАТЬ </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="promotion">
            <div class="container">
                <div class="swiper promotion-swiper">
                    <div class="promotion__list swiper-wrapper">
                    <?php
                        if ( have_posts() )
                        $args = array(
                            'cat' => '4',
                            'order' => 'ASC',
                            'orderby' => 'data'
                        );
                        $recent = new WP_Query($args);
                        while($recent->have_posts()) : $recent->the_post();
                    ?>
                        <div class="promotion__item swiper-slide">
                            <?php  the_post_thumbnail('full'); ?>
                            <div class="wrapper">
                                <h2 class="title promotion__title"> <?php the_title() ?></h2>
                                <p class="text"> <?php the_content(); ?> </p>
                            </div>
                        </div>
                        <?php  endwhile ?>
                    </div>
                </div>
                <div class="pagination pagination-promotion">
                    <div class="pagination__item pagination__item_prev pagination__item_prev--promotion"></div>
                    <div class="pagination__item pagination__item_next pagination__item_next--promotion"></div>
                </div>
            </div>
        </section>
        
        <section class="production">
            <div class="container">
                <div class="swiper production-swiper">
                    <div class="production__list swiper-wrapper">
                    <?php
                        if ( have_posts() )
                        $args = array(
                            'cat' => '5',
                            'order' => 'ASC',
                            'orderby' => 'data'
                        );
                        $recent = new WP_Query($args);
                        while($recent->have_posts()) : $recent->the_post();
                    ?>
                        <div class="production__item swiper-slide">
                            <h2 class="text production__item_title"> <?php the_title(); ?></h2>
                            <?php  the_post_thumbnail('full'); ?>
                        </div>
                        <?php  endwhile ?>
                    </div>
                </div>
                <div class="pagination">
                    <div class="pagination__item pagination__item_prev pagination__item_prev--production"></div>
                    <div class="pagination__item pagination__item_next pagination__item_next--production"></div>
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
                    <script data-b24-form="inline/8/k1iw2r" data-skip-moving="true">
                        (function(w,d,u){
                            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                        })(window,document,'https://cdn-ru.bitrix24.ru/b19418254/crm/form/loader_8.js');
                    </script>
                    <!-- <form action="" method="" class="form form-feedback">
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
                        <input type="checkbox" name="personal_information" id="personal_information" class="feedback__input sr-only">
                            <div class="check-box"></div>
                            <p class="text feedback__text">Согласиие на обработку персональныхданных </p>
                            
                            
                        </label>
                        <button class="button form-feedback__button">ОТПРАВИТЬ</button>
                    </form> -->
                </div>
            </div>
        </section>
        
    </main>

<?php
// get_sidebar();
get_footer();
