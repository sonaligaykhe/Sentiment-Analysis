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
      <p>We specialize in analysing sentiments</p> 
          <form>
                <input type="" name="" placeholder="Compare Product" size="50" class="form-control">
                      &nbsp&nbsp&nbsp
                <input type="" name="" placeholder="Compare Product" size="50" class="form-control">
                  <br><br>
                <input type="submit" name="" class="btn btn-danger">

          </form>

</div>


</body>
</html>
