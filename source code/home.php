<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Anime Home</title>
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
      font-size: 18px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">AnimeFan</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="add.php">ADD</a></li>
        <li><a href="search.php">SEARCH</a></li>
        <li><a href="index.html">SIGN OUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->


<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Anime Information</h3>
  <?php 
    
    $conn = new mysqli("127.0.0.1", "root", "******", "anime");
    //connect the database
    if(!$conn){
        echo 'can not connect: ' . mysql_error();
    }
    
    //query the database
    $sql = "select * from anime_information";
    
    //send sql 
    $obj = $conn->query($sql);
    
    echo "<center>";

    echo "<table border = 1 cellspacing = '0' cellpadding = '10'>";
    echo "<th>ID</th><th>Title</th><th><a href = 'cast.php'>Cast</a></th><th><a href = 'director.php'>Director</a></th><th><a href = 'company.php'>Company</a></th><th>Year</th><th>Rate</th><th>Manipulation</th>";
    while($row = mysqli_fetch_assoc($obj)){
        echo "<tr>";
            echo '<td>'.$row['anime_id'].'</td>';
            echo '<td>'.$row['title'].'</td>';
            echo '<td>'.$row['cast'].'</td>';
            echo '<td>'.$row['director'].'</td>';
            echo '<td>'.$row['company'].'</td>';
            echo '<td>'.$row['year'].'</td>';
            echo '<td>'.$row['rate'].'</td>';
            echo '<td><a href = "delete.php?id='.$row['anime_id'].'">Delete</a>/<a href = "update.php?id='.$row['anime_id'].'">Update</a></td>';
        echo "</tr>";
    }
    
    echo "</table>";
    
    echo "<center>";
    
    //close the connection
    $conn->close();
  ?>
  <p></p>
  <a href="search.php" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Anime Information System Made By LQF</p> 
</footer>

</body>
</html>

