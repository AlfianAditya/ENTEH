<?php 
 
require_once 'connect_db.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        echo "<script>alert('Anda Berhasil Login'); window.location.href='index.php'</script>";

    } else {
        echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>LOGIN</title>
</head>
<body>
    <div class=" alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div style="width:100%;padding-top: 2%;" class="container">
        <div style="margin:auto;width:80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;">
            <form action="" method="POST" class="login-email" style="align-items: center;font-family:system-ui;display: flex;margin: 0% 7%;flex-direction: column;">
                <br><br>
                <h1>LOGIN USER</h1>
                    <div class="row" style=width:80% >
                    <br>
                    <div class="input-group" style="display:flex;flex-direction: column;">
                        <label for=""> LOGIN</label>
                        <br>
                        <input style="height: 45px;border-radius: 10px;border: solid 1px black;"type="text"  name="username" value="" required>
                    </div>
                    <br><br>
                    <div class="input-group" style="display:flex;flex-direction: column;">
                        <label for=""> PASSWORD</label>
                        <br>
                        <input style="height: 45px;border-radius: 10px;border: solid 1px black;" type="password"  name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>
                    <br>
                    <div style="display:flex;flex-direction:row;justify-content: flex-end;">
                        <div class="form-group col-md-2" >
                            <button style="padding: 0px 35px;height: 40px;background-color: red;border-radius: 10px;border: none;"class="btn btn-primary"><a href="dashboard.php" style="color:black;text-decoration:none;">back</a></button>
                        </div>
                        <div class="input-group" >
                            <button name="submit" class="btn" style="padding: 0px 35px;height: 40px;background-color: lime;border-radius: 10px;border: none;">Login</button>
                        </div>

                    </div>

                    <br>    
                    <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
                </div>
            </form>
            <br><br>
    </div>
</body>
</html>