<?php get_header(); ?>

<section id="content" role="main" class="container-fluid">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<?php //get_template_part( 'entry' ); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="row">
				<div class="container">
				<div class="row">
				<div class="col">
							<?php 	
								if ( is_singular() ) { 
								echo '<h1 class="entry-title">'; } 
								else { 
								echo '<h1 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
							<?php if ( is_singular() ) { 
								echo '</h1>'; } 
								else { 
								echo '</h1>'; } ?>
							<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
							<?php edit_post_link(); ?>
				</div>
				</div>
				</div>
			</header>

			<div class="row">
			<div class="container">
			<div class="row">
			<div class="col">
				<section class="entry-content">					
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
						<?php the_content(); ?>
						<div class="entry-links"><?php wp_link_pages(); ?></div>
				</section>
			</div>
			</div>
			</div>
			</div>
			
			<?php //if ( !is_search() ) get_template_part( 'entry-footer' ); ?>

		</article>
	
		<?php //if ( ! post_password_required() ) comments_template( '', true ); ?>
		<?php endwhile; endif; ?>
		
		<footer class="footer">
		<?php //get_template_part( 'nav', 'below-single' ); ?>
		</footer>

</section>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>