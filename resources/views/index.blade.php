@extends('layouts.main')

@section('title')
    Главная
@endsection

@section('content')
<!-- <div id="popup" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">Закрыть</button>
			<div class="popup__text">
				Text
			</div>
		</div>
	</div>
</div> -->

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
@endsection
