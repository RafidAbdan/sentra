<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: register.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/art.css">
</head>
<body id="Body1">
<div class="nav1">
        <a class="Logo"href="login.php">Art's Shop</a>
    </div>
	<div class="alert-warning">
		<?php echo $_SESSION['error']?>
	</div>

	<div class="container-form">
        <form action="" method="POST" class="lgn-form">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-login">
                <label for="username">Username</label><br>
                <input type="text"id="username" placeholder="username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-login">
                <label for="pass">password</label><br>
                <input type="password" id="pass" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-login">
                <button name="submit" class="btn-login">Login</button>
            </div>
            <p class="login-regis">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>