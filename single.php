<?php get_header(); ?>
<div class="row">
    <!-- Posts -->
    <div class="col-lg-9">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Post -->
            <div class="card-body">
                <h2><?php the_title(); ?></h2>
                <p class="small mb-0"><?php the_time( get_option( 'date_format' ) ); ?></p>
                <p class="small mb-0"><?php the_author(); ?></p>
                <p class="small">Categories: <?php the_category( ' / ' ) ?> Tags: <?php the_tags( '', ' / ', '' ) ?></p>
                <!-- Featured Image -->
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'post-thumbnails', array(
						'class' => 'img-fluid mb-3'
					) );
				}
				?>
                <!-- /Featured Image -->
				<?php the_content(); ?>
            </div>
            <!-- Post -->
		<?php endwhile; endif; ?>

    </div>
    <!-- /Posts -->

    <!-- Side Menu -->
    <div class="col-lg-3">
        <div class="card-body">
            <h4>Advertisement</h4>
            <hr>
            <img src="assets/images/sideimage.jpg" alt="" class="img-fluid">
        </div>
    </div>
    <!-- /Side Menu -->
</div>
</div>
<!-- /Blog -->

<?php get_footer(); ?>
