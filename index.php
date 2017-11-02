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
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/animate/animate.css">

  </head>
  <body>


<?php
include "inc/header.php";
include "inc/main.php";
//include "inc/features.php";
include "inc/features.php";

include "inc/contact.php";
include "inc/footer.php";

 ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/dist/jquery.slim.min.js" ></script>
    <script src="assets/bootstrap4/js/popper.min.js" ></script>
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
</script>
  </body>
</html>
