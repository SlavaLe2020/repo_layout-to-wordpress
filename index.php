<?php get_header(); ?>

    <main class="main">
        <div class="container">


            <div class="main__title">
                <?php the_field('main__title') ?> 
            </div>
            <div class="main__text">
                <?php the_field('main__text') ?>
            </div>
            <div class="main__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="">
            </div>
            <div class="project">
                <div class="project__title">
                    ПРОЕКТЫ ДОМОВ ИЗ БРУСА
                </div>
                <div class="project__item">
                    <div class="project__name">
                        ДОМ #1
                    </div>
                    <div class="project__size">
                        Размер дома: 6 x 6
                    </div>
                    <div class="project__area">
                        Общая площадь дома: 54 кв. м
                    </div>
                    <div class="project__price">
                        Стоимость - 402 000 рублей
                    </div>
                    <div class="project__images">
                        <div class="project__images-item">
                            <img src="img/project-1.jpg" alt="">
                        </div>
                        <div class="project__images-item">
                            <img src="img/project-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="project__item">
                    <div class="project__name">
                        ДОМ #1
                    </div>
                    <div class="project__size">
                        Размер дома: 6 x 6
                    </div>
                    <div class="project__area">
                        Общая площадь дома: 54 кв. м
                    </div>
                    <div class="project__price">
                        Стоимость - 402 000 рублей
                    </div>
                    <div class="project__images">
                        <div class="project__images-item">
                            <img src="img/project-1.jpg" alt="">
                        </div>
                        <div class="project__images-item">
                            <img src="img/project-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="project__item">
                    <div class="project__name">
                        ДОМ #1
                    </div>
                    <div class="project__size">
                        Размер дома: 6 x 6
                    </div>
                    <div class="project__area">
                        Общая площадь дома: 54 кв. м
                    </div>
                    <div class="project__price">
                        Стоимость - 402 000 рублей
                    </div>
                    <div class="project__images">
                        <div class="project__images-item">
                            <img src="img/project-1.jpg" alt="">
                        </div>
                        <div class="project__images-item">
                            <img src="img/project-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="download">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/home-download.png" alt="">
            <div class="download__link">
                <a href="<?php the_field('download__link') ?>" download>СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
            </div>
        </div>
        <div class="container">
            <div class="gallery">
                <div class="gallery__title">
                    <?php the_field('gallery__title') ?> 
                </div>
                <div class="gallery__text">
                    <?php the_field('gallery__text') ?> 
                </div>
                <div id="gallery__inner">
                    <?php the_field('photo') ?> 
                </div>
            </div>
            <div class="main__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="">
            </div>
        </div>
    </main>

    <?php get_footer(); ?>
