<?php include('header.php'); ?>
<!--========== ▼ article　（ページ毎にid名を変更） ==========-->
<article id="single-column" class="">

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
    <?php if (have_posts()) : the_post(); ?>
    <section class="head">
      <div class="head-flex">
        <div class="head-flex__item">
          <div class="head-flex__item-txt">
            <span class="head-flex__item-date"><?php the_time('Y.m.d'); ?></span>
            <h1 class="head-flex__item-ttl"><?php the_title(); ?></h1>
              <?php
                if ($terms = get_the_terms($post->ID, 'column-cat')) :
                  foreach ( $terms as $term ):?>
                <span class="head-flex__item-cat">
                  <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
                </span>
              <?php endforeach; endif; ?>
          </div>
        </div>
        <div class="head-flex__item">
            <?php if(has_post_thumbnail()): ?>
              <picture class="head-flex__item-img" style="background:url(<?php the_post_thumbnail_url('full'); ?>) no-repeat;background-position: center center;background-size:cover;"></picture>
            <?php else: ?>
              <picture class="head-flex__item-img" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg) no-repeat;background-position: center center;background-size:cover;"></picture>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="column-content">
      <div class="s-section__inner">
        <div class="column-content__toc">
          <strong class="column-content__toc-ttl">
            <span>CONTENTS</span>
            <span>この記事の目次</span>
          </strong>
          <ul id="toc">

          </ul>
        </div>

        <div class="content">
          <?php the_content(); ?>

          <?php $point = get_post_meta($post->ID, 'column_point', true);?>
          <?php if(empty($point)):?>
            <?php else:?>
            <?php $custom_text = get_field('column_point'); ?>
            <div class="content-point">
              <strong class="content-point__ttl">この記事のポイント・まとめ（自由記入）</strong>
              <p class="content-point__txt"><?php echo nl2br(esc_html($custom_text)); ?></p>
            </div>
          <?php endif; ?>
        </div>

        <div class="prev-next__flex">
          <?php
          $prev_post = get_previous_post();
          if (!empty($prev_post)): ?>
            <a href="<?php echo get_permalink($prev_post); ?>" class="prev-next__item">
              <div class="b-button__arrow prev-next__item-arrow --white --prev">
                <div class="b-button__arrow-item"></div>
              </div>
              <span class="prev-next__item-txt">前の記事</span>
              <h3 class="prev-next__item-ttl"><?php echo esc_html(get_the_title($prev_post)); ?></h3>
            </a>
            <?php else: ?>
              <a href="<?php echo esc_url(get_post_type_archive_link('column')); ?>" class="prev-next__item --back">
                <div class="b-button__arrow prev-next__item-arrow --white --prev">
                  <div class="b-button__arrow-item"></div>
                </div>
                <span class="prev-next__item-txt">コラム記事一覧へ</span>
              </a>
          <?php endif; ?>

          <?php
          $next_post = get_next_post();
          if (!empty($next_post)): ?>
            <a href="<?php echo get_permalink($next_post); ?>" class="prev-next__item --next">
              <div class="b-button__arrow prev-next__item-arrow --white --next">
                <div class="b-button__arrow-item"></div>
              </div>
              <span class="prev-next__item-txt">次の記事</span>
              <h3 class="prev-next__item-ttl"><?php echo esc_html(get_the_title($next_post)); ?></h3>
            </a>
          <?php endif; ?>
        </div>

      </div>
    </section>
    <?php endif; ?>


    <section class="others">
      <div class="s-section__inner">
        <div class="section-ttl">
          <div class="s-ttl --others">
            <span class="icon-plus"></span>
            <h2 class="s-ttl__text s-font__en js-text__fade">Others</h2>
            <p class="s-ttl__desp js-page__ttl-sub --left">その他のコラム</p>
          </div>
        </div>

        <div class="others__slider">
          <?php
            // カスタムループを生成し、記事を取得
            $args = array(
              'numberposts' => 5,                //表示（取得）する記事の数
              'post_type' => 'column',   //投稿タイプの指定
              'order' => 'DESC',//古い順に並べ替え
              'post_status' => 'publish',
            );
          ?>
          <?php $the_query = new WP_Query( $args ); ?>
          <?php if ( $the_query->have_posts() ) :?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="others__slider-item">
              <a class="others__slider-link" href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>
                    <picture class="others__slider-img" style="background:url(<?php the_post_thumbnail_url('full'); ?>) no-repeat;background-position: center center;background-size:cover;height:200px;"></picture>
                  <?php else: ?>
                    <picture class="others__slider-img" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg) no-repeat;background-position: center center;background-size:cover;height:200px;"></picture>
                <?php endif; ?>
                <span class="others__slider-date"><?php the_time('Y.m.d'); ?></span>
                <h1 class="others__slider-ttl"><?php the_title(); ?></h1>
              </a>
              <ul class="others__cat">
                <?php
                  if ($terms = get_the_terms($post->ID, 'column-cat')):
                  foreach ( $terms as $term ):?>
                    <li class="others__cat-link">
                      <a href="<?php echo esc_url(get_category_link($term->term_id)); ?>" class="c-news__card-cat"><?php echo esc_html($term->name); ?></a>
                    </li>
                <?php endforeach; endif; ?>
              </ul>
            </div>
            <?php endwhile; ?>
          <?php else :  ?>
            <p class="no_post">Comming soon...</p>
          <?php endif;
        wp_reset_postdata(); ?>

        </div>
        <div class="b-button --orange service__btn">
          <a class="b-button__link" href="<?php echo esc_url(get_post_type_archive_link('column')); ?>">一覧を見る
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