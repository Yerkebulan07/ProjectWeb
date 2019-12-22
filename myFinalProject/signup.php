<!DOCTYPE html>
<html lang="en">
<head>
<title>Furniture Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include('navigation.php');
?>

    <section class="sign-up-page"> 
        <h2 class="sign-up-header"> SIGN UP </h2>
        <form action="sign/signup.php" method="POST">
            <div>
                <div>           
                    <label>Login</label>
                </div>
                <div>
                    <input type="text" name="login" value="<?php echo @$data['login'];?>">
                </div>
                <div>    
                    <label>Email</label>
                <div>
                </div>
                    <input type="email" name="email" value="<?php echo @$data['email'];?>">
                </div>
                <div>
                    <label>Password</label>
                </div>
                <div>
                    <input type="password" name="password" value="<?php echo @$data['password'];?>">
                </div>
                <div>
                    <label>Password confirm</label>
                </div>
                <div>
                    <input type="password" name="password_2" value="<?php echo @$data['password_2'];?>">
                </div>
                <div>
                    <button type="submit" name = "do_signup" class="b-button">Sign Up</button>
                </div>
            </div>
            </form>

    </section>
    <?php
      include('footer.php');
    ?>

</body>
</html>