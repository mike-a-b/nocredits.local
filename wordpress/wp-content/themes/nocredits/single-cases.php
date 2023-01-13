<?php
get_header();
?>
<div class="container-fluid post">
<div class="container">
	<div class="row">
		<div class="col" style="padding-top:2rem; padding-bottom: 3rem;">
			<div class="card m-auto" style="">
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
		</div>
	</div>
</div>
</div>
<?php
get_footer();
?>
