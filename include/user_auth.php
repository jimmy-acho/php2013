<?php

// если пользователь авторизован
if(isset($_SESSION['role'])){
  // если пользователь пытается выйти
  if(isset($_REQUEST['logout'])){
    unset($_SESSION['role']);
    session_destroy();
  }
}else{
  // если пользователь пытается авторизоваться
  if(isset($_POST['login'])&&isset($_POST['pass'])){
    require_once ('include/user_data.php');
    if(isset($user[$_POST['login']])){
      if($user[$_POST['login']]['pass']==$_POST['pass']){
        $_SESSION['role']=$user[$_POST['login']]['role'];
        $_SESSION['login']=$_POST['login'];
        $_SESSION['avatar']=$user[$_POST['login']]['avatar'];
      }else{ // если попытка ошибочна
        $_SESSION['error']='Не верный пароль!!!';
      }
    }else{
        $_SESSION['error']='Такого пользователя нет на сайте!!!';
    }
  }
}
?>
