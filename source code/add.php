<style>
       h1{color: white;font-size: 18px}
</style>

<body background="mistlost.jpg"style=" background-repeat:no-repeat ;
background-size:100% 100%; 
background-attachment:fixed;">

<form action = 'doadd.php' method="get">
    <h1>ID：</h1><input type="text" name="id" value="" required/><br />
    <h1>Title：</h1><input type="text" name="title" value="" required/><br />
    <h1>Cast：</h1><input type="text" name="cast" value="" required/><br />
    <h1>Director：</h1><input type="text" name="director" value="" required/><br />
    <h1>Company：</h1><input type="text" name="company" value = "" required/><br />
    <h1>Year：</h1><input type="text" name="year" value="" required/><br />
    <h1>Rate：</h1><input type="text" name="rate" value = "" required/><br />
    <input type="submit" value="Add" />
</form>

</body>
