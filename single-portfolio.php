
  <?php  

  
// Template Name: single-portfolio-Page

  ?>


<div class="section">
  <div class="innerWrapper">
    <div class="full">

      <!-- loop we did in class for portfilio items -->
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
           <p class="client"><?php the_field('client_name'); ?></p> 

            <div class="shortDesc">
              <?php the_field('short_desc'); ?>
            </div>
            <?php the_content(); ?>
        
      <?php endwhile; // end of the loop. ?>
        <?php the_content(); ?>

      <?php while( has_sub_field('images') ): ?>
        <div class="image">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['sizes']['square'] ?>">
            <p><?php the_sub_field('caption'); ?></p>
      </div>
    <?php endwhile; ?>
    <!-- loop we did in class for portfilio items ends -->


    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->





