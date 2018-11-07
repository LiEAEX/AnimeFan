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
    
    $sql = "update anime_information set title = '$title', cast = '$cast', director = '$director', company = '$company', year = '$year', rate = '$rate' where anime_id =$id";
    $obj = $conn->query($sql);
    if($obj && mysqli_affected_rows($conn)){
        echo "Update Success<a href = 'home.php'><br />Return</a>";
    }else{
        echo "Update Fail<a href = 'home.php'><br />Return</a>";
    }
    
    $conn->close();
    
?>
