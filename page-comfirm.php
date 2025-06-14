<?php include('header.php'); ?>
<!--========== ▼ article　（ページ毎にid名を変更） ==========-->
<article id="comfirm" class="">

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
  </div>

  <!--========== ▼ main_content ==========-->
  <main class="main_content">

    <section class="comfirm">
      <div class="s-section__inner">

        <h4>入力内容確認</h4>
        <div class="comfirm-form">
          <div class="comfirm-form__row">
            <div class="comfirm-form__row-item --item">お名前</div>
            <div class="comfirm-form__row-item --input">お名前がはいります</div>
          </div>
          <div class="comfirm-form__row">
            <div class="comfirm-form__row-item --item">ふりがな</div>
            <div class="comfirm-form__row-item --input">ふりがながはいります</div>
          </div>
          <div class="comfirm-form__row">
            <div class="comfirm-form__row-item --item">会社名</div>
            <div class="comfirm-form__row-item --input">株式会社〇〇〇〇</div>
          </div>
          <div class="comfirm-form__row">
            <div class="comfirm-form__row-item --item">URL</div>
            <div class="comfirm-form__row-item --input">example.com</div>
          </div>
          <div class="comfirm-form__row">
            <div class="comfirm-form__row-item --item">電話番号</div>
            <div class="comfirm-form__row-item --input">000-0000-0000</div>
          </div>
          <div class="comfirm-form__row">
            <div class="comfirm-form__row-item --item">メールアドレス</div>
            <div class="comfirm-form__row-item --input">test@test.co.jp</div>
          </div>
          <div class="comfirm-form__row">
            <div class="comfirm-form__row-item --item">住所</div>
            <div class="comfirm-form__row-item --input">〒000-000<br>
            東京都港区〇〇-12-3-4
          </div>
          </div>
          <div class="comfirm-form__row">
            <div class="comfirm-form__row-item --item">お問い合わせ内容</div>
            <div class="comfirm-form__row-item --input">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。<br>
            <br>
            文字の大きさ、量、字間、行間等を確認するために入れています。<br>
            この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</div>
          </div>

          <div class="btn__group">
            <div class="b-button --gray">
              <a href="page-contact.php" class="b-button__link" href="">修正
                <div class="b-button__link-arrow">
                  <span class="arrow"></span>
                </div>
              </a>
            </div>

            <div class="b-button --orange --send">
              <a href="page-thanks.php" class="b-button__link" href="">送信
                <div class="b-button__link-arrow">
                  <span class="arrow"></span>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>
  <!--========== ▲ main_content ==========-->

</article>
<!--========== ▲ article　（ページ毎にid名を変更） ==========-->
<?php include('footer.php'); ?>