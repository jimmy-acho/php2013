<?php if(isset($_SESSION['role'])){ ?>
<div id="logout">
  <form >
    <label><?php echo $_SESSION['login'] ?></label>
    <img src="img/avatar/<?php echo $_SESSION['avatar'];?>" />
    <input type="submit" name="logout" value="Выйти">
  </form>
</div>
<?php } else { ?>
<div id="login">
  <div class="error"><?php echo @$_SESSION['error'];unset($_SESSION['error']);?></div>
  <form method="post" >
    <label>Login:</label>
    <input type="text" name="login" placeholder="введите его сюда" value="qwerty">
    <label>Пароль:</label>
    <input type="password" name="pass" value="">
    <input type="submit" value="Войти">
  </form>
</div>
<?php } ?>

