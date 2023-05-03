<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        html, head {
            height: 100%;
        }
        body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <main class="border rounded p-4 pt-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h1 class="h2 mb-3">Login Administrator</h1>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="tuser" class="form-control" placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="tpass" class="form-control" placeholder="Password">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            
            <?php
            session_start();
            include "koneksi.php";

            $username = "";
            $password = "";
            if (!empty($_POST["tuser"])) {
                $user = $_POST["tuser"];
                $pass = $_POST["tpass"];
                $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
                $hasil = $conn->query($sql);
                while ($rec = $hasil->fetch_assoc()) {
                    $iduser = $rec["iduser"];
                    $username = $rec["username"];
                    $password = $rec["password"];
                }
                if ($user == $username && $pass == $password) {
                    $_SESSION["iduser"] = $iduser;
                    $_SESSION["username"] = $username;
                    header("location: dashboard.php");
                } else {
                    if ($user != "")
                        echo "<div class='text-danger'>Username atau password salah</div>";
                }
                $conn->close();
            }
            ?>
            
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>