<?php

add_shortcode( 'contact_button', 'contact_button_func' );
function contact_button_func( $atts ) {

  $atts = shortcode_atts( array(
    'bg' => '#404D7A',
    'color' => '#fff',
    'text' => '',
    'href' => '#',
    'class' => 'contact-button'
  ), $atts );

  // $svg = get_template_part('svg/open_in_new_tab.svg');
  // var_dump($svg);

  $return = '<a class="'.$atts['class'].'" href="'.$atts['href'].'" target="_blank" style="background: '.$atts['bg'].'; color: '.$atts['color'].'; padding: 1rem 3.5rem 1rem 2rem; position: relative;">';
    $return .= $atts['text'];
      $return .= '<svg id="open_in_new_tab" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
        style="
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          margin: -1px 0 0 4px;
        ">
      	<defs>
      		<style>
      			#open_in_new_tab .a {
      				fill: none;
      			}
      			#open_in_new_tab .b {
      				fill: '.$atts['color'].';
      			}
      		</style>
      	</defs><path class="a" d="M0,0H24V24H0Z"/><path class="b" d="M19,19H5V5h7V3H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V12H19ZM14,3V5h3.59L7.76,14.83l1.41,1.41L19,6.41V10h2V3Z"/></svg>';
  $return .='</a>';

  return html_entity_decode($return);
}
