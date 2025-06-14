<?php include('header.php'); ?>
<!--========== ▼ article　（ページ毎にid名を変更） ==========-->
<article id="contact" class="">

  <div class="s-page__head">
    <div class="s-page__head-inner">
      <a href="index.php" class="s-page__head-logo">
        <img src="assets/images/common/logo_white.svg" alt="上辻会計事務所" width="173" height="86">
      </a>

      <div class="s-ttl s-page__head-ttl">
        <span class="icon-plus"></span>
        <h1 class="s-ttl__text s-font__en fv-text__fade"><span class="fade-txt">Contact</span></h1>
        <p class="s-ttl__desp js-page__ttl-sub --left">お問い合わせ</p>
      </div>
    </div>

    <p class="s-page__head-txt --contact">下記フォームより、お問い合わせを受け付けております。<br class="none">
    お急ぎの方はお電話でも受け付けておりますので、下記までご連絡ください。</p>
    <div class="s-page__bottom-txt">
      <img src="assets/images/common/icon_phone.svg" alt="tel" width="36" height="36">
      <a href="tel:0643034877" aria-label="電話番号に電話する" class="s-page__bottom-phone">06-4303-4877</a>
      <p class="s-page__bottom-hours">[営業時間 / 平日9:00〜17:00]</p>
    </div>
  </div>

  <!--========== ▼ main_content ==========-->
  <main class="main_content">

    <section class="contact">
      <div class="s-section__inner">

        <div class="contact-form">
          <div class="contact-form__row --required">
            <div class="contact-form__row-item --item">お名前</div>
            <div class="contact-form__row-item --input">
              <input type="text" name="name" id="">
            </div>
          </div>
          <div class="contact-form__row --required">
            <div class="contact-form__row-item --item">ふりがな</div>
            <div class="contact-form__row-item --input">
              <input type="text" name="name" id="">
            </div>
          </div>
          <div class="contact-form__row">
            <div class="contact-form__row-item --item">会社名</div>
            <div class="contact-form__row-item --input">
              <input type="text" name="name" id="">
            </div>
          </div>
          <div class="contact-form__row">
            <div class="contact-form__row-item --item">URL</div>
            <div class="contact-form__row-item --input">
              <input type="text" name="name" id="">
            </div>
          </div>
          <div class="contact-form__row --required">
            <div class="contact-form__row-item --item">電話番号</div>
            <div class="contact-form__row-item --input">
              <input type="text" name="name" id="">
            </div>
          </div>
          <div class="contact-form__row --required">
            <div class="contact-form__row-item --item">メールアドレス</div>
            <div class="contact-form__row-item --input">
              <input type="text" name="name" id="">
            </div>
          </div>
          <div class="contact-form__row">
            <div class="contact-form__row-item --item">住所</div>
            <div class="contact-form__row-item --input --address">
              <input type="number" class="address">
              <input type="text">
            </div>
          </div>
          <div class="contact-form__row --required">
            <div class="contact-form__row-item --item">お問い合わせ内容</div>
            <div class="contact-form__row-item --input --required --message">
              <textarea name="message" id=""></textarea>
            </div>
          </div>
          <div class="praivacy-check">
            <input type="checkbox" name="praivacy" id="praivacy">
            <label for="praivacy">プライバシーポリシーに同意する</label>
          </div>
          <div class="b-button --orange">
            <a href="page-comfirm.php" class="b-button__link" href="">送信内容確認
              <div class="b-button__link-arrow">
                <span class="arrow"></span>
              </div>
            </button>
          </div>
        </div>

      </div>
    </section>

  </main>
  <!--========== ▲ main_content ==========-->

</article>
<!--========== ▲ article　（ページ毎にid名を変更） ==========-->
<?php include('footer.php'); ?>