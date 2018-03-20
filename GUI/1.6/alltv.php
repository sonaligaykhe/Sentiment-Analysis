<?php
             $dbhost = "localhost";
             $dbuser = "root";
             $dbpass = "";
             $db = "project";

             error_reporting(0);
             session_start();

            $link = mysqli_connect("localhost", "root", "", "project");

            $sql= "select * from count;";

            $result=mysqli_query($link,$sql);
            if($result==TRUE)
            
            $pho = array();
            $name =array();
            $price =array();
            $i=0;
            while($row = mysqli_fetch_assoc($result))
            {

                              $pho[$i]= $row['image'];
                              $name[$i]= $row['name'];
                              $price[$i]= $row['price'];
                              $i++;
            }

  
?>

<!DOCTYPE html>

<html>
<head>
  <title></title>

<title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script src="jquery.easy-autocomplete.min.js"></script> 
<link rel="stylesheet" href="easy-autocomplete.min.css"> 
   

</head>

<script type="text/javascript">
  
  $(document).ready(function(){

      $('#innerdiv1').click(function(){

           $('this').hide(); 


      });

  });



</script>




<style type="text/css">
  .jumbotron {
      background-color: black;
      color: #fff;
  }

.col-sm-4{
  height: 500px;
}

.row{
  background-color: white;
}


</style>


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

  <div class="container">
    <div id="1" class="col-sm-4 . well">
      <img src="samsunggalaxys8.jpg" class="img-rounded . img-responsive"> 
       <b style="font-family: "> Name : Samsung Galaxy S8</b> 

    </div>
    <div class="col-sm-4 . well"></div>
    <div class="col-sm-4 . well"></div>
  </div>


</body>
</html>