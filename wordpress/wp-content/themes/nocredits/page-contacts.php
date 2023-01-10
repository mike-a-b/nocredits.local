<?php
/*
Template Name: шаблон для страницы контактов
*/
get_header();
?>
<?php

?>
<div class="container-fluid contacts">
	<div class="container">
		<div class="row ">
			<div class="col">
                <div class="contacts__backemblem">
                    <img class="contacts__backemblem_img" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/emblem.png" alt="Контакты">
                    <img class="contacts__backemblem_imglaptop" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/emblem.png" alt="Контакты">
                    <img class="contacts__backemblem_imgmobile" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/emblem_mobile.png" alt="Контакты">
                </div>
				<h1>Контакты</h1>
				<div class="contacts__address">
					<div class="contacts__address__left">
						<h3>
							Юридический адрес:
						</h3>
						<div class="contacts__address__left__value">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/send_icon.png" alt="Юридический адрес">
							<?php
                                if(is_active_sidebar('nocredits_contacts_address')) {
                                    dynamic_sidebar('nocredits_contacts_address');
                                }
							?>
						</div>
					</div>
					<div class="contacts__address__right">
						<p>бесплатно по России</p>
						<div class="contacts__address__right__value">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/call_icon.png" alt="Телефон">
							<?php
							if(is_active_sidebar('nocredits_contacts_phone')) {
								dynamic_sidebar('nocredits_contacts_phone');
							}
							?>
						</div>
					</div>
					<div class="contacts__requesits">
						<h3 class="contacts__address__h3">Реквизиты</h3>
						<div class="contacts__requesits__both">
							<div class="contacts__requesits__left">
								<?php
								if(is_active_sidebar('nocredits_contacts_requisits')) {
									dynamic_sidebar('nocredits_contacts_requisits');
								}
								?>
							</div>
							<div class="contacts__requesits__right">
								<?php
								if(is_active_sidebar('nocredits_contacts_requ-values')) {
									dynamic_sidebar('nocredits_contacts_requ-values');
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<img class="contacts__img" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/map_imgg.png" alt="Как добраться до нас">
				<img class="contacts__img_mobile" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/map_img_mobile.png" alt="Как добраться до нас">
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>