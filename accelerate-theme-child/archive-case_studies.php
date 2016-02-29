<?php
/**
 * The template for displaying the archive of case studies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
            $services=get_field('services');
            $about=get_field('about');
            ?>
           
				
			
            <article class="case-study">
                <aside class="case-study-sidebar">
                    <h2><a href="<?php the_permalink; ?>"><?php the_title(); ?></a></h2>
                    <h5><?php echo $services; ?></h5>
                   <p><?php echo $about; ?></p>
                    <?php the_excerpt(); ?>
                  
                     
                     <p><strong><a href="<?php the_permalink; ?>">View Project</a></strong></p>
                </aside>
               <?php if ($services = 'Content Strategy, Design and Development'): ?>
                  <img src="http://www.providesupport.com/blog/wp-content/uploads/2013/08/Infographic_Live_chat_business.jpg" width="300px"/>
              <?php endif; ?>
            </article>
<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>