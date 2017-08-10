<?php
	/*
	Template Name: Home Page
	*/
	get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="wrapper heroWrapper">

	<div class="hero">
		<?php the_post_thumbnail( 'full' ); ?>
	</div>

</div>

<?php
	$entries = get_post_meta( get_the_ID(), '_home_home', true );
	foreach ( (array) $entries as $key => $entry ) {
		$text = $bg = $projects = $img = $clients = $blog = $testimonials = $tweets = '';
		if ( isset( $entry['_main'] ) ) {
			$text = do_shortcode(wpautop( $entry['_main'] ));
		}
		if ( isset( $entry['_bg'] ) ) {
			$bg = esc_html( $entry['_bg'] );
		}
		if ( isset( $entry['_img'] ) ) {
			$img = esc_html( $entry['_img'] );
		}
		if ( isset( $entry['_projects'] ) ) {
			$projects = esc_html( $entry['_projects'] );
		}
		if ( isset( $entry['_clients'] ) ) {
			$clients = esc_html( $entry['_clients'] );
		}
		if ( isset( $entry['_blog'] ) ) {
			$blog = esc_html( $entry['_blog'] );
		}
		if ( isset( $entry['_tweet'] ) ) {
			$tweets = esc_html( $entry['_tweet'] );
		}
		if ( isset( $entry['_testimonials'] ) ) {
			$testimonials = esc_html( $entry['_testimonials'] );
		}
?>
<div class="container <?php echo $bg; ?> <?php if($clients == 'on'){ echo 'clients'; } ?> <?php if($blog == 'on'){ echo 'blog'; } ?> <?php if($img != ''){ echo 'whoweare" style="background: url('. $img .')" ';} ?>">
	<div class="wrapper">
			<?php
				if($projects == 'on'){
			?>
			<div class="box full">
				<h2 class="text-center">Our latest work</h2>
			</div>
			<?php
					$args = array(
						'post_type'              => array( 'project' ),
						'posts_per_page'         => '6',
					);
					$projects = new WP_Query( $args );
					if ( $projects->have_posts() ) {
						while ( $projects->have_posts() ) {
							$projects->the_post();
			?>
			<div class="box projects">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'square' ); ?>
					<div class="button"><?php the_title(); ?></div>
				</a>
			</div>
			<?php
						}
					} else {
					}
					wp_reset_postdata();
				}
				if($clients == 'on'){
			?>
			<div class="box full">
				<h2 class="text-center">Our clients</h2>
			</div>
			<?php
					$args = array(
						'post_type'              => array( 'client' ),
						'posts_per_page'         => '12',
					);
					$projects = new WP_Query( $args );
					if ( $projects->have_posts() ) {
						while ( $projects->have_posts() ) {
							$projects->the_post();
			?>
			<div class="box client">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'full' ); ?>
				</a>
			</div>
			<?php
						}
					} else {
					}
					wp_reset_postdata();
				}
				if($tweets == 'on'){
			?>
				<?php if ( ! dynamic_sidebar('tweets') ) : ?>
					<div class="box full">{static sidebar item 1}</div>
				<?php endif; ?>
			<?php
				}
				if($blog == 'on'){
			?>
			<div class="box full">
				<h2 class="text-center">News &amp; views</h2>
			</div>
			<?php
					$args = array(
						'post_type'              => array( 'post' ),
						'posts_per_page'         => '3',
					);
					$projects = new WP_Query( $args );
					if ( $projects->have_posts() ) {
						while ( $projects->have_posts() ) {
							$projects->the_post();
			?>
			<div class="box blog">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'square' ); ?>
				</a>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<?php the_excerpt(); ?>
				<p><strong><a href="<?php the_permalink(); ?>">Read More</a></strong></p>
			</div>
			<?php
						}
					} else {
					}
					wp_reset_postdata();
			?>
			<div class="box full text-center">
				<a class="button" href="/news-views/">View more</a>
			</div>
			<?php
				}
				if($testimonials == 'on'){
			?>
			<div class="box full">
				<h2 class="text-center">Why Soul?</h2>
			</div>
			<?php
					$args = array(
						'post_type'              => array( 'testimonial' ),
						'posts_per_page'         => '3',
					);
					$projects = new WP_Query( $args );
					if ( $projects->have_posts() ) {
						while ( $projects->have_posts() ) {
							$projects->the_post();
			?>
			<div class="box blog">
				<?php the_content(); ?>
				<h5>- <?php the_title(); ?></h5>
			</div>
			<?php
						}
					} else {
					}
					wp_reset_postdata();
				} else {
			?>
			<div class="box full">
				<?php echo $text; ?>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</div>
<?php
	}
?>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>