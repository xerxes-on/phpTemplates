
<?php
    if (isset($_POST['s1'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        include "data.php";
        $c = 0;
        foreach($users as $user ){
            if($user["username"] == $username && $user["password"] == $password){
              include "mainPage.php";
              setcookie("username", $username);
              setcookie("password", $password);
              exit();
            }
            $c++;
        }
        if($c = count($users) ){
            ?>
            <p style="color: red;">Invalid Log in details try again!</p>
            <?php
        }
    }
?>
<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>PHP Login Practice</title>
      <link rel="stylesheet" href="./src/style.css">
    </head>
    <body>
        <section class="container">
            <div class="login-container">
                <div class="circle circle-one"></div>
                <div class="form-container">
                    <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                    <h1 class="opacity">LOGIN</h1>
                    <form method="post">
                        <input type="text" name="username" placeholder="USERNAME" />
                        <input type="password" name="password"  placeholder="PASSWORD" />
                        <input type="submit" name="s1"style="font-weight:300;" value="Log in">
                    </form>
                </div>
                <div class="circle circle-two"></div>
            </div>
            <div class="theme-btn-container"></div>
        </section>
    </body>
    </html>


