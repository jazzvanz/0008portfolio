<?php
/*
	Template Name: Portfolio-Page
*/
get_header();  ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- pulling in headshot -->
            <?php  $image = get_field('headshot');
                if( !empty($image) ): ?>
                <img class="headshot" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
             <?php endif; ?>
             <!-- pulling in job title -->
             <h2 class="jobTitle"><?php the_field("job_title"); ?></h2>
             <!-- pulling in my name -->
             <h1 class="name"><?php the_field("name"); ?></h1>
             <!-- pulling in my introduction paragraph  -->
             <p class="introduction"><?php the_field("introduction") ?></p>

             <!-- panel/broad skills section  -->
             <!-- pulling in skills/repeater -->
            <?php while ( has_sub_field("broad_skills") ): ?>
              <div>
                <p><?php the_sub_field("broad_logo"); ?></p>
                <p><?php the_sub_field("broad_title"); ?></p>
              </div>
            <?php endwhile; ?>

            <!-- pulling in social icons -->
            <?php while ( has_sub_field("social_icons") ): ?>
              <div class="socialIcons">
                <p><?php the_sub_field("social_icons"); ?>
              </div>
            <?php endwhile; ?>

              <!-- pulling in hours worked  -->
            <?php while ( has_sub_field("work_hours") ): ?>
              <div class="workHours">
                <p><?php the_sub_field("skill"); ?></p>
                <p><?php the_sub_field("hours"); ?></p>
              </div> 
            <?php endwhile; ?>

            <!-- pulling in mywork title -->
            <h3 class="myWork"><?php the_field("my_work"); ?></h3>
            <!-- pulling in the subtitle about my portfolio -->
            <h5 class="subtitle"><?php the_field("subtitle_work"); ?></h5>

            <!-- //bring in portfolio -->

              <?php get_template_part( 'single', 'portfolio' ); ?>
            


             <!-- pulling in my hardskills  -->
            <?php while ( has_sub_field("hard_skills") ): ?>
                <div class="hardSkills">
                  <p><?php the_sub_field("hardskills_icons"); ?></p>
                </div>
             <?php endwhile; ?>

            <!-- hardcoding upcoming title  -->
            <h3>Upcoming Events</h3>

             <!-- pulling in upcoming events -->
             <?php while ( has_sub_field("upcoming_events") ): ?>
                <div class="upcoming">
                  <p><?php the_sub_field("event_name"); ?></p>
                  <p><?php the_sub_field("event_date"); ?></p>
                  <p><?php the_sub_field("event_description_"); ?></p>
                </div>
              <?php endwhile; ?>


              <!-- hardcoding past event titles -->
              <h3>Recent Past Events</h3>
              <!-- pulling in past events -->
            <?php while ( has_sub_field("past_events") ): ?>
                <div class="past">
                  <p><?php the_sub_field("past_title"); ?></p>
                  <p><?php the_sub_field("past_date"); ?></p>
                  <p><?php the_sub_field("past_description"); ?></p>
                </div>
              <?php endwhile; ?>

              <!-- pulling in contact column one -->
              <?php while ( has_sub_field("contact_information_one") ): ?>
                <div class="contactColumnOne">
                  <p><?php the_sub_field("contact_one"); ?></p>
                </div>
              <?php endwhile; ?>

              <!-- pulling in contact column two -->
              <?php while ( has_sub_field("contact_information_two") ): ?>
                  <div class="contactColumnTwo">
                    <p><?php the_sub_field("contact_column_two"); ?></p>
                  </div>
               <?php endwhile; ?>

                <!-- pulling in contact column three -->
              <?php while ( has_sub_field("contact_information_three") ): ?>
                  <div class="contactColumnThree">
                    <p><?php the_sub_field("contact_column_three_"); ?></p>
                  </div>
              <?php endwhile; ?>

                <!-- pulling in the contact forum -->
                <?php the_field("contact_form_"); ?>


         <?php endwhile; // end of the loop. ?>

      
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->


<?php get_footer(); ?>