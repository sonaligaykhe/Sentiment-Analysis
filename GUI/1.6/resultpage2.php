
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   

  <?php   
             $dbhost = "localhost";
             $dbuser = "root";
             $dbpass = "";
             $db = "project";

             
            session_start();
            error_reporting(0);

            $link = mysqli_connect("localhost", "root", "", "project");
           // if($link==TRUE)
         //   echo "Connected Successfully";
           // $abc = "<script> document.write(a)</script>";

              if (isset($_POST['searchbar']))
                {
                $inp = $_POST['searchbar']; 
             
                } 
             

              if (isset($_POST['rsearchbar']))
                {
                $inp = $_POST['rsearchbar']; 
                } 

              $inp = $_SESSION['product_name_from1stpage'];
              
              echo $inp;

            $sql="select * from mobileinfo where name='$inp'";

             $result=mysqli_query($link,$sql);


          if ($result == TRUE) {
                     echo "New record created successfully";
            } 

            else {
              
               echo "Error: " . $sql . "<br>" . $conn->error;
            }

             

                      $row=mysqli_fetch_assoc($result);
                              $name= $row['name']; 
                              $pos= $row['pos'];
                              $neg= $row['neg'];
                              $mix= $row['mix'];
                              $link= $row['link'];
                              $price= $row['price'];
                              $rating =$row['rating']; 

            
/*
                       $_SESSION['product_name_from1stpage'] = $name; 
                       $product_name = $_SESSION['product_name_from2ndpage'];*/


              if (isset($_POST['name']))
                {
                $name_review = (string)$_POST['name']; 
                } 
              if (isset($_POST['email']))
                {
                $email = (string)$_POST['email']; 
                } 
              if (isset($_POST['comments']))
                {
                $comment = (string)$_POST['comments']; 
                } 

       



            $link1 = mysqli_connect("localhost", "root", "", "project");
            $sql="insert into review (product,name,email,reviews) values ('$name','$name_review','$email','$comment')";
            #$sql="insert into review (product,name,email,reviews) values ('$name','$_POST['name']','$_POST['email']','$_POST['comments']')";
            $result=mysqli_query($link1,$sql);

            if ($result == TRUE) {
                     echo "New record xyz created successfully";
            } 

            else {
              
               #echo "Error: " . $sql . "<br>" . $conn->error;
            }

 



        ?>

<script type="text/javascript">
$(document).ready(function(){
        
        var name= '<?php echo $name?>';
        var pos = '<?php echo $pos ?>';
        var neg = '<?php echo $neg ?>';
        var mix = '<?php echo $mix ?>';
        var link = '<?php echo $link ?>';
        var price = '<?php echo $price ?>';
        var rating = '<?php echo $rating?>';
        //var Flipkart_link = '<?php echo $link ?>';
        console.log(pos);
        console.log(neg);
        console.log(mix);
        console.log(link);
        
        pos= parseInt(pos);
        neg= parseInt(neg);
        mix= parseInt(mix);
        
        

         console.log(name);
        name = "Name: ".concat(name);
        document.getElementById("product_name").innerHTML=name;
      
        price = "Price: ".concat(price);
        document.getElementById("product_price").innerHTML=price;

        rating = "Rating:" .concat(rating);
         document.getElementById("product_rating").innerHTML=rating;



        document.getElementById("product_link1").setAttribute('href', link);


      
     
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['', '%'],
          ['Positive',pos],
          ['Negative',neg],
          ['Mix', mix]
          
          
        ]);

        var options = {
          title: 'Sentiment Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

         google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawbarchart);

      function drawbarchart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Positive', 'Negative' ],
          ['Camera', 1000, 400, ],
          ['Memory', 1170, 460, ],
          ['Hardware', 660, 1120, ],
          ['Battery', 1030, 540, ],
          ['Processor', 1500,500 ]
        ]);

        var options = {
          chart: {
            title: 'Semantic Analysis',
            subtitle: 'Positive or Negative',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('bargraph'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


});//ready
  </script>



  <style>
  .jumbotron {
      background-color: black;
      color: #fff;
  }

  #productimg{
    float: left;
    width: 40%;
    height: 500px;  
  }

  #productinfo
  {
  width: 20%;
  height: 520px;
  }


  #review{
    padding-left: 15%;
    padding-right: 15%;
    background-color:   #f2f2f2;
  }

#pie{
  float: right;
  width: 40%;
  height: 500px;
}

#pie1{
  float: right;
  width: 50%;
  height: 250px;
}

#pie2{
  float: right;
  width:50%;
  height: 250px;
}
#pie3{
  float: right;
  width: 100%;
  height: 250px;
}

#graph{
  float: left;
  width: 100%;
  height: 250px;
}

  </style>      


</head>
<body>


<div class="jumbotron text-center">
  <h1>Sentiment Analyzer</h1> 
  <h3> We Know And We Care...!!</h3>
  <form class="form-inline" action="resultpage.php" method="post">
    <div class="input-group">
      <input type="" class="form-control" size="50" name="rsearchbar" placeholder="Product Search" required>
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger" id="srchbtn" >Search</button>
      </div>
    </div>
  </form >
</div> 


    <div class="container-fluid" id="product">
   
      <div  id="productimg" class="col-sm-3">
 
      </div>     

        <div  id="productinfo" class="col-sm-3 . well" > 
           <font size="5"><b id="product_name"> </b><br><br> 
           <b id="product_price"> </b><br><br>
           <b id="product_rating"></b><br><br>
 


         </font><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           <a id="product_link1" href=""><img src="amazon_icon.jpg" height="50" width="50" ></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           <a id="product_link2" href=""> <img src="flipkart_icon.jpg" height="50" width="50"></a>
        </div>

        <div id="pie">
           <div id="pie1" class=" well"></div>
           <div id="pie2" class="well"></div>
           <div id="pie3" class="well"></div>

        </div>
        <div id="graph" class="well">
          
        </div>

    </div>
    
  
  


    <form action="resultpage2.php" method="post"> 
    <div class="" id="review">
      <h3 align="center"> Add Reviews:</h3>
      <div class="row" id="name">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group" >
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div >
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
   </form> 

</body>
</html>
