<?php
get_header();
?>

<div class="container-fluid articles">
	<?php
	    if(have_posts()) :
	?>
	<div class="container">
		<div class="row ">
			<h1>
                статьи и советы
            </h1>
			<div class="col articles__background">
				<div class="articles__header">
					<h1 class="articles__header_h1">
						Сбербанк снизил ставки по вкладам<br> и потребительским кредитам
					</h1>
					<p>
						Минимальная ставка по кредитам снизилась с 21,9 до 19,9%.<br>
						8 апреля ЦБ понизил ключевую ставку с 20 до 17%. По данным<br>
						с сайта банка, снизились и ставки по вкладам для физлиц
					</p>
					<p>08.08.2022, Автор</p>
					<p><a href="#">Подробнее <b> > </b></a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container popular">
		<div class="row">
			<div class="col-4">
				<div class="popular__header">
					<div class="popular__header__left">
						<h3>
							Популярное
						</h3>
					</div>
				</div>
			</div>
			<div class="col-8">
				<div class="popular__header__right">
					<a href="#"><img src="images/arrowleft_icon.png" alt="Влево"></a>
					<a href="#"><img src="images/arrowright_icon.png" alt="Вправо"></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col popular__articles">
				<div class="popular__articles__card col-4">
					<img src="images/articles_image.png" alt="изображение статьи">
					<div class="popular__articles__wrapper">
						<p>Сбербанк снизил ставки<br>
							по вкладам и потребительским<br>
							кредитам
						</p>
						<p>Минимальная ставка по кредитам<br> снизилась с 21,9 до 19,9%. 8 апреля ЦБ<br>
							понизил ключевую ставку с 20 до 17%.<br>По данным с сайта банка, снизились и<br>
							ставки по вкладам для физлиц
						</p>
						<p>08.08.2022, Автор</p>
						<p><a href="#">Подробнее <b> > </b></a></p>
					</div>
				</div>
				<div class="popular__articles__card col-4">
					<img src="images/articles_image.png" alt="изображение статьи">
					<div class="popular__articles__wrapper">
						<p class="">Сбербанк снизил ставки<br>
							по вкладам и потребительским<br>
							кредитам
						</p>
						<p>Минимальная ставка по кредитам<br> снизилась с 21,9 до 19,9%. 8 апреля ЦБ<br>
							понизил ключевую ставку с 20 до 17%.<br>По данным с сайта банка, снизились и<br>
							ставки по вкладам для физлиц
						</p>
						<p>08.08.2022, Автор</p>
						<p><a href="#">Подробнее <b> > </b></a></p>
					</div>
				</div>
				<div class="popular__articles__card col-4">
					<img src="images/articles_image.png" alt="изображение статьи">
					<div class="popular__articles__wrapper">
						<p>Сбербанк снизил ставки<br>
							по вкладам и потребительским<br>
							кредитам
						</p>
						<p>Минимальная ставка по кредитам<br> снизилась с 21,9 до 19,9%. 8 апреля ЦБ<br>
							понизил ключевую ставку с 20 до 17%.<br>По данным с сайта банка, снизились и<br>
							ставки по вкладам для физлиц
						</p>
						<p>08.08.2022, Автор</p>
						<p><a href="#">Подробнее <b> > </b></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container allarticles">
		<div class="row">
			<div class="col">
				<div class="allarticles__header">
					<h3>
						Все публикации
					</h3>
				</div>
				<div class="allarticles__filters">
					<button type="button" class="btn btn-primary">Банки</button>
					<button type="button" class="btn btn-primary unchecked">Недвижимость</button>
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
			<div class="col allarticles__articles">
				<div class="allarticles__articles__card col">
					<img src="images/articles_image.png" alt="изображение статьи">
					<div class="allarticles__articles__wrapper">
						<p>Сбербанк снизил ставки
							по вкладам и потребительским
							кредитам
						</p>
						<p>Минимальная ставка по кредитам снизилась с 21,9 до 19,9%. 8 апреля ЦБ
							понизил ключевую ставку с 20 до 17%.По данным с сайта банка, снизились и
							ставки по вкладам для физлиц
						</p>
						<p>08.08.2022, Автор</p>
						<p><a href="#">Подробнее <b> > </b></a></p>
					</div>
				</div>
				<div class="allarticles__articles__card col">
					<img src="images/articles_image.png" alt="изображение статьи">
					<div class="allarticles__articles__wrapper">
						<p class="">Сбербанк снизил ставки
							по вкладам и потребительским
							кредитам
						</p>
						<p>Минимальная ставка по кредитам снизилась с 21,9 до 19,9%. 8 апреля ЦБ
							понизил ключевую ставку с 20 до 17%.По данным с сайта банка, снизились и
							ставки по вкладам для физлиц
						</p>
						<p>08.08.2022, Автор</p>
						<p><a href="#">Подробнее <b> > </b></a></p>
					</div>
				</div>
				<div class="allarticles__articles__card col">
					<img src="images/articles_image.png" alt="изображение статьи">
					<div class="allarticles__articles__wrapper">
						<p>Сбербанк снизил ставки
							по вкладам и потребительским
							кредитам
						</p>
						<p>Минимальная ставка по кредитам снизилась с 21,9 до 19,9%. 8 апреля ЦБ
							понизил ключевую ставку с 20 до 17%.По данным с сайта банка, снизились и
							ставки по вкладам для физлиц
						</p>
						<p>08.08.2022, Автор</p>
						<p><a href="#">Подробнее <b> > </b></a></p>
					</div>
				</div>
				<div class="allarticles__articles__card col">
					<img src="images/articles_image.png" alt="изображение статьи">
					<div class="allarticles__articles__wrapper">
						<p class="">Сбербанк снизил ставки
							по вкладам и потребительским
							кредитам
						</p>
						<p>Минимальная ставка по кредитам снизилась с 21,9 до 19,9%. 8 апреля ЦБ
							понизил ключевую ставку с 20 до 17%.По данным с сайта банка, снизились и
							ставки по вкладам для физлиц
						</p>
						<p>08.08.2022, Автор</p>
						<p><a href="#">Подробнее <b> > </b></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
        else :
    ?>
            <div class="container">
                <div class="row ">

                    <h1>
                        статьи и советы
                    </h1>
                    <div class="col articles__background">
                        <div class="articles__header">
                            <h1 class="articles__header_h1">
                                Нет статей
                            </h1>
                            <p>

                            </p>
                            <p></p>
                            <p><a href="#">Подробнее <b> > </b></a></p>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endif;
    ?>
</div>
<?php
get_footer();
?>
