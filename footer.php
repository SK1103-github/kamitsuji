<!--========== ▼ footer ==========-->
<footer class="l-footer">
  <div class="l-footer_inner">
    <div class="l-footer__flex">
      <div class="l-footer__flex-item --left">
        <div class="l-footer__logo">
          <a href="<?php echo esc_url( home_url() ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_white.svg" alt="上辻会計事務所" width="261" height="131">
          </a>
        </div>
        <a href="<?php echo esc_url( home_url() ); ?>/privacy" class="l-footer__link none --sp">プライバシーポリシー</a>
      </div>

      <div class="l-footer__flex-item --right">
        <ul class="l-footer__nav">
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url( home_url() ); ?>/news" class="l-footer__nav-link">お知らせ</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(get_post_type_archive_link('column')); ?>" class="l-footer__nav-link">コラム</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url( home_url() ); ?>/about" class="l-footer__nav-link">上辻会計事務所について</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url( home_url() ); ?>/company" class="l-footer__nav-link">事務所概要</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url( home_url() ); ?>/service" class="l-footer__nav-link">サービス内容</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url( home_url() ); ?>/recruit" class="l-footer__nav-link">採用情報</a>
          </li>
          <li class="l-footer__nav-item --sub">
            <a href="<?php echo esc_url( home_url() ); ?>/consultant" class="l-footer__sub-link">- 税務会計顧問</a>
            <a href="<?php echo esc_url( home_url() ); ?>/due-diligence" class="l-footer__sub-link">- 財務デューデリジェンス</a>
            <a href="<?php echo esc_url( home_url() ); ?>/company-setup" class="l-footer__sub-link">- 会社設立支援</a>
            <a href="<?php echo esc_url( home_url() ); ?>/other-service" class="l-footer__sub-link">- その他</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url( home_url() ); ?>/contact" class="l-footer__nav-link">お問い合わせ</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url( home_url() ); ?>/price" class="l-footer__nav-link">料金表</a>
          </li>
          <li class="l-footer__nav-item block --sp">
            <a href="<?php echo esc_url( home_url() ); ?>/privacy" class="l-footer__nav-link">プライバシーポリシー</a>
          </li>
        </ul>
      </div>
    </div>

    <p class="l-footer__copy">Copyright © KAMITUJI accounting firm All Rights Reserved.</p>
  </div>
</footer>
<!--========== ▲ footer ==========-->
</div>
<?php if(is_home()): ?>
  <div id="loader">
    <img class="loader-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_white.svg" alt="上辻会計事務所" width="173" height="86">
  </div>
<?php endif; ?>
<!-- ▼ js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/function.js"></script>
<?php wp_footer(); ?>
</body>
</html>