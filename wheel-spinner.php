<?php
/**
 * Plugin Name: Wheel-spinner
 * Description: A prize wheel plugin.
 */

//Register Scripts to use 
function func_load_vuescripts() {
 wp_register_script( 'wpvue_vuejs', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js');
}
add_action('wp_enqueue_scripts', 'func_load_vuescripts');
//change to vue.min.js for production

//Wheel spinner function
 function func_wheel_spinner(){
  //Add Vue.js
  wp_enqueue_script('wpvue_vuejs');

   //Build String
   $str= "<div id='official-wheel'>"
    ."Message from Vue: "
    ."</div>";
  return $str;
} // end function

//Add shortscode
add_shortcode( 'officialcorvusaurumwheel', 'func_wheel_spinner' );
//End of shortcode
?>
