<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mukesh Patil Ventures</title>
<?php include 'head.php'; ?>
</head>

<body class="bgYellow logoBlack">
<?php include 'header.php'; ?>

<!-- partial:index.partial.html -->
<section><div class="container">

<div class="row"><div class="heading_s1">
<h1>events</h1></div></div>
</div></section>

<section class="eventsHero"><div class="container">
<div class="event_min">

<div class="eventText">
<h3>Dance to the tunes of your <br> favorite artists!</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting <br> industry. Lorem Ipsum has been the industry's standard <br> dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
</div>


</div>

<div class="hero-section">
<div class="items">
<div class="item item1"><img src="assets/images/artist-1.jpg"></div>
  <div class="item item2"><img src="assets/images/artist-2.jpg"></div>
  <div class="item item3"><img src="assets/images/artist-3.jpg"></div>
  <div class="item item3"><img src="assets/images/artist-1.jpg"></div>
  <div class="item item1"><img src="assets/images/artist-1.jpg"></div>
  <div class="item item2"><img src="assets/images/artist-2.jpg"></div>
  <div class="item item3"><img src="assets/images/artist-3.jpg"></div>
  <div class="item item3"><img src="assets/images/artist-1.jpg"></div>
  <div class="item item1"><img src="assets/images/artist-1.jpg"></div>
  <div class="item item2"><img src="assets/images/artist-2.jpg"></div>
  <div class="item item3"><img src="assets/images/artist-3.jpg"></div>
  <div class="item item3"><img src="assets/images/artist-1.jpg"></div>
  <div class="item item1"><img src="assets/images/artist-1.jpg"></div>
  <div class="item item2"><img src="assets/images/artist-2.jpg"></div>
  <div class="item item3"><img src="assets/images/artist-3.jpg"></div>
  <div class="item item3"><img src="assets/images/artist-1.jpg"></div>
</div>

</div>

</div></section>
<!-- partial -->

<?php include 'footer.php'; ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="assets/js/slick09.js"></script>

<script>
  // Select the slider container
  const slider = document.querySelector('.items');
  // Select the first item
  const firstItem = document.querySelector('.item');
  // Calculate the initial scroll position to center the first item
  const initialScrollLeft = firstItem.offsetLeft - (slider.offsetWidth - firstItem.offsetWidth) / 2;
  // Set the initial scroll position
  slider.scrollLeft = initialScrollLeft;
  // Set up event listeners for mouse and wheel interactions
  let isDown = false;
  let startX;
  let scrollLeft;
  slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  });
  slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
  });
  slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
  });
  slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 3; //scroll-fast
    slider.scrollLeft = scrollLeft - walk;
  });
  // Add wheel event listener for horizontal scrolling
  slider.addEventListener('wheel', (e) => {
    e.preventDefault();
    slider.scrollLeft += e.deltaY;
    slider.classList.add('active'); // Add the 'active' class when scrolling with the mouse wheel
    // Remove the 'active' class when the mouse wheel stops scrolling after a short delay
    setTimeout(() => {
      slider.classList.remove('active');
    }, 100);
  });
</script>
</body>
</html>