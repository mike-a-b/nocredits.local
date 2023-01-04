<div class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <div itemscope itemtype="http://schema.org/Organization">
                    <a itemprop="url" href="<?php echo get_home_url(); ?>"></a>
                    <img id="footer__logo"  itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/logo_footer.png" alt="" class="footer__logo">
                </div>
                <div id="footer__contacts__mobile" class="footer__contacts__mobile">
                </div>
				<ul class="footer__menu">
					<li><a href="#">Обо мне</a></li>
					<li><a href="#">Вопросы юристу</a></li>
					<li><a href="#">Выигранные дела</a></li>
					<li><a href="#">Статьи</a></li>
				</ul>
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
                <input id="#modal__question__yourname" type="text" placeholder="Ваше имя">
            </div>
            <div class="form-control">
                <label for="#modal__question__youremail">Email</label>
                <input id="#modal__question__youremail" type="text" placeholder="Ваш email">
            </div>
            <div class="form-control tel2">
                <div>
                    <label class="modal__question__label" for="modal__question__telprefix"></label>
                    <input id="modal__question__telprefix" type="text" placeholder="+7">
                </div>
                <label for="#modal__question__yourphone">Телефон</label>
                <input id="#modal__question__yourphone" type="text" placeholder="Ваш телефон">
            </div>
            <div class="form-control">
                <label for="#yourquestion">Ваш вопрос</label>
                <input id="#yourquestion" type="text" placeholder="Опишите ситуацию">
            </div>
            <div class=" policy">
                <input id="modal__question__checkbox" type="checkbox">
                <label id="labelcheckbox" for="modal__question__checkbox">
                    Я принимаю условия Политики конфиденциальности
                </label>
            </div>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Отправить</button>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
<script type="module" src="<?php echo get_template_directory_uri(); ?>/assets/src/js/main.js"></script>
<script>
//footer change blocks decide on design
    var footerContacts = document.getElementById('footer__contacts');
    var footerleftContacts = document.getElementById('footer__contacts__mobile');
    var womanImg = document.getElementById('article__left-image__woman');
    var rightwomanImg = document.getElementsByClassName('right');
    //article2 objects
    var article2left_img = document.getElementsByClassName('left');
    //one time call to init
    changeInnerHtml();

    window.addEventListener('resize', (e) => {
        changeInnerHtml();
    });

    function changeInnerHtml() {
        if(window.innerWidth <= 1024) {
            article2left_img[0].style.display = 'none';
        } else {
            article2left_img[0].style.display = 'flex';
        }
        //main
        if(window.innerWidth <= 768) {
            footerleftContacts.innerHTML = footerContacts.innerHTML;
            footerContacts.innerHTML ='';

            womanImg.style.display = 'block';
            rightwomanImg[0].style.display = 'none';

        } else {
            footerContacts.innerHTML = footerleftContacts.innerHTML;
            footerleftContacts.innerHTML = '';

            womanImg.style.display = 'none';
            rightwomanImg[0].style.display = 'block';
        }
    }



    function btn1onclick() {
        document.getElementById('btn2').classList.add('unchecked');
        document.getElementById('btn1').classList.remove('unchecked');
    }
    function btn2onclick() {
        document.getElementById('btn1').classList.add('unchecked');
        document.getElementById('btn2').classList.remove('unchecked');
    }
</script>
</html>