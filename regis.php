<?php

@include 'koneksi.php';

session_start();

$error = array(); // Inisialisasi variabel $error sebagai array

if(isset($_POST['submit'])){
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   

   $select = "SELECT * FROM t_user WHERE username = '$username' && email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'User already exists';
  
      }else{
         $insert = "INSERT INTO t_user(username, email, password) VALUES('$username','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login.php');
         exit(); // Tambahkan pernyataan exit() setelah pengalihan halaman
      }
   }


?>


<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(to bottom, #DB7093, #FFDAB9); 
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .container {
            width: 300px;
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
        .container form input[type="email"],
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
<body>
    <div class="container">
        <h2>Register</h2>
        <?php if (!empty($error)): ?>
            <p class="error"><?php echo $error[0]; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <label>Username:</label><br>
            <input type="text" name="username" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>
            
            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</body>
</html>
