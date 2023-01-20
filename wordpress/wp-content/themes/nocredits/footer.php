<div class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <div itemscope itemtype="http://schema.org/Organization">
                    <a itemprop="url" href="<?php echo get_home_url(); ?>">
                        <img id="footer__logo"  itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/assets/src/images/logo_footer.png" alt="" class="footer__logo">
                    </a>
                </div>
                <div id="footer__contacts__mobile" class="footer__contacts__mobile">
                    <h6>8 800 000 00 00</h6>
                    <p>
                        бесплатно на территории РФ
                    </p>
                    <p>Москва, Холодильный пер, д. 3, к. 1<br>
                        ООО «БФЛ» © 2022</p>
                </div>
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

<div class="modal" tabindex="-1" id="modal__question__answer">
    <div class="modal-dialog">
        <div class="modal-content" style="height: auto;">
            <div class="modal-header">
                <h5 class="modal-title">Вопрос отправлен</h5>
<!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>-->
            </div>
            <div class="modal-body">
                <p>В блиэайшее время мы с вами свяжемся, и юрист ответит на ваш вопрос!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width:180px;">ОК</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal window form -->
<div class="modal fade" id="modal__question" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content">
            <h5 class="modal-title" id="exampleModalLabel">Задать вопрос</h5>
            <div class="form-control">
                <label for="modal__question__yourname">Имя</label>
                <input id="modal__question__yourname" type="text"  name="username" placeholder="Ваше имя" required>
            </div>
            <div class="form-control">
                <label for="modal__question__youremail">Email</label>
                <input id="modal__question__youremail" type="text" name="usermail" placeholder="Ваш email" required>
            </div>
            <div class="form-control tel2">
                <div>
                    <label class="modal__question__label" for="modal__question__telprefix"></label>
                    <input id="modal__question__telprefix" type="text" placeholder="+7" name="user_countrycode">
                </div>
                <label for="modal__question__yourphone">Телефон</label>
                <input id="modal__question__yourphone" type="text" placeholder="Ваш телефон" name="user_telephone">
            </div>
            <div class="form-control">
                <label for="yourquestion">Ваш вопрос</label>
                <input id="yourquestion" type="text" placeholder="Опишите ситуацию" name="user_question" required>
            </div>
            <div class=" policy">
                <input id="modal__question__checkbox" type="checkbox" name="user_policy_agree" required onchange="checkParams()">
                <label id="labelcheckbox" for="modal__question__checkbox">
                    Я принимаю условия Политики конфиденциальности
                </label>
            </div>
            <input type="hidden" name="action" value="nocredits_modalform_handle">
            <input id="sendButton" type="submit" class="btn btn-primary sendButtonmain"
                    name="submit" data-bs-dismiss="modal" data-id="<?php echo ""; ?>"
                    data-href="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" disabled />
        </form>
    </div>
</div>
<script type="application/javascript">
    window.addEventListener('load', function () {
        const sendQuestionBtn = document.querySelector('.sendButtonmain');
        const id = sendQuestionBtn.getAttribute('data-id');
        var pageReadToEnd = false;

        sendQuestionBtn.addEventListener('click', function (e) {
            e.preventDefault();
            const data = new FormData();
            let name = document.getElementById('modal__question__yourname');
            name  = name.value.replace(/^\s+|\s+$/g, '');
            let phone = document.getElementById('modal__question__yourphone');
            phone = phone.value.replace(/^\s+|\s+$/g, '');
            let email = document.getElementById('modal__question__youremail');
            email = email.value.replace(/^\s+|\s+$/g, '');
            let question = document.getElementById('yourquestion');
            question = question.value.replace(/^\s+|\s+$/g, '');
            let code = document.getElementById('modal__question__telprefix');
            code = code.value.replace(/^\s+|\s+$/g, '');
            data.append('action', 'sendModalForm');
            data.append('username', name);
            data.append('user_countrycode', code);
            data.append('user_telephone', phone);
            data.append('usermail', email);
            data.append('user_question', question);
            const xhr = new XMLHttpRequest();
            xhr.open('POST', sendQuestionBtn.getAttribute('data-href'));
            xhr.send(data);
            sendQuestionBtn.disabled = true;
            xhr.addEventListener('readystatechange', function () {
                if (xhr.readyState !== 4) return;
                if (xhr.status === 200 ) {
                    console.log(xhr.responseText);
                    var myModal = new bootstrap.Modal(document.getElementById('modal__question__answer'), {
                        keyboard: false
                    })
                    myModal.show();
                } else {
                    console.log(xhr.statusText);
                }
                sendQuestionBtn.disabled = false;
            })
        })
        //синяя форма три поля
        const sendQuestionMainPageForm2 = document.getElementById('sendButton2');
        if(sendQuestionMainPageForm2) sendQuestionMainPageForm2.addEventListener('click', function (e) {
            e.preventDefault();
            const data = new FormData();
            let name = document.getElementById('main_name');
            name  = name.value.replace(/^\s+|\s+$/g, '');
            let phone = document.getElementById('main_phone');
            phone = phone.value.replace(/^\s+|\s+$/g, '');
            let question = document.getElementById('main_question');
            question = question.value.replace(/^\s+|\s+$/g, '');
            data.append('action', 'sendModalForm');
            data.append('username', name);
            data.append('user_telephone', phone);
            data.append('user_question', question);
            const xhr = new XMLHttpRequest();
            xhr.open('POST', sendQuestionBtn.getAttribute('data-href'));
            xhr.send(data);
            sendQuestionMainPageForm2.disabled = true;
            xhr.addEventListener('readystatechange', function () {
                if (xhr.readyState !== 4) return;
                if (xhr.status === 200 ) {
                    console.log(xhr.responseText);
                    var myModal = new bootstrap.Modal(document.getElementById('modal__question__answer'), {
                        keyboard: false
                    })
                    myModal.show();
                } else {
                    console.log(xhr.statusText);
                }
                sendQuestionMainPageForm2.disabled = false;
            });
        }); //if event listener
        //отправить вопрос 1 поле верх!!!!!
        const sendQuestionMainPageForm3 = document.getElementById('sendButton3');
        if(sendQuestionMainPageForm3) {
            sendQuestionMainPageForm3.addEventListener('click', function (e) {
                e.preventDefault();
                const data = new FormData();
                let question = document.getElementById('main_form3_textarea');
                question = question.value.replace(/^\s+|\s+$/g, '');
                data.append('action', 'sendModalForm');
                data.append('user_question', question);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', sendQuestionMainPageForm3.getAttribute('data-href'));
                xhr.send(data);
                sendQuestionMainPageForm3.disabled = true;
                xhr.addEventListener('readystatechange', function () {
                    if (xhr.readyState !== 4) return;
                    if (xhr.status === 200) {
                        console.log(xhr.responseText);
                        var myModal = new bootstrap.Modal(document.getElementById('modal__question__answer'), {
                            keyboard: false
                        })
                        myModal.show();
                    } else {
                        console.log(xhr.statusText);
                    }
                    sendQuestionMainPageForm3.disabled = false;
                });
            });
        }//if eventlistener form3
    //форма ответы юристу синяя !!
        const sendQuestionArchiveQuestions =  document.getElementById('questions_sendButton');
        if(sendQuestionArchiveQuestions) {
            sendQuestionArchiveQuestions.addEventListener('click', function (e) {
                e.preventDefault();
                const data = new FormData();
                let name = document.getElementById('questions_name');
                name  = name.value.replace(/^\s+|\s+$/g, '');
                let phone = document.getElementById('questions_phone');
                phone = phone.value.replace(/^\s+|\s+$/g, '');
                let question = document.getElementById('questions_question');
                question = question.value.replace(/^\s+|\s+$/g, '');
                data.append('action', 'sendModalForm');
                data.append('username', name);
                data.append('user_telephone', phone);
                data.append('user_question', question);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', sendQuestionArchiveQuestions.getAttribute('data-href'));
                xhr.send(data);
                sendQuestionArchiveQuestions.disabled = true;
                xhr.addEventListener('readystatechange', function () {
                    if (xhr.readyState !== 4) return;
                    if (xhr.status === 200 ) {
                        console.log(xhr.responseText);
                        var myModal = new bootstrap.Modal(document.getElementById('modal__question__answer'), {
                            keyboard: false
                        })
                        myModal.show();
                    } else {
                        console.log(xhr.statusText);
                    }
                    sendQuestionArchiveQuestions.disabled = false;
                });
            });
        }//IF EVENT LISTENER ARCHIVE QUESTIONS

        // форма статья определенная низ синяя 2 поля !!
        const sendQuestionArticlesSend =  document.getElementById('main-content__form__submit');
        if(sendQuestionArticlesSend) {
            sendQuestionArticlesSend.addEventListener('click', function (e) {
                e.preventDefault();
                const data = new FormData();
                let name = document.getElementById('articles_name');
                name  = name.value.replace(/^\s+|\s+$/g, '');
                let phone = document.getElementById('articles_phone');
                phone = phone.value.replace(/^\s+|\s+$/g, '');
                data.append('action', 'sendModalForm');
                data.append('username', name);
                data.append('user_telephone', phone);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', sendQuestionArticlesSend.getAttribute('data-href'));
                xhr.send(data);
                sendQuestionArticlesSend.disabled = true;
                xhr.addEventListener('readystatechange', function () {
                    if (xhr.readyState !== 4) return;
                    if (xhr.status === 200 ) {
                        console.log(xhr.responseText);
                        var myModal = new bootstrap.Modal(document.getElementById('modal__question__answer'), {
                            keyboard: false
                        })
                        myModal.show();
                    } else {
                        console.log(xhr.statusText);
                    }
                    sendQuestionArticlesSend.disabled = false;
                });
            });
        }//IF EVENT LISTENER ARCHIVE QUESTIONS
        // форма выигранные дела низ синяя 2 поля ввода !!
        const sendQuestionCasesSend =  document.getElementById('cases__form__submit');
        if(sendQuestionCasesSend) {
            sendQuestionCasesSend.addEventListener('click', function (e) {
                e.preventDefault();
                const data = new FormData();
                let name = document.getElementById('cases_name');
                name  = name.value.replace(/^\s+|\s+$/g, '');
                let phone = document.getElementById('cases_phone');
                phone = phone.value.replace(/^\s+|\s+$/g, '');
                data.append('action', 'sendModalForm');
                data.append('username', name);
                data.append('user_telephone', phone);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', sendQuestionCasesSend.getAttribute('data-href'));
                xhr.send(data);
                sendQuestionCasesSend.disabled = true;
                xhr.addEventListener('readystatechange', function () {
                    if (xhr.readyState !== 4) return;
                    if (xhr.status === 200 ) {
                        console.log(xhr.responseText);
                        var myModal = new bootstrap.Modal(document.getElementById('modal__question__answer'), {
                            keyboard: false
                        })
                        myModal.show();
                    } else {
                        console.log(xhr.statusText);
                    }
                    sendQuestionCasesSend.disabled = false;
                });
            });
        }//IF EVENT LISTENER ARCHIVE QUESTIONS
    });
</script>
<?php wp_footer(); ?>
</body>
<script>
    var phoneMask = IMask(
        document.getElementById('modal__question__yourphone'), {
            mask: '(000)000-00-00'
        });
    var countryCodeMask = IMask(
        document.getElementById('modal__question__telprefix'), {
            mask: '+0'
        });
    var nameMask = IMask(
        document.getElementById('modal__question__yourname'), {
            mask: '[aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa][*][aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa]'
        });

    var emailMask = IMask(
        document.getElementById('modal__question__youremail'), {
            mask: '[aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa]{@}[aaaaaaaaaaaaaaaaaa]{.}[aaaaaaaaa]'
        });
    function checkParams() {
        let agree = document.getElementById('modal__question__checkbox');
        if(agree.checked) {
            // alert('нажат чекбокс соглашение');
            var name = document.getElementById('modal__question__yourname');
            name  = name.value.replace(/^\s+|\s+$/g, '');
            var phone = document.getElementById('modal__question__yourphone');
            phone = phone.value.replace(/^\s+|\s+$/g, '');
            var email = document.getElementById('modal__question__youremail');
            email = email.value.replace(/^\s+|\s+$/g, '');
            var question = document.getElementById('yourquestion');
            question = question.value.replace(/^\s+|\s+$/g, '');

            let sendbtn = document.getElementById('sendButton');
            if(name && phone && email && question && agree.checked) {
                sendbtn.disabled = false;
            } else {
                sendbtn.disabled = true;
            }
            //todo Проветиь ввод !!!
        } else {
            let sendbtn = document.getElementById('sendButton');
            sendbtn.disabled = true;
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