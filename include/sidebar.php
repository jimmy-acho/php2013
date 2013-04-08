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
          <?php include('include/user_form.php');?>
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