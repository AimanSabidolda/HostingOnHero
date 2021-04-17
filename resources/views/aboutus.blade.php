@extends('constructor')

  @section('content')
  <div class="about-section">
  <h1>About Teachers Page</h1>
  
  <p><i>Each teacher has the opportunity to shape and impact tens of thousands of young lives over the course of their career.</i></p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://nen.press/wp-content/uploads/2019/03/teach.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">Head of the Department of English</p>
        <p>West Kazakhstan Engineering and Humanities University, specialty - "Foreign languages: two foreign languages", Master of Arts, specialty - "Linguistics and teaching of English" University of Leeds, England within the framework of</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://st2.depositphotos.com/2208684/5184/i/600/depositphotos_51845607-stock-photo-teacher-with-notebook.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Head of the Department of Math</p>
        <p>trainer of the Olympic reserve in mathematics, co-author of the books “Regional Olympiads in mathematics. 2000-2018 academic years Mathematical Olympiads: Asia-Pacific, Silk Road ", Diploma  </p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="https://img.freepik.com/free-photo/education-teachers-university-schools-concept_1258-14246.jpg?size=626&ext=jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Head of the Department of Physics</p>
        <p>a physics teacher of the highest category, has a certificate of a regional and school coordinator for the implementation of a criteria-based assessment system, a certificate of a participant in the II Republican competition of physics teachers (2014)</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<h3 class="description_doughnut">Students will be developed at different sides</h3>
<canvas id="myChart2" width="350" height="100"></canvas>
<script type="text/javascript">
  var ctx=document.getElementById("myChart2");
  var myChart=new Chart(ctx,{
    type:'doughnut',
    data:{
      labels:["Charity","Social Development","Experiential Development","EDUCATION"],
      datasets:[
      {
        label:'Our ',
        data:[10,20,30,40],
        backgroundColor:[
        'rgba(195, 225, 241,1)',
        'rgba(243, 225, 241,1)',
        'rgba(198, 139, 108,1)',
        'rgba(252, 139, 108,1)',],
      }]
    },
    options:{
      scales:{
        yAxes:[{
          ticks:{
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
<hr>
<h3 class="description_bar">Our number of students</h3>
<canvas id="myChart" width="200" height="50"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
      type: 'bar',
         data: {
            labels: ["2017" , "2018" , "2019", "2020","2021"],
            datasets: [
               { label: '',
               data: [5000,6000,12000,13000,15000],
               backgroundColor :['rgba(150, 150, 200, 1)',
               'rgb(124, 130, 255 )',
               'rgba(124, 255, 197 )',
               'rgba( 234, 144, 254)',
               'rgba(254, 219, 144 )',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>
<hr>
<h3 class="description_pie">The majority of our students study at this universities </h3>
<canvas id="myChart1" width="350" height="100"></canvas>
<script type="text/javascript">
  var ctx=document.getElementById("myChart1");
  var myChart=new Chart(ctx,{
    type:'pie',
    data:{
      labels:["Harvard","SDU","ABU-DABI","NU"],
      datasets:[
      {
        label:'The percentage of students entering high universities',
        data:[10,20,30,40],
        backgroundColor:[
        'rgba(127, 161, 135,1)',
        'rgba(206, 133, 132,1)',
        'rgba(242, 193, 118,1)',
        'rgba(0, 177, 169,1)',],
      }]
    },
    options:{
      scales:{
        yAxes:[{
          ticks:{
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
<hr>
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
  @stop