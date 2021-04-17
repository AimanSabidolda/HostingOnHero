@extends('constructor')

@section('content')
<section>
  <img class="mySlides" src="https://www.ppic.org/wp-content/uploads/elementary-school-building-1024x675.jpg" style="width:100%;height: 350px">
  <img class="mySlides" src="https://archello.s3.eu-central-1.amazonaws.com/images/2020/07/31/comas-pont-arquitectes-slp-school-library-libraries-archello.1596195113.2499.jpg" style="width:100%;height: 350px">
  <img class="mySlides" src="https://media.gettyimages.com/photos/teacher-looking-in-books-with-children-picture-id143560401?k=6&m=143560401&s=612x612&w=0&h=qZqXHLXCaKWoTzY0iTPYjCw01rcyLQbuIOl2jalLjfQ=" style="width:100%;height: 350px">
</section>
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">WELCOME TO SCHOOL</h2>
  <p class="w3-opacity"><i>Let us remember: One book, one pen, one child and one teacher can change the world.</i></p>
  <p class="w3-justify"> Our graduates enter the best world and domestic universities, such as Harvard, MIT, Yale, Princeton, Berkley, Oxford, Cambridge, Warwick, Nazarbayev University, KazNU named after Al-Farabi, KBTU, KazNTU them. K. Satpayev, Moscow State University, Moscow State Technical University named after N.E. Bauman, MIPT, MGIMO, etc. Thus, over the past ten years, RFMS graduates have entered the following world leading universities;</p>
</section>
<section class="w3-row-padding w3-center w3-white">
  <article class="w3-third">
    <p>#1</p>
    <img src="https://media.istockphoto.com/photos/perfect-final-exam-score-marked-with-100-picture-id96956225" alt="Random Name" style="width:100%;height: 324px">
    <p>High university entrance scores (UNT).</p>
  </article>
  <article class="w3-third">
    <p>#2</p>
    <img src="https://image.freepik.com/free-vector/modern-education-concept-with-flat-design_23-2147919753.jpg" alt="Random Name" style="width:100%;height: 324px">
    <p>The presence of a physical and mathematical base for students</p>
  </article>
  <article class="w3-third">
    <p>#3</p>
    <img src="https://i0.wp.com/reachinghighernh.org/wp-content/uploads/2018/07/competency-portfolio-learning.png?fit=460,300&ssl=1" alt="Random Name" style="width:100%;height: 324px">
    <p style="color: green,font-size:20px">Reaching new aims by skills</p>
  </article>
</section>
<footer class="w3-container w3-padding-64 w3-center w3-green w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">school.kz</a>
  </p>
</footer>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
@stop