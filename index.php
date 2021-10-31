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
                    <form action="#">
                        <div class="inputs">
                            <div class="input">
                                <div class="label">
                                    Username
                                </div>
                                <input type="text" name="" id="" placeholder="House no./committe no.">
                            </div>
                            <div class="input">
                                <div class="label">
                                    Password
                                </div>
                                <input type="text" name="" id="" placeholder="Password">
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
                            <input type="submit" value="Login" class="primary-button">
                            <div class="or">
                                <div class="line"></div>
                                <span>Or</span>
                                <div class="line"></div>
                            </div>
                            <input type="button" value="Register" class="secondary-button">
                        </div>
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
                    <form action="#">
                        <div class="inputs">
                            <div class="input">
                                <div class="label">
                                    Full name
                                </div>
                                <input type="text" name="" id="" placeholder="John Doe">
                            </div>
                            <div class="input">
                                <div class="label">
                                    Email ID
                                </div>
                                <input type="text" name="" id="" placeholder="example@gmail.com">
                            </div>
                            <div class="input">
                                <div class="label">
                                    Phone number
                                </div>
                                <input type="text" name="" id="" placeholder="9568547512">
                            </div>
                            <div class="half-input">
                                <div class="input">
                                    <div class="label">
                                        Ward number
                                    </div>
                                    <input type="text" name="" id="" placeholder="25">
                                </div>
                                <div class="input">
                                    <div class="label">
                                        House number
                                    </div>
                                    <input type="text" name="" id="" placeholder="153">
                                </div>
                            </div>
                            <div class="input">
                                <div class="label">
                                    Ration number
                                </div>
                                <input type="text" name="" id="" placeholder="2547863214">
                            </div>
                            <div class="button">
                                <input type="submit" value="Register" class="primary-button">
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