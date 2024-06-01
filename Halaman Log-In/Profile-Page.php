<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Style/Profile-Page.css">
  <title>Profile Page</title>
</head>

<body class="body">

  <?php
  include '../Connection.php';
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header("Location: Masuk_daftar.php");
    exit();
  }


  $user_id = $_SESSION['user_id'];

  $profile_pengguna = "SELECT * FROM pengguna WHERE user_id = '$user_id'";
  $profile = mysqli_query($connection, $profile_pengguna);
  $date_profile = mysqli_fetch_assoc($profile);
  $username = $date_profile['username'];
  $email = $date_profile['email'];
  $phone_number = $date_profile['phone_number'];
  $addres = $date_profile['address'];
  ?>


  <nav class="navbar">
    <div class="brand">ARD_SHOP</div>
    <div class="nav">
      <div>Home</div>
      <div>Shop</div>
      <div>Contact</div>
      <div>About Us</div>
    </div>
    <div class="actions">
      <img src="../image/Bar Menu.png" alt="Bar-Menu" width="32" height="32" style="position: relative;">
      <img src="../image/Search.png" alt="Search" width="32" height="32" style="position: relative;">
      <div class="divider"></div>
      <div class="shopping">
        <img src="../image/shop.png" alt="shop" width="32" height="32" style="position: relative;">
        <div>Shopping</div>
      </div>
    </div>
  </nav>

  <div class="Profile-Page">
    <div class="Box-Profile">
      <div class="Box-Peofile-Headline">
        <div class="Profile">Profile</div>

        <form action="Edit-Profile.php">
          <button class="Button"> Edit Profile</button>
        </form>

      </div>
      <div class="Box-Profile-Body">
        <div class="Box-Profile-Container">
          <div class="Profile-Input">
            <div class="Image"></div>
            <div class="Container-Text-Profile">
              <div class="Profile-Username">
                <div class="Username"><?php echo htmlspecialchars($username); ?></div>
                <div class="Line"></div>
              </div>
              <div class="Container-Input">
                <div class="Container-Input-Box">
                  <div class="Box-Input">
                    <div class="Title-Input">Email :</div>
                    <div class="Text-Input"><?php echo htmlspecialchars($email); ?></div>
                  </div>
                  <div class="Box-Input">
                    <div class="Title-Input">Saldo :</div>
                    <div class="Text-Input">Limited</div>
                  </div>
                </div>
                <div class="Container-Input-Box">
                  <div class="Box-Input">
                    <div class="Title-Input">Phone :</div>
                    <div class="Text-Input">+62 <?php echo htmlspecialchars($phone_number); ?></div>
                  </div>
                  <div class="Box-Input">
                    <div class="Title-Input">Address :</div>
                    <div class="Box-Input-Address">
                      <div class="Text-Input"><?php echo htmlspecialchars($addres); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <form action="Market-Place.php">
        <button class="Button">Market Place</button>
        </form>
      </div>
    </div>
  </div>

  <?php
  mysqli_close($connection);
  ?>

</body>

</html>






<!-- 
<nav class="Navbar" style="background-color: #141414; padding-left: 20px; padding-right: 20px; flex-direction: row;  justify-content: center; align-items: center; gap: 44px; display: inline-flex">
    <div class="ArdShop" style="text-align: center; color: #F8837A; font-size: 32px; font-family: Abril Fatface; font-weight: 400; line-height: 44px; word-wrap: break-word">ARD_SHOP</div>
    <div class="Nav" style="padding-left: 27px; padding-right: 27px; padding-top: 1px; padding-bottom: 1px; justify-content: flex-start; align-items: flex-start; gap: 80px; display: flex">
      <div class="Home" style="text-align: center; color: #FEFFFE; font-size: 14px; font-family: Segoe UI; font-weight: 600; line-height: 16px; word-wrap: break-word">Home</div>
      <div class="Shop" style="text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 600; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">Shop</div>
      <div class="Contact" style="text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 600; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">Contact</div>
      <div class="AboutUs" style="text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 600; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">About Us</div>
    </div>
    <div class="BoxNav" style="justify-content: center; align-items: center; gap: 30px; display: flex">
      <div class="Menu1" style="width: 30px; height: 30px; position: relative; background: white"></div>
      <div class="Menu2" style="width: 30px; height: 30px; position: relative; background: white"></div>
      <div class="Frame131" style="width: 2px; height: 41px; position: relative; background: white"></div>
      <div class="Frame57" style="justify-content: flex-start; align-items: flex-end; gap: 10px; display: flex">
        <div class="Menu3" style="width: 32px; height: 32px; background: white; justify-content: center; align-items: center; display: flex">
          <div class="Vector" style="width: 32px; height: 32px"></div>
        </div>
        <div class="Shopping" style="text-align: center; color: #FEFFFE; font-size: 20px; font-family: Segoe UI; font-weight: 600; line-height: 32px; letter-spacing: 0.40px; word-wrap: break-word">Shopping</div>
      </div>
    </div>
</nav> -->


<!-- <div class="ProfilePage" style="width: 100%; height: 100vh; margin-top: 40px; background: #141414; flex-direction: column; justify-content: flex-start; align-items: center; gap: 40px; display: inline-flex">
    <div class="BoxProfile" style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: flex">
      <div class="BoxPeofileHeadline" style="justify-content: center; align-items: center; gap: 283px; display: inline-flex">
        <div class="Profile" style="width: 213px; height: 80px; text-align: center; color: #FEFFFE; font-size: 44px; font-family: Abril Fatface; font-weight: 400; line-height: 70px; word-wrap: break-word">Profile</div>
        <div class="Button" style="padding-left: 32px; padding-right: 32px; padding-top: 4px; padding-bottom: 4px; background: #F8837A; border-radius: 8px; justify-content: center; align-items: center; gap: 16px; display: flex">
          <div class="Button" style="color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 600; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">Edit Profile</div>
        </div>
      </div>
      <div class="BoxProfileBody" style="flex-direction: column; justify-content: center; align-items: flex-end; gap: 24px; display: flex">
        <div class="BoxProfileContainer" style="padding: 32px; background: #434343; border-radius: 64px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: flex">
          <div class="ProfileInput" style="justify-content: center; align-items: center; gap: 40px; display: inline-flex">
            <div class="Image" style="width: 250px; height: 259px; background: linear-gradient(180deg, rgba(255, 255, 255, 0.60) 0%, rgba(254, 255, 255, 0.10) 100%); border-radius: 64px"></div>
            <div class="ContainerTextProfile" style="flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
              <div class="Frame132" style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                <div class="Username" style="text-align: center; color: #FEFFFE; font-size: 24px; font-family: Segoe UI; font-weight: 600; line-height: 32px; letter-spacing: 0.15px; word-wrap: break-word">Username</div>
                <div class="Line9" style="width: 334px; height: 0px; border: 3px #EA6E5E solid"></div>
              </div>
              <div class="Frame20" style="padding-top: 10px; padding-bottom: 10px; justify-content: flex-start; align-items: flex-start; gap: 47px; display: inline-flex">
                <div class="Frame75" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                  <div class="Frame16" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <div class="Email" style="text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 400; line-height: 24px; word-wrap: break-word">Email :</div>
                    <div class="Abcxyz123GmailCom" style="text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 600; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">abcxyz123@gmail.com</div>
                  </div>
                  <div class="Frame18" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <div class="Saldo" style="text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 400; line-height: 24px; word-wrap: break-word">Saldo :</div>
                    <div class="Limited" style="width: 150px; text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 600; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">Limited </div>
                  </div>
                </div>
                <div class="Frame76" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                  <div class="Frame17" style="height: 44px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <div class="Phone" style="text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 400; line-height: 24px; word-wrap: break-word">Phone :</div>
                    <div class="6289123235231" style="width: 167px; text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 600; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">+6289123235231</div>
                  </div>
                  <div class="Frame19" style="height: 84px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <div class="Address" style="text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 400; line-height: 24px; word-wrap: break-word">Address :</div>
                    <div class="Frame153" style="width: 167px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                      <div class="JlSudirmanNo7MakassarSulawesiSelatan" style="width: 167px; text-align: center; color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 600; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">Jl.Sudirman no.7,<br/>Makassar, <br/>Sulawesi Selatan</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="BoxProfileButton" style="padding-left: 52px; padding-right: 52px; padding-top: 12px; padding-bottom: 12px; background: #F8837A; border-radius: 12px; justify-content: center; align-items: center; gap: 16px; display: inline-flex">
          <div class="MarkketPlace" style="color: #FEFFFE; font-size: 16px; font-family: Segoe UI; font-weight: 600; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">Markket Place</div>
        </div>
      </div>
    </div>
  </div> -->