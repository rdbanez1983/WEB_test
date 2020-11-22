<?php
/**
 * Template part for displaying posts
 *
 *
 * @subpackage bizzmo
 * @since 1.0 
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<article class="blog-item blog-2">
	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
	   <?php bizzmo_post_thumbnail(); ?>
	    <div class="date">
	        <?php bizzmo_posted_on(); ?>
	    </div>
	</div>
<?php endif; ?>
	<ul class="post-meta">
	     <?php bizzmo_posted_by(); ?>
	    <?php bizzmo_post_comments(); ?>                                  
	    <?php if(!has_post_thumbnail()) : ?>
		<?php bizzmo_posted_on(); ?>
		<?php endif; ?>

	</ul>
	<div class="post-content p-4 text-center">
	    <?php
		if ( is_singular() ) :
			the_title( '<h5>', '</h5>' );
		else :
			the_title( '<h5><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
		endif;
		?>
	  <?php
        if( is_singular() ){
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bizzmo' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
        }else{
            the_excerpt();
        }

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bizzmo' ),
			'after'  => '</div>',
		) );
		?>
	    <a href="<?php the_permalink(); ?>" class="text-uppercase read-more"><?php echo esc_html__('Read More','bizzmo'); ?></a>
	</div>
</article>
</div>