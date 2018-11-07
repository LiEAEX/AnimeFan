<?php 

    $uin = $_POST['username'];
    $pwd = $_POST['password'];
    
    $conn = new mysqli("127.0.0.1", "root", "liqifan6", "anime");
    if(!$conn){
        echo 'can not connect: ' . mysql_error();
    }
    if ($uin == '' || $pwd == ''){
        echo "Username or Password can not be null!";
    }
    else{
    $sql = "insert into user(username,password) values('$uin','$pwd')";}
    
    $obj = $conn->query($sql);
    
    if($obj){
        echo "Register Success<a href = 'index.html'><br />Press to login</a>";
    }else{
        echo "Register Fail<a href = 'index.html'><br />Return</a>";
    }
    $conn->close();
?>