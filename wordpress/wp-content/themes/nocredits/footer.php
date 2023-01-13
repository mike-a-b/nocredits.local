<div class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <div itemscope itemtype="http://schema.org/Organization">
                    <a itemprop="url" href="<?php echo get_home_url(); ?>"></a>
                    <img id="footer__logo"  itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/logo_footer.png" alt="" class="footer__logo">
                </div>
                <div id="footer__contacts__mobile" class="footer__contacts__mobile">
                    <h6>8 800 000 00 00</h6>
                    <p>
                        бесплатно на территории РФ
                    </p>
                    <p>Москва, Холодильный пер, д. 3, к. 1<br>
                        ООО «БФЛ» © 2022</p>
                </div>
<!--				<ul class="footer__menu">-->
<!--					<li><a href="#">Обо мне</a></li>-->
<!--					<li><a href="#">Вопросы юристу</a></li>-->
<!--					<li><a href="#">Выигранные дела</a></li>-->
<!--					<li><a href="#">Статьи</a></li>-->
<!--				</ul>-->
				<?php
				wp_nav_menu([
					'theme_location' => 'menu_footer',
					'menu_class' => 'footer__menu',
					'container' => false
				]);
				?>
				<hr>
				<p>Юридическая помощь гражданам России по освобождению от кредитов и долгов,
					вызванных недостаточностью денежных средств в соответствии с законом от 26.10.2002 №127-ФЗ «О несостоятельности (банкротстве)». После завершения процедуры банкротства присутствуют временные неблагоприятные ограничения. Перед началом процедуры изучите закон, ознакомьтесь со всеми особенностями и обязательно проконсультируйтесь со специалистом. Первичная консультация специалиста компании БФЛ - бесплатна.</p>
				<p><br>Использование сайта означает согласие с
					условиями политики конфиденциальности</p>
			</div>
			<div id="footer__contacts" class="col-4 footer__contacts">
				<h6>8 800 000 00 00</h6>
				<p>
					бесплатно на территории РФ
				</p>
				<p>Москва, Холодильный пер, д. 3, к. 1<br>
					ООО «БФЛ» © 2022</p>
			</div>
		</div>
	</div>
</div>

<!-- Modal window form -->
<div class="modal fade" id="modal__question" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <h5 class="modal-title" id="exampleModalLabel">Задать вопрос</h5>
            <div class="form-control">
                <label for="#modal__question__yourname">Имя</label>
                <input id="#modal__question__yourname" type="text"  name="username" placeholder="Ваше имя">
            </div>
            <div class="form-control">
                <label for="#modal__question__youremail">Email</label>
                <input id="#modal__question__youremail" type="text" name="usermail" placeholder="Ваш email">
            </div>
            <div class="form-control tel2">
                <div>
                    <label class="modal__question__label" for="modal__question__telprefix"></label>
                    <input id="modal__question__telprefix" type="text" placeholder="+7" name="user_countrycode">
                </div>
                <label for="#modal__question__yourphone">Телефон</label>
                <input id="#modal__question__yourphone" type="text" placeholder="Ваш телефон" name="user_telephone">
            </div>
            <div class="form-control">
                <label for="#yourquestion">Ваш вопрос</label>
                <input id="#yourquestion" type="text" placeholder="Опишите ситуацию" name="user_question">
            </div>
            <div class=" policy">
                <input id="modal__question__checkbox" type="checkbox" name="user_policy_agree">
                <label id="labelcheckbox" for="modal__question__checkbox">
                    Я принимаю условия Политики конфиденциальности
                </label>
            </div>
            <input type="hidden" name="action" value="nocredits_modalform_handle">
            <button type="submit" class="btn btn-primary sendButton"
                    name="submit" data-bs-dismiss="modal" data-id="<?php echo ""; ?>"
                    data-href="<?php echo esc_url(admin_url('admin-ajax.php')); ?>">
                Отправить
            </button>
        </div>>
    </div>
</div>
<script type="application/javascript">
    window.addEventListener('load', function () {
        const sendQuestionBtn = document.querySelector('.sendButton');
        const id = sendQuestionBtn.getAttribute('data-id');
        var pageReadToEnd = false;

        sendQuestionBtn.addEventListener('click', function (e) {
            e.preventDefault();
            const data = new FormData();
            data.append('action', 'sendModalForm');
            const xhr = new XMLHttpRequest();
            xhr.open('POST', sendQuestionBtn.getAttribute('data-href'));
            xhr.send(data);
            sendQuestionBtn.disabled = true;
            xhr.addEventListener('readystatechange', function () {
                if (xhr.readyState !== 4) return;
                if (xhr.status === 200 ) {
                    console.log(xhr.responseText);
                } else {
                    console.log(xhr.statusText);
                }
                sendQuestionBtn.disabled = false;
            })
        })
    })
</script>
<?php wp_footer(); ?>

</body>

<script>
    function btn1onclick() {
        document.getElementById('btn2').classList.add('unchecked');
        document.getElementById('btn1').classList.remove('unchecked');
    }
    function btn2onclick() {
        document.getElementById('btn1').classList.add('unchecked');
        document.getElementById('btn2').classList.remove('unchecked');
    }

    function gohome() {
     window.location.href = '/';
    }
</script>
</html>