<?php

    require('./config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_POST["register"])){

            $name = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];

            $userid = md5(substr($name,0,3).substr($email,0,3).random_int(10000,99999));

            do{
                if(empty($name) || empty($email) || empty($password) || empty($cpassword)){
                    $msg =  "All Fields are required";
                }
                elseif($password != $cpassword){
                    $msg = "Password should match";
                }
                else{
                    $sql = mysqli_query($db, "INSERT INTO `users`(`name`, `email`, `password`, `userid`) VALUES ('$name','$email','$password','$userid')");
                    if($sql){
                        // $msg = "Success";
                        header("Location: index.php");
                        exit;
                    }
                    else{
                        $msg = "Something went wrong". mysqli_error($db);
                    }
                }
            }while(false);
        }
        elseif(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            do{
                if(empty($email) || empty($password)){
                    $msg =  "All Fields are required";
                }
                else{
                    $sql = mysqli_query($db,"SELECT * FROM `users` WHERE email = '$email'");
                    $row = mysqli_fetch_assoc($sql);
                    if(mysqli_num_rows($sql) > 0){
                        if($password != $row["password"]){
                            $msg = "Wrong Password";
                        }
                        else{
                            $msg = "Success";

                            session_start();
                            $_SESSION["id"] = $row["id"];
                            $_SESSION["name"] = $row["name"];

                            header("Location: index.php");
                            exit;
                        }
                    }
                    else{
                        $msg = "User Not Registered";
                    }

                }
            }while(false);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and register form</title>
    <link rel="stylesheet" href="./forms.css"> 
</head>
<body>
    <div class="main">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <?php

                if(!empty($msg)){
                    echo "
                        <div class='message'>
                            <h4><strong>$msg</strong></h4>
                        </div>
                    ";
                }

            ?>
            <form action="#" method="post" id="login" class="input-group">
                <input type="email" class="input-field" placeholder="Enter your Email" name="email" required>
                <input type="password" class="input-field" placeholder="Enter your password" name="password" required>
                <input type="checkbox" class="check-box"><span>Forget password</span>
                <button type="submit" class="submit-btn" name="login">Log In</button>

                <a href="./index.php" class="back-to-home">Back to Home</a>
            </form>
            <form action="#" method="post" id="register" class="input-group register-form">
                <input type="text" class="input-field" placeholder="Enter your Full name" name="username" required>
                <input type="email" class="input-field" placeholder="Enter your Email" name="email" required>
                <input type="password" class="input-field" placeholder="Enter your password" name="password" required>
                <input type="password" class="input-field" placeholder="confirm password" name="cpassword" required>
                <input type="checkbox" class="check-box"><span>I agree to terms and conditions</span>
                <button type="submit" class="submit-btn" name="register">Register</button>
            
                <a href="./index.php" class="back-to-home">Back to Home</a>
            </form>
        </div>
       
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>