<?php 
 
require_once 'connect_db.php';


error_reporting(0);
 
session_start();
$session=$_SESSION['username'];
$q = $conn->query("SELECT * FROM user WHERE  username = '$session'");
// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }
// var_dump($q->fetch_assoc()['level']=='admin');
// die;
foreach($q as $qt){
    if($qt['level']=='admin'){
        header("Location: index.php");
    }
    if($qt['level']=='user'){
        header("Location: dashboard.php");
    }
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
 
    if ($password) {
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, password, level)
                    VALUES ('$username','$password','$level')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Akun berhasil ditambahkan!'); window.location.href='index.php'</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['level'] = "";
                
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title> ADD</title>
</head>
<body>
    <div style="width:100%;padding-top: 2%;" class="container">
        <div style="margin:auto;width:80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;">
            <form action="" method="POST" class="login-email" style="align-items: center;font-family:system-ui;display: flex;margin: 0% 7%;flex-direction: column;">
                <br><br>
                <h1>ADD USER</h1>
                <div class="row" style=width:80% >
                    <br><br>
                    <div class="input-group"  style="display:flex;flex-direction: column;">
                        <label for=""> USERNAME</label>
                        <br>
                        <input style="height: 45px;border-radius: 10px;border: solid 1px black;" type="text"  name="username" value="" required>
                    </div>
                    <br><br>
                    <div class="input-group" style="display:flex;flex-direction: column;">
                        <label for=""> PASSWORD</label>
                        <br>    
                        <input style="height: 45px;border-radius: 10px;border: solid 1px black;" type="password"  name="password" value="" required>
                    </div>
                    <br><br>
                    <div class="input-group" style="display:flex;flex-direction: column;">
                        <label for=""> LEVEL</label>
                        <br>    
                        <select name="level" id="">
                            <option value="">PILIH</option>
                            <option value="superadmin">Super Admin</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        
                    </div>
                    <br>
                    <div style="display:flex;flex-direction:row;justify-content: flex-end;">
                        <div class="form-group col-md-2" >
                            <button style="padding: 0px 35px;height: 40px;background-color: red;border-radius: 10px;border: none;"class="btn btn-primary"><a href="login.php" style="color:black;text-decoration:none;">back</a></button>
                        </div>
                        <div class="input-group" >
                            <button name="submit" class="btn" style="padding: 0px 35px;height: 40px;background-color: lime;border-radius: 10px;border: none;">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <br>
        </div>
    </div>
</body>
</html>