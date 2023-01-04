<?php
/*
Template Name: шаблон для главной страницы nocredits page main.php
*/
get_header();
?>
<div class="container-fluid article2">
    <div class="container">
        <div class="row ">
            <div class="col-md-4">
                <img class="article2__left-image" src="images/woman2.png" alt="" >
            </div>
            <div class="col-md-7 right">
                <h3>Обо мне</h3>
                <h1>ДОРОГИЕ ДРУЗЬЯ,<br>ДАВАЙТЕ ЗНАКОМИТЬСЯ!</h1>
                <P>Меня зовут Андрей Борисович. За 20 лет юридической практики наработан большой опыт в подготовке всех видов процессуальных документов, выработке правовой позиции, представительстве интересов в суде. Интересы клиентов представляются как в судах общей юрисдикции,
                    так и в арбитражных. Работа ведется как с гражданами, так
                    и с юридическими лицами. Имеется опыт ведения дел в контролирующих органах.
                    <br>В 1999 г. закончил Тверской государственный университет по специальности юриспруденция.
                </P>
                <div class="article2__description">
                    <div class="article2__left-description">20+
                        <p>лет юридической<br>практики</p>
                    </div>
                    <div class="article2__right-description">50
                        <p>выигранных<br>споров</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container article2__footer">
        <div class="row">
            <div class="col">
                <h1>Плюсы и минусы банкротства</h1>
                <button id="btn1" type="button" class="btn btn-primary " onclick="btn1onclick">Судебное банкротство</button>
                <button id="btn2" type="button" class="btn btn-primary unchecked" onclick="btn2onclick()">Банкротство через МФЦ</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="article2__footer__plus-list">
                    <li>Полное освобождение от долгов</li>
                    <li>Снятие ареста с имущества (которое наложили
                        до банкротства)</li>
                    <li>Единственное жилье сохраняется (в реализации)</li>
                    <li>Сохраняется все имущество (в реструктуризации)</li>
                    <li>Снимается запрет на выезд за границу</li>
                    <li>Кредиторы и коллекторы не имеют права беспокоить</li>
                    <li>Долги по кредитам, ипотеке, налогам списываются</li>
                </ul>
            </div>
            <div class="col">
                <ul class="article2__footer__minus-list">
                    <li>Стоит от 50 тысяч рублей и больше </li>
                    <li>Может длиться до 3 лет (реструктуризация)</li>
                    <li>Залоговое имущество реализуется, даже если<br></be> жилье единственное (реализация)</li>
                    <li>Кредитная история испорчена (но из-за самих долгов)</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid faq">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>
                    Вопрос-ответ
                </h3>
                <h1>
                    Часто задаваемые вопросы
                </h1>
                <div class="faq__names">
                    <button type="button" class="btn btn-primary">Алименты</button>
                    <button type="button" class="btn btn-primary unchecked">Тема вопроса</button>
                    <button type="button" class="btn btn-primary unchecked">Тема вопроса</button>
                    <button type="button" class="btn btn-primary unchecked">Тема вопроса</button>
                    <button type="button" class="btn btn-primary unchecked">Тема вопроса</button>
                    <button type="button" class="btn btn-primary unchecked">Тема вопроса</button>
                    <button type="button" class="btn btn-primary unchecked">Тема вопроса</button>
                    <button type="button" class="btn btn-primary readmore">Показать еще</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="faq__card">
                    <div class="faq__card__name">
                        Алименты
                    </div>
                    <div class="faq__card__description">
                        Может ли суд назначить алименты в твердой сумме,
                        если у плательщика изменилась жизненная ситуация
                        в худшую сторону по состоянию здоровья?
                        <div class="faq__card__readmore">
                        </div>
                    </div>
                    <div class="faq__card__date">
                        09.09.2022
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="faq__card">
                    <div class="faq__card__name">
                        Алименты
                    </div>
                    <div class="faq__card__description">
                        Может ли суд назначить алименты в твердой сумме,
                        если у плательщика изменилась жизненная ситуация
                        в худшую сторону по состоянию здоровья?
                        <div class="faq__card__readmore">
                        </div>
                    </div>
                    <div class="faq__card__date">
                        09.09.2022
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="faq__card">
                    <div class="faq__card__name">
                        Алименты
                    </div>
                    <div class="faq__card__description">
                        Может ли суд назначить алименты в твердой сумме,
                        если у плательщика изменилась жизненная ситуация
                        в худшую сторону по состоянию здоровья?
                        <div class="faq__card__readmore">
                        </div>
                    </div>
                    <div class="faq__card__date">
                        09.09.2022
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="faq__card">
                    <div class="faq__card__name">
                        Алименты
                    </div>
                    <div class="faq__card__description">
                        Может ли суд назначить алименты в твердой сумме,
                        если у плательщика изменилась жизненная ситуация
                        в худшую сторону по состоянию здоровья?
                        <div class="faq__card__readmore">
                        </div>
                    </div>
                    <div class="faq__card__date">
                        09.09.2022
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="faq__card">
                    <div class="faq__card__name">
                        Алименты
                    </div>
                    <div class="faq__card__description">
                        Может ли суд назначить алименты в твердой сумме,
                        если у плательщика изменилась жизненная ситуация
                        в худшую сторону по состоянию здоровья?
                        <div class="faq__card__readmore">
                        </div>
                    </div>
                    <div class="faq__card__date">
                        09.09.2022
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="faq__card">
                    <div class="faq__card__name">
                        Алименты
                    </div>
                    <div class="faq__card__description">
                        Может ли суд назначить алименты в твердой сумме,
                        если у плательщика изменилась жизненная ситуация
                        в худшую сторону по состоянию здоровья?
                        <div class="faq__card__readmore">
                        </div>
                    </div>
                    <div class="faq__card__date">
                        09.09.2022
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="faq__readall">
                    <a href="#">Смотреть все вопросы<img src="images/readall__arrow.png" alt="смотреть все" class="faq__readall__image"></a>
                </div>
            </div>
        </div>
        <div class="row faq__question">
            <div class="col-8">
                <h1>Онлайн-консультация с юристом</h1>
                <p>Получите ответ на интересующий Вас вопрос в течение 48 часов</p>
                <form action="#">
                    <div>
                        <textarea class="faq__question__textarea" name="question"  placeholder="Задать вопрос"></textarea>
                        <button type="submit" class="btn btn-primary faq__question__sendbutton">Отправить
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-4 faq__question__image">
                <img src="images/woman_ellipse.png" alt="" class="faq__question__womanimg" >
                <img src="images/emblem.png" alt="" class="faq__image--emblema">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container results">
        <div class="row">
            <div class="col results__header">
                <h1 class="results__h1">В результате вы получаете</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 results__item">
                <img src="images/check_icon.png" alt="">
                <h2>Списание всех долгов</h2>
                <p>Независимо от количества кредиторов и размера долгов все долги будут списаны.
                    Исключение составляют долги по алиментам, нанесение физического вреда.</p>
            </div>
            <div class="col-4 results__item">
                <img src="images/check_icon.png" alt="">
                <h2>Списание всех долгов</h2>
                <p>Независимо от количества кредиторов и размера долгов все долги будут списаны.
                    Исключение составляют долги по алиментам, нанесение физического вреда.</p>
            </div>
            <div class="col-4 results__item">
                <img src="images/check_icon.png" alt="">
                <h2>Списание всех долгов</h2>
                <p>Независимо от количества кредиторов и размера долгов все долги будут списаны.
                    Исключение составляют долги по алиментам, нанесение физического вреда.</p>
            </div>
        </div>
        <div class="row results__price">
            <div class="col-6">
                <h1>
                    от чего зависит<br>стоимость услуги
                </h1>
                <h4>
                    Стоимость услуги<br> начинается от 10 000 руб.
                </h4>
            </div>
            <div class="col-6">
                <ul>
                    <li>
                        <b>Количество кредиторов:</b> чем больше участников, тем больше уведомлений, заседаний, споров и работы юриста.
                    </li>
                    <li>
                        <b>Состав имущества:</b> каждый объект собственности, который нужно продать, требует затрат на публикации
                        и госпошлину, торговую площадку и оценщика. Больше лотов — больше затрат.
                    </li>
                    <li>
                        Имеет значение <b>долевая или совместная собственность</b>
                        на объекты, <b>статус ИП.</b> Стоимость рассчитывается, исходя из конкретной ситуации клиента.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container wait-call">
        <div class="row">
            <div class="col">
                <h3>
                    не нашли нужного ответа?
                </h3>
                <p>Оставьте свой вопрос юристу и получите бесплатный ответ в течение 48 часов</p>
                <form action="#">
                    <input type="text" placeholder="Ваш вопрос">
                    <input type="text" placeholder="Ваше имя">
                    <input type="text" placeholder="Контактный телефон">
                    <input type="submit" value="Жду звонка">
                </form>
                <p>Заполняя форму, Вы соглашатесь на обработку персональных данных</p>
            </div>
        </div>
    </div>
    <div class="container readyworks">
        <div class="row">
            <div class="col-4">
                <div class="readyworks__header">
                    <div class="readyworks__header__left">
                        <h3>
                            Завершенные дела
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="readyworks__header__right">
                    <a href="#"><img src="images/arrowleft_icon.png" alt=""></a>
                    <a href="#"><img src="images/arrowright_icon.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row rw">
            <div class="col-4 readyworks__block">
                <h4>Дело А76-5893/2021</h4>
                <div class="readyworks__block__summa">
                    <img src="images/wallet_icon.png" alt="">
                    <span>Списанная сумма</span>
                    <p>580 000 руб</p>
                </div>
                <div class="readyworks__block__duration">
                    <img src="images/clock_icon.png" alt="">
                    <span style="">Длительность</span>
                    <p>10 мес. 22 дн.</p>
                </div>
                <a href="#">Смотреть дело ></a>
            </div>
            <div class="col-4 readyworks__block">
                <h4>Дело А76-5893/2021</h4>
                <div class="readyworks__block__summa">
                    <img src="images/wallet_icon.png" alt="">
                    <span>Списанная сумма</span>
                    <p>580 000 руб</p>
                </div>
                <div class="readyworks__block__duration">
                    <img src="images/clock_icon.png" alt="">
                    <span style="">Длительность</span>
                    <p>10 мес. 22 дн.</p>
                </div>
                <a href="#">Смотреть дело ></a>
            </div>
            <div class="col-4 readyworks__block">
                <h4>Дело А76-5893/2021</h4>
                <div class="readyworks__block__summa">
                    <img src="images/wallet_icon.png" alt="">
                    <span>Списанная сумма</span>
                    <p>580 000 руб</p>
                </div>
                <div class="readyworks__block__duration">
                    <img src="images/clock_icon.png" alt="">
                    <span style="">Длительность</span>
                    <p>10 мес. 22 дн.</p>
                </div>
                <a href="#">Смотреть дело ></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid video">
    <div class="container ">
        <div class="row">
            <div class="col">
                <h1>ВИДЕО</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="video__item">
                </div>
                <h6>Заголовок видео</h6>
            </div>
            <div class="col-4">
                <div class="video__item">
                </div>
                <h6>Заголовок видео</h6>
            </div>
            <div class="col-4">
                <div class="video__item">
                </div>
                <h6>Заголовок видео</h6>
            </div>
        </div>
    </div>
    <div class="container video__endarticle">
        <div class="row">
            <div class="col-4">
                <img src="images/woman_endarticle.png" alt="">
                <input type="button" class="btn btn-primary" value="Бесплатная консультация">
            </div>
            <div class="col-8 video__endarticle__rightcolumn">
                <h6>Полезно знать</h6>
                <h1>Законный способ<br>избавиться от долгов</h1>
                <p>По закону о банкротстве физических лиц человек, который не может платить кредиты и займы, вправе объявить банкротство и освободиться от долгов.<br><br>
                    В 2022 году банкротство можно признать через арбитражный суд или через МФЦ. Банкротство в суде доступно физлицам независимо от наличия имущества, уровня доходов и исполнительных производств. Суд официально списывает задолженности без ограничения по сумме долга.<br><br>
                    Внесудебное банкротство через МФЦ позволяет бесплатно списать долги,
                    но сумма ограничена — 500 тысяч рублей. Также обязательно, чтобы приставы провели исполнительное производство и закрыли дело.<br><br>
                    На сайте мы рассказываем, что такое банкротство гражданина, каковы требования и последствия, что делать с приставами, коллекторами, банками
                    и МФО. Вы можете получить бесплатную консультацию по своему вопросу
                    либо заказать план банкротства.</p>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>