<?php include('header.php'); ?>
<!--========== ▼ article　（ページ毎にid名を変更） ==========-->
<article id="single" class="">

  <div class="s-page__head">
    <div class="s-page__head-inner">
      <a href="<?php echo esc_url( home_url() ); ?>" class="s-page__head-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_white.svg" alt="上辻会計事務所" width="173" height="86">
      </a>

      <div class="s-ttl s-page__head-ttl">
        <span class="icon-plus"></span>
        <h2 class="s-ttl__text s-font__en page-text__fade"><span class="fade-txt">News</span></h2>
        <p class="s-ttl__desp js-page__ttl-sub --left">お知らせ</p>
      </div>
    </div>
  </div>

  <!--========== ▼ main_content ==========-->
  <main class="main_content">

    <section class="single">
      <div class="s-section__inner">
        <?php if (have_posts()) : the_post(); ?>
        <div class="single-head">
          <span class="single-head__date"><?php the_time('Y.m.d'); ?></span>
          <span class="single-head__cat">お知らせ</span>
          <h1 class="single-head__ttl"><?php the_title(); ?></h1>
        </div>

        <div class="single-content">
          <div class="single-content__thum">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
            <?php endif; ?>
          </div>
          <?php the_content(); ?>
        </div>
        <?php endif; ?>

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
            <h2 class="s-ttl__text s-font__en js-text__fade">Others</h2>
            <p class="s-ttl__desp js-page__ttl-sub --left">その他のお知らせ</p>
          </div>
        </div>

        <?php include('components/c-news.php'); ?>

        <div class="b-button --orange">
          <a class="b-button__link" href="<?php echo esc_url( home_url() ); ?>/news">一覧を見る
            <div class="b-button__link-arrow">
              <span class="arrow"></span>
            </div>
          </a>
        </div>
      </div>
    </section>

    <?php include('components/c-contact.php'); ?>
  </main>
  <!--========== ▲ main_content ==========-->

</article>
<!--========== ▲ article　（ページ毎にid名を変更） ==========-->
<?php include('footer.php'); ?>