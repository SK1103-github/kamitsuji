<?php include('header.php'); ?>
<!--========== ▼ article　（ページ毎にid名を変更） ==========-->
<article id="top" class="">

  <div class="fv">
    <div class="fv-inner">
      <h1 class="fv-logo">
        <a href="<?php echo esc_url( home_url() ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_white.svg" alt="上辻会計事務所" width="173" height="86">
        </a>
      </h1>

      <div class="fv-slider">
        <picture class="fv-img slider_01">
          <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/fv_01_sp.png" type="image/png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/fv_01_pc.png" alt="">
        </picture>
        <picture class="fv-img slider_02">
          <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/fv_02_sp.png" type="image/png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/fv_02_pc.png" alt="">
        </picture>
        <picture class="fv-img slider_03">
          <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/fv_03_sp.png" type="image/png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/fv_03_pc.png" alt="">
        </picture>
      </div>
      <h2 class="fv-text">
        <div class="fv-text__fade">
          <span class="fade-text">税務をもっと身近に、</span>
        </div>
        <div class="fv-text__fade">
          <span class="fade-text">もっとわかりやすく。</span>
        </div>
      </h2>

      <img class="section_bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/section_bg.png" alt="">

    </div>
  </div>

  <!--========== ▼ main_content ==========-->
  <main class="main_content">

    <section class="news">
      <div class="s-section__inner --news">
        <div class="s-ttl">
          <span class="icon-plus"></span>
          <h2 class="s-ttl__text s-font__en js-fade__content-ttl"><span class="fade-txt">News</span></h2>
          <p class="s-ttl__desp js-fade__sec --left">お知らせ</p>
        </div>
        <?php if (have_posts()) : ?>
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

          <div class="b-button --orange">
            <a class="b-button__link" href="<?php echo esc_url( home_url() ); ?>/news">一覧を見る
              <div class="b-button__link-arrow">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        <?php else: ?>
          <p class="no_post s-font__en">Coming soon...</p>
        <?php endif; ?>
      </div>
    </section>




    <section class="about">
      <p class="js-scroll__txt s-font__en">Making Tax More Accessible, More Understandable. Making Tax More Accessible, More Understandable. Making Tax More Accessible, More Understandable. Making Tax More Accessible, More Understandable.</p>

      <div class="s-section__inner --about">
        <div class="s-ttl">
          <span class="icon-plus"></span>
          <h2 class="s-ttl__text s-font__en --white js-fade__content-ttl"><span class="fade-txt">About us</span></h2>
          <p class="s-ttl__desp --white js-fade__sec --left">上辻会計事務所について</p>
        </div>

        <div class="about__head">
          <p class="about__head-txt">経営者のパートナーとして、信頼と安心を提供します。<br>
          長年の経験と最新技術を駆使し、事業の成長を総合的にサポートすることが可能です。</p>

          <div class="b-button --white">
            <a class="b-button__link" href="<?php echo esc_url( home_url() ); ?>/about">詳しく見る
              <div class="b-button__link-arrow">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>

        <div class="about-flex">
          <div class="about-flex__item js-fade__bottom">
            <picture class="about-flex__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_img_01.png" alt="30年以上の豊富な経験と実績">
            </picture>
            <h4 class="about-flex__ttl">
              <span>30年以上の豊富な<br class="block --mac none --sp">経験と実績</span>
            </h4>
            <p class="about-flex__txt">平成18年に開業し、勤務時代から通算して30年以上の経験と実績があります。税務・会計の専門知識であらゆるビジネスステージに対応することが可能です。</p>
            <span class="about-flex__num s-font__en">01</span>
          </div>

          <div class="about-flex__item js-fade__bottom">
            <picture class="about-flex__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_img_02.png" alt="幅広いサービスの提供">
            </picture>
            <h4 class="about-flex__ttl">
              <span>幅広いサービスの提供</span>
            </h4>
            <p class="about-flex__txt">経営にまつわるあらゆる悩みに応えるべく、事業融資支援から税務調査対応、財務デューデリジェンスまで一貫してサポートいたします。</p>
            <span class="about-flex__num s-font__en">02</span>
          </div>

          <div class="about-flex__item js-fade__bottom">
            <picture class="about-flex__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_img_03.png" alt="DXの活用でスマートな経営を">
            </picture>
            <h4 class="about-flex__ttl">
              <span>DXの活用で<br class="block --mac none --sp">スマートな経営を</span>
            </h4>
            <p class="about-flex__txt">クラウド会計とペーパーレス化で経理を効率化。財務をリアルタイム把握し、迅速な意思決定を支援。紙の管理負担を減らし、本業に集中できる環境を提供します。</p>
            <span class="about-flex__num s-font__en">03</span>
          </div>
        </div>
      </div>
    </section>




    <section class="service">
      <div class="s-section__inner --service">
        <div class="service-layout__flex">
          <div class="flexitem__left">
            <picture class="flexitem__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/service_img.png" class="js-service__fade --left" alt="サービス内容">
            </picture>
          </div>
          <div class="flexitem__right">
            <div class="s-ttl">
              <span class="icon-plus"></span>
              <h2 class="s-ttl__text s-font__en js-fade__content-ttl"><span class="fade-txt">Service</span></h2>
              <p class="s-ttl__desp js-fade__sec --left">サービス内容</p>
            </div>

            <dl class="flexitem__list">
              <a href="<?php echo esc_url( home_url() ); ?>/consultant" class="flexitem__link">
                <dt class="flexitem__list-ttl">税務会計顧問</dt>
                <div class="flexitem__list-txt">「税務申告が複雑で、どこから手をつけていいか分からない」「節税のアイデアをもっと具体的に提案してほしい」「安心して任せられるパートナーがほしい」そんなお悩みを、私たちが解決します。法人から個人事業主まで幅広いお客様に対応可能な税務会計顧問サービスをご用意しています。</div>
                <div class="flexitem__list-arrow">
                  <span class="arrow"></span>
                </div>
              </a>
            </dl>

            <dl class="flexitem__list">
              <a href="<?php echo esc_url( home_url() ); ?>/due-diligence" class="flexitem__link">
                <dt class="flexitem__list-ttl">財務デューデリジェンス</dt>
                <div class="flexitem__list-txt">「M&Aを進める上で、財務リスクが見えないのが不安」「投資の判断材料として、正確な財務分析が欲しい」「専門的な視点での詳細なレポートが必要」そんな課題を、私たちの財務デューデリジェンスでサポートします。正確で信頼性の高いデータで、お客様の課題解決に貢献します。</div>
                <div class="flexitem__list-arrow">
                  <span class="arrow"></span>
                </div>
              </a>
            </dl>

            <dl class="flexitem__list">
              <a href="<?php echo esc_url( home_url() ); ?>/company-setup" class="flexitem__link">
                <dt class="flexitem__list-ttl">会社設立支援</dt>
                <div class="flexitem__list-txt">「初めての会社設立で何から始めればいいのかわからない」「必要な手続きや書類作成を専門家に任せたい」「設立後の税務や法務サポートを検討したい」そんなお悩みを、私たちがワンストップで解決します。専門知識を活かし、設立手続きから設立後の支援まで丁寧に伴走いたします。</div>
                <div class="flexitem__list-arrow">
                  <span class="arrow"></span>
                </div>
              </a>
            </dl>

            <dl class="flexitem__list">
              <a href="<?php echo esc_url( home_url() ); ?>/other-service" class="flexitem__link">
                <dt class="flexitem__list-ttl">その他サービス</dt>
                <div class="flexitem__list-txt">将来の安心を築くための資金計画シミュレーション、MAS監査の専門的なサポート、そして相続に関するご相談を承っております。お客様一人ひとりに寄り添い、確かな計画と安心をお届けし、専門知識と経験を活かしてお客様のニーズに応じた最適な解決策をご提案いたします。</div>
                <div class="flexitem__list-arrow">
                  <span class="arrow"></span>
                </div>
              </a>
            </dl>

            <div class="b-button --orange service__btn">
              <a class="b-button__link" href="<?php echo esc_url( home_url() ); ?>/service">一覧を見る
                <div class="b-button__link-arrow">
                  <span class="arrow"></span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="column">
      <div class="s-section__inner">
        <div class="s-ttl">
          <span class="icon-plus"></span>
          <h2 class="s-ttl__text s-font__en --white js-fade__content-ttl"><span class="fade-txt">Column</span></h2>
          <p class="s-ttl__desp --white js-fade__sec --left">お役立ちコラム</p>
        </div>

        <div class="column__head">
          <p class="column__head-txt">会計・税務に加え、会社設立に関する税務知識や<br class="none --sp">
          財務デューデリジェンスまで、専門的な知識をご紹介しています。</p>

          <div class="b-button --white">
            <a class="b-button__link" href="<?php echo esc_url(get_post_type_archive_link('column')); ?>">コラム一覧
              <div class="b-button__link-arrow">
                <span class="arrow"></span>
              </div>
            </a>
          </div>
        </div>

        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          // カスタムループを生成し、記事を取得
          $args = array(
            'numberposts' => 6,                //表示（取得）する記事の数
            'post_type' => 'column',   //投稿タイプの指定
            'order' => 'ASC',//古い順に並べ替え
            'post_status' => 'publish',
            'paged' => $paged
          );
        ?>
        <?php $the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) :?>
        <div class="column__slider">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="column__slider-item">
              <a class="column__slider-link" href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>
                    <picture class="column__slider-img" style="background:url(<?php the_post_thumbnail_url('full'); ?>) no-repeat;background-position: center center;background-size:cover;height:200px;"></picture>
                  <?php else: ?>
                    <picture class="column__slider-img" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg) no-repeat;background-position: center center;background-size:cover;height:200px;"></picture>
                <?php endif; ?>
                <span class="column__slider-date"><?php the_time('Y.m.d'); ?></span>
                <h3 class="column__slider-ttl"><?php the_title(); ?></h3>
              </a>
              <ul class="column__cat">
                <?php
                  if ($terms = get_the_terms($post->ID, 'column-cat')):
                  foreach ( $terms as $term ):?>
                    <li class="column__cat-link">
                      <a href="<?php echo esc_url(get_category_link($term->term_id)); ?>" class=""><?php echo esc_html($term->name); ?></a>
                    </li>
                <?php endforeach; endif; ?>
              </ul>
            </div>
          <?php endwhile; ?>

        </div>
        <?php else :  ?>
          <p class="no_post s-font__en --column">Coming soon...</p>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>
    </section>




    <section class="company">
      <div class="s-section__inner company__inner --full">
        <div class="company-layout__flex">
          <div class="flex-item__left js-company__fade --left">
            <div class="s-ttl">
              <span class="icon-plus"></span>
              <h2 class="s-ttl__text s-font__en js-fade__content-ttl"><span class="fade-txt">Company</span></h2>
              <p class="s-ttl__desp js-fade__sec --left">事務所概要</p>
            </div>

            <p class="company__head-txt">大阪市中央区を拠点に、経営者の相談しやすい税務のパートナーを目指し活動しています。<br>
              アクセス情報など詳しい情報はこちらをご覧ください。</p>

            <div class="b-button --orange company__btn">
              <a class="b-button__link" href="<?php echo esc_url( home_url() ); ?>/company">事務所概要
                <div class="b-button__link-arrow">
                  <span class="arrow"></span>
                </div>
              </a>
              <a class="b-button__link" href="<?php echo esc_url( home_url() ); ?>/company#greeting">代表メッセージ
                <div class="b-button__link-arrow">
                  <span class="arrow"></span>
                </div>
              </a>
            </div>
          </div>
          <div class="flex-item__right">
            <p class="flex-item__right-txt s-font__en js-fade__delay --bottom">Your Taxes, Clear<br class="none --sp">
            and <br class="block --sp">Within Reach.</p>
          </div>
        </div>
      </div>
    </section>




    <section class="recruit">
      <div class="s-section__inner recruit__inner --recruit">
        <div class="recruit__head">
          <div class="s-ttl --recruit">
            <span class="icon-plus"></span>
            <h2 class="s-ttl__text s-font__en js-fade__content-ttl"><span class="fade-txt">Recruit</span></h2>
            <p class="s-ttl__desp js-fade__sec --left">採用情報</p>
          </div>

          <p class="recruit__head-txt">
            私たちは、一緒に未来を創っていく<br class="block --sp">新しい仲間を探しています。<br>
            <br>
            自分らしく働きたい、成長したい、<br>
            そんなあなたの挑戦を全力で応援します。
          </p>
        </div>

        <div class="b-button --orange service__btn">
          <a class="b-button__link" href="<?php echo esc_url( home_url() ); ?>/recruit">詳細を見る
            <div class="b-button__link-arrow">
              <span class="arrow"></span>
            </div>
          </a>
        </div>

        <picture class="recruit__img">
          <img class="recruit__img-01 js-fade --left" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit_img01.png" alt="" loading="lazy">
          <img class="recruit__img-02 js-fade --right" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit_img02.png" alt="" loading="lazy">
          <img class="recruit__img-03 none --tab js-fade --left" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit_img03.png" alt="" loading="lazy">
          <img class="recruit__img-04 none --tab js-fade --right" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit_img04.png" alt="" loading="lazy">

          <img class="recruit__img-03 block --tab js-fade --left" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit_img03_sp.png" alt="" loading="lazy">
          <img class="recruit__img-04 block --tab js-fade --right" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit_img04_sp.png" alt="" loading="lazy">
        </picture>
      </div>
    </section>

    <?php include('components/c-contact.php'); ?>
  </main>
  <!--========== ▲ main_content ==========-->

</article>
<!--========== ▲ article　（ページ毎にid名を変更） ==========-->
<?php include('footer.php'); ?>