<?php /* Template Name: Send feedback */ ?>
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
			if(isset($_POST["field_1"])) $field_1 = sanitize_text_field($_POST["field_1"]);
			if(isset($_POST["field_2"])) $field_2 = sanitize_text_field($_POST["field_2"]);
			if(isset($_POST["field_3"])) $field_3 = sanitize_text_field($_POST["field_3"]);
			if(isset($_POST["field_4"])) $field_4 = sanitize_text_field($_POST["field_4"]);

			$subject = "Feedback - Švestkovka ";
			$to = get_field( "recipient" );
			if ( !$to ) $to = "marek.melichar@icloud.com";

			$mailArray = explode(',', $to);

			$msg .= 'Čeho se námět týká: ' . $field_1 . '
Cílový stav: ' . $field_2 . '
Poznámka: ' . $field_3 . '
E-mail odesílatele: ' . $field_4 . '
			' ;

			if ( $field_1.$field_2.$field_3.$field_4 ) {
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="container">
						<?php the_content() ?>
					</div>
					<?php
					// echo nl2br($msg);
					// echo "Recipient(i): " . $to;
					wp_mail( $mailArray, $subject, $msg );
					?>
				</article>

				<?php
			} else { ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="container" style="text-align: center;">
						<div class="thank-you-red-box">
							<h1 class="search-error">Nebyl zadán žádný text zpětné vazby.</h1>
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
