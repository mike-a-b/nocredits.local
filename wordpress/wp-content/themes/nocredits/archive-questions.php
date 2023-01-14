<?php
get_header();
?>

<div class="container-fluid faq">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>
					Вопросы и ответы
				</h1>
				<p>Если Вы не найдете ответ на интересующий вопрос, Вы можете задать его ниже</p>
				<div class="faq__search">
<!--					<form method="get" name="searchform" id="searchform" action="--><?php //bloginfo('siteurl')?><!--">-->
						<label for="faq__search__input"></label>
						<input id="faq__search__input" type="text" class="faq__search__input" placeholder="Задать вопрос">
<!--					</form>-->
				</div>
				<div class="faq__names">
					<button type="button" class="btn btn-primary">Алименты</button>
					<button type="button" class="btn btn-primary unchecked">Тема вопроса</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php
				$my_posts = get_posts( array(
					'numberposts' => 20,
					'post_type'   => 'questions',
				) );
				global $post;
				foreach( $my_posts as $post ) :
					setup_postdata( $post );
					?>
				<div class="faq__card">
					<div class="faq__card__name">
						Алименты
					</div>
					<div class="faq__card__description">
						<?php
                        the_content();
                        ?>
						<a href="<?php the_permalink(); ?>">
                            <div class="faq__card__readmore">
                            </div> </a>
					</div>
					<div class="faq__card__date">
						<?php echo get_the_date(); ?>
					</div>
				</div>
				<?php endforeach;
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container wait-call">
		<div class="row">
			<div class="col">
				<h3>
					не нашли нужного ответа?
				</h3>
				<p class="wait-call__content" style="font-size: 18px;">Оставьте свой вопрос юристу и получите бесплатный ответ в течение 48 часов</p>
				<form action="#">
					<input type="text" placeholder="Ваш вопрос">
					<input type="text" placeholder="Ваше имя">
					<input type="text" placeholder="Контактный телефон">
					<input type="submit" value="Жду звонка">
				</form>
                <p class="wait-call__p">Заполняя форму, Вы соглашатесь на <a class="wait-call__p" href="/policy/">обработку персональных данных</a></p>
            </div>
		</div>
	</div>
</div>
<div class="wait-call__background_emblema">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/emblem.png" alt="не нашли нужного ответа?">
</div>

<?php get_footer(); ?>
