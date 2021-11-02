<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ward | Login</title>
    <link rel="shortcut icon" href="./assets/images/fav.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <section class="main">
        <div class="sections">
            <div class="content">
                <div class="logo">
                    <img src="./assets/images/logo.svg" alt="Logo">
                </div>
                <div class="description">
                    The goal of this web application is to reduce the amount of 
                    work that ward members have to do, make their jobs easier, 
                    and make their activities more transparent. Here, manual 
                    tasks are transformed to digital, allowing paper tasks to 
                    be reduced to online tasks.
                </div>
                <div class="connection">
                    <img src="./assets/images/connections.png" alt="Connections">
                </div>
            </div>
            <div class="form">
                <div class="box">
                    <div class="login-text">
                        <div class="title">
                            Login to continue
                        </div>
                        <div class="sub-title">
                            A web-based application for managing your ward.
                        </div>
                    </div>
                   
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="inputs">
                            <div class="input">
                                <div class="label">
                                    Username
                                </div>
                                <input type="text" name="uname" id="" placeholder="House no./committe no." required>
                            </div>
                            <div class="input">
                                <div class="label">
                                    Password
                                </div>
                                <input type="password" name="upsw" id="" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="sub">
                            <div class="checkbox">
                                <input type="checkbox" name="" id="check" checked>
                                <label for="check">Remember me</label>
                            </div>
                                <a href="#" class="forgot">Forgot password?</a>
                        </div>
                        <div class="buttons">
                            <input type="submit" name="login" value="Login" class="primary-button">
                            <div class="or">
                                <div class="line"></div>
                                <span>Or</span>
                                <div class="line"></div>
                            </div>
                            <input type="button" value="Register" id="register" class="secondary-button">
                        </div>
                        <?php
                        include './assets/includes/dbcon.php';
                        if(isset($_POST["login"])){
                            $un=$_POST["uname"];
                            $pass=$_POST["upsw"];
                            $log="SELECT * FROM `registration` WHERE `houseno`=$un AND `password`=$pass";
                            $query_run=mysqli_query($conn,$log);
                            $checkLoginCount = mysqli_num_rows($query_run);
                            echo $checkLoginCount;
                            if($checkLoginCount==1)
                            {

                                $_SESSION['username']=$un;
                                header('location:home.php');
                                echo"Done";
                                // if(($un=="admin@gmail.com")){
                                //     header('location:admin.php');
                                // }
                                // else{
                                //     header('location:home.html');
                                // }
                            }
                            else{
                                $_SESSION['status']="Invalid Email id Or Password!";
                                $_SESSION['status_code']="error";
                                header('location:index.php');
                                echo"errror";
                            }
                        }
                    ?>
                    </form>
                </div>
                <div class="box2">
                    <div class="register-text">
                        <div class="title">
                            Register your house
                        </div>
                        <div class="sub-title">
                            Already have an account?<a>Login</a> 
                        </div>
                    </div>
                    <?php
                        include './assets/includes/dbcon.php';
                        if(isset($_POST["reg"])){
                            $name=$_POST["fname"];
                            $email=$_POST["email"];
                            $phno=$_POST["phno"];
                            $wardno=$_POST["wardno"];
                            $houseno=$_POST["houseno"];
                            $psw=$_POST["psw"];

                            $ins="INSERT INTO `registration`(`fname`, `email`, `phno`, `wardno`, `houseno`, `password`) VALUES ('$name','$email',' $phno','$wardno',' $houseno',' $psw')";
                            mysqli_query($conn,$ins);
                        }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="inputs">
                            <div class="input">
                                <div class="label">
                                    Full name
                                </div>
                                <input type="text" name="fname" id="" placeholder="John Doe" required>
                            </div>
                            <div class="input">
                                <div class="label">
                                    Email ID
                                </div>
                                <input type="email" name="email" id="" placeholder="example@gmail.com" required>
                            </div>
                            <div class="input">
                                <div class="label">
                                    Phone number
                                </div>
                                <input type="number" name="phno" id="" placeholder="9568547512" required>
                            </div>
                            <div class="half-input">
                                <div class="input">
                                    <div class="label">
                                        Ward number
                                    </div>
                                    <input type="number" name="wardno" id="" placeholder="25" required>
                                </div>
                                <div class="input">
                                    <div class="label">
                                        House number
                                    </div>
                                    <input type="number" name="houseno" id="" placeholder="153" required>
                                </div>
                            </div>
                            <div class="input">
                                <div class="label">
                                    Password
                                </div>
                                <input type="password" name="psw" id="" placeholder="Password">
                            </div>
                            <div class="button">
                                <input type="submit" name="reg" value="Register" class="primary-button">
                            </div>
                            <div class="message">
                                *The login details will be sent to you via email or SMS.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/js/app.js"></script>
</body>
</html>