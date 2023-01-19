<?php
/*
Template Name: шаблон для страницы Обо мне
 *
 */

get_header();
?>

<div class="container-fluid about">
	<div class="container">
		<div class="row ">
			<div class="col about__background">
				<div class="about__header">
					<p class="about__header_p1">
						юрист - это экспертность и ответственность
					</p>
					<p class="about__header_p2">
						Я помогаю людям развивать финансовую грамотность, избавиться от неподъемных выплат по кредитам, займам и долгам, сохранив свое имущество.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container about-text">
		<div class="row">
			<div class="col">
				<div class="about-text__left-items">
                    <?php
                        while(have_posts()) :
                            the_post();
                        the_content();
                        endwhile;
                    ?>
				</div>
				<div class="about-text__right-items">
					<div>20+
						<p>на рынке юридических<br> услуг, 5 лет ведение дел<br> по банкротству физлиц</p>
					</div>
					<div>1200
						<p>дел успешно завершены<br>в 2017-22 годах</p>
					</div>
					<div>900
						<p>общая сумма списанных<br> долгов физических лиц<br>
							и предпринимателей</p>
					</div>
				</div>
                <img class="fon__emblema" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/emblem.png" alt="Я помогаю людям развивать финансовую грамотность, избавиться от неподъемных выплат">
<!--                <img class="fon__emblema--laptop" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/src/images/emblem_laptop.png" alt="Я помогаю людям развивать финансовую грамотность, избавиться от неподъемных выплат">-->
                <img class="fon__emblema--mobile" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/emblem_mobile.png" alt="Я помогаю людям развивать финансовую грамотность, избавиться от неподъемных выплат">
            </div>
		</div>
	</div>
</div>

<div class="container-fluid about-results">
	<div class="container results">
		<div class="row">
			<div class="col-4 results__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/check_icon.png" alt="">
				<h2>Без посредников</h2>
				<p>Вы лично общаетесь с Финансовым управляющим,
					который будет вести Вашу процедуру и просить суд списать долги.</p>
			</div>
			<div class="col-4 results__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/check_icon.png" alt="">
				<h2>Без риска</h2>
				<p>Вы лично общаетесь с Финансовым управляющим,
					который будет вести Вашу процедуру и просить суд списать долги.</p>
			</div>
			<div class="col-4 results__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/check_icon.png" alt="">
				<h2>Без переплат</h2>
				<p>Вы лично общаетесь с Финансовым управляющим,
					который будет вести Вашу процедуру и просить суд списать долги.</p>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>