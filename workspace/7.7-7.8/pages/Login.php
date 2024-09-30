<?php
  if(!empty($_COOKIE["Username"]) && !empty($_COOKIE["Password"])){
    $user = $_COOKIE["Username"];
    $pass = $_COOKIE["Password"];
  }
?>

<form action="" method="post">
  <h3>Dang nhap</h3>
  <div>
    <label for="username">
      Username:
    </label>
    <input type="text" id="user-input" name="username" value="<?= $user ?>">
  </div>
  <div>
    <label for="password">
      Password:
    </label>
    <input type="password" id="pass-input" name="password" value="<?= $user ?>">
  </div>
  <div>
    <button type="reset" class="reset">Nhap lai</button>
    <button type="submit">Dang nhap</button>
  </div>
</form>

<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
      if($_POST["username"] == "admin" && $_POST["password"] =="admin") {
        session_start();
        $_SESSION["name"] = "admin";
        $_SESSION["passwd"] = "admin";
        setcookie("Username","admin", time()+30*60*60*24);
        setcookie("Password","admin", time()+30*60*60*24);
        header("location: ./admin/index.php");
      } else {
        echo "<p style='color: red;'>Ten dang nhap hoac mat khau khong chinh xac</p>";
      }
    }
  }
?>