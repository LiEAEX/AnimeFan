<title>del.php</title>

<?php 

    $id =$_GET['id'];
    $conn = new mysqli("127.0.0.1", "root", "******", "anime");
    if(!$conn){
        echo 'can not connect: ' . mysql_error();
    }
    
    $sql = "delete from anime_information where anime_id =$id";
    $result = $conn->query($sql);
    if($result && mysqli_affected_rows($conn)){
        echo "Delete Success<a href = 'home.php'><br />Return</a>";
    }else{
        echo "Delete Fail<a href = 'home.php'><br />Return</a>";
    }

    $conn->close();
?>
