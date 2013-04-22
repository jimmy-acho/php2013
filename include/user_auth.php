<?php

// если пользователь авторизован
if (isset($_SESSION['role'])) {
  // если пользователь пытается выйти
  if (isset($_REQUEST['logout'])) {
    unset($_SESSION['role']);
    session_destroy();
  }
} else {
  // если пользователь пытается авторизоваться
  if (isset($_POST['login']) && isset($_POST['pass'])) {
    //require_once ('include/user_data.php');
    $result_select_user =
            mysql_query("SELECT * FROM user WHERE login='" . $_POST['login'] . "' AND pass='" . $_POST['pass'] . "'");
    $user = mysql_fetch_assoc($result_select_user);
    if ($user) {
      $_SESSION['role'] = $user['role'];
      $_SESSION['login'] = $user['login'];
      $_SESSION['avatar'] = $user['avatar'];
    } else { // если попытка ошибочна
      $_SESSION['error'] = 'Неверная комбинация логина и пароля!!!';
    }
  } else {
    $_SESSION['error'] = 'Такого пользователя нет на сайте!!!';
  }
}
?>
