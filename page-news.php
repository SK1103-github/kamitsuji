<?php include('header.php'); ?>
<!--========== ▼ article　（ページ毎にid名を変更） ==========-->
<article id="News" class="">

  <div class="s-page__head">
    <div class="s-page__head-inner">
      <a href="<?php echo esc_url( home_url() ); ?>" class="s-page__head-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_white.svg" alt="上辻会計事務所" width="173" height="86">
      </a>

      <div class="s-ttl s-page__head-ttl">
        <span class="icon-plus"></span>
        <h1 class="s-ttl__text s-font__en page-text__fade"><span class="fade-txt">News</span></h1>
        <p class="s-ttl__desp js-page__ttl-sub --left">お知らせ</p>
      </div>
    </div>

    <p class="s-page__head-txt">私たちは、企業や個人の未来を支える税務のプロフェッショナルです。<br>
    安心と信頼を基盤に、最適なサポートをご提供します。</p>
  </div>

  <!--========== ▼ main_content ==========-->
  <main class="main_content">

    <section class="news">
      <div class="s-section__inner">
        <div class="news-cat">CATEGORY</div>

        <ul class="news-cat__list">
          <li class="news-cat__list-item --active">
            <a href="<?php echo esc_url( home_url() ); ?>/news">すべて</a>
          </li>
          <?php
            $args = array(
              'hide_empty' => 0 // 記事が0件のカテゴリーも含む
            );
            $categories = get_categories($args);
            if($categories):foreach ($categories as $category):?>
            <li class="news-cat__list-item">
              <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class=""><?php echo esc_html($category->name); ?></a>
            </li>
          <?php endforeach;endif; ?>
        </ul>

        <?php include('components/c-news.php'); ?>

        <div class="s-pager">
          <?php
            if( function_exists('wp_pagenavi') ) {
              wp_pagenavi(array('query' => $the_query));
            }
          ?>
        </div>


      </div>
    </section>

    <?php include('components/c-contact.php'); ?>
  </main>
  <!--========== ▲ main_content ==========-->

</article>
<!--========== ▲ article　（ページ毎にid名を変更） ==========-->
<?php include('footer.php'); ?>