<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

 
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="jquery.easy-autocomplete.min.js"></script> 
  

<!-- CSS file -->
<link rel="stylesheet" href="easy-autocomplete.min.css"> 

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 <script type="text/javascript">
   var inpsearch;
$(document).ready(function(){/*
$("#srchbtn").click(function(){

  inpsearch = document.getElementById("srch").value;
  inpsearch=inpsearch.replace(/ +/g, "");
  inpsearch=inpsearch.toLowerCase();

  //sessionStorage.setItem("sent",inpsearch);

  window.open("resultpage.php","_self");
});*/

    var options = {
  url: "data.json",

  getValue: "name",

  theme:"dark",

  list: {
    match: {
      enabled: true
    }
  }
};

$("#srch").easyAutocomplete(options)

      
      google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart1)
     
      function drawChart1() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Sentiment');
        data.addColumn('number', 'Reviews');
        data.addRows([
          ['Positive', 67],
          ['Negative', 26],
          ['Mixed', 7]
        ]);

        // Set chart options
        var options = {
          title: 'Sentiment Analysis',
          is3D: true,
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('motopie'));
        chart.draw(data,options);
      }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawbarchart);

      function drawbarchart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Positive', 'Negative' ],
          ['Camera', 71.42, 100-71.42, ],
          ['Memory', 50, 50, ],
          ['Hardware', 50, 50, ],
          ['Battery', 75, 25, ],
          ['Processor', 50,50 ]
        ]);

        var options = {
          chart: {
            title: 'Featured Based Analysis',
            subtitle: 'Positive or Negative',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('motobar'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }



 google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Month');
      data.addColumn('number', 'Price');

      data.addRows([
        [new Date(2017,6),  28500, ],
        [new Date(2017,7),  28449, ],
        [new Date(2017,8),  27549,  ],
        [new Date(2017,9),  27000, ],
        [new Date(2017,10),  28700, ],
        [new Date(2017,11),  28747, ],
        [new Date(2017,12),   28620, ],
        [new Date(2017,13),  28640, ],
        [new Date(2017,14),  28660, ],
        [new Date(2017,15), 28680, ],
        [new Date(2017,16),  28700,  ],
        [new Date(2017,17),  28700,  ]
       
      ]);

      var options = {
        chart: {
          title: 'Price Prediction',
          subtitle: ''
        },
        width: 400,
        height: 400,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('linechart'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }



$('.clicker').click(function(){
  var val=$(this).find('img:first').attr('src');
  console.log(val);

var productname = val.split(".");

  if(val==='')
    return
  $('#btn1').val(productname[0])
  $('#myform').submit()
})











});



 </script>






  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: black;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size/*: 50px;
  }
  .logo {
      co*/lor: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }

    table{
    table-layout: fixed;
    width: 1200px;
}

  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

#navbar2{
  background-color: black;
}
.navbar-nav.navbar-center{
  position: absolute;
  left:50%;
  transform: translateX(-50%);
  
}


  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top" style="background-color: black">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#senti">SENTIMENTS</a></li>
        <li><a href="#feature">FEATURED BASED</a></li>
        <li><a href="#Price">PRICE PREDICTION</a></li>
        <li><a href="#about">ABOUT</a></li>
     

      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center .row">
  <h1>Sentiment Analyzer</h1>  
  <h3> We Know And We Care...!!</h3> 
   <form class="form-inline" action="partialsearchpage.php" method="post">
    <div class="input-group">
    <input class="form-control" size="50" id="srch" placeholder="Search Product" name="searchbar">
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger" id='srchbtn'>Search</button>
      </div>
    </div>
  </form> 


<!-- <div class="collapse navbar-collapse " id="navbar2">
      <ul class="nav navbar-nav navbar-center" style="text-align: center;">
        <li><a href="allmobile.php">MOBILES</a></li>
        <li><a href="alllaptop.php">LAPTOPS</a></li>
        <li><a href="allpendrive.php">PENDRIVE</a></li>
        <li><a href="allwatch.php">WATCHES</a></li>
        <li><a href="alltv.php">TV</a></li>
        
      </ul>
    </div>
 --> <br>
<div class="container" style="color: white;">

       <ul class="nav navbar-nav navbar-center" >
        <li ><a href="allmobile.php">MOBILES</a></li>
        <li><a href="alllaptop.php">LAPTOPS</a></li>
        <li><a href="allpendrive.php">PENDRIVE</a></li>
        <li><a href="allwatch.php">WATCHES</a></li>
        <li><a href="alltv.php">TV</a></li>
        
      </ul>
   
</div>

</div>
<form action="resultpage.php" method="post" id="myform">
  <input type="hidden" name="searchbar" id="btn1">
<div id="senti" class="container-fluid text-center" >
    <h2>Sentiment Analysis Basedon reviews</h2>
    <div class="col-sm-12 slideanim">
          <table>
     <tr>
       <th class="clicker"><img src="Panasonic TV.jpg" width="400" height="280"></th>
       <th><h1 align="center">  Panasonic</h1> 
        <h2 align="center">   Rs 30,000</h2>
        <h3 align="center">Rating: 4.1/5</h3></th>
       <th>   <div id="motopie"  style="width:400px ; height: 400px"></div>
       </th>
     </tr>
   </table>
 </div>
 </div>   


<div id="feature" class="container-fluid text-center" >
    <h2>Featured Based Analysis</h2>
    <div class="col-sm-7 slideanim">
   <table>
     <tr>
       <th class="clicker"><img src="IPhone 7 Plus.jpg"  width="250" class="img-responsive"></th>
       
       <th > 
        <h1>Apple iPhone 7</h1>   
        <h2>Rs 65,995</h2>
        <h3 >Rating: 4.1/5</h3></th>
       <th>   <div id="motobar" style="width:400px ; height: 400px"></div>
       </th>
     </tr>
   </table>
  </div>  
</div>


<!-- Container (About Section) -->
<div id="Price" class="container-fluid text-center" >
   <h2>PRICE PREDICTION</h2>
    
    <div class="col-sm-7 slideanim" style="padding-left: 20px">
   
   <table align="center">
     <tr align="center">
       <th class="clicker"><img src="Dell Laptop.jpg"  width="400" class="img-responsive"></th>
       
       <th > 
        <h1>Dell Laptop</h1>   
        <h2>Rs 28,747</h2>
        <h3 >Rating: 3.5/5</h3></th>
       <th>   <div id="linechart" style="width:400px ; height: 400px"></div>
       </th>
     </tr>
   </table>
  </div>  
</div>
</form>
<!-- <div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
         </div>
  </div>
</div>
 -->
<!-- Container (Services Section) -->
<div id="about" class="container-fluid text-center">
  <h2>ABOUT</h2>
    <div class="col-sm-12 slideanim" >
  <p>
    We are happy to tell you that our website will help to buy a new product on E-commerce websites. We will provide you the results in terms of pie-chart generated
by doing sentiments analysis on reviews given by customers . We will also give you the feature based analysis which will help you to choose your product according to your 
need of specification. We will also provide you the predicted price of products which will help you to decide when should you buy the product. And you can compare 2 products which will 
give you the comaparative analysis of product which will help you to choose one product. You also have the link which will redirect you to the E-commerce website .  
  </p>
</div>
</div>
<!-- Container (Portfolio Section) -->
<!-- <div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  --> 
<!--   <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    -->
    <!-- Indicators --> 
    <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
 -->
    <!-- Wrapper for slides --> 
<!--     <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>
 -->
    <!-- Left and right controls -->
   <!--  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 -->
<!-- Container (Pricing Section) -->
<!-- <div id="pricing" class="container-fluid">
  <div class="text-center"> -->
 <!--    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>
  -->
<!--  Container (Contact Section) -->
<!-- <div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div> --> 

<!-- Add Google Maps -->
<!-- <div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>


</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

  







</body>
</html>
