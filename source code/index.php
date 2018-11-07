<?PHP
    header("Content-Type: text/html; charset=utf8");
    
    $conn = new mysqli("127.0.0.1", "root", "liqifan6", "anime");//connect to database
    if(!$conn){
        echo 'can not connect: ' . mysql_error();
    }
    $uin = $_POST['username'];
    $pwd = $_POST['password'];
    $sql = "select password from user where username='{$uin}'";
    $result = $conn->query($sql);
    $n = $result->fetch_row();//这里的$result是一个对，存到变量$n里面。
    if($uin !="" && $pwd !="")
{
    if($n[0]==$pwd)
    {
        header("location:home.php");
    }
    else
    {
        echo "Wrong Username or Wrong Password.<br /><a href = 'index.html'>Return</a>";
    }
}
    else
    {
    echo "Username or Password can not be null!<br /><a href = 'index.html'>Return</a>";
    }
    $conn->close();//关闭数据库
?>