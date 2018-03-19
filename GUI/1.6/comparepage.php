<?php
         $dbhost = "localhost";
             $dbuser = "root";
             $dbpass = "";
             $db = "project";

             error_reporting(0);
            session_start();  

            $conn = mysqli_connect("localhost", "root", "", "project");


              if (isset($_POST['cmp1']))
              {
              $compare1 = $_POST['cmp1']; 
              } 
             
              if (isset($_POST['cmp2']))
              {
              $compare2 = $_POST['cmp2']; 
              } 

            $sql1="select * from allproduct where productname='$compare1'";
            $sql2="select * from allproduct where productname='$compare2'";
            
            $result1=mysqli_query($conn,$sql1);

            $result2=mysqli_query($conn,$sql2);

            if ($result == TRUE) {
            echo "success1  ";
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $row=mysqli_fetch_assoc($result1);
            
            $name1= $row['productname']; 
            $tname1= $row['tablename'];
            $feature1_1= $row['feature1']; 
            $feature2_1= $row['feature2']; 
            $feature3_1= $row['feature3']; 
            $feature4_1= $row['feature4']; 
            $feature5_1= $row['feature5']; 


            $row=mysqli_fetch_assoc($result2);
            
            $name2= $row['productname']; 
            $tname2= $row['tablename'];
            $feature1_2= $row['feature1']; 
            $feature2_2= $row['feature2']; 
            $feature3_2= $row['feature3']; 
            $feature4_2= $row['feature4']; 
            $feature5_2= $row['feature5']; 


/*
            echo $name;            
            $tname = (string)$tname;
            echo $tname;            
            echo $feature1;
            echo "dfvf";    */      
//            mysqli_close($conn);

            //$conn = mysqli_connect("localhost", "root", "", "project");
//         
           $conn2 = mysqli_connect("localhost", "root", "", "project");
//           $sql2 = "select * from '$tname' where name = '$inp'";
            $sql3="select * from `".$tname1."` where `name`='$compare1'";
          
           $sql4="select * from `".$tname2."` where `name`='$compare2'";
            
            $result3=mysqli_query($conn2,$sql3);

            $result4=mysqli_query($conn2,$sql4);
            if ($result == TRUE) {
            echo "success 2";
            } 
            else {
            echo "Error: " . $sql2 . "<br>" . $conn2->error;
            }

            $row=mysqli_fetch_assoc($result3);

            $price_amz_1 = $row['price'];
            $rating_amz_1 = $row['rating'];
            $link_amz_1 = $row['link'];
            $pos_amz_1 = $row['pos'];
            $neg_amz_1 = $row['neg'];
            $mix_amz_1 = $row['mix'];
            $feature1val_amz_1= $row[$feature1_1]; 
            $feature2val_amz_1= $row[$feature2_1]; 
            $feature3val_amz_1= $row[$feature3_1]; 
            $feature4val_amz_1= $row[$feature4_1]; 
            $feature5val_amz_1= $row[$feature5_1]; 
            

            $row=mysqli_fetch_assoc($result4);

            $price_amz_2 = $row['price'];
            $rating_amz_2 = $row['rating'];
            $link_amz_2 = $row['link'];
            $pos_amz_2 = $row['pos'];
            $neg_amz_2 = $row['neg'];
            $mix_amz_2 = $row['mix'];
            $feature1val_amz_2= $row[$feature1_2]; 
            $feature2val_amz_2= $row[$feature2_2]; 
            $feature3val_amz_2= $row[$feature3_2]; 
            $feature4val_amz_2= $row[$feature4_2]; 
            $feature5val_amz_2= $row[$feature5_2]; 
            


            mysqli_close($conn);
                         
        ?>


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
   

  
<script type="text/javascript">
$(document).ready(function(){
        
            var cmp1 = '<?php echo $compare1;?>';
            var cmp2 = '<?php echo $compare2;?>';
            var name1 = '<?php echo $name1;?>';
            var pos1 = parseInt('<?php echo $pos_amz_1;?>');
            var neg1 = parseInt('<?php echo $neg_amz_1;?>');
            var mix1 = parseInt('<?php echo $mix_amz_1;?>');
            var name2 = '<?php echo $name2;?>';
            var pos2 = parseInt('<?php echo $pos_amz_2;?>');
            var neg2 = parseInt('<?php echo $neg_amz_2;?>');
            var mix2 = parseInt('<?php echo $mix_amz_2;?>');

console.log(cmp1);
console.log(cmp2);


      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['', '%'],
          ['Positive',pos1],
          ['Negative',neg1],
          ['Mix', mix1]
          
          
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

        var chart = new google.charts.Bar(document.getElementById('bar1'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

///////////////////////////////

google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['', '%'],
          ['Positive',pos2],
          ['Negative',neg2],
          ['Mix', mix2]
          
          
        ]);

        var options = {
          title: 'Sentiment Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie2'));

        chart.draw(data, options);
      }

      //   google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawbarchart2);

      function drawbarchart2() {
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

        var chart = new google.charts.Bar(document.getElementById('bar2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }












});//ready
  </script>



  <style>
  .jumbotron {
      background-color: black;
      color: #fff;
  }

  #rightdiv{ 
    height: 1000px;
    width: 45%;
    float: right; 

  }

  #leftdiv{

    height: 1000px;
    width: 45%;
    float: left;
  }

#info{
  align-items: center;

 height: 1000px;
    width: 90%;

}

  #review{
    padding-left: 15%;
    padding-right: 15%;
    background-color:   #f2f2f2;
    float: bottom;
  }


  </style>
  

        


</head>
<body>


<div class="jumbotron text-center">
      <h1>Sentiment Analyzer</h1> 
      <p>We specialize in analysing sentiments</p> 
          <form class="form-inline" action="comparepage.php" method="post">
                <input type="" name="cmp1" placeholder="Compare Product" size="50" class="form-control" size="50">
                      &nbsp&nbsp&nbsp
                <input type="" name="cmp2" placeholder="Compare Product" size="50" class="form-control">
                  <br><br>
                <input type="submit" name="" class="btn btn-danger" value="Compare">

          </form>


          </div>

              <div id="info" class="container" >
                 <div id="leftdiv">
                    <div class="well ">
                    <img src="" height="400" width="400" >
                    </div>
                    <div id="pie1" class="well ">
                      
                    </div>
                    <div id="bar1" class="well ">
                      
                    </div>

                 </div>

                 <div id ="rightdiv">
                    <div class="well ">
                    <img src="" height="400" width="400">
                    </div>
                    <div id="pie2" class="well ">
                      
                    </div>
                    <div id="bar2" class="well ">
                      
                    </div>
                 </div>
          </div>


</body>
</html>
