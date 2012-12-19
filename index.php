<?php get_header(); ?>

<div id="main" class="fl-col-mixed-250 clearfix fl-push">

	<div id="left-col" class="fl-col-fixed fl-force-left">
		<a name="to-menu"></a>
		<nav role="navigation" class="fl-site-nav-main">
			<?php wp_nav_menu( array( 'depth' => '1' ) ); ?>
		</nav>				
		<?php if ( !dynamic_sidebar('left-sidebar') ) : ?>
		<?php endif; ?>
	</div>
		
	<div id="middle-col" class="fl-col-flex">										
		<div class="breadcrumbs"></div>

		<?php if(have_posts()) : ?>
        	<?php while(have_posts()) : the_post(); ?>
		        <div class="post">
			        <div class="date"><?php the_time('F jS, Y') ?></div>        
		    	    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
		            <div class="entry">
		                <?php the_content("<div class='fl-site-read-more'>read more</div>"); ?>                
		            </div>
		        </div>
			<?php endwhile; ?> 
        <?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>