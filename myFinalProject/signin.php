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
        <h2 class="sign-up-header"> SIGN IN</h2>
        <form action="sign/auth.php" method="POST">
            
            <div>
                <div>           
                    <label>Login</label>
                </div>
                <div>
                    <input type="text" name="login">
                </div>
                <div>
                    <label>Password</label>
                </div>
                <div>
                    <input type="password" name="password">
                </div>
                <div>
                    <input type="submit" value="Sign In" class="b-button">
                    <a href="signup.php" class="sign-up-link"> Sign Up </a>
                </div>
            </div>

        </form>
        
    </section>
    <?php
      include('footer.php'); 
?>

</body>
</html>