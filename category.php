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
          <li class="news-cat__list-item <?php if (is_home() || is_category() && !get_queried_object()) echo '--active'; ?>">
            <a href="<?php echo esc_url(home_url()); ?>/news">すべて</a>
          </li>
          <?php
            $args = array(
              'hide_empty' => 0 // 記事が0件のカテゴリーも含む
            );
            $categories = get_categories($args);
            if ($categories) :
            foreach ($categories as $category) :
              $active_class = (is_category($category->slug) ? '--active' : ''); // カテゴリ判定でクラス付与
          ?>
            <li class="news-cat__list-item <?php echo $active_class; ?>">
              <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                <?php echo esc_html($category->name); ?>
              </a>
            </li>
          <?php endforeach; endif; ?>
        </ul>
        <div class="c-news">
          <?php
          // 現在のカテゴリーIDを取得
          $current_category_id = get_query_var('cat');
          // カテゴリーオブジェクトを取得
          $current_category = get_category($current_category_id);
          // スラッグを取得
          $current_category_slug = $current_category->slug;
          // スラッグを利用してクエリに渡す例
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $the_query = new WP_Query(array(
              'post_status' => 'publish',
              'paged' => $paged,
              'posts_per_page' => 1, // 1ページあたり1件表示
              'orderby' => 'date',
              'category_name' => $current_category_slug,
              'order' => 'DESC',
            ));
          ?>

          <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="c-news__card">
                <span class="c-news__card-date"><?php the_time('Y.m.d'); ?></span>
                <?php
                  $categories = get_the_category();
                  if ($categories) :
                    foreach ($categories as $category) : ?>
                      <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="c-news__card-cat"><?php echo esc_html($category->name); ?></a>
                <?php endforeach; endif; ?>
                <a href="<?php the_permalink(); ?>" class="c-news__card-ttl"><?php the_title(); ?></a>
                <span class="c-news__card-arrow"></span>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

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