<?php

/**
   Plugin Name: contact-form
   Plugin URI: https://contact-form.test
   description: plugin contact
   Version: 1.0
   Author URI: https://yassine.com
   Author: yassine_dotma
 */
 ?>

 <?php
add_shortcode('contact_form', 'getUserForm');
add_action('wp_enqueue_scripts','bright_slider_scripts');

function bright_slider_scripts(){
   wp_enqueue_style('bootstrap',plugins_url('css/bootstrap.css',__FILE__));
   wp_enqueue_style('main',plugins_url('css/main.css',__FILE__));

   wp_enqueue_script('jquery',plugins_url('js/jquery-3.2.1.slim.min.js',__FILE__));
   wp_enqueue_script('bootstrap',plugins_url('js/bootstrap.bundle.min.js',__FILE__));
   wp_enqueue_script('main',plugins_url('js/main.js',__FILE__));

   }

if(!function_exists("getUserForm")){
   function getUserForm(){
      ob_start();
      ?>
      <div class="container">
               <div class="row">
                  <div class="col-sm text-center">
                  <h1 class="div-heading display-4">Contact US</h1>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <form>
                     <div class="form-group">
                        <input type="name" class="form-control" id="exampleInputName" placeholder="Your Full Name...">
                     </div>
                  <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email Address...">
                     </div>
                  <div class="form-group">
                  <textarea class="form-control" aria-label="With textarea"></textarea>
                  </div>
                     <button type="submit" class="btn btn-warning btn-lg btn-block">Submit</button>
                     </form>
               </div>
               <div  class="col-md-6">
               <h5>Address: <small class="text-muted">hay 20 oaut, errachidia ,errachidia </small></h5>
               <h5>Email: <small class="text-muted">admin@dev.com</small></h5>
               <h5>Contact: <small class="text-muted">+212 611223344</small></h5>
               <div class="text-center">
                  <img class="img-fluid contact-image" alt="localisation " 
                  src="https://csds.qld.edu.au/sdc/resources/images/find-us-map.jpg" class="rounded" alt="...">
               </div>
	  	</div>
        
			</div>
		</div>
      <?php
      $output=ob_get_clean();
      return $output;

   }
}


?>

