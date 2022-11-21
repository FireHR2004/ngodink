<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
</head>
<body style="background: rgb(51, 51, 51);">
    <div role="alert">
        <?php
        include 'koneksi.php';
        error_reporting(0);

        echo $_SESSION['error'];

        session_start();
        //pengecekan apakah di dalam session terdapat array username
        if(isset($_SESSION['username'])){
            if($_SESSION['username'] == 'admin'){
                header('Location:admin/dashboard.php');
            }else{
                header('Location:index.php');
            }
        }

        //pengecekan
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "SELECT * FROM user WHERE Username='$username' AND Password='$password'";
            $result = mysqli_query($koneksi, $query);
            $hasil = mysqli_fetch_object($result);

            $cek = mysqli_num_rows($result);
            // var_dump($password);
            // jika data memiliki lebih dari 0
            if($cek > 0){
                $_SESSION['username'] = $username;
                $_SESSION['id_user'] = $hasil->IdUser;
                $_SESSION['status'] = 'login';

                if($_SESSION['username'] == 'admin'){
                    header('Location:admin/dashboard.php');
                }else{
                    header('Location:index.php');
                }
            }else{
                echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
            }
        }
        ?>
    </div>
    <div class="container">
        <div class="login">
            <form action="" method="post" class="box">
                <div class="header">
                    <p>Login Account</p>
                </div>
                <div class="text-login">
                    <label for="username">Username</label>
                    <input type="text" name="username" >
                </div>
                <div class="text-login">
                    <label for="username">Password</label>
                    <input type="password" name="password" >
                </div>
                <div class="text-login">
                    <input type="submit" name="submit" value="Log In" class="btn">
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>