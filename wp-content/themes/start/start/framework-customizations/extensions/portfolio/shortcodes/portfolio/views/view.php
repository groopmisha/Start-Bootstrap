<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>
<?php $fw_ext_projects_gallery_image = fw()->extensions->get( 'portfolio' )->get_config( 'image_sizes' );
$fw_ext_projects_gallery_image = $fw_ext_projects_gallery_image['gallery-image']; ?>

<?php
global $wp_query;
$ext_portfolio_instance = fw()->extensions->get( 'portfolio' );
$ext_portfolio_settings = $ext_portfolio_instance->get_settings();

$taxonomy        = $ext_portfolio_settings['taxonomy_name'];
$term            = get_term_by( 'slug', get_query_var( 'term' ), $taxonomy );
$term_id         = ( ! empty( $term->term_id ) ) ? $term->term_id : 0;
$categories      = fw_ext_portfolio_get_listing_categories( $term_id );

$listing_classes = fw_ext_portfolio_get_sort_classes( $wp_query->posts, $categories );
$loop_data       = array(
    'settings'        => $ext_portfolio_instance->get_settings(),
    'categories'      => $categories,
    'image_sizes'     => $ext_portfolio_instance->get_image_sizes(),
    'listing_classes' => $listing_classes
);
set_query_var( 'fw_portfolio_loop_data', $loop_data );
?>

<?php if ( ! empty( $categories ) ) : ?>
<div class="container">
      <h1 class="section-title-h1 gray">AGG Products</h1>
    </div>
<div class="wrapp-categories-portfolio">
                            <ul id="categories-portfolio" class="portfolio-categories">
                                <li class="filter categories-item" data-filter=".category_all"><a 
                                        href='#' class="link btn"><?php _e( 'All', 'unyson' ); ?></a></li>
                                <?php foreach ( $categories as $category ) : ?>
                                    <li class="filter categories-item"
                                        data-filter=".category_<?php echo $category->term_id ?>"><a
                                            href='#' class="link btn"><?php echo $category->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif ?>


<div class="entry-content">
                    <section class="portfolio" id="Container">
                     <div class="w-section w-clearfix products">    
                     <ul id="portfolio-list" class="portfolio-list">        
<?php   
$args = array( 'post_type' => 'fw-portfolio', 'post_per_page' =>'20', 'order' => 'ASC','post_status' => 'publish');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
<li class="category_<?php echo $category->term_id ?> w-inline-block item stacked mix category_all portfolio-item">
        <a href="<?php the_permalink() ?>" data-ix="hover-arrow">
            <?php
            $thumbnail_id = get_post_thumbnail_id();
            if( !empty( $thumbnail_id ) ) {
                $thumb_id = get_post_thumbnail_id();
                $image = wp_get_attachment_image_src($thumb_id,'large', true);
            } else {
                $image = fw()->extensions->get('portfolio')->locate_URI('/static/img/no-photo.jpg');
                $thumbnail_title = $image;
            }
            ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo $thumbnail_title ?>"/>
            <div class="w-icon-slider-right arrow"></div>
            <h1 class="item-title"><?php the_field('product_title'); ?></h1>
            <div class="data"><?php the_field('product_excerpt'); ?></div>
        </a>
</li>   
    <?php endwhile;?>
</ul>