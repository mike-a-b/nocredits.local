<?php
/*
Template Name: шаблон для страницы Выигранные дела
*/
get_header();
?>
	<div class="container-fluid post">
		<div class="container">
			<div class="row ">
				<div class="col">
					<h1>Выигранные дела</h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<?php while(have_posts()) : the_post(); ?>
						<div class="card">
							<div class="left_col">
								<img src="<?php echo get_field('cases_img')['url']; ?>"
								     alt="<?php echo get_field('cases_img')['alt']; ?>">
							</div>
							<div class="right_col">
                                <div class="right_col_worknumber">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
								<h4>
									<?php the_field('cases_fio'); ?>
								</h4>
								<p><?php the_field('cases_description'); ?></p>
								<div class="right_col__description">
									<div class="right_col__description__left">
										<div class="right_col__description__left-item">
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/icon_ellipse.png" alt="">Сумма долга:</span>
										</div>
										<div class="right_col__description__left-item">
											<span><img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/icon_ellipse.png" alt="">Результат:</span>
										</div>
									</div>
									<div class="right_col__description__right">
                                <span class="right_col__summa">
                                    <?php the_field('cases_summa'); ?> руб.
                                </span>
										<span>
                                    <?php the_field('cases_result'); ?>
                                </span>
									</div>
								</div>
								<div class="right_col__original">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/icon_skrepka.png" alt="">
									<p><a href="<?php echo get_field('cases_file')['url']; ?>" title="Нажмите чтобы открыть документ" target="_blank">Смотреть оригинал документа</a></p>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<div class="container wait-call main-content__wait-call">
			<div class="row">
				<div class="col">
					<h3>
						мы поможем списать ваши долги
					</h3>
					<p>Оставьте свой вопрос юристу и получите бесплатный ответ в течение 48 часов</p>
					<form class="main-content__form">
                        <input id="cases_name" type="text" placeholder="Ваше имя" name="username" required>
                        <input id="cases_phone" type="text" placeholder="Контактный телефон" name="user_telephone">
                        <input id="cases__form__submit" type="submit" value="Нужна консультация" class="sendButton"
                               data-href="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" disabled>
					</form>
					<p>Заполняя форму, Вы соглашатесь на обработку персональных данных</p>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
?>
<script type="application/javascript">
    let phoneMask6 = IMask(
        document.getElementById('cases_phone'), {
            mask: '+{7}(000)000-00-00'
        });
    var nameMask6 = IMask(
        document.getElementById('cases_name'), {
            mask: '[aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa]'
        });

    let cases_name = document.querySelector('#cases_name');
    cases_name.addEventListener('change', function() {
        if(cases_name.value !== '') document.getElementById('cases__form__submit').disabled= false;
    });
</script>
