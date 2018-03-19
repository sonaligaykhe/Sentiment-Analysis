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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

  <?php   
             $dbhost = "localhost";
             $dbuser = "root";
             $dbpass = "";
             $db = "project";

             error_reporting(0);
            session_start();  

            $conn = mysqli_connect("localhost", "root", "", "project");


              if (isset($_POST['searchbar']))
              {
              $inp = $_POST['searchbar']; 
              } 
             
              if (isset($_POST['rsearchbar']))
              {
              $inp = $_POST['rsearchbar']; 
              } 

            $sql="select * from allproduct where productname='$inp'";
            $result=mysqli_query($conn,$sql);


            if ($result == TRUE) {
            echo "success1  ";
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $row=mysqli_fetch_assoc($result);
            
            $name= $row['productname']; 
            $tname= $row['tablename'];
            $feature1= $row['feature1']; 
            $feature2= $row['feature2']; 
            $feature3= $row['feature3']; 
            $feature4= $row['feature4']; 
            $feature5= $row['feature5']; 

            echo $name;            
            $tname = (string)$tname;
            echo $tname;            
            echo $feature1;
            echo "dfvf";          
//            mysqli_close($conn);


           $conn2 = mysqli_connect("localhost", "root", "", "project");
//           $sql2 = "select * from '$tname' where name = '$inp'";

           $sql2="select * from `".$tname."` where `name`='$inp'";
            $result=mysqli_query($conn2,$sql2);

            if ($result == TRUE) {
            echo "success 2";
            } 
            else {
            echo "Error: " . $sql2 . "<br>" . $conn2->error;
            }

            $row=mysqli_fetch_assoc($result);

            $price_amz = $row['price'];
            $rating_amz = $row['rating'];
            $link_amz = $row['link'];
            $pos_amz = $row['pos'];
            $neg_amz = $row['neg'];
            $mix_amz = $row['mix'];
            $feature1val_amz= $row[$feature1]; 
            $feature2val_amz= $row[$feature2]; 
            $feature3val_amz= $row[$feature3]; 
            $feature4val_amz= $row[$feature4]; 
            $feature5val_amz= $row[$feature5]; 
            
//flipkart
           $conn_f1 = mysqli_connect("localhost", "root", "", "project");
//           $sql2 = "select * from '$tname' where name = '$inp'";

            $sql_f1="select * from allproduct where productname='$inp' and tablename like '%f' ";
            $result=mysqli_query($conn_f1,$sql_f1);

            $tname_flip= $row['tablename'];

           $sql_f2="select * from `".$tname."` where `name`='$inp'";
            $result=mysqli_query($conn2,$sql_f2);

            if ($result == TRUE) {
            echo "success f2";
            } 
            else {
            echo "Error: " . $sql2 . "<br>" . $conn_f2->error;
            }

            $row=mysqli_fetch_assoc($result);

            $price_flip = $row['price'];
            $rating_flip = $row['rating'];
            $link_flip = $row['link'];
            $pos_flip = $row['pos'];
            $neg_flip = $row['neg'];
            $mix_flip = $row['mix'];
            $feature1val_flip= $row[$feature1]; 
            $feature2val_flip= $row[$feature2]; 
            $feature3val_flip= $row[$feature3]; 
            $feature4val_flip= $row[$feature4]; 
            $feature5val_flip= $row[$feature5]; 

            echo $price_flip ;//= $row['price'];
            echo $rating_flip ;//= $row['rating'];
            echo $link_flip ;//= $row['link'];
            echo $pos_flip;// = $row['pos'];
            echo $neg_flip ;//= $row['neg'];
            echo $mix_flip ;//= $row['mix'];
            echo $feature1val_flip;//= $row[$feature1]; 
            echo $feature2val_flip;//= $row[$feature2]; 
            echo $feature3val_flip;//= $row[$feature3]; 
            echo $feature4val_flip;//= $row[$feature4]; 
            echo $feature5val_flip;//= $row[$feature5]; 
				   
				   
				   
				   
				   
            mysqli_close($conn);

                       $_SESSION['product_name_from1stpage'] = $name; 
                   //    $product_name = $_SESSION['product_name_from2ndpage'];
				   
				   
              if (isset($_POST['name']))
                {
                $name = $_POST['name']; 
                } 
              if (isset($_POST['email']))
                {
                $email = $_POST['email']; 
                } 
              if (isset($_POST['comments']))
                {
                $comment = $_POST['comments']; 
                }  
        ?>

<script type="text/javascript">
$(document).ready(function(){
        
        var name= '<?php echo $name?>';
        var pos_amz = '<?php echo $pos_amz ?>';
        var neg_amz = '<?php echo $neg_amz ?>';
        var mix_amz = '<?php echo $mix_amz ?>';
        var link_amz = '<?php echo $link_amz ?>';
        var price = '<?php echo $price_amz ?>';
        var rating_amz = '<?php echo $rating_amz ?>';
        
        console.log(pos_amz);
        console.log(neg_amz);
        console.log(mix_amz);
        console.log(link_amz);
        
        pos_amz= parseInt(pos_amz);
        neg_amz= parseInt(neg_amz);
        mix_amz= parseInt(mix_amz);
        
        

         console.log(name);
        var p_name = "Name: ".concat(name);
        document.getElementById("product_name").innerHTML=p_name;

          var p_image = name.concat(".jpg");
          document.getElementById("productimg").setAttribute('src', p_image);
          console.log(p_image);

        price = "Price: ".concat(price);
        document.getElementById("product_price").innerHTML=price;

        rating_amz = "Rating:" .concat(rating_amz);
         document.getElementById("product_rating").innerHTML=rating_amz;



        document.getElementById("product_link1").setAttribute('href', link_amz);


      
     
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['', '%'],
          ['Positive',pos_amz],
          ['Negative',neg_amz],
          ['Mix', mix_amz]
          
          
        ]);

        var options = {
          title: 'Sentiment Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie1'));

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

        var chart = new google.charts.Bar(document.getElementById('graph'));

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
   
  width: 100%;
  height: 250px;
  padding-right: 200px;
  padding-left: 200px;

}

#image{
  width: 40%;
  height: 520px;  
}

#pie1{
  padding-left:10px; 
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
   
      <div id="image"  class="col-sm-3 ">
          <img src="" class="img-responsive" style="width: 100%; height:;" id="productimg" >
      </div>     

        <div  id="productinfo" class="col-sm-3 . well" > 
           <font size="5"><b id="product_name"> </b><br><br> 
           <b id="product_price"> </b><br><br>
           <b id="product_rating"></b><br><br>
 


         <br><b>Links:</b><br><br></font>
           <a id="product_link1" href=""><img src="amazon_icon.jpg" height="50" width="50" ></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           <a id="product_link2" href=""> <img src="flipkart_icon.jpg" height="50" width="50"></a>
        </div>

        <div id="pie" >
           <div id="pie1" class="well" ></div>
           <div id="pie2" class="well"></div>
           <div id="pie3" class="well"></div>

        </div>
        
        <div id="graph" class="col-sm-6 slideanim">
          
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
