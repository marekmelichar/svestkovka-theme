<?php /* Template Name: Send rent train */ ?>
<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package robogon
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :

			the_post(); ?>

			<?php
			// get_template_part('partials/jumbotron');
			?>

			<?php
			if(isset($_POST["email_phone"])) $field_1 = sanitize_text_field($_POST["email_phone"]);

			$subject = "Pronájem vlaku - Švestkovka ";
			$to = get_field( "rent_recipient" );
			if ( !$to ) $to = "marek.melichar@icloud.com";

			$msg .= 'Zájemce o pronájem vlaku:
			email nebo telefon: ' . $field_1 . '
			' ;

			if ( $field_1 ) {
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="container">
						<?php the_content() ?>
					</div>
					<?php
					// echo nl2br($msg);
					// echo "Recipient(i): " . $to;
					wp_mail( $to, $subject, $msg );
					?>
				</article>

				<?php
			} else { ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="container" style="text-align: center;">
						<div class="thank-you-red-box">
							<span class="search-error">Nebyl zadán žádný kontakt.</span>
						</div>
					</div>
				</article>

			<?php }	?>


			<?php get_template_part( 'template-parts/slider'); ?> <?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
