<?php get_header(); ?>
<style type="text/css">
#middle-col { margin-right: 270px; }
</style>

<div id="main" class="fl-col-mixed-250 clearfix fl-push">

	<div id="left-col" class="fl-col-fixed fl-force-left">
		<a name="to-menu"></a>
		<nav role="navigation" class="fl-site-nav-main">
			<?php wp_nav_menu( array( 'depth' => '1' ) ); ?>
		</nav>				
		<?php if ( !dynamic_sidebar('left-sidebar') ) : ?>
		<?php endif; ?>
	</div>

	<div id="right-col" class="fl-col-fixed fl-force-right">
		<?php if ( !dynamic_sidebar('right-sidebar') ) : ?>	
		<?php endif; ?>			
		<?php dynamic_sidebar('right-sidebar-highlights'); ?>			
	</div>
		
	<div id="middle-col" class="fl-col-flex">										
		<?php if(have_posts()) : ?>
        	<?php while(have_posts()) : the_post(); ?>
		        <div class="post">
		            <div class="entry">
		                <?php the_content("<div class='fl-site-read-more'>read more</div>"); ?>                
		            </div>
		        </div>
			<?php endwhile; ?> 
        <?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>