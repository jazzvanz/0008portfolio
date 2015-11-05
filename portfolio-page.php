<?php
/*
	Template Name: Portfolio-Page
*/
get_header();  ?>

<div class="container">
  <div class="outerWrapper">
    <div class="innerWrapper">


        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- pulling in headshot -->
          <div class="splash">
              <?php  $image = get_field('headshot');
                  if( !empty($image) ): ?>
                 <img class="headshot" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
               <?php endif; ?>
               <!-- pulling in job title -->
               <div class="textBlock">
                   <h2 class="jobTitle"><?php the_field("job_title"); ?></h2>
                   <!-- pulling in my name -->

                   <h1 class="name"><?php the_field("name"); ?></h1>
                   <!-- pulling in my introduction paragraph  -->
                   <h3 class="hi"><?php the_field("greeting"); ?></h3>
                   <p class="introduction"><?php the_field("introduction"); ?></p>

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
                       <p><?php the_sub_field("social_icons"); ?></p>
                     </div>
                   <?php endwhile; ?>

               </div>
          </div>




              <!-- pulling in hours worked  -->
              <div class="hoursPanel">
                  <?php while ( has_sub_field("work_hours") ): ?>
                    <div class="workHours">
                      <p class="skill"><?php the_sub_field("skill"); ?></p>
                      <p class="hours"><?php the_sub_field("hours"); ?></p>
                    </div> 
                  <?php endwhile; ?>
              </div>


            <!-- pulling in mywork title -->
            <div class="workText">
                <h3 class="myWork"><?php the_field("my_work"); ?></h3>
                <!-- pulling in the subtitle about my portfolio -->
                <h5 class="subtitle"><?php the_field("subtitle_work"); ?></h5>
            </div>

            <!-- //bring in portfolio wp_query.com -->
                  
             <div class="portfolio">
                   <div class="full"> 

                       <?php $portfolioQuery = new WP_Query ( 
                        array (
                          'post_type' => 'portfolio'    
                           )
                         ); ?> 

                          <?php if ( $portfolioQuery->have_posts() ): ?>

                          <?php while ( $portfolioQuery->have_posts() ): $portfolioQuery->the_post(); ?>

                          <!-- stuff that happens while inside the loop -->
                            <h3 class="portfolioTitle"><?php the_field("the_title"); ?></h3>
                            <p class="portfolioContent"><?php the_field("the_content"); ?></p>

                            <?php while ( has_sub_field("portfolio_pieces") ): ?>
                            <p><?php the_sub_field("long_desc"); ?></p>
                            <img class="projectImage" src="<?php the_sub_field("project_image"); ?>" />
                    
                            <?php endwhile; ?>
                          
                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>

                            <?php endif;  ?> 

                     </div>
                </div> 
         



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