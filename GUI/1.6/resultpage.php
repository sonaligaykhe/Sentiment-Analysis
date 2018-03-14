<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
      background-color: black;
      color: #fff;
  }
  </style>
  <script type="text/javascript">
    var a= sessionStorage.getItem("sent");
      
      <?php

              $inpsearch = "<script> document.write(a)</script>";
             
      ?>    

  </script>

        <?php   
              $dbhost = "localhost";
             $dbuser = "root";
             $dbpass = "";
             $db = "project";


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

                
                
                while($row = mysqli_fetch_assoc($result))
                     {   
              
                        if($row['name'] == $inp)
                           {
                            echo $row['name']; 
                            echo $row['pos'];
                            echo $row['neg'];
                            echo $row['mix'];
                            }  
                     }
  
        ?>


</head>
<body>


<div class="jumbotron text-center">
  <h1>Sentiment Analyzer</h1> 
  <p>We specialize in analysing sentiments</p> 

    
  <form class="form-inline" >
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Product Search" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Search</button>
      </div>
    </div>
  </form>
  
</div> 

</body>
</html>
