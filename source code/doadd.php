<?php 

    $id = $_GET['id'];
    $title = $_GET['title'];
    $cast = $_GET['cast'];
    $director = $_GET['director'];
    $company = $_GET['company'];
    $year = $_GET['year']; 
    $rate = $_GET['rate'];
    
    $conn = new mysqli("127.0.0.1", "root", "******", "anime");
    if(!$conn){
        echo 'can not connect: ' . mysql_error();
    }
    
    $sql = "insert into anime_information(anime_id,title,cast,director,company,year,rate) values('$id','$title','$cast','$director','$company','$year','$rate')";
    
    $obj = $conn->query($sql);
    
    if($obj){
        echo "Add Success<a href = 'home.php'><br />Return</a>";
    }else{
        echo "Add Fail<a href = 'home.php'><br />Return</a>";
    }
    $conn->close();
?>
