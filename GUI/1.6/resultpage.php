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

             error_reporting(0);

            $link = mysqli_connect("localhost", "root", "", "project");
            if($link==TRUE)
          echo "Connected Successfully";
           // $abc = "<script> document.write(a)</script>";


            $sql= "select * from count";
             $result=mysqli_query($link,$sql);
            
          if ($result == TRUE) {
                echo "New record created successfully";
            } else {
              //  echo "Error: " . $sql . "<br>" . $conn->error;
            }

             
              if (isset($_POST['searchbar']))
                {
                $inp = $_POST['searchbar']; 
                } 

              if (isset($_POST['rsearchbar']))
                {
                $inp2 = $_POST['rsearchbar']; 
                } 

     
               while($row = mysqli_fetch_assoc($result))
                     {   
              
                        if($row['name'] == $inp )
                           {
                              $name2= $row['name']; 
                              $pos2= $row['pos'];
                              $neg2= $row['neg'];
                              $mix2= $row['mix'];
                              $flag=0;  
                            } 


                        elseif($row['name'] == $inp2)
                           {
                              $name2= $row['name']; 
                              $pos2= $row['pos'];
                              $neg2= $row['neg'];
                              $mix2= $row['mix'];
                              $flag=1;
                            }        




                      }                    
        ?>

<script type="text/javascript">
$(document).ready(function(){
        var flag= '<?php  echo $flag; ?>';
        console.log(flag)
          
          if(flag==0)
          {
            var SrchRst = '<?php echo $inp;?>';
          }
          
          else
          {
             var SrchRst = '<?php echo $inp2;?>';
          }

       var name1='<?php echo $name2?>';
        var pos1 = '<?php echo $pos2 ?>';
        var neg1 = '<?php echo $neg2 ?>';
        var mix1 = '<?php echo $mix2?>';
       // pos1 = (number)pos1;
        console.log(pos1);
        console.log(neg1);
        console.log(mix1);
        
        var a= parseInt(pos1);
        var b= parseInt(neg1);
        var c= parseInt(mix1);
        
        

         var path = SrchRst.concat(".jpg"); 


        document.getElementById("product_img").src=path;
        document.getElementById("product_info").innerHTML=SrchRst;

      
     
            google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['', '%'],
          ['Positive',a],
          ['Negative',b],
          ['Mix', c]
          
          
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
  </foraction="resultpage.php" method="post"m>
</div> 


    <div class="col-sm-7 slideanim" id="product">
   <table>
     <tr>
       <th><img id="product_img" width="400" height="400"></th>
       <th> <div> <p id="product_info"> </p></div></th>
       <th> <div id="piechart"> </div></th>
       <th> <div id="bargraph"> </div></th>
       
     </tr>
   </table>
  </div>  

</body>
</html>
