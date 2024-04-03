<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header();
?>
  <main>
  <section class="masthead" style="background-image: url('<?php $image_url = get_field('image'); if (is_array($image_url)) { $image_url = $image_url['url']; } echo esc_url($image_url); ?>')">
      <div>
        <h1><?php echo wp_kses_post(get_field('main_heading')); ?></h1>
        <h2><?php echo wp_kses_post(get_field('sub-heading')); ?></h2>
      </div>
    </section>
    <section class="home-row-one row">
      <div >
        <h3><?php echo wp_kses_post(get_field('row_one_title')); ?></h3>
        <p><?php echo wp_kses_post(get_field('row_one_text')); ?></p>
        
        <img src="<?php $image_url = get_field('row_one_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('row_one_image_alt_text')); ?>">
       
      </div>
    </section>
    <section class="home-row-two row">
      <div >
        <h3><?php echo wp_kses_post(get_field('row_two_title')); ?></h3>
        <p><?php echo wp_kses_post(get_field('row_two_text')); ?></p>
      </div>
      <div >
      <img src="<?php $image_url = get_field('row_two_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('row_two_image_alt_text')); ?>">
      </div>
    </section>
    <section class="home-row-three row">
      <h3><?php echo wp_kses_post(get_field('row_three_title')); ?></h3>
      <?php echo wp_kses_post(get_field('row_three_content')); ?>
      <img src="<?php $image_url = get_field('row_three_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('row_three_image_alt_text')); ?>">
    </section>
    <section class="home-row-four row">
          
        <div class="column-container">
        <div>
            <h3><?php echo wp_kses_post(get_field('column_title')); ?></h3>
            <p><?php echo wp_kses_post(get_field('column_text')); ?></p>
          </div>
        <div class="column-image">
         <img src="<?php $image_url = get_field('column_one_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('column_one_image_alt_text')); ?>">
         <h4><?php echo wp_kses_post(get_field('column_one_name')); ?></h4>  
        </div>
        <div class="column-image">
         <img src="<?php $image_url = get_field('column_two_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('column_two_image_alt_text')); ?>">
         <h4><?php echo wp_kses_post(get_field('column_two_name')); ?></h4>  
        </div>
        <div class="column-image">
         <img src="<?php $image_url = get_field('column_three_image'); if (is_array($image_url)) { echo esc_url($image_url['url']); } else { echo esc_url($image_url); } ?>" alt="<?php echo esc_attr(get_field('column_three_image_alt_text')); ?>">
         <h4><?php echo wp_kses_post(get_field('column_three_name')); ?></h4>  
        </div>
      </div>
    </section>
  </main>
<?php
get_footer();
