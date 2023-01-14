<?php
get_header();
?>
<?php
    if(have_posts()) :
         the_post();
?>
<div class="container-fluid faq">
	<div class="container">
		<div class="row">
            <div class="col">
                <h4>
                    Вопросы юристу <b> > </b>
                </h4>
                <h1>Алименты</h1>
                <div class="faq__content">
                    <?php the_content(); ?>
                </div>
                <div class="faq__date">
		            <?php echo get_the_date(); ?>
                </div>
		</div>
	</div>
</div>
<div class="wait-call__background_emblema">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/emblem.png" alt="не нашли нужного ответа?">
</div>
<?php
$comment = get_field('nocredits_comment');
if(isset($comment)) :
?>
<div class="container-fluid faq-answer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="faq-answer-wrapper">
                    <div class="faq-answer__left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/faq-answer_woman.png" alt="Ответ юриста">
                        <h3>Иван Иванович</h3>
                        <p><?php echo get_the_date(); ?></p>
                    </div>
                    <div class="faq-answer__right">
                        <p>
                            <?php the_field('nocredits_comment'); ?>
                        </p>
                        <input type="button" class="btn btn-primary" value="Связаться с юристом">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php
    endif;
    get_footer();
?>
