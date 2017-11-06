<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="photobox/photobox.css">
  </head>

  <body>


<div id='gallery'>
    <a href="http://www.somedomain.com/images/image1_large.jpg">
        <img src="img\birds.jpg"
            title="photo1 title">
    </a>
    <a href="img\birds.jpg">
        <img src="img\birds.jpg"
            alt="photo2 title">
    </a>
    <a href="img\birds.jpg">
        <img src="img\birds.jpg"
            title="photo3 title">
    </a>
    <a href="http://www.somedomain.com/images/image4_large.jpg">
        <img src="http://www.somedomain.com/images/image4_small.jpg"
            alt="photo4 title" data-pb-captionLink='Google website[www.google.com]'>
    </a>
    <a href="http://www.youtube.com/embed/W3OQgh_h4U4" rel="video">
        <img src="http://img.youtube.com/vi/W3OQgh_h4U4/0.jpg"
            title="PEOPLE ARE AWESOME 2013 FULL HD ">
    </a>
</div>

<script src="assets/jquery/dist/jquery.min.js" ></script>
<script src="photobox/jquery.photobox.js" ></script>

<script>
    // applying photobox on a `gallery` element which has lots of thumbnails links.
    // Passing options object as well:
    //-----------------------------------------------
    $(function(){

    $('#gallery').photobox('a',{ time:0 });

    // using a callback and a fancier selector
    //----------------------------------------------
    $('#gallery').photobox('li > a.family',{ time:0 }, callback);
    function callback(){
       console.log('image has been loaded');
    }

    // destroy the plugin on a certain gallery:
    //-----------------------------------------------
    $('#gallery').photobox('destroy');

    // re-initialize the photbox DOM (does what Document ready does)
    //-----------------------------------------------
    $('#gallery').photobox('prepareDOM');
  })
</script>
</body>
</html>
