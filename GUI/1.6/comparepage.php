<?php
              $dbhost = "localhost";
             $dbuser = "root";
             $dbpass = "";
             $db = "project";

             error_reporting(0);

            $link = mysqli_connect("localhost", "root", "", "project");
            if($link==TRUE)
          echo "Connected Successfully";
         
            $sql= "select * from count";

             $result=mysqli_query($link,$sql);
            
          if ($result == TRUE) {
                echo "New record created successfully";
            } else {
              //  echo "Error: " . $sql . "<br>" . $conn->error;
            }

             
              if (isset($_POST['cmp1']))
                {
                $inp = $_POST['cmp1']; 
                } 

              if (isset($_POST['cmp2']))
                {
                $inp2 = $_POST['cmp2']; 
                } 

     
               while($row = mysqli_fetch_assoc($result))
                     {   
              
                        if($row['name'] == $inp )
                           {
                              $name1= $row['name']; 
                              $pos1= $row['pos'];
                              $neg1= $row['neg'];
                              $mix1= $row['mix'];
                                
                            } 


                        if($row['name'] == $inp2)
                           {
                              $name2= $row['name']; 
                              $pos2= $row['pos'];
                              $neg2= $row['neg'];
                              $mix2= $row['mix'];
                              
                            }        




                      }                    
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
        
            var cmp1 = '<?php echo $inp;?>';
            var cmp2 = '<?php echo $inp2;?>';
            var name1 = '<?php echo $name1;?>';
            var pos1 = parseInt('<?php echo $pos1;?>');
            var neg1 = parseInt('<?php echo $neg1;?>');
            var mix1 = parseInt('<?php echo $mix1;?>');
            var name2 = '<?php echo $name2;?>';
            var pos2 = parseInt('<?php echo $pos2;?>');
            var neg2 = parseInt('<?php echo $neg2;?>');
            var mix2 = parseInt('<?php echo $mix2;?>');

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
       <form action="comparepage.php" method="post"> 
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
