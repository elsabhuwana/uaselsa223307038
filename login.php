<?php

@include 'koneksi.php';

session_start();

if(isset($_POST['submit'])){
    
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = ($_POST['password']);

   $select = " SELECT * FROM t_user WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $_SESSION['username'] = $username;
      header('location:dashboard.php');
   }else{
      $error[] = 'Username/Password Salah';
   }

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container">
    <h2>Login</h2>
    <?php if (!empty($error)): ?>
    <?php foreach ($error as $errorMsg): ?>
        <p class="error"><?php echo $errorMsg; ?></p>
    <?php endforeach; ?>
<?php endif; ?>

    <form action="" method="post">
        <div class="form-group">
            <ion-icon name="person-sharp"></ion-icon>
            <input type="text" name="username" required />
        </div>
        <div class="form-group">
            <ion-icon name="lock-closed"></ion-icon>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="submit">Masuk</button>
        
    </form>
    <p>Belum punya akun? <a href="regis.php">Daftar disini</a></p>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            background: linear-gradient(to bottom, #DB7093, #FFDAB9); 
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
       .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #FFB6C1;
        } 

        .container h2 {
            text-align: center;
        }

        .container form label {
            display: block;
            margin-bottom: 5px;
        }

        .container form input[type="text"],
        .container form input[type="password"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .container form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #000000;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover {
            background-color: #DB7093;
        }

        .container .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
</html>
