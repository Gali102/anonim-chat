<? $title="Бесплатный анонимный чат без регистрации | Контакты" ?>
<? $description="Бесплатный анонимный чат без регистрации | Контакты" ?>

<? include 'interface/head.php'; ?>

<div class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Контакты</h2>
            <p>Вы можете с нами связаться через форму обратной связи</p>
            <div class="phone-info">
              <h4>Наш e-mail: <span> <a href="malito:info@anonim-chat.ru">info@anonim-chat.ru</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" class="form" name="form">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Ваше имя" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="object" id="object" placeholder="Тема обращения" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Ваше сообщение" required></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Отправить</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <? include 'interface/footer.php'; ?>