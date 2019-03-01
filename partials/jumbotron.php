<?php if ( has_post_thumbnail() ) :
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'robogon-featured-image' );
?>

    <div class="jumbotron" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
        <?php if(get_field('jumbotron_h1')): ?><h1 class="text-center"><?php echo the_field('jumbotron_h1') ?></h1><?php endif; ?>
        <?php if(get_field('jumbotron_h2')): ?><h2 class="text-center"><?php echo the_field('jumbotron_h2') ?></h2><?php endif; ?>
    </div>
    
<?php endif; ?>
