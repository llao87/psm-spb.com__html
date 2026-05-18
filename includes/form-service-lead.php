    <section class="section service-lead" aria-labelledby="page-cb-index-title" hidden>
      <div class="container">
        <div class="service-lead__box contact-card card--reveal">
          <h2 id="page-cb-index-title">Заказать обратный звонок</h2>
          <p class="contact-card__intro">Укажите телефон и при необходимости кратко опишите задачу — менеджер свяжется с вами в рабочее время.</p>
          <form class="lead-form lead-form--stack js-lead-form" novalidate>
            <label class="sr-only" for="page-cb-index-name">Имя</label>
            <input class="lead-form__field" type="text" id="page-cb-index-name" name="name" placeholder="Имя" autocomplete="name">
            <label class="sr-only" for="page-cb-index-phone">Телефон</label>
            <input class="lead-form__field" type="tel" id="page-cb-index-phone" name="phone" placeholder="+7 (___) ___-__-__" autocomplete="tel" required>
            <label class="sr-only" for="page-cb-index-msg">Сообщение</label>
            <textarea class="lead-form__field" id="page-cb-index-msg" name="message" placeholder="Тип объекта, сроки, вопрос"></textarea>
            <label class="lead-form__check">
              <input type="checkbox" name="pd_consent" value="1" required>
              <span>Ознакомлен(а) с <a href="privacy.php" target="_blank" rel="noopener noreferrer">Политикой в отношении обработки персональных данных</a> и даю <a href="consent.php" target="_blank" rel="noopener noreferrer">согласие на обработку персональных данных</a> в соответствии с Федеральным законом № 152-ФЗ «О персональных данных».</span>
            </label>
            <div class="form-toast" role="status" aria-live="polite" aria-atomic="true" hidden></div>
            <button class="btn btn--primary btn--block" type="submit">Отправить заявку</button>
          </form>
        </div>
      </div>
    </section>