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

get_header(); 
$size="medium";?>
<section class="home-page">
     <div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
 </section>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
             $services=get_field('our_services');
             $content=get_field('content_strategy');
             $influencer=get_field('influencer_mapping');
             $socialmedia=get_field('social_media_strategy');
             $designdevelop=get_field('design_and_development');
             $image_1=get_field('image_1');
             $image_2=get_field('image_2');
             $image_3=get_field('image_3');
             $image_4=get_field('image_4');
             ?>
              <h1>This is my case studies page</h1>
			<article>
                <aside>
                 
                    <h2 style = "text-align:center;"><?php the_title(); ?></h2>
                    <h5 style = "text-align:center;margin-left:200px;width:600px;"><?php echo $services; ?></h5>
              
                    <div class="content-left-img">
                      <?php if($image_1) { 
                          echo wp_get_attachment_image($image_1,$size);
                      } ?>
                     </div>
                    <div class="content-right">
                      <h3>Content Strategy</h3>
                      <?php echo $influencer; ?>
                     </div>
               

                    <div class="content-left">
                      <h3>Influencer Mapping</h3>
                      <?php echo $influencer; ?>
                     </div>
                   <div class="content-right-img">
                     <?php if($image_2) { 
                         echo wp_get_attachment_image($image_2,$size);
                     } ?>
                     </div>
                    
                     <div class="content-left-img">
                     <?php if($image_3) { 
                        echo wp_get_attachment_image($image_3,$size);
                    } ?>
                    </div>
                    <div class="content-right"">
                    <h3>Social Media Strategy</h3>
                    <?php echo $socialmedia; ?>
                    </div>
                    

                    
                    <div class="content-left">       
                    <h3>Design & Development</h3>
                    <?php echo $designdevelop; ?>
                    </div>
                   <div class="content-right-img">
                     <?php if($image_4) { 
                         echo wp_get_attachment_image($image_4,$size);
                   } ?>
                    </div>
                    
                     <div class="content-left1">    
                        <p></p>
                    <b>Interested in working with us?</b>
                    <button type="button" style="float:right;background-color: #0b615e;color: white;">Contact Us</button>
                     
                    </div>
                       
             </article>
          
  			<?php endwhile; // end of the loop. ?>
           
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
