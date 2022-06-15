
<?php
/*
Template Name: Шаблон "Главной страницы"
*/
?>


<?php get_header(); ?>

<main>

    <div class="container">
        <div class="content row">
            <div class="col-sm-12 col-md-8 col-lg-7 main mx-auto ml-lg-0" >
                Добро пожаловать на сайт Димы Мартинкевича. 
                Сайт написан на движке WordPress. Подробно про технологии, использованные при создании 
                сайта, можно ознакомиться <a href="<?php echo get_site_url().'/site'?>" class="main-bold">здесь.</a>
                Чтобы связаться со мной, позвоните по телефону <a href="tel:+375295886725" class="main-bold"> 8 029 5886725 </a> 
                или заполните <a href="<?php echo get_site_url().'/contacts'?>" class="main-bold">эту форму</a>
            </div>
            <!-- <div class="col-4"> -->
                <!-- <?php dynamic_sidebar('sidebar')?> -->
            <!-- </div> -->
            <?php wp_nav_menu( [
					'theme_location'  => 'main',
					'container'       => '',
					'menu_class'      => 'hide menu',
                    'menu_id'         => 'popup_menu',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s p-0 m-0" >%3$s</ul>'
				] ); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
