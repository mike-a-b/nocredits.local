<?php
$args = array(
	'post_type' => 'articles',
	'orderby' => 'rand',
	'posts_per_page' => 1,
);

$the_query = new WP_Query( $args );
$title ="";
$content ="";
?>
<?php
get_header();
?>
<div class="container-fluid articles">
	<div class="container">
		<div class="row ">
			<h1 class = "articles__h1">
                статьи и советы
            </h1>
			<div class="col articles__background">

				<div class="articles__header">
                    <?php
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                    ?>
					<h1 class="articles__header_h1">
                    <?php
                        $title .= '<a href="'. get_permalink() .'">'. get_the_title() .'</a>';
                        echo $title;
                    ?>
					</h1>
					<p>
                        <?php echo get_the_content(); ?>
					</p>
					<p>
                        <?php echo get_the_date() . ", ". get_the_author(); ?>
                    </p>
					<p><a href="<?php echo get_the_permalink(); ?>">Подробнее <b> > </b></a></p>
					<?php
                        } //endwhile
                    wp_reset_postdata();
					?>
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
					<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/src/images/arrowleft_icon.png" alt="Влево"></a>
					<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/src/images/arrowright_icon.png" alt="Вправо"></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col popular__articles">
                <?php
//                $query = new WP_Query(
//                        [
//                                'post_type' => 'articles',
//                                'numberposts' => 3,
//                                'meta_key' => 'nocredits_views',
//                                'meta_query' => [
//                                     'relation' => 'OR',
//                                     [
//                                         'key' => 'nocredits_views',
//                                         'value' => '0'
//                                     ]
//                                 ]
//                        ]
//                );
//                echo "<pre>". var_dump($query) . "</pre>";
                // параметры по умолчанию
                $my_posts = get_posts( array(
	                'numberposts' => 3,
	                'post_type'   => 'articles',
                ) );

                global $post;

                foreach( $my_posts as $post ) :
	                setup_postdata( $post );
                ?>
                <div class="popular__articles__card col-4">
					<?php the_post_thumbnail('full'); ?>
					<div class="popular__articles__wrapper">
						<p>
                            <?php the_title(); ?>
						</p>
						<p>
                            <?php the_content(); ?>
						</p>
						<p>
                            <?php
                                echo get_the_date() . ", ". get_the_author();
                            ?>
                        </p>
						<p><a class="popular__articles__link" href="<?php the_permalink(); ?>">Подробнее <b> > </b></a></p>
					</div>
				</div>
				<?php
                    endforeach;
                    wp_reset_postdata(); // сброс
				?>
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
<!--Темы статей кнопочки-->
				<div class="allarticles__filters">
					<button id="articles_example" type="button" class="btn btn-primary">Рубрика статьи</button>
					<button id="articles_example2" type="button" class="btn btn-primary unchecked">Банки</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col allarticles__articles">
				<?php
				$my_posts = get_posts( array(
					'numberposts' => 4,
					'post_type'   => 'articles',
				) );
                foreach($my_posts as $post) :
                    setup_postdata( $post );
                ?>
				<div class="allarticles__articles__card col">
                    <?php the_post_thumbnail('full'); ?>
                    <p class="allarticles__title">
						<?php the_title(); ?>
                    </p>
					<div class="allarticles__articles__wrapper">
                        <p>
							<?php the_content(); ?>
                        </p>
                        <p>
                            <?php echo get_the_date() . ", ". get_the_author(); ?>
                        </p>
                        <p>
                            <a class="popular__articles__link" href="<?php the_permalink(); ?>">Подробнее <b> > </b></a>
                        </p>
					</div>
				</div>
				<?php
                endforeach;
                wp_reset_postdata();
                ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>
