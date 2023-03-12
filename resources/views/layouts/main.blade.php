<!DOCTYPE html>
<html lang="ru">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{ asset('css/style.min.css?_v=20230227235809') }}">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="transition_disabled">
<div id="app">
    <div class="wrapper">
        @include('headers.default')
            <main class="page">
                @yield('content')
            </main>
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__body">
                    <div class="footer__top">
                        <div class="footer__top-wrap">
                            <nav class="footer__menu ">
                                <div class="footer-menu">
                                    <ul class="footer-menu__list">
                                        <li class="footer-menu__item"><a href="#" class="footer-menu__link link">Частным клиентам</a></li>
                                        <li class="footer-menu__item"><a href="#" class="footer-menu__link link">Бизнес клиентам</a></li>
                                        <li class="footer-menu__item"><a href="#" class="footer-menu__link link">Премиум</a></li>
                                        <li class="footer-menu__item"><a href="#" class="footer-menu__link link">Обратная связь</a></li>
                                    </ul>
                                </div>
                            </nav>

                            <div class="footer__services mobile-platform">
                                <a href="#" class="app-platform">
                                    <img src="img/app-store-2.svg" alt="">
                                </a>
                                <a href="#" class="app-platform">
                                    <img src="img/google-play-2.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer__mob"></div>
                    <div class="footer__middle">
                        <div class="footer__middle-wrap">
                            <div data-da=".footer__top-wrap, 767.98" class="footer__contacts">
                                <div class="footer__phones">
                                    <div class="footer-phones">
                                        <div class="footer-phones__item">
                                            <a href="tel:88001009889" class="footer-phones__nubmer link">8 (800) 100 98 89</a>
                                            <span class="footer-phones__label">Бесплатный звонок по России</span>
                                        </div>
                                        <div class="footer-phones__item">
                                            <a href="tel:84957756555" class="footer-phones__nubmer link">8 (495) 775 65 55</a>
                                            <span class="footer-phones__label">Для звонков из Москвы</span>
                                        </div>
                                        <div class="footer-phones__item">
                                            <a href="tel:89257756555" class="footer-phones__nubmer link">8 (925) 775 65 55</a>
                                            <span class="footer-phones__label">Для сообщений в Whatsapp</span>
                                        </div>
                                    </div>
                                </div>
                                <div data-da=".footer__mob, 767.98, 1" class="footer__address">
                                    <div class="footer-address">
                                        <span>Головной офис: Москва 119021, <br>
                                            Зубовский бульвар, дом 25</span>
                                    </div>
                                </div>
                                <div data-da=".footer-links__list, 1359.98" class="footer__socials">
                                    <div data-da=".footer__mob, 767.98, 0" class="footer-socials">
                                        <div class="footer-socials__wrap">
                                            <a href="#" class="footer-socials__link link">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-tg"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="footer-socials__link link">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-vk"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="footer-socials__link link">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-wtsp"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="footer-socials__link link">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-viber"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="footer-socials__link link">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-facebook"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="footer-socials__link link">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-instagram"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer__links">
                                <div class="footer-links">
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Ипотечный агент «Фора 2014»</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Нормативные документы</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Публичные тендеры</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Часто задаваемые вопросы</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Партнёры банка</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Вопросы и ответы юрлиц</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Карьера</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Недвижимость и залоговое имущество от банка</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Фатка</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Карта сайта</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Обработка персональных данных</a></li>
                                        <li class="footer-links__item"><a href="#" class="footer-links__link link">Вопросы и ответы физлиц</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bot">
                        <div class="footer__bot-wrap">
                            <div class="footer__copyright">
                                <div class="footer-copyright">
                                    <span>© Все права защищены АКБ «ФОРА-БАНК» (АО) 2008 - 2021 г. Генеральная лицензия ЦБ РФ №1885. Адрес головного офиса банка: Москва, 119021, Зубовский
                                        бульвар, дом 25.
                                    </span>
                                    <a href="#" target="_blank" rel="noopener noreferrer" class="footer-copyright__link link">Информация о процентных ставках по договорам банковского вклада с
                                        физическими
                                        лицами.</a>
                                    <a href="#" target="_blank" rel="noopener noreferrer" class="footer-copyright__link link">Информация о лицах, под контролем либо значительным влиянием которых
                                        находится
                                        Банк.</a>
                                    <a href="#" target="_blank" rel="noopener noreferrer" class="footer-copyright__link link">Информация о Банке как о профессиональном участнике рынка ценных
                                        бумаг.</a>
                                    <a href="#" target="_blank" rel="noopener noreferrer" class="footer-copyright__link link">Раскрытие информации для регулятивных целей.</a>
                                    <a href="#" target="_blank" rel="noopener noreferrer" class="footer-copyright__link link">АКБ ФОРА-БАНК (АО) является участником системы обязательного
                                        страхования
                                        вкладов.</a>
                                    <a href="#" target="_blank" rel="noopener noreferrer" class="footer-copyright__link link">Портал ЦБ РФ «Финансовая культура»</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div id="popup-private-cards" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка на дебетовую карту <br>«Всё включено»</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block">
                                    <div class="form__title">Выберите тип карты:</div>
                                    <div class="form__type-card type-card">
                                        <div class="type-card__item">
                                            <input hidden id="tc_1" class="type-card__input" checked type="radio" value="1" name="typecard">
                                            <label for="tc_1" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> PLATINUM</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_2" class="type-card__input" type="radio" value="2" name="typecard">
                                            <label for="tc_2" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> GOLD</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_3" class="type-card__input" type="radio" value="3" name="typecard">
                                            <label for="tc_3" class="type-card__label card-payment">
                                                <span class="card-payment__text">КАРТА <br> МИР</span>
                                                <img src="img/payment-system/mir.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_1" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_1" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-private-cards-2" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка для оформления зарплатного проекта</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block">
                                    <div class="form__title">Выберите тип карты:</div>
                                    <div class="form__type-card type-card">
                                        <div class="type-card__item">
                                            <input hidden id="tc_1" class="type-card__input" checked type="radio" value="1" name="typecard">
                                            <label for="tc_1" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> PLATINUM</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_2" class="type-card__input" type="radio" value="2" name="typecard">
                                            <label for="tc_2" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> GOLD</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_3" class="type-card__input" type="radio" value="3" name="typecard">
                                            <label for="tc_3" class="type-card__label card-payment">
                                                <span class="card-payment__text">КАРТА <br> МИР</span>
                                                <img src="img/payment-system/mir.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Выберите город" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_1" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_1" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-private-cards-3" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка для оформления зарплатного проекта</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block">
                                    <div class="form__title">Выберите тип карты:</div>
                                    <div class="form__type-card type-card">
                                        <div class="type-card__item">
                                            <input hidden id="tc_1" class="type-card__input" checked type="radio" value="1" name="typecard">
                                            <label for="tc_1" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> PLATINUM</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_2" class="type-card__input" type="radio" value="2" name="typecard">
                                            <label for="tc_2" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> GOLD</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_3" class="type-card__input" type="radio" value="3" name="typecard">
                                            <label for="tc_3" class="type-card__label card-payment">
                                                <span class="card-payment__text">КАРТА <br> МИР</span>
                                                <img src="img/payment-system/mir.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Выберите город" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Выберите офис" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Карта с кэшбэк" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Рубли" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_1" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_1" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-private-cards-4" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка для оформления зарплатного проекта</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block">
                                    <div class="form__title">Выберите тип карты:</div>
                                    <div class="form__type-card type-card">
                                        <div class="type-card__item">
                                            <input hidden id="tc_1" class="type-card__input" checked type="radio" value="1" name="typecard">
                                            <label for="tc_1" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> PLATINUM</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_2" class="type-card__input" type="radio" value="2" name="typecard">
                                            <label for="tc_2" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> GOLD</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_3" class="type-card__input" type="radio" value="3" name="typecard">
                                            <label for="tc_3" class="type-card__label card-payment">
                                                <span class="card-payment__text">КАРТА <br> МИР</span>
                                                <img src="img/payment-system/mir.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Кредитная программа" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_1" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_1" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-private-cards-5" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка для оформления зарплатного проекта</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block">
                                    <div class="form__title">Выберите тип карты:</div>
                                    <div class="form__type-card type-card">
                                        <div class="type-card__item">
                                            <input hidden id="tc_1" class="type-card__input" checked type="radio" value="1" name="typecard">
                                            <label for="tc_1" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> PLATINUM</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_2" class="type-card__input" type="radio" value="2" name="typecard">
                                            <label for="tc_2" class="type-card__label card-payment">
                                                <span class="card-payment__text">VISA <br> GOLD</span>
                                                <img src="img/payment-system/visa.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                        <div class="type-card__item">
                                            <input hidden id="tc_3" class="type-card__input" type="radio" value="3" name="typecard">
                                            <label for="tc_3" class="type-card__label card-payment">
                                                <span class="card-payment__text">КАРТА <br> МИР</span>
                                                <img src="img/payment-system/mir.svg" alt="" class="card-payment__img">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Тарифный план" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Оплата за обслуживание" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Валюта" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_1" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_1" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-request-business" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка на открытие расчётного счёта</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_2" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_2" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-request-business-2" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка на потребительский кредит<br>
                                    «Фора-Стандарт»</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" data-type="series" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Паспорт серия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" data-type="passport-number" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Паспорт номер</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" data-type="date" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Дата выдачи</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" data-type="passport-code" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Код подразделения</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" data-type="date" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Дата рождения</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Место рождения</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Место жительства</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Место работы. Название организации</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="num" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>ИНН организации</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="num" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Размер заработной платы</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-pseudo-label="Стаж на текущем месте работы" data-error="Сообщение об ошибке" data-show-selected data-class-modif="popup" class="select">
                                                <option value=""></option>
                                                <option value="2">Ретейл</option>
                                                <option value="3">Дизайн-услуги</option>
                                                <option value="4">Отельный бизнес</option>
                                                <option value="4">Фермерское хозяйство</option>
                                            </select>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Должность</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="num" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Основной телефон бухгалтерии</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-pseudo-label="Образование" data-error="Сообщение об ошибке" data-show-selected data-class-modif="popup" class="select">
                                                <option value=""></option>
                                                <option value="2">Ретейл</option>
                                                <option value="3">Дизайн-услуги</option>
                                                <option value="4">Отельный бизнес</option>
                                                <option value="4">Фермерское хозяйство</option>
                                            </select>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-pseudo-label="Семейное положение" data-error="Сообщение об ошибке" data-show-selected data-class-modif="popup" class="select">
                                                <option value=""></option>
                                                <option value="2">Ретейл</option>
                                                <option value="3">Дизайн-услуги</option>
                                                <option value="4">Отельный бизнес</option>
                                                <option value="4">Фермерское хозяйство</option>
                                            </select>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="num" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Дополнительный телефон для связи</span>
                                            </label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_2" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_2" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-request-business-3" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка для оформления карты <br>
                                    «Фора-Бизнес»</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Вид заявки" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Тариф" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_2" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_2" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-request-business-4" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка для оформления карты <br>
                                    «Фора-Бизнес»</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Регион" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_2" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_2" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-request-business-card" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка для оформления карты <br>
                                    «Фора-Бизнес»</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">
                                <div class="form__actions form-actions">
                                    <div class="form-actions__container">
                                        <div class="form-actions__body">
                                            <button data-close type="button" class="form-actions__button btn-secondary-l">Отменить</button>
                                            <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__block form__block_inputs">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Фамилия</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Имя</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Отчество</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input data-required="email" autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Email</span>
                                            </label>
                                        </div>
                                        <div class="form__input-wrap">
                                            <select data-required name="form[]" data-error="Сообщение об ошибке" data-pseudo-label="Выберите город" data-show-selected class="select">
                                                <option value=""></option>
                                                <option value="1">Город №1</option>
                                                <option value="2">Город №2</option>
                                                <option value="3">Город №3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form__columns">
                                        <div class="form__input-wrap">
                                            <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                            <button type="button" class="form__input-clear">
                                                <svg>
                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <button type="button" class="form__promocode">Получить код</button>
                                        <div class="form__input-wrap">
                                            <label class="form__input-label">
                                                <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                <button type="button" class="form__input-clear">
                                                    <svg>
                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                    </svg>
                                                </button>
                                                <span>Проверочный код</span>
                                            </label>
                                        </div>
                                        <div class="form__text">Введите проверочный код,<br>
                                            полученный по SMS.</div>
                                    </div>
                                    <div class="form__checkbox checkbox">
                                        <input data-required id="check_2" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                        <label for="check_2" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь на обработку моих персональных данных</span></label>
                                    </div>
                                    <a href="#" download="#" class="form__link">Согласие на обработку персональных данных (скачать)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-request-credit" aria-hidden="true" class="popup">
            <div class="popup__wrapper">
                <div class="popup__content">
                    <div class="popup__container">
                        <div class="popup__body">
                            <div class="popup__header">
                                <div class="popup__title">Заявка на открытие аккредитива</div>
                                <button data-close type="button" class="popup__close round-button-48">
                                    <svg>
                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <form data-dev action="" class="popup__form form">

                                <div class="form__block">
                                    <div class="form__title">Заполните все поля заявки</div>
                                    <div class="form__text">В ближайшее время вам позвонит сотрудник банка для подтверждения данных.
                                        Карту бесплатно доставит курьер, или вы можете забрать её в любом офисе.</div>
                                    <div class="form__steps">
                                        <div class="form__step _active">
                                            <div class="form__stepper stepper">
                                                <div class="stepper__item _active">
                                                    <div class="stepper__icon">
                                                    </div>
                                                    <div class="stepper__name">Плательщик</div>
                                                </div>
                                                <span></span>
                                                <div class="stepper__item">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Получатель</div>
                                                </div>
                                                <span></span>
                                                <div class="stepper__item">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Условия</div>
                                                </div>
                                                <span></span>
                                                <div class="stepper__item">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Дополнительно</div>
                                                </div>
                                            </div>
                                            <div class="form__attention card-attention">
                                                <div class="card-attention__icon"></div>
                                                <div class="card-attention__content">
                                                    <div class="card-attention__text">Все данные, указанные в заявке, должны быть подтверждены оригиналами документов в день проведения сделки с
                                                        аккредитивом.</div>
                                                    <div class="card-attention__text">Паспорт клиента должен быть действительным на дату обращения в Банк
                                                        по данным базы недействительных паспортов, представленной <a href="#">на сайте</a>
                                                        МВД России в сети Интернет.</div>
                                                </div>
                                            </div>
                                            <div class="form__wrap">
                                                <div class="form__subtitle">Сведения о плательщике*</div>
                                                <div class="form__columns">
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Фамилия</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Имя</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Отчество</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-required data-datepicker autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <svg class="form__input-icon">
                                                                <use xlink:href="img/icons/icons.svg#svg-calendar-2"></use>
                                                            </svg>
                                                            <span>Дата рождения</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Место рождения</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" data-type="pass-series-number" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Паспорт серия и номер</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-required data-datepicker autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <svg class="form__input-icon">
                                                                <use xlink:href="img/icons/icons.svg#svg-calendar-2"></use>
                                                            </svg>
                                                            <span>Дата выдачи</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" data-type="passport-code" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Код подразделения</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap form__input-wrap_wide">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Кем выдан</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap form__input-wrap_wide">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Адрес регистрации (пребывания)</span>
                                                        </label>
                                                    </div>
                                                    <hr>
                                                    <div class="form__input-wrap">
                                                        <select data-required name="form[]" data-pseudo-label="Выбрать город*" data-error="Сообщение об ошибке" data-show-selected class="select">
                                                            <option value=""></option>
                                                            <option value="2">Ретейл</option>
                                                            <option value="3">Дизайн-услуги</option>
                                                            <option value="4">Отельный бизнес</option>
                                                            <option value="4">Фермерское хозяйство</option>
                                                        </select>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <select data-required name="form[]" data-pseudo-label="Выбрать офис*" data-error="Сообщение об ошибке" data-show-selected class="select">
                                                            <option value=""></option>
                                                            <option value="2">Ретейл</option>
                                                            <option value="3">Дизайн-услуги</option>
                                                            <option value="4">Отельный бизнес</option>
                                                            <option value="4">Фермерское хозяйство</option>
                                                        </select>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-datepicker autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <svg class="form__input-icon">
                                                                <use xlink:href="img/icons/icons.svg#svg-calendar-2"></use>
                                                            </svg>
                                                            <span>Планируемая дата сделки</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Планируемое время сделки</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Контактное лицо*</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __ *" class="form__input input">
                                                        <button type="button" class="form__input-clear">
                                                            <svg>
                                                                <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Email</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form__actions form-actions">
                                                    <div class="form-actions__container">
                                                        <div class="form-actions__body">
                                                            <button type="button" class="form-actions__button form-actions__button-next btn-primary-l">Продолжить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form__step ">
                                            <div class="form__stepper stepper">
                                                <div class="stepper__item _complete">
                                                    <div class="stepper__icon">
                                                    </div>
                                                    <div class="stepper__name">Плательщик</div>
                                                </div>
                                                <span class="_complete"></span>
                                                <div class="stepper__item _active">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Получатель</div>
                                                </div>
                                                <span></span>
                                                <div class="stepper__item">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Условия</div>
                                                </div>
                                                <span></span>
                                                <div class="stepper__item">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Дополнительно</div>
                                                </div>
                                            </div>
                                            <div class="form__wrap">
                                                <div class="form__subtitle">Сведения о получателе</div>

                                                <div class="form__group">
                                                    <div class="form__columns">
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Фамилия</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Имя</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Отчество</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__group">
                                                    <div class="form__options options options_large">
                                                        <div class="form__label">Является ли получатель клиентом Фора-Банка?*</div>
                                                        <div data-required="radio" data-error="Сообщение об ошибке" class="options__wrap">
                                                            <div class="options__item">
                                                                <input hidden id="client_true" class="options__input" type="radio" value="true" name="option">
                                                                <label for="client_true" class="options__label"><span class="options__text">Да</span></label>
                                                            </div>
                                                            <div class="options__item">
                                                                <input hidden id="client_false" class="options__input" type="radio" value="false" name="option">
                                                                <label for="client_false" class="options__label"><span class="options__text">Нет</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="info-client" hidden>
                                                    <div class="form__columns">
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required data-datepicker autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <svg class="form__input-icon">
                                                                    <use xlink:href="img/icons/icons.svg#svg-calendar-2"></use>
                                                                </svg>
                                                                <span>Дата рождения</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Место рождения</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" data-type="pass-series-number" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Паспорт серия и номер</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required data-datepicker autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <svg class="form__input-icon">
                                                                    <use xlink:href="img/icons/icons.svg#svg-calendar-2"></use>
                                                                </svg>
                                                                <span>Дата выдачи</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" data-type="passport-code" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Код подразделения</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap form__input-wrap_wide">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Кем выдан</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap form__input-wrap_wide">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Адрес регистрации (пребывания)</span>
                                                            </label>
                                                        </div>
                                                        <hr>
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="num" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Сумма аккредитива (руб)*</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="num" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Срок действия аккредитива (дней)*</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__actions form-actions">
                                                <div class="form-actions__container">
                                                    <div class="form-actions__body">
                                                        <button type="button" class="form-actions__button form-actions__button-prev btn-secondary-l">
                                                            <svg>
                                                                <use xlink:href="img/icons/icons.svg#svg-arrow-left"></use>
                                                            </svg>
                                                            <span>Назад</span>
                                                        </button>
                                                        <button type="button" class="form-actions__button form-actions__button-next btn-primary-l">Продолжить</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form__step ">
                                            <div class="form__stepper stepper">
                                                <div class="stepper__item _complete">
                                                    <div class="stepper__icon">
                                                    </div>
                                                    <div class="stepper__name">Плательщик</div>
                                                </div>
                                                <span class="_complete"></span>
                                                <div class="stepper__item _complete">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Получатель</div>
                                                </div>
                                                <span class="_complete"></span>
                                                <div class="stepper__item _active">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Условия</div>
                                                </div>
                                                <span></span>
                                                <div class="stepper__item">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Дополнительно</div>
                                                </div>
                                            </div>
                                            <div class="form__wrap">
                                                <div class="form__subtitle">Условия раскрытия аккредитива</div>
                                                <div class="form__group">
                                                    <div class="form__columns">
                                                        <div class="form__input-wrap form__input-wrap_wide">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Наименование договора <span>перехода права собственности</span></span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap form__input-wrap_wide">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Вид недвижимости</span>
                                                            </label>
                                                        </div>
                                                        <div class="form__input-wrap form__input-wrap_wide">
                                                            <label class="form__input-label">
                                                                <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                                <button type="button" class="form__input-clear">
                                                                    <svg>
                                                                        <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                    </svg>
                                                                </button>
                                                                <span>Адрес недвижимости</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form__checks">
                                                    <div class="form__label">Документы для раскрытия аккредитива (выбрать из предложенного):</div>
                                                    <div class="form__checkbox checkbox">
                                                        <input id="doc_1" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                                        <label for="doc_1" class="checkbox__label"><span class="checkbox__text">Оригинал ДКП от __________(дата), с отметкой о гос. регистрации перехода
                                                                права
                                                                собственности, представленный в Банк для снятия копии </span></label>
                                                    </div>
                                                    <div class="form__checkbox checkbox">
                                                        <input checked id="doc_2" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                                        <label for="doc_2" class="checkbox__label"><span class="checkbox__text">Оригинал ДКП от __________(дата), с отметкой о гос. регистрации перехода
                                                                права
                                                                собственности, в котором тождественность документа на бумажном носителе электронному документу удостоверена нотариусом, представленный в
                                                                Банк
                                                                для снятия копии</span></label>
                                                    </div>
                                                    <div class="form__checkbox checkbox">
                                                        <input id="doc_2" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                                        <label for="doc_2" class="checkbox__label"><span class="checkbox__text">Нотариально заверенная копия ДКП от__________(дата)  с отметкой о гос.
                                                                регистрации перехода права собственности, в котором тождественность документа  удостоверена нотариусом</span></label>
                                                    </div>
                                                </div>
                                                <div class="form__separator">
                                                    <hr>
                                                </div>

                                                <div class="form__column">
                                                    <div class="form__input-wrap form__input-wrap_wide">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Документы для раскрытия аккредитива <span>помимо ДКП (указать полное и точное название)</span> </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form__separator">
                                                    <hr>
                                                </div>
                                                <div class="form__column">
                                                    <div class="form__input-wrap form__input-wrap_wide">
                                                        <label class="form__input-label">
                                                            <input data-required autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Реквизиты Получателя <span>для перечисления суммы аккредитива при его раскрытии</span> </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__actions form-actions">
                                                <div class="form-actions__container">
                                                    <div class="form-actions__body">
                                                        <button type="button" class="form-actions__button form-actions__button-prev btn-secondary-l">
                                                            <svg>
                                                                <use xlink:href="img/icons/icons.svg#svg-arrow-left"></use>
                                                            </svg>
                                                            <span>Назад</span>
                                                        </button>
                                                        <button type="button" class="form-actions__button form-actions__button-next btn-primary-l">Продолжить</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form__step ">
                                            <div class="form__stepper stepper">
                                                <div class="stepper__item _complete">
                                                    <div class="stepper__icon">
                                                    </div>
                                                    <div class="stepper__name">Плательщик</div>
                                                </div>
                                                <span class="_complete"></span>
                                                <div class="stepper__item _complete ">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Получатель</div>
                                                </div>
                                                <span class="_complete"></span>
                                                <div class="stepper__item _complete">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Условия</div>
                                                </div>
                                                <span class="_complete"></span>
                                                <div class="stepper__item _active">
                                                    <div class="stepper__icon">
                                                        <svg>
                                                            <use xlink:href="img/icons/icons.svg#svg-check"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="stepper__name">Дополнительно</div>
                                                </div>
                                            </div>
                                            <div class="form__wrap">
                                                <div class="form__subtitle">Дополнительные сведения</div>
                                                <div class="form__label">Тип планируемой сделки</div>
                                                <div class="form__options options options_large">
                                                    <div class="options__wrap">
                                                        <div class="options__item">
                                                            <input hidden id="type-deals-1" class="options__input" checked type="radio" value="true" name="type-deals">
                                                            <label for="type-deals-1" class="options__label"><span class="options__text">Прямая</span></label>
                                                        </div>
                                                        <div class="options__item">
                                                            <input hidden id="type-deals-2" class="options__input" type="radio" value="false" name="type-deals">
                                                            <label for="type-deals-2" class="options__label"><span class="options__text">Альтернативная</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__label">Требуется ли услуга «Автоматическое раскрытие аккредитива»?</div>
                                                <div class="form__options options options_large">
                                                    <div class="options__wrap">
                                                        <div class="options__item">
                                                            <input hidden id="auto-accr-1" class="options__input" checked type="radio" value="true" name="auto-accr">
                                                            <label for="auto-accr-1" class="options__label"><span class="options__text">Да</span></label>
                                                        </div>
                                                        <div class="options__item">
                                                            <input hidden id="auto-accr-2" class="options__input" type="radio" value="false" name="auto-accr">
                                                            <label for="auto-accr-2" class="options__label"><span class="options__text">Нет</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__column">
                                                    <div class="form__input-wrap form__input-wrap_wide">
                                                        <label class="form__input-label">
                                                            <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Индивидуальные условия <span>, если есть необходимость</span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form__separator">
                                                    <hr>
                                                </div>
                                                <div class="form__label">Подтвердите ваш номер телефона, чтобы отправить заявку</div>
                                                <div class="form__columns">
                                                    <div class="form__input-wrap">
                                                        <input data-required="tel" autocomplete="off" type="tel" name="form[]" data-error="Сообщение об ошибке" placeholder="+7 ( ___ ) ___ - __ - __" class="form__input input">
                                                        <button type="button" class="form__input-clear">
                                                            <svg>
                                                                <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button type="button" class="form__promocode">Получить код</button>
                                                    <div class="form__input-wrap">
                                                        <label class="form__input-label">
                                                            <input autocomplete="off" type="text" name="form[]" data-error="Сообщение об ошибке" placeholder="" class="form__input input">
                                                            <button type="button" class="form__input-clear">
                                                                <svg>
                                                                    <use xlink:href="img/icons/icons.svg#svg-close"></use>
                                                                </svg>
                                                            </button>
                                                            <span>Проверочный код</span>
                                                        </label>
                                                    </div>
                                                    <div class="form__text">Введите проверочный код,<br>
                                                        полученный по SMS.</div>
                                                </div>
                                                <div class="form__checkbox checkbox">
                                                    <input data-required id="check_111" data-error="" class="checkbox__input" type="checkbox" value="1" name="form[]">
                                                    <label for="check_111" class="checkbox__label"><span class="checkbox__text">Я соглашаюсь с <a href="#">условиями обработки</a> <br>
                                                            моих персональных данных</span></label>
                                                </div>
                                            </div>
                                            <div class="form__actions form-actions">
                                                <div class="form-actions__container">
                                                    <div class="form-actions__body">
                                                        <button type="button" class="form-actions__button form-actions__button-prev btn-secondary-l">
                                                            <svg>
                                                                <use xlink:href="img/icons/icons.svg#svg-arrow-left"></use>
                                                            </svg>
                                                            <span>Назад</span>
                                                        </button>
                                                        <button type="input" class="form-actions__button btn-primary-l">Отправить заявку</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.min.js?_v=20230227235809') }}" defer></script>
</body>
</html>
