<?php get_header(); ?>

<main class="page-template-main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('content-page'); ?>>
      <header class="content-page-hero">
        <div class="content-page-shell">
          <nav class="page-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span aria-hidden="true">/</span>
            <span aria-current="page"><?php the_title(); ?></span>
          </nav>
          <h1><?php the_title(); ?></h1>
        </div>
      </header>

      <div class="content-page-shell">
        <div class="content-page-body">
          <?php the_content(); ?>
        </div>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
