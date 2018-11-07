<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    body {
     padding-top: 40px;
     padding-bottom: 40px;
     background-color: #eee;
    }
 
    .form-signin {
     max-width: 330px;
     padding: 15px;
     margin: 0 auto;
    }

  </style>
</head>
<body background="park.png"style=" background-repeat:no-repeat ;
background-size:100% 100%; 
background-attachment:fixed;">

<div class="container"> 
 <form class="form-signin" action = 'doregister.php' method="post">
    
    <label for="inputUsername" class="sr-only">Username</label>
    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
    <br>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="text" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <br>

    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign Up" />
 </form>
</div>