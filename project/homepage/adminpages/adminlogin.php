
<?php
  if(isset($_POST['submit']))
  {
    session_start();

    if(($_POST["username"] == "admin") && ($_POST['password'] == "LRDSI"))
    {
      $_SESSION['admin'] = "admin";
      header("location:secret.php");
    }
  }


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin login page</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="style2.css">

</head>
<body>
<div class="login-form">
  <form method="POST">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="Username" autocomplete="nope" name="username">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="password">
      </div>
    </div>
    <div class="action">
      <input type="reset" value="cancel"> 
      <input type="submit" value="submit" name="submit">
    </div>
  </form>
</div>

<button><h2>if you're a user take the time to check our website</h2><a href="../index.php">LRDSI</a></button>

</body>
</html>