<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">


    <!-- SPLASH IMAGE LOOP SPLASH IMAGE LOOP -->
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="jobTitle"><?php the_field("job_desc"); ?></div>
      <h1><?php the_title(); ?></h1>
      <p class="welcome"><?php the_content(); ?> </p>

      <div class="image">
        <?php $image = get_field("image"); ?>
        <img src="<?php echo $image["sizes"] ["large"] ?>">
      </div>
      <!-- not working above -->
    <?php endwhile; ?>


    <?php while (has_sub_field("broad_skills") ); ?>
      <div class="broadSkills">
        <?php $broadSkills = get_sub_field("broad_skills"); ?>
        <img src="<?php echo $image["sizes"]["thumbnail"] ?>">
        <p><?php the_sub_field("caption"); ?></p>
      </div>
    
    <!-- SPLASH IMAGE LOOP SPLASH IMAGE LOOP -->
    
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->


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

<?php get_footer(); ?>