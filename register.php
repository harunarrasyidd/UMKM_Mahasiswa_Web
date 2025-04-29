<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Halaman Register</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
<style>

body {
  background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);  
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.register-form {
  background: #fff;
  width: 300px;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
  text-align: center;
  padding: 25px;
}

.form-title {
   text-align: center;
   margin-bottom: 20px;  
}

.form-icon {
  font-size: 50px;
  color: #4691ff;
  text-align: center;
  margin-bottom: -5px; 
}

.form-group {
  margin-bottom: 15px;  
}   

.form-control {
  width: 100%;
  padding: 12px 10px;
  border: 2px solid #ccc;
  outline: none;  
}

select {
  width: 105%;
  padding: 11px 10px;
  font-size: 15px;
  border: 2px solid #ccc;
  appearance: none; 
}

button[type="submit"] {
  margin-top: 10px; 
  width: 100%;
  color: #fff;
  font-size: 18px;
  border: none;
  border-radius: 5px; 
  padding: 10px; 
  background: #1d63dc;  
}

button[type="submit"]:hover {
  background: #0a45a8; 
}

.form-footer {
  font-size: 14px;  
  margin-top: 15px;
  text-align: center;  
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
<div class="register-form">
  
  <i class="fas fa-user-plus form-icon"></i>
   
  <h1 class="form-title">Register</h1>
 
  <form action="register1.php" method="post">

    <div class="form-group">
      <input type="text" class="form-control" placeholder="username" name="nama"> 
    </div>

    <div class="form-group"> 
      <select name="type">
        <option>Pilih Tipe User</option>
        <option value="penjual">Penjual</option>  
        <option value="pembeli">Pembeli</option>
      </select>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" placeholder="Email" name="email">
    </div>
  
    <div class="form-group">   
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    
    <input type="hidden" name="lvl" value="2">
    
    <button type="submit">Register</button>

    <div class="form-footer">
      <p>Sudah punya akun? <a href="index.php">Login</a></p>
    </div>
      
  </form>

</div>
</body>  
</html>