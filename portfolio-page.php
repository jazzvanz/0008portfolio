<?php
/*
	Template Name: Portfolio-Page
*/
get_header();  ?>

<div class="container">
  
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- pulling in headshot -->
          <div id="about" class="splash">
            <div class="img">
              <?php  $image = get_field('headshot');
                  if( !empty($image) ): ?>
                 <img class="headshot" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
               <?php endif; ?>
            </div>
               <!-- pulling in job title -->
              <div class="textBlock">
               <div class="topText">
                   <h2 class="jobTitle"><?php the_field("job_title"); ?></h2>
                   <!-- pulling in my name -->

                   <h1 class="name"><?php the_field("name"); ?></h1>
                   <!-- pulling in my introduction paragraph  -->
                   <h3 class="hi"><?php the_field("greeting"); ?></h3>
                   <p class="introduction"><?php the_field("introduction"); ?></p>
                </div>
                    <!-- panel/broad skills section  -->
                    <!-- pulling in skills/repeater -->
                <div class="move">
                    <div class="broadSkills">
                      <div class="broadSvg">
                        <!-- hardcoding the broad logos -->
                        <div class="developer">
                            <img class="svg" src="<?php bloginfo('template_url') ?>/images/developer.svg" alt="logo - geodesic dog">
                             <h4>Developer</h4>
                        </div>
                        <div class="designer">
                            <img class="svg" src="<?php bloginfo('template_url') ?>/images/design.svg" alt="logo - geodesic dog">
                             <h4>Designer
                         </div>
                         <div class="person">
                            <img class="svg" src="<?php bloginfo('template_url') ?>/images/peopleperson.svg" alt="logo - geodesic dog">
                            <h4>People Person</h4>
                         </div>
                      </div> 
                        <!-- hardcoding the broad titles -->
                      
                    </div>
                   <!-- pulling in social icons -->
                <div class="socialIcons">
                   <?php while ( has_sub_field("social_icons") ): ?>
                       <p><?php the_sub_field("social_icons"); ?></p>
                   <?php endwhile; ?>
                </div>

             </div> 
             <!-- //end of move div -->
          </div>
        </div>
     </div> 
     <!-- //contianer  -->
              <!-- pulling in hours worked  -->
          <h3 class="hoursCoded">Time spent coding:</h3>
              <div class="hoursPanel">
               <!-- <div class="container"> -->
                  <div class="hoursP">
                  <?php while ( has_sub_field("work_hours") ): ?>
                    <div class="workHours">
                      <p class="skill"><?php the_sub_field("skill"); ?></p>
                      <p class="hours"><?php the_sub_field("hours"); ?></p>
                    </div> 
                  <?php endwhile; ?>
                  </div>
                <!-- </div> -->
             </div>
         <div class="container">


            <!-- pulling in mywork title -->
            <div id="portfolio" class="workText">
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
                        <div class="test">
                          <div class="textWork">
                              <h3 class="portfolioTitle"><?php the_title(); ?></h3>
                              <h4><?php the_content(); ?></h4>

                              <?php while ( has_sub_field("portfolio_pieces") ): ?>
                              <p><?php the_sub_field("long_desc"); ?></p>
                              <?php the_sub_field("button"); ?>
                        
                          </div>
                            <div class="work">
                               <img class="projectImage" src="<?php the_sub_field("project_image"); ?>" />
                            </div>
                         </div>
                            <!--  div test ends -->
                            <?php endwhile; ?>
                          
                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>

                            <?php endif;  ?> 

                     </div>
                </div> 
         



             <!-- pulling in my hardskills  -->
         <h3 class="hard">Skills &amp; Languages</h3>
         <h5 class="hardSubtitle">Current + <span>In Process</span></h5>

        <div id="skills" class="hardSkills">
          <?php while(has_sub_field("hard_skills")): ?>
               <i class="devicons devicons-<?php the_sub_field("hardskills_icons"); ?>"></i>
          <?php endwhile; ?>
        </div>

         <div class="hardSkillsTwo">
          <?php while(has_sub_field("hard_skills_two")): ?>
               <i class="devicons devicons-<?php the_sub_field("hardskills_icons"); ?>"></i>
          <?php endwhile; ?>
        </div>
      </div>
    </div>

            <!-- hardcoding upcoming title  -->
          <!-- start of events  -->
      <h3 id="events" class="calenderP">Events</h3> 
       <div class="containCalender">
         <div class="container">
          <div class="calender">
            <div class="upcoming">
                <h3>Upcoming</h3>

                 <!-- pulling in upcoming events -->
                 <?php while ( has_sub_field("upcoming_events") ): ?>
                       <p class="eventDate"><?php the_sub_field("event_date"); ?></p>
                      <p class="eventName"><?php the_sub_field("event_name"); ?></p>
                      <!-- <p class="eventDate"><?php the_sub_field("event_date"); ?></p> -->
                      <p class="eventDesc"><?php the_sub_field("event_description_"); ?></p>
                  <?php endwhile; ?>
                </div>

                <!-- hardcoding past event titles -->
                <div class="past">
                <h3>Recently Past </h3>
                <!-- pulling in past events -->
              <?php while ( has_sub_field("past_events") ): ?>
                 <p class="eventDate"><?php the_sub_field("past_date"); ?></p>
                    <p class="eventName"><?php the_sub_field("past_title"); ?></p>
                    <!-- <p class="eventDate"><?php the_sub_field("past_date"); ?></p> -->
                    <p class="eventDesc"><?php the_sub_field("past_description"); ?></p>
                <?php endwhile; ?>
                </div>
            </div>
          </div>
         </div>
     <!--    </div> -->

            <!-- //end of calender div -->


         <h3 id="contact" class="connect">Let's Connect!</h3>

          <div class="container">
            <div class="contactPanel">
              <div class="columns">
                  <!-- pulling in contact column one -->
                  <div class="one">
                      <?php while ( has_sub_field("contact_information_one") ): ?>
                    <!-- <div class="contactColumnOne"> -->
                       <p><?php the_sub_field("contact_one"); ?></p>
                    <!-- </div> -->
                  <!-- </div> -->
                  <?php endwhile; ?>
                  </div>

                  <!-- pulling in contact column two -->
                  <div class="two">
                  <?php while ( has_sub_field("contact_information_two") ): ?>
                      <!-- <div class="contactColumnTwo"> -->
                        <p><?php the_sub_field("contact_column_two"); ?></p>
                      <!-- </div> -->
                  <!-- </div> -->
                   <?php endwhile; ?>
                   </div>

                    <!-- pulling in contact column three -->
                  <div class="three">
                      <?php while ( has_sub_field("contact_information_three") ): ?>
                            <p><?php the_sub_field("contact_column_three_"); ?></p>
                      <?php endwhile; ?>
                  </div>

                  </div> 
           <!-- columns div ends -->
                  
                    <!-- pulling in the contact forum -->

                  <div class="contactForm">
                    <?php the_field("contact_form_"); ?>
                  </div>
                </div> 
                       <!-- columns div ends -->
            </div>
                 
         <?php endwhile; // end of the loop. ?>

              
  </div> <!-- /.container -->


<?php get_footer(); ?>