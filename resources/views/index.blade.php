@extends('layouts.main')

@section('title')
    Главная
@endsection

@section('content')
    <main class="page">
        <section class="hero-banner">
            <div class="hero-banner__slider swiper">
                <div class="hero-banner__wrapper swiper-wrapper">
                    <div class="hero-banner__slide hero-banner-slide swiper-slide">
                        <div data-aos="fade-in" data-aos-delay="200" data-aos-duration="3000" data-aos-anchor=".hero-banner" class="hero-banner-slide__background">
                            <picture>
                                <source srcset="img/hero-banner/1/bg-mobile.webp 1x, img/hero-banner/1/bg-mobile@2x.webp 2x" type="image/webp" media="(max-width: 767.98px)">
                                <source srcset="img/hero-banner/1/bg-mobile.jpg 1x, img/hero-banner/1/bg-mobile@2x.jpg 2x" media="(max-width: 767.98px)">
                                <source srcset="img/hero-banner/1/bg.webp, img/hero-banner/1/bg@2x.webp 2x" type="image/webp">
                                <img src="img/hero-banner/1/bg.jpg" srcset="img/hero-banner/1/bg@2x.jpg 2x" alt="">
                            </picture>
                        </div>
                        <div class="hero-banner-slide__container">
                            <div class="hero-banner-slide__body">
                                <div class="hero-banner-slide__body-wrap">
                                    <div class="hero-banner-slide__content">
                                        <div class="hero-banner-slide__content-top">
                                            <div class="hero-banner-slide__content-row">
                                                <div data-aos="fade-down-50" data-aos-delay="500" data-aos-duration="1300" data-aos-anchor=".hero-banner" class="hero-banner-slide__subtitle">Дебетовая карта</div>
                                                <div data-aos="fade-down-30" data-aos-delay="500" data-aos-duration="1500" data-aos-anchor=".hero-banner" class="hero-banner-slide__title hero-banner-slide__title_primary">
                                                    Всё включено</div>
                                            </div>
                                            <div data-aos="fade-up-30" data-aos-delay="500" data-aos-duration="1500" data-aos-anchor=".hero-banner" class="hero-banner-slide__content-row">
                                                <div class="hero-banner-slide__text hero-banner-slide__text_big">Кэшбэк до 20% до 20 000 ₽</div>
                                            </div>
                                        </div>
                                        <div class="hero-banner-slide__buttons">
                                            <div data-aos="fade-up-10" data-aos-delay="600" data-aos-duration="1000" data-aos-anchor=".hero-banner" class="hero-banner-slide__button-animate">
                                                <a href="#" class="hero-banner-slide__button btn-primary-l">Оформить карту</a>
                                            </div>
                                            <div data-aos="fade-up-10" data-aos-delay="800" data-aos-duration="1000" data-aos-anchor=".hero-banner" class="hero-banner-slide__button-animate">
                                                <a href="#" class="hero-banner-slide__button btn-secondary-l btn-secondary_alt">Все карты</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div data-aos="fade-up-2" data-aos-duration="2000" data-aos-anchor=".hero-banner" class="hero-banner-slide__img">
                                        <picture>
                                            <source srcset="img/hero-banner/1/2.webp 1x, img/hero-banner/1/2@2x.webp 2x" type="image/webp" media="(max-width: 767.98px)">
                                            <source srcset="img/hero-banner/1/2.png 1x, img/hero-banner/1/2@2x.png 2x" media="(max-width: 767.98px)">
                                            <source srcset="img/hero-banner/1/1.webp, img/hero-banner/1/1@2x.webp 2x" type="image/webp">
                                            <img src="img/hero-banner/1/1.png" srcset="img/hero-banner/1/1@2x.png 2x" alt="">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-banner__slide hero-banner-slide swiper-slide">
                        <div class="hero-banner-slide__background">
                            <picture>
                                <source srcset="img/hero-banner/2/bg-mobile.webp 1x, img/hero-banner/2/bg-mobile@2x.webp 2x" type="image/webp" media="(max-width: 767.98px)">
                                <source srcset="img/hero-banner/2/bg-mobile.jpg 1x, img/hero-banner/2/bg-mobile@2x.jpg 2x" media="(max-width: 767.98px)">
                                <source srcset="img/hero-banner/2/bg.webp, img/hero-banner/2/bg@2x.webp 2x" type="image/webp">
                                <img src="img/hero-banner/2/bg.jpg" srcset="img/hero-banner/2/bg@2x.jpg 2x" alt="">
                            </picture>
                        </div>
                        <div class="hero-banner-slide__container">
                            <div class="hero-banner-slide__body">
                                <div class="hero-banner-slide__body-wrap">
                                    <div class="hero-banner-slide__content">
                                        <div class="hero-banner-slide__content-top">
                                            <div class="hero-banner-slide__content-row">
                                                <div class="hero-banner-slide__subtitle"></div>
                                                <div class="hero-banner-slide__title">Мобильное приложение <br>
                                                    и интернет-банк</div>
                                            </div>
                                            <div class="hero-banner-slide__content-row">
                                                <div class="hero-banner-slide__text">Удобный способ управлять своими финансами, <br>
                                                    не обращаясь в банк! Все необходимые продукты <br>
                                                    всегда с вами. Выигрывайте вместе с Фора-Банк!</div>
                                            </div>
                                        </div>
                                        <div class="hero-banner-slide__buttons">
                                            <a href="#" class="hero-banner-slide__button btn-primary-l">Войти в интернет-банк</a>
                                            <a href="#" class="hero-banner-slide__button btn-secondary-l btn-secondary_alt">О приложении</a>
                                        </div>
                                    </div>
                                    <div class="hero-banner-slide__img">
                                        <picture>
                                            <source srcset="img/hero-banner/2/2.webp 1x, img/hero-banner/2/2@2x.webp 2x" type="image/webp" media="(max-width: 767.98px)">
                                            <source srcset="img/hero-banner/2/2.png 1x, img/hero-banner/2/2@2x.png 2x" media="(max-width: 767.98px)">
                                            <source srcset="img/hero-banner/2/1.webp, img/hero-banner/2/1@2x.webp 2x" type="image/webp">
                                            <img src="img/hero-banner/2/1.png" srcset="img/hero-banner/2/1@2x.png 2x" alt="">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-banner__arrows">
                    <div data-aos="fade-up-10" data-aos-delay="700" data-aos-duration="1000" class="hero-banner__arrow hero-banner__arrow-prev">
                        <button type="button" class="btn-slider-arrow btn-slider-arrow_alt">
                            <svg>
                                <use xlink:href="img/icons/icons.svg#svg-arrow-left"></use>
                            </svg>
                        </button>
                    </div>
                    <div data-aos="fade-up-10" data-aos-delay="900" data-aos-duration="1000" class="hero-banner__arrow hero-banner__arrow-next">
                        <button type="button" class=" btn-slider-arrow btn-slider-arrow_alt">
                            <svg>
                                <use xlink:href="img/icons/icons.svg#svg-arrow-right"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="hero-banner__pagination"></div>
            </div>
        </section>

        <!-- carousel start -->
        <section class="carousel carousel_products">
            <div class="header-block header-block_section">
                <div class="header-block__container">
                    <div class="header-block__body">
                        <div data-aos="fade-up-10" data-aos-duration="800" data-aos-anchor=".carousel_products" class="header-block__title">Продукты для частных клиентов</div>
                    </div>
                </div>
            </div>
            <div class="card-slider card-slider_block card-slider--4">
                <div class="card-slider__container">
                    <div class="card-slider__body">
                        <div class="card-slider__list swiper">
                            <div data-aos="fade-up-slider-arrows" data-aos-duration="800" data-aos-anchor=".carousel_products" class="card-slider__button card-slider__button-prev">
                                <button type="button" class="btn-slider-arrow swiper-button-prev">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-arrow-left"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="card-slider__wrapper swiper-wrapper">
                                <div class="card-slider__item swiper-slide">
                                    <div data-aos="fade-up-5" data-aos-duration="800" data-aos-anchor=".carousel_products" class="card-slider__item-animate">
                                        <!-- card-small -->
                                        <div class="card-small card_interactive">
                                            <div class="card-small__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-monitor"></use>
                                                </svg>
                                            </div>
                                            <div class="card-small__info">
                                                <a href="#" class="card-small__title">Дистанционное обслуживание</a>
                                                <div class="card-small__text">Отличные условия как для начинающего, так и для развитого бизнеса</div>
                                            </div>
                                        </div>
                                        <!-- card-small end -->
                                    </div>
                                </div>
                                <div class="card-slider__item swiper-slide">
                                    <div data-aos="fade-up-5" data-aos-duration="800" data-aos-delay="100" data-aos-anchor=".carousel_products" class="card-slider__item-animate">
                                        <!-- card-small -->
                                        <div class="card-small card_interactive">
                                            <div class="card-small__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-bank-vault"></use>
                                                </svg>
                                            </div>
                                            <div class="card-small__info">
                                                <a href="#" class="card-small__title">Депозиты и вклады <br>для физ. лиц</a>
                                                <div class="card-small__text">Динамичные условия на самые
                                                    разные цели. Стабильно, надёжно, выгодно!
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card-small end -->
                                    </div>
                                </div>
                                <div class="card-slider__item swiper-slide">
                                    <div data-aos="fade-up-5" data-aos-duration="800" data-aos-delay="200" data-aos-anchor=".carousel_products" class="card-slider__item-animate">
                                        <!-- card-small -->
                                        <div class="card-small card_interactive">
                                            <div class="card-small__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-bank-card"></use>
                                                </svg>
                                            </div>
                                            <div class="card-small__info">
                                                <a href="#" class="card-small__title">Банковские карты <br> для разных целей</a>
                                                <div class="card-small__text">Спектр услуг очень широк, <br>есть кредитные и дебетовые варианты с хорошим кэшбеком</div>
                                            </div>
                                        </div>
                                        <!-- card-small end -->
                                    </div>
                                </div>
                                <div class="card-slider__item swiper-slide">
                                    <div data-aos="fade-up-5" data-aos-duration="800" data-aos-delay="300" data-aos-anchor=".carousel_products" class="card-slider__item-animate">
                                        <!-- card-small -->
                                        <div class="card-small card_interactive">
                                            <div class="card-small__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-percent"></use>
                                                </svg>
                                            </div>
                                            <div class="card-small__info">
                                                <a href="#" class="card-small__title">Кредиты для физ. лиц</a>
                                                <div class="card-small__text">Динамичные условия на самые разные цели. Быстро, выгодно,<br>удобно, надёжно!</div>
                                            </div>
                                        </div>
                                        <!-- card-small end -->
                                    </div>
                                </div>
                                <div class="card-slider__item swiper-slide">
                                    <div class="card-slider__item-animate">
                                        <!-- card-small -->
                                        <div class="card-small card_interactive">
                                            <div class="card-small__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-transfer"></use>
                                                </svg>
                                            </div>
                                            <div class="card-small__info">
                                                <a href="#" class="card-small__title">Дистанционное обслуживание</a>
                                                <div class="card-small__text">Отличные условия как для начинающего, так и для развитого бизнеса</div>
                                            </div>
                                        </div>
                                        <!-- card-small end -->
                                    </div>

                                </div>
                            </div>
                            <div data-aos="fade-up-slider-arrows" data-aos-duration="800" data-aos-delay="400" data-aos-anchor=".carousel_products" class="card-slider__button card-slider__button-next">
                                <button type="button" class=" btn-slider-arrow swiper-button-next">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-arrow-right"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="card-slider__pagination swiper-pagination swiper-pagination_gray"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- carousel end -->

        <!-- product-block start -->
        <section data-tabs class="product-block section_gray_100">
            <div class="header-block header-block_section">
                <div class="header-block__container">
                    <div class="header-block__body">
                        <div data-aos="fade-up-5" data-aos-duration="800" data-aos-anchor=".product-block" class="header-block__title">Популярные услуги и сервисы</div>
                        <div data-tabs-titles data-aos="fade-up-5" data-aos-duration="800" data-aos-anchor=".product-block" class="tabs tabs_another">
                            <div data-aos="fade-in" data-aos-duration="800" data-aos-anchor=".product-block" class="tabs__button-wrap _tab-active">
                                <button type="button" class="tabs__button "><span>Лучшие</span></button>
                            </div>
                            <div data-aos="fade-in" data-aos-duration="800" data-aos-delay="50" data-aos-anchor=".product-block" class="tabs__button-wrap">
                                <button type="button" class="tabs__button"><span>Вклады и сейфы</span></button>
                            </div>
                            <div data-aos="fade-in" data-aos-duration="800" data-aos-delay="100" data-aos-anchor=".product-block" class="tabs__button-wrap">
                                <button type="button" class="tabs__button"><span>Недвижимость</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-tabs-body class="product-block__body">
                <div class="product-block__item">
                    <div class="card-list card-list_block card-list_2">
                        <div class="card-list__container">
                            <div class="card-list__body">
                                <div data-aos="fade-up-2" data-aos-duration="1000" data-aos-delay="200" data-aos-anchor=".product-block" class="card-list__item">
                                    <!-- card-product -->
                                    <div class="card-product card-product_text card_interactive">
                                        <div class="card-product__icon">
                                            <svg>
                                                <use xlink:href="img/icons/icons.svg#svg-cash"></use>
                                            </svg>
                                        </div>
                                        <div class="card-product__info">
                                            <div class="card-product__head">
                                                <div class="card-product__subtitle"></div>
                                                <div class="card-product__title">Обмен валют</div>
                                            </div>
                                            <div class="card-product__text">
                                                Краткое описание возможностей сервиса, а также
                                                основные профиты для потребителя
                                            </div>
                                        </div>
                                        <a href="#" class="card-product__button btn-secondary-s">Подробнее об услуге</a>
                                    </div>
                                    <!-- card-product end -->
                                </div>
                                <div data-aos="fade-up-2" data-aos-duration="1000" data-aos-delay="300" data-aos-anchor=".product-block" class="card-list__item card-list__item_big">
                                    <!-- card-product -->
                                    <div class="card-product card-product_text card_interactive">
                                        <div class="card-product__icon">
                                            <svg>
                                                <use xlink:href="img/icons/icons.svg#svg-hotel-1"></use>
                                            </svg>
                                        </div>
                                        <div class="card-product__info">
                                            <div class="card-product__head">
                                                <div class="card-product__subtitle"></div>
                                                <div class="card-product__title">Ипотека на отличных условиях</div>
                                            </div>
                                            <div class="card-product__text">Краткое описание возможностей сервиса, а также
                                                основные профиты для потребителя</div>
                                            <div class="card-product__img">
                                                <picture><source data-srcset="img/cards/card-big/1.webp, img/cards/card-big/1@2x.webp 2x" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/cards/card-big/1.png" data-srcset="img/cards/card-big/1@2x.png 2x" alt=""></picture>
                                            </div>
                                        </div>
                                        <a href="#" class="card-product__button btn-secondary-s">Подробнее об услуге</a>
                                    </div>
                                    <!-- card-product end -->
                                </div>
                                <div data-aos="fade-up-2" data-aos-duration="1000" data-aos-delay="400" data-aos-anchor=".product-block" class="card-list__item">
                                    <!-- card-product -->
                                    <div class="card-product card-product_text card_interactive">
                                        <div class="card-product__icon">
                                            <svg>
                                                <use xlink:href="img/icons/icons.svg#svg-transfer"></use>
                                            </svg>
                                        </div>
                                        <div class="card-product__info">
                                            <div class="card-product__head">
                                                <div class="card-product__subtitle"></div>
                                                <div class="card-product__title">Денежные переводы</div>
                                            </div>
                                            <div class="card-product__text">Краткое описание возможностей сервиса, а также
                                                основные профиты для потребителя</div>
                                        </div>
                                        <a href="#" class="card-product__button btn-secondary-s">Оставить заявку</a>
                                    </div>
                                    <!-- card-product end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-block__item">
                    <div class="card-list card-list_block card-list_2">
                        <div class="card-list__container">
                            <div class="card-list__body">
                                <div class="card-list__item">
                                    <!-- card-product -->
                                    <div class="card-product card-product_text card_interactive">
                                        <div class="card-product__icon">
                                            <svg>
                                                <use xlink:href="img/icons/icons.svg#svg-cash"></use>
                                            </svg>
                                        </div>
                                        <div class="card-product__info">
                                            <div class="card-product__head">
                                                <div class="card-product__subtitle"></div>
                                                <div class="card-product__title">Обмен валют</div>
                                            </div>
                                            <div class="card-product__text">
                                                Краткое описание возможностей сервиса, а также
                                                основные профиты для потребителя
                                            </div>
                                        </div>
                                        <a href="#" class="card-product__button btn-secondary-s">Подробнее об услуге</a>
                                    </div>
                                    <!-- card-product end -->
                                </div>
                                <div class="card-list__item card-list__item_big">
                                    <!-- card-product -->
                                    <div class="card-product card-product_text card_interactive">
                                        <div class="card-product__icon">
                                            <svg>
                                                <use xlink:href="img/icons/icons.svg#svg-hotel-1"></use>
                                            </svg>
                                        </div>
                                        <div class="card-product__info">
                                            <div class="card-product__head">
                                                <div class="card-product__subtitle"></div>
                                                <div class="card-product__title">Ипотека на отличных условиях</div>
                                            </div>
                                            <div class="card-product__text">Краткое описание возможностей сервиса, а также
                                                основные профиты для потребителя</div>
                                            <div class="card-product__img">
                                                <picture><source data-srcset="img/cards/card-big/1.webp, img/cards/card-big/1@2x.webp 2x" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/cards/card-big/1.png" data-srcset="img/cards/card-big/1@2x.png 2x" alt=""></picture>
                                            </div>
                                        </div>
                                        <a href="#" class="card-product__button btn-secondary-s">Подробнее об услуге</a>
                                    </div>
                                    <!-- card-product end -->
                                </div>
                                <div class="card-list__item">
                                    <!-- card-product -->
                                    <div class="card-product card-product_text card_interactive">
                                        <div class="card-product__icon">
                                            <svg>
                                                <use xlink:href="img/icons/icons.svg#svg-transfer"></use>
                                            </svg>
                                        </div>
                                        <div class="card-product__info">
                                            <div class="card-product__head">
                                                <div class="card-product__subtitle"></div>
                                                <div class="card-product__title">Денежные переводы</div>
                                            </div>
                                            <div class="card-product__text">Краткое описание возможностей сервиса, а также
                                                основные профиты для потребителя</div>
                                        </div>
                                        <a href="#" class="card-product__button btn-secondary-s">Оставить заявку</a>
                                    </div>
                                    <!-- card-product end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-block__item">
                    <div class="card-list card-list_block card-list_2">
                        <div class="card-list__container">
                            <div class="card-list__body">
                                <div class="card-list__item">
                                    <!-- card-product -->
                                    <div class="card-product card-product_text card_interactive">
                                        <div class="card-product__icon">
                                            <svg>
                                                <use xlink:href="img/icons/icons.svg#svg-cash"></use>
                                            </svg>
                                        </div>
                                        <div class="card-product__info">
                                            <div class="card-product__head">
                                                <div class="card-product__subtitle"></div>
                                                <div class="card-product__title">Обмен валют</div>
                                            </div>
                                            <div class="card-product__text">
                                                Краткое описание возможностей сервиса, а также
                                                основные профиты для потребителя
                                            </div>
                                        </div>
                                        <a href="#" class="card-product__button btn-secondary-s">Подробнее об услуге</a>
                                    </div>
                                    <!-- card-product end -->
                                </div>
                                <div class="card-list__item card-list__item_big">
                                    <!-- card-product -->
                                    <div class="card-product card-product_text card_interactive">
                                        <div class="card-product__icon">
                                            <svg>
                                                <use xlink:href="img/icons/icons.svg#svg-hotel-1"></use>
                                            </svg>
                                        </div>
                                        <div class="card-product__info">
                                            <div class="card-product__head">
                                                <div class="card-product__subtitle"></div>
                                                <div class="card-product__title">Ипотека на отличных условиях</div>
                                            </div>
                                            <div class="card-product__text">Краткое описание возможностей сервиса, а также
                                                основные профиты для потребителя</div>
                                            <div class="card-product__img">
                                                <picture><source data-srcset="img/cards/card-big/1.webp, img/cards/card-big/1@2x.webp 2x" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/cards/card-big/1.png" data-srcset="img/cards/card-big/1@2x.png 2x" alt=""></picture>
                                            </div>
                                        </div>
                                        <a href="#" class="card-product__button btn-secondary-s">Подробнее об услуге</a>
                                    </div>
                                    <!-- card-product end -->
                                </div>
                                <div class="card-list__item">
                                    <!-- card-product -->
                                    <div class="card-product card-product_text card_interactive">
                                        <div class="card-product__icon">
                                            <svg>
                                                <use xlink:href="img/icons/icons.svg#svg-transfer"></use>
                                            </svg>
                                        </div>
                                        <div class="card-product__info">
                                            <div class="card-product__head">
                                                <div class="card-product__subtitle"></div>
                                                <div class="card-product__title">Денежные переводы</div>
                                            </div>
                                            <div class="card-product__text">Краткое описание возможностей сервиса, а также
                                                основные профиты для потребителя</div>
                                        </div>
                                        <a href="#" class="card-product__button btn-secondary-s">Оставить заявку</a>
                                    </div>
                                    <!-- card-product end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-block end -->

        <!-- carousel start -->
        <section class="carousel carousel_credits">
            <div class="header-block header-block_section">
                <div class="header-block__container">
                    <div class="header-block__body">
                        <div data-aos="fade-up-10" data-aos-duration="800" data-aos-anchor=".carousel_credits" class="header-block__title">Потребительские кредиты для вас</div>
                    </div>
                </div>
            </div>
            <div class="card-slider card-slider_block card-slider--3">
                <div class="card-slider__container">
                    <div class="card-slider__body">
                        <div class="card-slider__list swiper">
                            <div data-aos="fade-up-slider-arrows" data-aos-duration="800" data-aos-anchor=".carousel_credits" class="card-slider__button card-slider__button-prev">
                                <button type="button" class=" btn-slider-arrow swiper-button-prev">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-arrow-left"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="card-slider__wrapper swiper-wrapper">
                                <div class="card-slider__item swiper-slide">
                                    <div data-aos="fade-up-5" data-aos-duration="800" data-aos-anchor=".carousel_credits" class="card-slider__item-animate">
                                        <!-- card-product -->
                                        <div class="card-product card-product_deposits card_interactive">
                                            <div class="card-product__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-grid"></use>
                                                </svg>
                                            </div>
                                            <div class="card-product__info">
                                                <div class="card-product__head">
                                                    <div class="card-product__subtitle"></div>
                                                    <div class="card-product__title">Стандарт</div>
                                                </div>
                                                <div class="card-product__deposits">
                                                    <div class="card-product__deposits-text"><span>От 14,5 %</span>годовых в рублях</div>
                                                    <div class="card-product__deposits-text"><span>До 1 </span> млн рублей</div>
                                                    <div class="card-product__deposits-text"><span>До 36</span> месяцев</div>
                                                </div>
                                            </div>
                                            <a href="#" class="card-product__button btn-secondary-s">Оставить заявку</a>
                                        </div>
                                        <!-- card-product end -->
                                    </div>
                                </div>
                                <div class="card-slider__item swiper-slide">
                                    <div data-aos="fade-up-5" data-aos-duration="800" data-aos-delay="100" data-aos-anchor=".carousel_credits" class="card-slider__item-animate">
                                        <!-- card-product -->
                                        <div class="card-product card-product_deposits card_interactive">
                                            <div class="card-product__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-diamond"></use>
                                                </svg>
                                            </div>
                                            <div class="card-product__info">
                                                <div class="card-product__head">
                                                    <div class="card-product__subtitle"></div>
                                                    <div class="card-product__title">Премиум</div>
                                                </div>
                                                <div class="card-product__deposits">
                                                    <div class="card-product__deposits-text"><span>От 14,5 %</span>годовых в рублях</div>
                                                    <div class="card-product__deposits-text"><span>До 1 </span> млн рублей</div>
                                                    <div class="card-product__deposits-text"><span>До 36</span> месяцев</div>
                                                </div>
                                            </div>
                                            <a href="#" class="card-product__button btn-secondary-s">Оставить заявку</a>
                                        </div>
                                        <!-- card-product end -->
                                    </div>
                                </div>
                                <div class="card-slider__item swiper-slide">
                                    <div data-aos="fade-up-5" data-aos-duration="800" data-aos-delay="200" data-aos-anchor=".carousel_credits" class="card-slider__item-animate">
                                        <!-- card-product -->
                                        <div class="card-product card-product_deposits card_interactive">
                                            <div class="card-product__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-investments"></use>
                                                </svg>
                                            </div>
                                            <div class="card-product__info">
                                                <div class="card-product__head">
                                                    <div class="card-product__subtitle"></div>
                                                    <div class="card-product__title">Инвестиционный</div>
                                                </div>
                                                <div class="card-product__deposits">
                                                    <div class="card-product__deposits-text"><span>От 23%</span>годовых в рублях</div>
                                                    <div class="card-product__deposits-text"><span>До 3,5 </span> млн рублей</div>
                                                    <div class="card-product__deposits-text"><span>До 60</span> месяцев</div>
                                                </div>
                                            </div>
                                            <a href="#" class="card-product__button btn-secondary-s">Оставить заявку</a>
                                        </div>
                                        <!-- card-product end -->
                                    </div>
                                </div>
                                <div class="card-slider__item swiper-slide">
                                    <div class="card-slider__item-animate">
                                        <!-- card-product -->
                                        <div class="card-product card-product_deposits card_interactive">
                                            <div class="card-product__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-grid"></use>
                                                </svg>
                                            </div>
                                            <div class="card-product__info">
                                                <div class="card-product__head">
                                                    <div class="card-product__subtitle"></div>
                                                    <div class="card-product__title">Стандарт</div>
                                                </div>
                                                <div class="card-product__deposits">
                                                    <div class="card-product__deposits-text"><span>От 14,5 %</span>годовых в рублях</div>
                                                    <div class="card-product__deposits-text"><span>До 1 </span> млн рублей</div>
                                                    <div class="card-product__deposits-text"><span>До 36</span> месяцев</div>
                                                </div>
                                            </div>
                                            <a href="#" class="card-product__button btn-secondary-s">Оставить заявку</a>
                                        </div>
                                        <!-- card-product end -->
                                    </div>
                                </div>
                                <div class="card-slider__item swiper-slide">
                                    <div class="card-slider__item-animate">
                                        <!-- card-product -->
                                        <div class="card-product card-product_deposits card_interactive">
                                            <div class="card-product__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-diamond"></use>
                                                </svg>
                                            </div>
                                            <div class="card-product__info">
                                                <div class="card-product__head">
                                                    <div class="card-product__subtitle"></div>
                                                    <div class="card-product__title">Премиум</div>
                                                </div>
                                                <div class="card-product__deposits">
                                                    <div class="card-product__deposits-text"><span>От 14,5 %</span>годовых в рублях</div>
                                                    <div class="card-product__deposits-text"><span>До 1 </span> млн рублей</div>
                                                    <div class="card-product__deposits-text"><span>До 36</span> месяцев</div>
                                                </div>
                                            </div>
                                            <a href="#" class="card-product__button btn-secondary-s">Оставить заявку</a>
                                        </div>
                                        <!-- card-product end -->
                                    </div>
                                </div>
                                <div class="card-slider__item swiper-slide">
                                    <div class="card-slider__item-animate">
                                        <!-- card-product -->
                                        <div class="card-product card-product_deposits card_interactive">
                                            <div class="card-product__icon">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-investments"></use>
                                                </svg>
                                            </div>
                                            <div class="card-product__info">
                                                <div class="card-product__head">
                                                    <div class="card-product__subtitle"></div>
                                                    <div class="card-product__title">Инвестиционный</div>
                                                </div>
                                                <div class="card-product__deposits">
                                                    <div class="card-product__deposits-text"><span>От 14,5 %</span>годовых в рублях</div>
                                                    <div class="card-product__deposits-text"><span>До 1 </span> млн рублей</div>
                                                    <div class="card-product__deposits-text"><span>До 36</span> месяцев</div>
                                                </div>
                                            </div>
                                            <a href="#" class="card-product__button btn-secondary-s">Оставить заявку</a>
                                        </div>
                                        <!-- card-product end -->
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up-slider-arrows" data-aos-duration="800" data-aos-delay="400" data-aos-anchor=".carousel_credits" class="card-slider__button card-slider__button-next">
                                <button type="button" class=" btn-slider-arrow swiper-button-next">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-arrow-right"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="card-slider__pagination swiper-pagination swiper-pagination_gray"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- carousel end -->

        <!-- promo banner -->
        <section class="promo-banner">
            <div data-aos="fade-in" data-aos-duration="3000" data-aos-delay="200" data-aos-anchor=".promo-banner" class="promo-banner__background">
                <picture>
                    <source data-srcset="img/promo-banner/1/bg-mobile.webp 1x, img/promo-banner/1/bg-mobile@2x.webp 2x" type="image/webp" media="(max-width: 767.98px)">
                    <source data-srcset="img/promo-banner/1/bg-mobile.jpg 1x, img/promo-banner/1/bg-mobile@2x.jpg 2x" media="(max-width: 767.98px)">
                    <source data-srcset="img/promo-banner/1/bg.webp, img/promo-banner/1/bg@2x.webp 2x" type="image/webp">
                    <img data-src="img/promo-banner/1/bg.jpg" data-srcset="img/promo-banner/1/bg@2x.jpg 2x" alt="">
                </picture>
            </div>
            <div class="promo-banner__container">
                <div class="promo-banner__body">
                    <div class="promo-banner__content">
                        <div class="promo-banner__content-row">
                            <div data-aos="fade-up-5" data-aos-duration="1000" data-aos-delay="1500" data-aos-anchor=".promo-banner" class="promo-banner__title">Новое приложение
                                <br>Fora Bank для бизнеса
                            </div>
                            <div data-aos="fade-up-5" data-aos-duration="1000" data-aos-delay="1700" data-aos-anchor=".promo-banner" class="promo-banner__text">
                                Уже на всех площадках! Платежи, переводы, вклады, <br> кредиты и многое другое. Всё это теперь в ваших руках
                            </div>
                        </div>
                        <div data-aos="fade-up-5" data-aos-duration="1000" data-aos-delay="1900" data-aos-anchor=".promo-banner" class="mobile-platform">
                            <a href="#" class="app-platform">
                                <img src="img/app-store-2.svg" alt="">
                            </a>
                            <a href="#" class="app-platform">
                                <img src="img/google-play-2.svg" alt="">
                            </a>
                        </div>
                        <div data-aos="fade-up-5" data-aos-duration="1000" data-aos-delay="2100" data-aos-anchor=".promo-banner" class="promo-banner__buttons">
                            <a href="#" class="promo-banner__button btn-secondary-l btn-secondary_alt">Подробнее о приложении</a>
                        </div>
                    </div>
                    <div data-aos="fade-up-1" data-aos-duration="1000" data-aos-anchor=".promo-banner" class="promo-banner__img">
                        <picture><source data-srcset="img/promo-banner/1/1.webp, img/promo-banner/1/1@2x.webp 2x" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/promo-banner/1/1.png" data-srcset="img/promo-banner/1/1@2x.png 2x" alt=""></picture>
                    </div>
                </div>
            </div>
        </section>
        <!-- promo banner end -->

        <!-- carousel start -->
        <div class="carousel carousel_news">
            <div class="header-block header-block_section">
                <div class="header-block__container">
                    <div class="header-block__body">
                        <div data-aos="fade-up-10" data-aos-duration="1200" data-aos-anchor=".carousel_news" class="header-block__title">Новости компании</div>
                    </div>
                </div>
            </div>
            <div class="news-slider news-slider_block news-slider--4">
                <div class="news-slider__container">
                    <div class="news-slider__body">
                        <div class="news-slider__list swiper">
                            <div class="news-slider__wrapper swiper-wrapper">
                                <div class="news-slider__item swiper-slide">
                                    <div data-aos="fade-left-5" data-aos-duration="1500" data-aos-delay="200" data-aos-anchor=".carousel_news" class="news-slider__item-animate">
                                        <!-- card-news -->
                                        <div data-da=".news-slider__mob-list, 480" class="card-news">
                                            <div class="card-news__date"> 19.11.21</div>
                                            <a href="#" class="card-news__link">Новое сезонное предложение <br>для держателей карт с кешбэком «Зимние подарки»</a>
                                        </div>
                                        <!-- card-news end -->
                                    </div>
                                </div>
                                <div class="news-slider__item swiper-slide">
                                    <div data-aos="fade-left-5" data-aos-duration="1500" data-aos-delay="300" data-aos-anchor=".carousel_news" class="news-slider__item-animate">
                                        <!-- card-news -->
                                        <div data-da=".news-slider__mob-list, 480" class="card-news">
                                            <div class="card-news__date"> 19.11.21</div>
                                            <a href="#" class="card-news__link">Новое сезонное предложение <br>для держателей карт с кешбэком «Зимние подарки»</a>
                                        </div>
                                        <!-- card-news end -->
                                    </div>
                                </div>
                                <div class="news-slider__item swiper-slide">
                                    <div data-aos="fade-left-5" data-aos-duration="1500" data-aos-delay="400" data-aos-anchor=".carousel_news" class="news-slider__item-animate">
                                        <!-- card-news -->
                                        <div data-da=".news-slider__mob-list, 480" class="card-news">
                                            <div class="card-news__date"> 19.11.21</div>
                                            <a href="#" class="card-news__link">Новое сезонное предложение <br>для держателей карт с кешбэком «Зимние подарки»</a>
                                        </div>
                                        <!-- card-news end -->
                                    </div>
                                </div>
                                <div data-aos="fade-left-5" data-aos-duration="1500" data-aos-delay="500" data-aos-anchor=".carousel_news" class="news-slider__item swiper-slide">
                                    <div class="news-slider__item-animate">
                                        <!-- card-news -->
                                        <div class="card-news">
                                            <div class="card-news__date"> 19.11.21</div>
                                            <a href="#" class="card-news__link">Новое сезонное предложение <br>для держателей карт с кешбэком «Зимние подарки»</a>
                                        </div>
                                        <!-- card-news end -->
                                    </div>
                                </div>
                                <div class="news-slider__item swiper-slide">
                                    <div class="news-slider__item-animate">
                                        <!-- card-news -->
                                        <div class="card-news">
                                            <div class="card-news__date"> 19.11.21</div>
                                            <a href="#" class="card-news__link">Новое сезонное предложение <br>для держателей карт с кешбэком «Зимние подарки»</a>
                                        </div>
                                        <!-- card-news end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-slider__arrows slider-arrows">
                            <div data-aos="fade-up-10" data-aos-duration="1000" data-aos-anchor=".carousel_news" class="slider-arrows__arrow slider-arrows__arrow--prev">
                                <button class=" btn-slider-arrow swiper-button-prev">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-arrow-left"></use>
                                    </svg>
                                </button>
                            </div>
                            <div data-aos="fade-up-10" data-aos-duration="1000" data-aos-delay="200" data-aos-anchor=".carousel_news" class="slider-arrows__arrow slider-arrows__arrow--next">
                                <button class="btn-slider-arrow swiper-button-next">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-arrow-right"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="news-slider__pagination swiper-pagination swiper-pagination_gray"></div>
                        <div class="news-slider__mob">
                            <div class="news-slider__mob-list"></div>
                            <a href="#" class="news-slider__more btn-secondary-s">Все новости</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- carousel end -->
    </main>
@endsection
