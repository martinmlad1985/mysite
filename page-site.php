
<?php get_header('site'); ?>

<main>
    <div class="container py-5 text-white">
        Код сайта можно посмотреть на <a href="https://github.com/martinmlad1985/mysite">GitHub</a>
        <br>
        Это список того, что я использовал:    
        <ul>
            <li>Использован custom-logo</li>
            <li>Использован title-tag</li>
            <li>использован post-thumbnail</li>
            <li>Зарегестрированы собственные меню</li>
            <li>Использован scss с компиляцией через Live Sass Compiller в min.css с автопрефиксом</li>
            <li>Для страницы "О сайте" применён индивидуальный header</li>
            <li>Перенос на хостинг осуществлён с помощью плагина Duplicator</li>
            <li>Использовано несколько способов создания шаблонов страниц</li>
            <li>В процессе разработки использован Bootstrap</li>
            <li>Собственная тема</li>
            <li>Зарегестрирован собственный тип записи</li>
            <li>Добавлена кастомная группа полей при помощи Advanced Custom Fields</li>
            <li>Формы сделаны при помощи плагина Contact Form 7</li>
            <li>Экспорт базы данных произведён с помощью WP Migrate Lite</li>
            <li>Зарегестрирован  свой sidebar</li>
            <li>Зарегестрирована таксономия</li>
            <li>Вывод ссылки на термин таксономии в посте</li>
            <li>Вывод постов по ссылке на таксономию</li>
            <li>Вывод различного содержимого контента в завизимости от формата поста при помощи
                post-formats и get_template_part()</li>
            <li>Индивидуальное затемненное фоновое изображение для каждой страницы с возможностью изменения через админку</li>
        </ul>
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
</main>



<?php get_footer(); ?>
