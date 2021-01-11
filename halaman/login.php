<?php
    session_start();
    $form_error = '';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'Rezha' AND $password == '12345'){
            $_SESSION ['username'] = $username;
            header('Location: home.php');
        }
        else {
            $form_error = '<p>Slah</p>';
        }
    }
?>

<!DOCTYPE html>
<head>
    <title>Login Sederhana Tanpa Database</title>
</head>
<body>
    <div class="loginForm">
 
    <h3>Silakan Login</h3>
 
    <form method="POST" action="index.php">
        Email       : <input type="username" name="username"><br>
        Password    : <input type="password" name="password"><br>
        <?php echo $form_error; ?>
        <input type="submit" name="submit" value="Login">
    </form>

    </div>
    
</body>
</html>