<?php
      
      $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
      
      $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
  
      $password = md5($password."userGood123123");
  
      $mysql = new mysqli('localhost','root','','projectdatabase');
  
      $result = mysqli_query($mysql,"SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");


      $user = $result->fetch_assoc();
      
      
      if(count((array)$user) == 0){
          echo "This user does not exists!";
          exit();
      }
      else{
          echo("All Ok");
      }
      
      setcookie('user',$user['login'], time() + 3600, "/");
      
      
      mysqli_close($mysql);
  
      header('Location: /project/index.php');  
?>