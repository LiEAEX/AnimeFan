<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Anime Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 16px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>


<!-- First Container -->


<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Anime Search Result</h3>
  <?php 
    
    $id = $_GET['id'];

    
    $conn = new mysqli("127.0.0.1", "root", "******", "anime");
    
    if(!$conn){
        echo 'can not connect: ' . mysql_error();
    }
    
    $sql = "select * from anime_information where anime_id=$id";
    
    $result = $conn->query($sql);
    
    echo "<center>";

    echo "<table border = 1 cellspacing = '0' cellpadding = '10'>";
    echo "<th>ID</th><th>Title</th><th>Cast</th><th>Director</th><th>Company</th><th>Year</th><th>Rate</th>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
            echo '<td>'.$row['anime_id'].'</td>';
            echo '<td>'.$row['title'].'</td>';
            echo '<td>'.$row['cast'].'</td>';
            echo '<td>'.$row['director'].'</td>';
            echo '<td>'.$row['company'].'</td>';
            echo '<td>'.$row['year'].'</td>';
            echo '<td>'.$row['rate'].'</td>';
        echo "</tr>";
        echo "<a href = 'home.php'>Return</a>";
    }
    
    echo "</table>";
    
    echo "<center>";
    
    $conn->close();
?>
  <p></p>
  
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Anime Information System Made By LQF</p> 
</footer>

</body>
</html>

