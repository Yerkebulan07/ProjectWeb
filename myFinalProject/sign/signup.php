
<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password_2 = filter_var($_POST['password_2'], FILTER_SANITIZE_STRING);


    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo "Invalid login!";
        exit();
    }
    else if(mb_strlen($email) < 5 || mb_strlen($email) > 50){
        echo "Invalid email!";
        exit();
    }
    else if(mb_strlen($password) < 2 || mb_strlen($password) > 12 ){
        echo "Invalid password!(2 -> 12)";
        exit();
    }
    else if(mb_strlen($password_2) < 2 || mb_strlen($password_2) > 12 || $password != $password_2){
        echo "First password is not equal to Second password!";
        exit();
    }
    
    $password = md5($password."userGood123123");

    $mysql = mysqli_connect('localhost','root','','projectdatabase');
    $mysql->query("INSERT INTO `users` (`login`, `email`, `password`)
    VALUES('$login','$email','$password')");
    mysqli_close($mysql);
    header('Location: /');
    exit();
?>


    
    <!-- // if(isset($data['do_signup']))
    // {
    //     $errors = array();
    //     if(trim($data['login']) == ''){
    //         $errors[] = 'Enter your Login!';
    //     }
    //     if(trim($data['email']) == ''){
    //         $errors[] = 'Enter your Email!';
    //     }
    //     if($data['password'] == ''){
    //         $errors[] = 'Enter your Password!';
    //     }
    //     if($data['password_2'] != $data['password']){
    //         $errors[] = 'Password confirm is wrong!';
    //     }
    //     if(empty($errors)){
    //         $user->login = $data['login'];
    //         $user->email = $data['email'];
    //         $user->password = $data['password'];
    //         echo '<div style = "color: green; text-align: center; text-decoration: underline;">Вы успешно зарегистрированы! </div><hr>';
    //     }
    //     else{
    //         echo '<div style = "color: red; text-align: center; text-decoration: underline;">'.array_shift($errors).'</div><hr>';
    //     }
    // } -->
