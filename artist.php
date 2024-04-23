<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mukesh Patil Ventures</title>
<?php include 'head.php'; ?>
</head>

<body class="bgOrange logoWhite">
<?php include 'header.php'; ?>

<!-- partial:index.partial.html -->
<section><div class="container">

<div class="row"><div class="heading_s1">
<h1>artist</h1></div></div>
<div class="artist_min imagehoverA9">
<div class="imagehoverItem">
<a class="imagehover" href="#"><h1>Udit Narayan</h1></a>
<div class="img_hover"><img src="assets/images/artist-1.jpg"></div> 
</div>

<div class="imagehoverItem">
<a class="imagehover" href="#"><h1>Kumar Sanu</h1></a>
<div class="img_hover"><img src="assets/images/artist-2.jpg"></div>
</div>

<div class="imagehoverItem">
<a class="imagehover" href="#"><h1>Alka Yagnik</h1></a>
<div class="img_hover"><img src="assets/images/artist-3.jpg"></div>
</div>

<div class="imagehoverItem">
<a class="imagehover" href="#"><h1>S.P</h1></a>
<div class="img_hover"><img src="assets/images/artist-1.jpg"></div>
</div>

<div class="imagehoverItem">
<a class="imagehover" href="#"><h1>Sonu Nigam</h1></a>
<div class="img_hover"><img src="assets/images/artist-2.jpg"></div>
</div>

<div class="imagehoverItem">
<a class="imagehover" href="#"><h1>Kavita Krishnamurthy</h1></a>
<div class="img_hover"><img src="assets/images/artist-1.jpg"></div>
</div>

<div class="imagehoverItem">
<a class="imagehover" href="#"><h1>Rahat Fateh Ali Khan</h1></a>
<div class="img_hover"><img src="assets/images/artist-2.jpg"></div>
</div>

<div class="imagehoverItem">
<a class="imagehover" href="#"><h1>Abhijeet</h1></a>
<div class="img_hover"><img src="assets/images/artist-3.jpg"></div>
</div>

<div class="imagehoverItem">
<a class="imagehover" href="#"><h1>Sonu Nigam</h1></a>
<div class="img_hover"><img src="assets/images/artist-1.jpg"></div>
</div>

</div></div></section>
<!-- partial -->

<?php include 'footer.php'; ?>




<script>
    $('.imagehoverItem').mousemove(function(e){
      $(this).find('.img_hover').addClass('visible');
      $(this).find('.img_hover').css({
        left:e.pageX, top:e.pageY
      });
    }).mouseleave(function(){
      $(this).find('.img_hover').removeClass('visible');
    });
  </script>


</body>
</html>