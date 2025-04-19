<?php 
session_start();

$errors =[
  'login' => $_SESSION['login_error'] ??'',
  'register' => $_SESSION['register_error'] ??''
];

$activeForm =$_SESSION['active_form'] ?? 'login';
session_unset();

function showError($error){
  return !empty($error) ?"<p class='error-message' >$error</p>":'';
}

function isActiveForm($formName,$activeForm){
  return $formName === $activeForm ? 'active':'';
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & register form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<video autoplay loop muted plays-inline class="back-vid">
    <source src="Vid.mp4" type="video/mp4">
  </video>
  <div class="container">
    <div class="form-box <?= isActiveForm('login', $activeForm);?>" id="login-form" >
       <form action="login-register.php" method="post">
        <h2>login</h2>
        <?= showError($errors['login']);?>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit" name="login" >login</button>
        <p>Don't have an account <a href="#" onclick="showForm('register-form')">Register</a></p>
       </form>
    </div>

    <div class="form-box" <?= isActiveForm('register', $activeForm);?> id="register-form" >
      <form action="login-register.php" method="post">
       <h2>Register</h2>
       <?= showError($errors['register']);?>
       <input type="text" name="name" placeholder="Name" required>
       <input type="email" name="email" placeholder="email" required>
       <input type="password" name="password" placeholder="password" required>
       <select name="role" required>
        <option value="">--select--</option>
        <option value="user">user</option>
        <option value="admin">admin</option>
       </select>
       <button type="submit" name="register" >Register</button>
       <p>Already have an account <a href="#" onclick="showForm('login-form')">login</a></p>
      </form>
   </div>
  </div>

  <script src="script.js"></script>

</body>
</html>