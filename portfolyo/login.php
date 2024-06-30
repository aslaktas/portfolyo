<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="assets/css/login.css">
  </head>
  <body>

    <div class="login-box">
      <img src="assets/img/ Logo-4.png" class="avatar" alt="Avatar Image">
      <h1>Giriş Yap</h1>

      <form action="login.php" method="post">
        <!-- USERNAME INPUT -->
        <label for="username">Kullanıcı Adı</label>
        <input type="text" name="usrnm" placeholder="">
        <!-- PASSWORD INPUT -->
        <label for="password">Şifre</label>
        <input type="password" placeholder=""
        name="psw">
        <input type="submit" value="Giriş Yap">
        <a href="#">Şifremi unuttum?</a><br>
        <a href="#"></a>
      </form>
    </div>
    

  </body>
</html>
<?php
session_start();

if (isset($_POST["usrnm"], $_POST["psw"])) {
    if ($_POST["usrnm"] == "admin" && $_POST["psw"] == "12345") {
        $_SESSION["user"] = $_POST["usrnm"];
        header("Location: adminpanelli.php");
        exit(); // Yönlendirmeden sonra betiğin devam etmesini engeller
    } else {
        echo "<script>alert('Kullanıcı Adı veya Şifre Yanlış!')</script>";
    }
}
?>

