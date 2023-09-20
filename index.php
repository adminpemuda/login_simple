<!DOCTYPE html>
<html>
<head>
 <title>Halaman Login</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <h1>Halaman Login</h1>
 <div class="form">
  <form action="main.php" method="post" name="form_input">
   <div class="username">
    Username : <input type="text" name="username" placeholder="Masukan Username" required="">
   </div>
   <div class="password">
    Password : <input type="text" name="password" placeholder="Masukan Password" required="">
   </div>
   <div class="tombol">
    <input type="submit" name="input" value="LOGIN">
    <input type="reset" name="reset" value="RESET">
   </div>
  </form>
 </div>
</body>
</html>