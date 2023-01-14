<?php
get_header();
?>
<?php
global $count;
global $theid;
if (have_posts()) :
    the_post();
    $theid = get_the_ID();
?>
<div class="container-fluid post bubu">
	<div class="container">
		<div class="row ">
			<div class="col">
				<h4>Статьи <b> > </b></h4>
				<h1><?php the_title(); ?></h1>
				<div class="post__header">
					<div class="post__header-left">
						<img class="post__left-image" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/avatar_articles.png" alt="" >
					</div>
					<div class="post__header-right">
                        <h1><?php the_author(); ?></h1>
						<div class="post__header-right__stats">
							<div class="post__header-right__date">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/calendar_icon.png" alt="">
								<p><?php echo get_the_date(); ?></p>
							</div>
							<div class="post__header-right__views">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/eye_icon.png" alt="">
								<p><?php
									$views = get_post_meta(get_the_ID(), 'nocredits_views', true );

                                    $count = $views;
                                    echo $views; ?> просмотров</p>
							</div>
						</div>
					</div>
				</div>
				<div class="post__content">
					<h3>Содержание</h3>
					<div class="post__content__list">
						<?php the_field('nocredits_article_table_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container main-content">
		<div class="row">
			<div class="col">
                <?php the_content(); ?>
			</div>
		</div>
	</div>
	<div class="container wait-call main-content__wait-call">
		<div class="row">
			<div class="col">
				<h3>
					Остались вопросы? мы скоро ответим
				</h3>
				<p>Оставьте свой вопрос юристу и получите бесплатный ответ в течение 48 часов</p>
				<form class="main-content__form">
					<input type="text" placeholder="Ваше имя">
					<input type="text" placeholder="Контактный телефон">
					<input id="main-content__form__submit" type="submit" value="Нужна консультация">
				</form>
                <p class="wait-call__p">Заполняя форму, Вы соглашатесь на <a class="wait-call__p" href="/policy/">обработку персональных данных</a></p>
            </div>
		</div>
	</div>

</div>
<?php endif; ?>
<div id="end" data-id="<?php echo $count; ?>" data-cols="<?php echo $theid; ?>" data-href="<?php echo esc_url(admin_url('admin-ajax.php'))?>"></div>
<?php

get_footer();
?>
<script type="application/javascript">
    function isVisible(elem) {
    //определяем виден ли конец страницы типа статья и если виден увеличиваем на 1 кол=во просмотров в базе через AJAX
        let coords = elem.getBoundingClientRect();

        let windowHeight = document.documentElement.clientHeight;
        let topVisible = coords.top > 0 && coords.top < windowHeight;
        let bottomVisible = coords.bottom < windowHeight && coords.bottom > 0;

        return topVisible || bottomVisible;
    }
    function showVisible() {
        var end = document.getElementById('end');
        for (let div of document.querySelectorAll('div#end')) {
            let count = end.getAttribute('data-id');
            let id = end.getAttribute('data-cols');
            // if (!realSrc) continue;
            if (isVisible(div)) {
               const data = new FormData();
               data.append('action', 'setViews');
               data.append('nocredits_views', ++count);
               data.append('id', id  );
                const xhr = new XMLHttpRequest();
                xhr.open('POST', end.getAttribute('data-href'));
                xhr.send(data);
                xhr.addEventListener('readystatechange', function () {
                    if (xhr.readyState !== 4) return;
                    if (xhr.status === 200 ) {
                        console.log(xhr.responseText);
                    } else {
                        console.log(xhr.statusText);
                    }
                })
            }
        }
    }
    showVisible();
    window.onscroll = showVisible;
</script>