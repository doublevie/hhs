<!doctype html>
<html lang="fr">
  <head>
    <title>Hotel el hidhab</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/froala/css/froala_blocks.css">
    <link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/animate/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">

  </head>
  <body>


<?php
include "inc/header.php";
include "inc/main.php";
include "inc/services.php";
include "inc/features.php";

include "inc/contact.php";
include "inc/footer.php";

 ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/dist/jquery.min.js" ></script>
    <script src="assets/bootstrap4/js/popper.min.js" ></script>
    <!-- <script src="assets/bootstrap4/js/bootstrap.min.js" ></script> -->
    <script src="assets/bootstrap4/js/bootstrap.min.js" ></script>
<script type="text/javascript">
$('document').ready(function() {
var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){

       document.querySelector('.navbar-dark').classList.remove('fadeInDown');
       document.querySelector('.navbar-dark').classList.add('fadeOutUp');
   }
   else if(st == lastScrollTop)
   {
     //do nothing
     //In IE this is an important condition because there seems to be some instances where the last scrollTop is equal to the new one
   }
   else {
     document.querySelector('.navbar-dark').classList.add('fadeInDown');
     document.querySelector('.navbar-dark').classList.remove('fadeOutUp');
   }
   lastScrollTop = st;
});});






// Select all links with hashes
$(function(){

$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
})
</script>
  </body>
</html>
