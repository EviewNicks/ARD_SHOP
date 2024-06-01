<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/SignUp.css" type="text/css">
    <title>Sign Up Page</title>
</head>

<body class="Body">
    <div class="LoginPage">
        <div class="BoxLoginpage">
            <div class="BoxIntroduction">
                <div class="BoxIntroductionContainer">
                    <div class="BoxContainerHeadline">
                        <div class="Illustration">
                            <img src="../image/Moon.png" alt="Moon" width="68" height="68">
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
                                        <div class="WelcomeBack">Hanya Perlu Registrasi</div>
                                        <div class="PleaseLoginToContinue">Agar bisa jadi Happy!! Happy!!</div>
                                    </div>
                                    <img src="../image/Arrow.png" alt="Arrow" width="100" height="100">
                                </div>
                                <div class="SocialMedia">
                                    <img src="../image/Twitter.png" alt="Twitter" width="32" height="32">
                                    <img src="../image/Instagram.png" alt="Instagram" width="32" height="32">
                                    <img src="../image/facebook.png" alt="facebook" width="32" height="32">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Illustration">
                        <div class="Line22"></div>
                        <img src="../image/Stars.png" alt="Stars" width="68" height="68">
                    </div>
                </div>
            </div>


            <div class="PrimerBox">
                <div class="BoxSignup">
                    <div class="SignUp">Sign Up</div>
                    <form action="Process-PHP/Sign-Up-Proses.php" method="post">
                    <div class="BoxContainerSignup">
                        <div class="BoxLogin">
                            <div class="TextBox">
                                <div class="Line23"></div>
                                <div class="SignUp" style="color: #FEFFFE; font-size: 12px; font-family: Segoe UI; font-weight: 400; line-height: 16px;">Sign Up</div>
                                <div class="Line24"></div>
                            </div>


                            <form action="Process-PHP/Sign-Up-Proses.php"></form>
                           
                            <div class="ContainerForm">
                                <div class="ContainerForm1">
                                    <div class="InputBox">
                                        <div class="Text">Username</div>
                                        <input type="text" name="Username" class="Input" placeholder="Enter Your Username" required>
                                    </div>
                                    <div class="InputBox">
                                        <div class="Text">Email</div>
                                        <input type="text" name="Email" class="Input" placeholder="Enter Your Email" required>
                                    </div>
                                    <div class="InputBox">
                                        <div class="Text">Address</div>
                                        <input type="text" name="Address" class="Input" placeholder="Enter Your Address" required>
                                    </div>
                                </div>
                                <div class="ContainerForm2">
                                    <div class="InputBox-Phone">
                                        <div class="PhoneNumber">Phone Number</div>
                                        <div class="InputField">
                                            <div class="Num-ID">+62</div>
                                            <input type="tel" name="PhoneNumber" class="FormPhoneNumber" placeholder="Enter Your Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="InputBox">
                                        <div class="Password">Password</div>
                                        <input type="password" name="Password" class="Input" placeholder="Enter Your Password" required>
                                    </div>
                                    <div class="InputBox">
                                        <div class="ConfirmPassword">Confirm Password</div>
                                        <input type="password" name="Confirm" class="Input" placeholder="Confirm Your Password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="BoxButton">
                            <button type="submit" class="Button " name="Save">Sign Up</button>
                        </div>
                        <div class="LineBoxSignup">
                            <img src="../image/Duotone.png" alt="Duotone" width="32" height="32" style="position: relative;">
                            <div class="Line22"></div>
                            <img src="../image/Duotone2.png" alt="Duotone" width="32" height="32" style="position: relative;">
                        </div>
                    </div>
                </form>
                </div>
            </div>
            
</body>

</html>