
<?php
/**
 * The template for displaying case studies
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
            $client=get_field('client');
            $about=get_field('about');
            $link=get_field('site_link');
 ?>
              <h1>This is my case studies page</h1>
			<article class="case-study">
                <aside class="case-study-sidebar">
                    <h2><?php the_title(); ?></h2>
                    <h5><?php echo $services; ?></h5>
                    <h6>Client: <?php echo $client; ?></h6>
                    <p><?php echo $about; ?></p>
                     
                     <p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
                </aside>
               
               <?php the_content(); ?>
            </article>
             
            
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>