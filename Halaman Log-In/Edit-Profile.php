<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/Edit-Profile.css" type="text/css">
    <title>Edit Profile </title>
</head>

<body>
    <?php
    include("../Connection.php");
    session_start();
    $user_id = $_SESSION['user_id'];
    $tampilkan_data = " SELECT * FROM pengguna where user_id = '$user_id' ";
    $edit_data = mysqli_query($connection, $tampilkan_data);
    $data = mysqli_fetch_assoc($edit_data)
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


    <div class="EditProfile">
        <div class="Container">
            <div class="ContainerProfile">
                <div class="ProfileHeader">
                    <div class="Image"></div>
                    <div class="TitleSmall">Username</div>
                </div>
                <form action="Process-PHP/Edit-Profile-Process.php" method="post">
                    <div class="ProfileBody">
                        <div class="BodyEdit">
                            <div class="Box">
                                <div class="Input">
                                    <div class="TitleSmall">Username</div>
                                    <input class="InputField" type="hidden" name="user_id" value="<?php echo htmlspecialchars($data['user_id']); ?>">
                                    <input class="InputField" type="text" name="username" value="<?php echo htmlspecialchars($data['username']); ?>">
                                </div>
                                <div class="Input">
                                    <div class="TitleSmall">Email</div>
                                    <input class="InputField" type="text" name="email" value="<?php echo htmlspecialchars($data['email']); ?>">
                                </div>
                                <div class="Input">
                                    <div class="TitleSmall">Address</div>
                                    <input class="InputField" type="text" name="address" value="<?php echo htmlspecialchars($data['address']); ?>">
                                </div>
                            </div>
                            <div class="Box">
                                <div class="Input">
                                    <div class="TitleSmall">Phone Number</div>
                                    <div class="InputField-Phone">
                                        <div class="ID-Number">+62</div>
                                        <input class="Inner-Phone" type="telp" name="phone_number" value="<?php echo htmlspecialchars($data['phone_number']); ?>">
                                    </div>
                                </div>
                                <div class="Input">
                                    <div class="TitleSmall">Password</div>
                                    <input class="InputField" type="Password" name="password" value="<?php echo htmlspecialchars($data['password']); ?>">
                                </div>
                                <div class="Input">
                                    <div class="TitleSmall">Confirm Password</div>
                                    <input type="Password" name="confirm" class="InputField" placeholder="Confirm Your Password" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="Button" name="Save-Profile"> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>