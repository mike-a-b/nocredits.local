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
<div class="container-fluid faq-answer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="faq-answer-wrapper">
                    <div class="faq-answer__left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/faq-answer_woman.png" alt="Ответ юриста">
                        <h3>Иван Иванович</h3>
                        <p>08.08.2022 в 13.45</p>
                    </div>
                    <div class="faq-answer__right">
                        <p>
                            Действия продавца неправомерны. Согласно ст. 18 Закона о защите прав потребителей экспертиза проводится в сроки, установленные в ст. 20-22 Закона для удовлетворения соответствующих требований потребителя. Поскольку Вы потребовали вернуть Вам деньги, к данной ситуации применимы положения ст. 22 Закона, в которой указано, что требования о возврате уплаченной
                            за товар денежной суммы должны быть удовлетворены в 10-дневный срок (а не в 45 дней, как сказал продавец). Если этот срок истёк, экспертиза не проведена, а деньги Вам не возвращены, Вы вправе обратиться с жалобой в Роспотребнадзор, а также подать иск в суд, и потребовать возвраты суммы, уплаченной за телефон, неустойки, 50% штрафа от удовлетворенных судом исковых требований
                            и компенсации морального вреда (п. 6 ст. 13, ст. 15 Закона о защите прав потребителей).
                        </p>
                        <input type="button" class="btn btn-primary" value="Связаться с юристом">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    endif;
    get_footer();
?>
