<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/LogIn-Page.css">
    <title>Login Page</title>
</head>

<body class="Body">
    <!-- Hubungkan Database -->
    <?php
    include '../Connection.php';
    ?>


    <!-- Container Isi -->
    <div class="LoginPage">
        <div class="BoxLoginpage">
            <div class="BoxIntroduction">
                <div class="Frame149">
                    <div class="Frame148">
                        <div class="Illustration">
                            <img src="../image/Moon.png" alt="Moon" width="68" height="68" class="Image">
                            <div class="Line22"></div>
                        </div>
                        <div class="BoxIntroductionHeadline">
                            <div class="TextHeadlineLogo">
                                <div class="ArdShop">ARD_SHOP</div>
                                <div class="TextHeadline">
                                    <div class="ClickClick">Click* Click*</div>
                                    <div class="Happy">Happy!!</div>
                                </div>
                            </div>
                            <div class="BoxIntroductionSocialmedia">
                                <div class="ButtomArrow">
                                    <div class="TextWelcome">
                                        <div class="WelcomeBack">Welcome Back</div>
                                        <div class="PleaseLoginToContinue">Please LogIn to Continue</div>
                                    </div>
                                    <img src="../image/Arrow.png" alt="Arrow" width="100" height="100" class="Image">
                                </div>
                                <div class="SocialMedia">
                                    <img src="../image/Twitter.png" alt="Twitter" width="32" height="32" class="Image">
                                    <img src="../image/Instagram.png" alt="Instagram" width="32" height="32" class="Image">
                                    <img src="../image/facebook.png" alt="facebook" width="32" class="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Illustration">
                        <div class="Line22"></div>
                        <img src="../image/Stars.png" alt="Stars" width="68" height="68" class="Image">
                    </div>
                </div>
            </div>
            <div class="BoxLogin">
                <div class="LogIn">LOG IN</div>
                <form action="Process-PHP\Proses_Login.php" method="post">
                    <div class="BoxIntroductionLogin">
                        <div class="BoxSectionLogin">
                            <div class="BoxTextLogin">
                                <div class="Line23"></div>
                                <div class="LogInToYourAccount">Log in to your account</div>
                                <div class="Line24"></div>
                            </div>


                            <div class="BoxSetionInput">
                                <div class="BoxSectionFormInput">
                                    <div class="SectionInput">
                                        <div class="TextForm">Email</div>
                                        <div class="BoxInput">
                                            <img src="../image/User.png" alt="User" width="32" height="32" class="Image">
                                            <input type="email" name="Email" class="Input" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="SetionInput">
                                        <div class="TextForm">Password</div>
                                        <div class="BoxInput">
                                            <img src="../image/Lock.png" alt="Lock" width="32" height="32" class="Image">
                                            <input type="password" name="Password" class="Input" placeholder="Enter Your Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="ChecklistButton">
                                    <div class="BoxCheklist">
                                        <input type="checkbox" class="checkbox">
                                        <div class="RememberMe">Remember me?</div>
                                    </div>
                                    <div class="ForgetPassword">Forget Password?</div>
                                </div>
                            </div>
                        </div>
                        <div class="BoxButton">
                            <button type="submit" class="Button primary-button " name="LogIn-Buton">log In</button>
                </form>
                <form action="SignUp.php">
                    <button type="submit" class="Button secondary-button ">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>