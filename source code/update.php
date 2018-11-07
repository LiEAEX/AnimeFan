<?php
    $id = $_GET['id'];
    $conn = new mysqli("127.0.0.1", "root", "liqifan6", "anime");
    if(!$conn){
        echo 'can not connect: ' . mysql_error();
    }
    $sql = "select * from anime_information where anime_id =$id";
    $obj = $conn->query($sql);
    $row = mysqli_fetch_assoc($obj);

?>

<style>
       td{color: white;font-size: 18px}
</style>

<body background="everforever.jpg"style=" background-repeat:no-repeat ;
background-size:100% 100%; 
background-attachment:fixed;">

<form action="doupdate.php?">
    <input type="hidden" name="id" value = "<?php echo $id;?>" />
    <table border = 0 cellpadding="10" cellspacing="0">
        <tr><td>ID：</td><td><?php echo $row['anime_id'];?></td></tr>
        <tr><td>Title：</td><td><input type="text" name = "title" value="<?php echo $row['title'];?>" /></td></tr>
        <tr><td>Cast：</td><td><input type="text" name = "cast" value="<?php echo $row['cast'];?>" /></td></tr>
        <tr><td>Director：</td><td><input type="text" name = "director" value="<?php echo $row['director'];?>" /></td></tr>
        <tr><td>Company：</td><td><input type="text" name="company" value="<?php echo $row['company'];?>" /></td></tr>
        <tr><td>Year：</td><td><input type="text" name="year" value="<?php echo $row['year'];?>" /></td></tr>
        <tr><td>Rate：</td><td><input type="text" name="rate" value="<?php echo $row['rate'];?>" /><br />
        <tr><td colspan="2" align="center"><input type="submit" name="" value="submit changes" /></td></tr>
    </table>
</form>

</body>