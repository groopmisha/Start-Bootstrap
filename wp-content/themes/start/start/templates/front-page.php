<?php
/**
 * Template Name: Static Home-page Template
 */


get_header();
$sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : 'right';
$blog_type        = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'posts_settings/blog_type/selected', 'blog-1' ) : 'blog-1';

?>

  <section class="bg-primary" id="about">

    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-lg-offset-2 text-center">

          <?php
            if ( have_posts() ) : 
              query_posts('cat=16');   // указываем ID рубрик, которые необходимо вывести.
            while (have_posts()) : the_post();  
          ?>
            
            <h2 class="section-heading"><?php the_title(); ?></h2>
            <p class="text-faded"><?php the_content();?></p>
            <a class="page-scroll btn btn-default btn-xl sr-button" href="<?php the_permalink(); ?>">Get Started!</a><?php
          
          endwhile;  // завершаем цикл.
          endif;
          /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
          wp_reset_query();                
          ?>

        </div>

      </div>

    </div>

  </section>

  <section id="services">

    <div class="container">

      <div class="row">

        <div class="col-lg-12 text-center">

          <?php
            if ( have_posts() ) : 
              query_posts('cat=17');   // указываем ID рубрик, которые необходимо вывести.
            while (have_posts()) : the_post();  
          ?>
          
            <h2 class="section-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php
          
          endwhile;  // завершаем цикл.
          endif;
          /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
          wp_reset_query();                
          ?>

        </div>

      </div>

    </div>

    <div class="container">

      <div class="row">
          
        <?php
          if ( have_posts() ) : 
            query_posts('cat=17');   // указываем ID рубрик, которые необходимо вывести.
          while (have_posts()) : the_post();  
        ?>

          <?php the_content();

        endwhile;  // завершаем цикл.
        endif;
        /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
        wp_reset_query();                
        ?>

      </div>

    </div>

  </section>

  <?php get_template_part( 'templates/portfolio', get_post_type() ); ?>

  <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('sidebar-2'); ?>

<?php get_footer();