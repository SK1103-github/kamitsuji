<?php include('header.php'); ?>
<!--========== ▼ article　（ページ毎にid名を変更） ==========-->
<article id="single" class="">

  <div class="s-page__head">
    <div class="s-page__head-inner">
      <a href="" class="s-page__head-logo">
        <img src="assets/images/common/logo_white.svg" alt="上辻会計事務所" width="173" height="86">
      </a>

      <div class="s-ttl s-page__head-ttl">
        <span></span>
        <h2 class="s-ttl__text s-font__en">News</h2>
        <p class="s-ttl__desp">お知らせ</p>
      </div>
    </div>
  </div>

  <!--========== ▼ main_content ==========-->
  <main class="main_content">

    <section class="single">
      <div class="s-section__inner">
        <div class="single-head">
          <span class="single-head__date">2024.4.1</span>
          <span class="single-head__cat">お知らせ</span>
          <h1 class="single-head__ttl">お知らせ</h1>
        </div>

        <div class="single-content">
          <div class="single-content__thum">
            <img src="assets/images/top/fv_pc.png" alt="">
          </div>
          <h2>h2タイトルが入ります</h2>
          <h3>h3タイトルが入ります</h3>
          <img src="assets/images/top/slider_img01.png" alt="">
          <p>この文章はダミーです。ニュースの本文がはいります。<br>
          文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。<br>
          ニュースの本文がはいります。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。<br>
          <br>
          ニュースの本文がはいります。<br>
          文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。<br>
          ニュースの本文がはいります。文字の大きさ、量、字間、行間等を確認するために入れています。<br>
          この文章はダミーです。ニュースの本文がはいります。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
          <a href="">リンクはこのように表示されます。</a>
        </div>

        <div class="single-back">
          <div class="b-button__arrow --white --single" onclick="history.back()">
            <div class="b-button__arrow-item"></div>
          </div>
        </div>

      </div>
    </section>


    <section class="others">
      <div class="s-section__inner">
        <div class="section-ttl">
          <div class="s-ttl --others">
            <span></span>
            <h2 class="s-ttl__text s-font__en">Others</h2>
            <p class="s-ttl__desp">その他のお知らせ</p>
          </div>
        </div>

        <?php include('components/c-news.php'); ?>
      </div>
    </section>

    <?php include('components/c-contact.php'); ?>
  </main>
  <!--========== ▲ main_content ==========-->

</article>
<!--========== ▲ article　（ページ毎にid名を変更） ==========-->
<?php include('footer.php'); ?>