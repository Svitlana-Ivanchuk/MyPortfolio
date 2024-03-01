<?php
/**
 * Template Name: Home Page
 */

get_header();
$show_hero = get_field('show_hero');
$title = get_field('hero_title');
?>

<?php if ($show_hero): ?>

<section class="hero">
 <div class="container">
  <div class="hero__inner">
   <?php if ($title <> ''): ?>
   <h1 class="hero__title">
    <?php echo $title ?>
   </h1>
   <?php endif; ?>
  </div>

  <?php if (have_rows('hero_slider')): ?>
  <ul class="slides">
   <?php while (have_rows('hero_slider')):
                  the_row();
                  $title = get_sub_field('slider_title');
                  $image = get_sub_field('image');
                  ?>
   <li>
    <?php if ($title <> ''): ?>
    <h2 class="hero__slider-title">
     <?php echo $title ?>
    </h2>
    <?php endif; ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <p>
     <?php the_sub_field('caption'); ?>
    </p>
   </li>
   <?php endwhile; ?>
  </ul>
  <?php endif; ?>

  <?php if (have_posts()): ?>
  <header class="page-header">
   <h1 class="page-title">
    <?php
                  /* translators: %s: search query. */
                  printf(esc_html__('Search Results for: %s', 'svit'), '<span>' . get_search_query() . '</span>');
                  ?>
   </h1>
  </header><!-- .page-header -->
  <?php
            /* Start the Loop */
            while (have_posts()):
               the_post();

               /**
                * Run the loop for the search to output the results.
                * If you want to overload this in a child theme then include a file
                * called content-search.php and that will be used instead.
                */
               get_template_part('template-parts/content', 'search');

            endwhile;

            the_posts_navigation();

         else:

            get_template_part('template-parts/content', 'none');

         endif;  ?>





 </div>
</section>

<?php endif ?>

<?php get_footer(); ?>