<div id="sidebar" <?php if(isset($theme_chanche)){echo "class=\"{$theme_chanche}\"";} ?>>
          <?php 
            if(isset($_SESSION['counter'])){
              $_SESSION['counter']++;
            }else{
              $_SESSION['counter'] = 1;
            }
            echo $_SESSION['counter'];
          ?>
          <?php include ('include/theme.php'); ?>
          <div id="login">
            <div class="error"></div>
            <form >
              <label>Login:</label>
              <input type="text" name="login" placeholder="введите его сюда" value="qwerty">
              <label>Пароль:</label>
              <input type="password" name="pass" value="">
              <input type="submit" value="Войти">
            </form>
          </div>
          <div class="info">
            <img src="img/phone.png">
            <div class="name">Service Center</div>
            <div class="description">
              12-34-567
            </div>
          </div>
          <div class="info">
            <img src="img/calendar.png" />
            <div class="name">E-catalog</div>
            <div class="description">
              23.03.2013
            </div>
          </div>
        </div>