<?php if (is_page('news')): ?>
<div class="c-news">
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(array(
    'post_status' => 'publish',
    'paged' => $paged,
    'posts_per_page' => 8, // 1ページあたり1件表示
    'orderby' => 'date',
    'order' => 'DESC',
  ));
?>

<?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="c-news__card">
      <span class="c-news__card-date"><?php the_time('Y.m.d'); ?></span>
      <?php
        $categories = get_the_category();
        if ($categories) :
          foreach ($categories as $category) : ?>
            <span class="c-news__card-cat"><?php echo esc_html($category->name); ?></span>
      <?php endforeach; endif; ?>
      <h3 href="<?php the_permalink(); ?>" class="c-news__card-ttl"><?php the_title(); ?></h3>
      <span class="c-news__card-arrow"></span>
    </a>
  <?php endwhile; ?>

  <?php else :  ?>
      <p class="no_post s-font__en">Coming soon...</p>
    <?php endif;
  wp_reset_postdata(); ?>
</div>
<?php endif; ?>


<?php if(is_page('recruit')): ?>
<div class="c-news">
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(array(
    'post_status' => 'publish',
    'paged' => $paged,
    'posts_per_page' => 1, // 1ページあたり1件表示
    'orderby' => 'date',
    'order' => 'DESC',
    'cat' => '2',
  ));
?>

<?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="c-news__card">
      <span class="c-news__card-date"><?php the_time('Y.m.d'); ?></span>
      <?php
        $categories = get_the_category();
        if ($categories) :
          foreach ($categories as $category) : ?>
            <span class="c-news__card-cat"><?php echo esc_html($category->name); ?></span>
      <?php endforeach; endif; ?>
      <h3 class="c-news__card-ttl"><?php the_title(); ?></h3>
      <span class="c-news__card-arrow"></span>
    </a>
  <?php endwhile; ?>

  <?php else :  ?>
      <p class="no_post s-font__en">Coming soon...</p>
    <?php endif;
  wp_reset_postdata(); ?>
</div>
<?php endif; ?>

<?php if(is_front_page() || is_single()): ?>
<div class="c-news">
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query(array(
    'post_status' => 'publish',
    'paged' => $paged,
    'posts_per_page' => 4, // 1ページあたり1件表示
    'orderby' => 'date',
    'order' => 'DESC',
  ));
?>

<?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="c-news__card">
      <span class="c-news__card-date"><?php the_time('Y.m.d'); ?></span>
      <?php
        $categories = get_the_category();
        if ($categories) :
          foreach ($categories as $category) : ?>
            <span class="c-news__card-cat"><?php echo esc_html($category->name); ?></span>
      <?php endforeach; endif; ?>
      <h3 class="c-news__card-ttl"><?php the_title(); ?></h3>
      <span class="c-news__card-arrow"></span>
    </a>
  <?php endwhile; ?>

  <?php else :  ?>
      <p class="no_post s-font__en">Coming soon...</p>
    <?php endif;
  wp_reset_postdata(); ?>
</div>
<?php endif; ?>