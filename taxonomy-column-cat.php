<?php include('header.php'); ?>
<!--========== ▼ article　（ページ毎にid名を変更） ==========-->
<article id="column" class="">

  <div class="s-page__head">
    <div class="s-page__head-inner">
      <a href="<?php echo esc_url( home_url() ); ?>" class="s-page__head-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_white.svg" alt="上辻会計事務所" width="173" height="86">
      </a>

      <div class="s-ttl s-page__head-ttl">
        <span class="icon-plus"></span>
        <h2 class="s-ttl__text s-font__en page-text__fade"><span class="fade-txt">Column</span></h2>
        <p class="s-ttl__desp js-page__ttl-sub --left">コラム</p>
      </div>
    </div>

  </div>

  <!--========== ▼ main_content ==========-->
  <main class="main_content">

    <section class="column">
      <div class="s-section__inner">
        <div class="column-cat">CATEGORY</div>

        <ul class="column-cat__list">
          <li class="column-cat__list-item <?php if (!is_tax('column-cat')) echo '--active'; ?>">
            <a href="<?php echo esc_url(get_post_type_archive_link('column')); ?>">すべて</a>
          </li>
          <?php
            // タクソノミー(column-cat)の一覧を取得
            $args = array(
              'taxonomy' => 'column-cat', // 対象タクソノミーのスラッグを指定
              'hide_empty' => 0, // 投稿がないタクソノミーも取得
            );
            $terms = get_terms($args); // タームを取得
            if ($terms && !is_wp_error($terms)) :
              foreach ($terms as $term) :
                $active_class = (is_tax('column-cat', $term->slug)) ? '--active' : ''; // 現在のタクソノミーに--activeを付与
            ?>
              <li class="column-cat__list-item <?php echo $active_class; ?>">
                <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
              </li>
          <?php endforeach; endif; ?>
        </ul>


        <div class="column-list">
          <?php
            // 現在のタームを取得
            $current_term = get_queried_object();
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            // カスタムループを生成し、記事を取得
            $args = array(
              'numberposts' => 1,                //表示（取得）する記事の数
              'post_type' => 'column',   //投稿タイプの指定
              'order' => 'ASC',//古い順に並べ替え
              'post_status' => 'publish',
              'tax_query' => array(
                array(
                    'taxonomy' => 'column-cat',//現在ページのタクソノミー
                    'field' => 'slug',
                    'terms' => $current_term->slug,//現在ページのターム
                ),
              ),
              'paged' => $paged
            );
          ?>
          <?php $the_query = new WP_Query( $args ); ?>
          <?php if ( $the_query->have_posts() ) :?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="column-list__item">
              <a class="column-list__link" href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>
                    <picture class="column-list__img" style="background:url(<?php the_post_thumbnail_url('full'); ?>) no-repeat;background-position: center center;background-size:cover;height:200px;"></picture>
                  <?php else: ?>
                    <picture class="column-list__img" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg) no-repeat;background-position: center center;background-size:cover;height:200px;"></picture>
                <?php endif; ?>
                <span class="column-list__date"><?php the_time('Y.m.d'); ?></span>
                <h1 class="column-list__ttl"><?php the_title(); ?></h1>
              </a>
              <ul class="column-list__cat">
                <?php
                  if ($terms = get_the_terms($post->ID, 'column-cat')):
                  foreach ( $terms as $term ):?>
                    <li class="column-list__cat-link">
                      <a href="<?php echo esc_url(get_category_link($term->term_id)); ?>" class="c-news__card-cat"><?php echo esc_html($term->name); ?></a>
                    </li>
                <?php endforeach; endif; ?>
              </ul>
            </div>
            <?php endwhile; ?>
          <?php else :  ?>
            <p class="no_post s-font__en">Coming soon...</p>
          <?php endif;
        wp_reset_postdata(); ?>

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