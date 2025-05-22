<?php include('header.php'); ?>
<!--========== ▼ article　（ページ毎にid名を変更） ==========-->
<article id="News" class="">

  <div class="s-page__head">
    <div class="s-page__head-inner">
      <a href="" class="s-page__head-logo">
        <img src="assets/images/common/logo_white.svg" alt="上辻会計事務所" width="173" height="86">
      </a>

      <div class="s-ttl s-page__head-ttl">
        <span></span>
        <h1 class="s-ttl__text s-font__en">News</h1>
        <p class="s-ttl__desp">お知らせ</p>
      </div>
    </div>

    <p class="s-page__head-txt">私たちは、企業や個人の未来を支える税務のプロフェッショナルです。<br>
    安心と信頼を基盤に、最適なサポートをご提供します。</p>
  </div>

  <!--========== ▼ main_content ==========-->
  <main class="main_content">

    <section class="news">
      <div class="s-section__inner">
        <div class="s-ttl">
          <span></span>
          <h2 class="s-ttl__text s-font__en">News</h2>
          <p class="s-ttl__desp">お知らせ</p>
        </div>

        <ul class="news-cat__list">
          <li class="news-cat__list-item --active">
            <a href="">すべて</a>
          </li>
          <li class="news-cat__list-item">
            <a href="">お知らせ</a>
          </li>
          <li class="news-cat__list-item">
            <a href="">採用情報</a>
          </li>
          <li class="news-cat__list-item">
            <a href="">コラム</a>
          </li>
        </ul>

        <?php include('components/c-news.php'); ?>

        <div class="s-pager">
          <ul>
            <li class="prev">
              <a href=""></a>
            </li>
            <li class="active">1</li>
            <li class="">
              <a href="">2</a>
            </li>
            <li class="">
              <a href="">3</a>
            </li>
            <li class="">
              <span>・・・</span>
            </li>
            <li class="">
              <a href="">6</a>
            </li>
            <li class="next">
              <a href=""></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <?php include('components/c-contact.php'); ?>
  </main>
  <!--========== ▲ main_content ==========-->

</article>
<!--========== ▲ article　（ページ毎にid名を変更） ==========-->
<?php include('footer.php'); ?>