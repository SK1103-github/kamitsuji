<section class="s-contents">
  <div class="s-section__inner contents__inner">
    <div class="s-ttl">
      <span class="icon-plus"></span>
      <h1 class="s-ttl__text s-font__en js-fade__content-ttl"><span class="fade-txt">Contents</span></h1>
      <p class="s-ttl__desp js-fade__sec --left">関連コンテンツ</p>
    </div>

    <div class="s-contents__flex">
      <?php if(!is_page('about')): ?>
        <a href="<?php echo esc_url( home_url() ); ?>/about" class="s-contents__flex-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/contents_04.png" alt="上辻会計事務所について">
          <div class="s-contents__ttl">
            <h3 class="s-contents__ttl-txt s-font__en">About</h3>
            <p class="s-contents__ttl-desp">上辻会計事務所について</p>
          </div>
          <div class="b-button__arrow --orange s-contents__btn">
            <div class="b-button__arrow-item"></div>
          </div>
        </a>
      <?php endif; ?>

      <a href="<?php echo esc_url( home_url() ); ?>/service" class="s-contents__flex-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/contents_02.png" alt="サービス内容">
        <div class="s-contents__ttl">
          <h3 class="s-contents__ttl-txt s-font__en">Service</h3>
          <p class="s-contents__ttl-desp">サービス内容</p>
        </div>
        <div class="b-button__arrow --orange s-contents__btn">
          <div class="b-button__arrow-item"></div>
        </div>
      </a>

      <?php if(!is_page(['recruit','price'])): ?>
        <a href="<?php echo esc_url( home_url() ); ?>/recruit" class="s-contents__flex-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/contents_03.png" alt="採用情報">
          <div class="s-contents__ttl">
            <h3 class="s-contents__ttl-txt s-font__en">Recruit</h3>
            <p class="s-contents__ttl-desp">採用情報</p>
          </div>
          <div class="b-button__arrow --orange s-contents__btn">
            <div class="b-button__arrow-item"></div>
          </div>
        </a>
        <?php endif; ?>

        <?php if(!is_page('company')): ?>
          <a href="<?php echo esc_url( home_url() ); ?>/company" class="s-contents__flex-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/contents_01.png" alt="事業所概要">
            <div class="s-contents__ttl">
              <h3 class="s-contents__ttl-txt s-font__en">Company</h3>
              <p class="s-contents__ttl-desp">事業所概要</p>
            </div>
            <div class="b-button__arrow --orange s-contents__btn">
              <div class="b-button__arrow-item"></div>
            </div>
          </a>
        <?php endif; ?>
    </div>
  </div>
</section>