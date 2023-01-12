<?php
/*
Template Name: шаблон для главной страницы nocredits
*/
get_header();
?>
<div class="container article">
	<div class="row ">
		<div class="col-7">
			<div class="speech1">Избавлю от долгов<br>и микрозаймов</div>
			<div class="article__left__list">
				<ul >
					<li>Работаю по всей России</li>
					<li>Даю гарантии в договоре</li>
					<li>Беру на себя общение с приставами</li>
					<li>Гибкие условия оплаты</li>
				</ul>
			</div>
            <div id="article__left-image__woman">
                <img style="position: relative;top: 0%;left: 0%;z-index: 5;" src="<?php echo get_template_directory_uri()?>/assets/src/images/left__woman.png" alt="">
                <img style="position: absolute;top: 47%;left: 50%;z-index: 1;" src="<?php echo get_template_directory_uri()?>/assets/src/images/emblem.png" alt="">
            </div>
            <input type="button" data-bs-toggle="modal" data-bs-target="#modal__question" class="btn button-consult" value="Бесплатная консультация">
		</div>
		<div class="col-5">
			<div class="right">
				<div class="article__right-image">
					<img class="article__right-image__woman" src="<?php echo get_template_directory_uri(). '/assets/src/images/woman.png'?>" alt="Избавлю от долгов<br>и микрозаймов">
					<img class="article__right-image__emblem" src="<?php echo get_template_directory_uri(). '/assets/src/images/emblem.png' ?>" alt="Избавлю от долгов<br>и микрозаймов">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid article2">
	<div class="container">
		<div class="row ">
			<div class="col-4 left">
				<img class="article2__left-image" src="<?php echo get_template_directory_uri(). '/assets/src/images/woman2.png'?>" alt="Обо мне" >
			</div>
			<div class="col-7 right">
				<h3>Обо мне</h3>
				<h1>ДОРОГИЕ ДРУЗЬЯ,<br>ДАВАЙТЕ ЗНАКОМИТЬСЯ!</h1>
				<p>Меня зовут Андрей Борисович. За 20 лет юридической практики наработан большой опыт в подготовке всех видов процессуальных документов, выработке правовой позиции, представительстве интересов в суде. Интересы клиентов представляются как в судах общей юрисдикции,
					так и в арбитражных. Работа ведется как с гражданами, так
					и с юридическими лицами. Имеется опыт ведения дел в контролирующих органах.
					<br>В 1999 г. закончил Тверской государственный университет по специальности юриспруденция.
				</p>
                <div class="article2__d">
                    <div id="article2__description__imagelaptop">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/woman2_laptop.png" alt="Обо мне">
                    </div>
                    <div id="article2__description__imagemobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/woman2_mobile.png" alt="Обо мне">
                    </div>
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
			<div class="col col-sm-12 col-xs-12">
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
			<div class="col col-sm-12 col-xs-12">
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
                <div id="faq__names__mobile">
                    <select name="faq__names" id="faq__names">
                        <option value="">Выберите тему вопроса</option>
                        <option value="">Тема вопроса</option>
                        <option value="">Тема вопроса</option>
                        <option value="">Тема вопроса</option>
                    </select>
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col faq_c">
				<div class="faq__card ">
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
			<div class="col faq_c">
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
			<div class="col faq_c">
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
			<div class="col faq_c">
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
			<div class="col faq_c">
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
			<div class="col faq_c">
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
					<a href="#">Смотреть все вопросы<img src="<?php echo get_template_directory_uri(). '/assets/src/images/readall__arrow.png'?>" alt="смотреть все" class="faq__readall__image"></a>
				</div>
			</div>
		</div>
		<div class="row faq__question">
			<div class="col-8">
				<h1>Онлайн-консультация с юристом</h1>
				<p>Получите ответ на интересующий Вас вопрос в течение 48 часов</p>
                <div class="faq__question__mobile">
                    <img src="<?php echo get_template_directory_uri(). '/assets/src/images/woman_ellipse.png'?>" alt="Онлайн-консультация с юристом" class="faq__question__womanimg--mobile" >
                    <img src="<?php echo get_template_directory_uri(). '/assets/src/images/emblem_mobile.png'?>" alt="Онлайн-консультация с юристом" class="faq__imageemblema--mobile">
                </div>
				<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
					<form>
						<textarea class="faq__question__textarea" name="question"  placeholder="Задать вопрос"></textarea>
                        <input type="hidden" name="action" value="nocredits_form_handle">
						<button type="submit" class="btn btn-primary faq__question__sendbutton">Отправить
						</button>
					</form>
				</form>
			</div>
			<div class="col-4 faq__question__image">
				<img src="<?php echo get_template_directory_uri(). '/assets/src/images/woman_ellipse.png'?>" alt="Онлайн-консультация с юристом" class="faq__question__womanimg" >
				<img src="<?php echo get_template_directory_uri(). '/assets/src/images/emblem.png'?>" alt="Онлайн-консультация с юристом" class="faq__image--emblema">
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
				<img src="<?php echo get_template_directory_uri(). '/assets/src/images/check_icon.png'?>" alt="Списание всех долгов">
				<h2>Списание всех долгов</h2>
				<p>Независимо от количества кредиторов и размера долгов все долги будут списаны.
					Исключение составляют долги по алиментам, нанесение физического вреда.</p>
			</div>
			<div class="col-4 results__item">
				<img src="<?php echo get_template_directory_uri(). '/assets/src/images/check_icon.png'?>" alt="Списание всех долгов">
				<h2>Списание всех долгов</h2>
				<p>Независимо от количества кредиторов и размера долгов все долги будут списаны.
					Исключение составляют долги по алиментам, нанесение физического вреда.</p>
			</div>
			<div class="col-4 results__item">
				<img src="<?php echo get_template_directory_uri(). '/assets/src/images/check_icon.png'?>" alt="">
				<h2>Списание всех долгов</h2>
				<p>Независимо от количества кредиторов и размера долгов все долги будут списаны.
					Исключение составляют долги по алиментам, нанесение физического вреда.</p>
			</div>
		</div>
		<div class="row results__price">
			<div class="col-5">
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
					<a href="#"><img src="<?php echo get_template_directory_uri(). '/assets/src/images/arrowleft_icon.png'?>" alt="Завершенные дела"></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(). '/assets/src/images/arrowright_icon.png'?>" alt="Завершенные дела"></a>
				</div>
			</div>
		</div>
		<div class="row rw">
			<div class="col-4 readyworks__block">
				<h4>Дело А76-5893/2021</h4>
                <div class="readyworks__block__line">
                    <div class="readyworks__block__summa">
                        <img src="<?php echo get_template_directory_uri(). '/assets/src/images/wallet_icon.png'?>" alt="Завершенные дела">
                        <span>Списанная сумма</span>
                        <p>580 000 руб</p>
                    </div>
                    <div class="readyworks__block__duration">
                        <img src="<?php echo get_template_directory_uri(). '/assets/src/images/clock_icon.png'?>" alt="Завершенные дела">
                        <span style="">Длительность</span>
                        <p>10 мес. 22 дн.</p>
                    </div>
                </div>
				<a href="#">Смотреть дело ></a>
			</div>
			<div class="col-4 readyworks__block">
				<h4>Дело А76-5893/2021</h4>
                <div class="readyworks__block__line">
                    <div class="readyworks__block__summa">
                        <img src="<?php echo get_template_directory_uri(). '/assets/src/images/wallet_icon.png'?>" alt="Завершенные дела">
                        <span>Списанная сумма</span>
                        <p>580 000 руб</p>
                    </div>
                    <div class="readyworks__block__duration">
                        <img src="<?php echo get_template_directory_uri(). '/assets/src/images/clock_icon.png'?>" alt="Завершенные дела">

                        <span style="">Длительность</span>
                        <p>10 мес. 22 дн.</p>
                    </div>
                </div>
				<a href="#">Смотреть дело ></a>
			</div>
			<div class="col-4 readyworks__block">
				<h4>Дело А76-5893/2021</h4>
                <div class="readyworks__block__line">
                    <div class="readyworks__block__summa">
                        <img src="<?php echo get_template_directory_uri(). '/assets/src/images/wallet_icon.png'?>" alt="Завершенные дела">
                        <span>Списанная сумма</span>
                        <p>580 000 руб</p>
                    </div>
                    <div class="readyworks__block__duration">
                        <img src="<?php echo get_template_directory_uri(). '/assets/src/images/clock_icon.png'?>" alt="Завершенные дела">
                        <span style="">Длительность</span>
                        <p>10 мес. 22 дн.</p>
                    </div>
                </div>
				<a href="#">Смотреть дело ></a>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid video">
	<div class="container ">
		<div class="row">
			<div class="col-4 col-sm-4 col-xs-4">
				<h1>ВИДЕО</h1>
			</div>
            <div class="col-8 col-sm-8 col-xs-8">
                <div class="video__header__right">
                    <a href="#"><img src="<?php echo get_template_directory_uri(). '/assets/src/images/arrowleft_icon.png'?>" alt="Завершенные дела"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(). '/assets/src/images/arrowright_icon.png'?>" alt="Завершенные дела"></a>
                </div>
            </div>
		</div>
		<div class="row video__items">
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
				<img src="<?php echo get_template_directory_uri(). '/assets/src/images/woman_endarticle.png'?>" alt="Бесплатная консультация">
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
            <div class="video__endarticle__laptop">
                <img src="<?php echo get_template_directory_uri(). '/assets/src/images/woman_endarticle_laptop.png'?>" alt="Бесплатная консультация">
                <input type="button" class="btn btn-primary" value="Бесплатная консультация">
            </div>
            <div class="video__endarticle__mobile">
                <img src="<?php echo get_template_directory_uri(). '/assets/src/images/woman_endarticle_mobile.png'?>" alt="Бесплатная консультация">
                <input type="button" class="btn btn-primary" value="Бесплатная консультация">
            </div>
		</div>
	</div>
</div>
<?php
get_footer();
?>
