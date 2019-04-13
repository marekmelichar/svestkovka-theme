<?php

add_shortcode( 'get_post', 'post_by_id' );
function post_by_id( $atts ) {

  $atts = shortcode_atts( array(
    'id' => '',
    'posts_per_page' => '1'
  ), $atts );

  $my_id = $atts['id'];
  $post_by_id = get_post($my_id);
  // var_dump($post_by_id);

      // $post_image = get_field('post_custom_excerpt_image', $my_id);

        $out = '
          <div class="row get_post no-gutters">
            <div class="col-4 pr-2">
              <img src=" '. esc_html ( get_the_post_thumbnail_url($my_id) ) .' " alt="'.esc_html ( get_the_post_thumbnail_caption() ).'" />
            </div>
            <div class="col-8">
              <h4><a href="'. $post_by_id->guid .'" title="' . $post_by_id->post_title . '">'. $post_by_id->post_title .'</a></h4>
              <p>'. $post_by_id->post_excerpt .'</p>
            </div>';
  $out .='</div>';

  return html_entity_decode($out);
}


  // global $posts;
  //
  // $posts = new WP_Query($atts);
  //
  // // var_dump($posts);
  //
  // $output = '';
  //
  //   if ($posts->have_posts())
  //       while ($posts->have_posts()):
  //
  //           $posts->the_post();
  //
  //           $post_custom_excerpt_image = get_field('post_custom_excerpt_image', $posts->ID);
  //
  //           $out = '
  //             <div class="row get_post no-gutters">
  //               <div class="col-4 pr-2">
  //                 <img src=" '. $post_custom_excerpt_image['url'] .' " alt=" '. $post_custom_excerpt_image['alt'] .' " />
  //               </div>
  //               <div class="col-8">
  //                 <h4><a href="'.get_permalink().'" title="' . get_the_title() . '">'.get_the_title() .'</a></h4>
  //                 <p>'. wp_trim_words(get_the_excerpt(), 10, '...') .'</p>
  //               </div>';
  //     $out .='</div>';
  //
  //   /* these arguments will be available from inside $content
  //       get_permalink()
  //       get_the_content()
  //       get_the_category_list(', ')
  //       get_the_title()
  //       and custom fields
  //       get_post_meta($post->ID, 'field_name', true);
  //   */
  //
  //   endwhile;
  // else
  //   return; // no posts found
  //
  // wp_reset_query();




// add_shortcode( 'slideshow', 'xevoc_slideshow_shortcode' );
// function xevoc_slideshow_shortcode( $atts ) {
//
//   $atts = shortcode_atts( array(
//     'slideshow_class' => 'slideshow',
//     'slide_class' => 'slide'
//   ), $atts );
//
//   $media = get_attached_media( 'image' );
//
//   if ( !$media ) {
//     return '';
//   }
//
//   // create the html
//   $html = '<ul class="'. esc_attr($atts['slideshow_class']) .'">';
//   foreach ( $media as $img ) {
//     $html .= '<li class="'. esc_attr( $atts['slide_class'] ) .'">';
//     $html .= '<img src="'. esc_url( wp_get_attachment_image_url($img->ID, 'full') ) .'" alt="'. esc_attr( $img->post_title ) .'" >';
//     $html .= '</li>';
//   }
//   $html .= '</ul>';
//
//   return $html;
// }
