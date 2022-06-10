
<?php
/*
Template Name: Шаблон "Главной страницы"
*/
?>


<?php get_header(); ?>

<main>

    <div class="container">
        <div class="content row">
            <div class="col-7 main" >
                Добро пожаловать на сайт Димы Мартинкевича. 
                Сайт написан на движке WordPress. Подробно про технологии, использованные при создании 
                сайта, можно ознакомиться <a href="http://mysite/site/" class="main-bold">здесь.</a>
                Чтобы связаться со мной, позвоните по телефону <a href="tel:+375295886725" class="main-bold"> 8 029 5886725 </a> 
                или заполните <a href="http://mysite/contacts/" class="main-bold">эту форму</a>
            </div>
            <div class="col-4">
                <!-- <?php dynamic_sidebar('sidebar')?> -->
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
