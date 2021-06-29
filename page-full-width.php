<?php
/**
 * Template Name: Page Full Width
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php

            // Front Page Full Width Template is assigned to page Front Page
                if ( is_front_page() ) {
                get_template_part( 'template-parts/frontbody', 'page' );


            // Front Page Full Width Template is assigned to page Verify Your Registration
                } elseif ( is_page( 'patron-survey-page' ) ) {    
                get_template_part( 'template-parts/PatronSurveyForm', 'page' );

            // Front Page Full Width Template is assigned to page Directions for Internship Registration
                } elseif ( is_page( 'volunteers' ) ) {    
                get_template_part( 'template-parts/Volunteers', 'page' );
            
            // Front Page Full Width Template is assigned to page Internship Request Completed
                } elseif ( is_page( 'patron-survey-query-page' ) ) {    
                get_template_part( 'template-parts/PatronSurveyQuery', 'page' );

            // Front Page Full Width Template is assigned to page Logged Out
                } elseif ( is_page( 'logged-out' ) ) {    
                get_template_part( 'template-parts/onlogout', 'page' );

            // Front Page Full Width Template is assigned to page Administrative Landing Page
                } elseif ( is_page( 'administrative-landing-page' ) ) {    
                get_template_part( 'template-parts/statuscheck', 'page' );

            // Front Page Full Width Template is assigned to page Status Check Archive Page
                } elseif ( is_page( 'status-check-archive' ) ) {    
                get_template_part( 'template-parts/statuscheckarchive', 'page' );

            // Front Page Full Width Template is assigned to page Site Management Guide
                } elseif ( is_page( 'management-guide' ) ) {    
                get_template_part( 'template-parts/managementguide', 'page' );

                } else {

            // nothing found
                get_template_part( 'template-parts/form', 'none' );
            }   
        
        
            ?>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>
