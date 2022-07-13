<?php

/**
   Plugin Name: plugin shortcode
   Plugin URI: https://shortcode.test
   description: plugin shortcode
   Version: 1.0
   Author URI: https://yassine.com
   Author: yassine_dotma
 */
 ?>

 <?php
add_shortcode('site', 'myaddress_website');


if(!function_exists('myaddress_website')){
   function myaddress_website($atts=[],$content=null){

      extract(shortcode_atts(
         // $pairs:array, $atts:array, $shortcode:string 
         array(
            'style' =>'color:green',
            'class' =>'hadi',
         ),$atts
      ));
      $content=do_shortcode($content);
      return '<span style="'.$style.'" class="'.$class.'">'.$content.'</span>';
   }
}
 
/*
[site class="color:green"]welcom to my site [/site]
add_shortcode('site', 'myaddress_website');

if(!function_exists('myaddress_website')){
   function myaddress_website($atts=[],$content=null){

      $content=do_shortcode($content);
      return $content;
   }
}
/** [site] [/site]
*/
/*
/** [site]

add_shortcode('site', 'myaddress_website');

   if(!function_exists('myaddress_website')){
      function myaddress_website(){
         return "brightcoding.teachable.com";
      }
   }

*/
?>

