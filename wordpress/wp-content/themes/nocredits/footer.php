<div class="container-fluid footer">
	<div class="container ">
		<div class="row">
			<div class="col-8 col-sm-12 col-xs-12">
				<img id="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/logo_footer.png" alt="" class="footer__logo">
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
<?php wp_footer(); ?>
</body>
<script type="module" src="<?php echo get_template_directory_uri(); ?>/assets/src/js/main.js"></script>
<script>
//footer change blocks decide on design
    var footerContacts = document.getElementById('footer__contacts');
    var footerleftContacts = document.getElementById('footer__contacts__mobile');
    if(window.innerWidth <= 768) {
        footerleftContacts.innerHTML = footerContacts.innerHTML;
        footerContacts.innerHTML ='';
    }
    window.addEventListener('resize', (e) => {
        changeInnerHtml();
    });
    function changeInnerHtml() {
        if(window.innerWidth < 768) {
            footerleftContacts.innerHTML = footerContacts.innerHTML;
            footerContacts.innerHTML ='';
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