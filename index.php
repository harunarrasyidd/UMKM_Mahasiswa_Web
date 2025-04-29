<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Form</title>  

<style>

body {
  display: flex;
  align-items: center;
  justify-content: center; 
  height: 100vh;
  background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
}

.login-form {
  background: #fff;
  width: 300px;
  padding: 25px;
  border-radius: 10px;   
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
}

/* style form */

.form-title {
  text-align: center;  
  margin-bottom: 20px; 
}

.form-icon {
  font-size: 50px;
  color: #4691ff;
  text-align: center;
  margin-bottom: 10px;
}

.form-group {
  margin-bottom: 15px;  
}

.form-control {
  width: 100%; 
  padding: 12px 10px;
  outline: none;
  border: 2px solid #ddd;
}

button[type="submit"] {
  margin-top: 10px;
  width: 100%;
  padding: 10px 0;
  font-size: 18px;   
  border: none;   
  color: #fff;
  background: #1d63dc;
  border-radius: 5px;   
}

button[type="submit"]:hover {
  background: #12488f; 
}

.form-footer {
  font-size: 14px;
  text-align: center;
  margin-top: 15px; 
}

.form-footer p a {
  color: #1d63dc;
  text-decoration: none;
}

.form-footer p a:hover {
  text-decoration: underline;  
}

</style>

</head>

<body>  

<div class="login-form">

<i class="fas fa-user icon"></i>

<h1>Masuk</h1>

<form action="login.php" method="post">

  <div class="form-group">
    <label>Username</label>
    <input type="text" name="nama" class="form-control">
  </div>

  <div class="form-group">
    <label>Password</label>    
    <input type="password" name="password" class="form-control">
  </div>

  <button type="submit">Masuk</button>
  
  <div class="form-footer">
    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
  </div>

</form>

</div>


</body>  
</html>