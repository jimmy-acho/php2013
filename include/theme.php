<?php include ('include/theme_data.php'); ?>
<div id="theme">
  <div class="error"></div>
  <form method="post">
    <label>Тема:</label>
    <select name="theme">
      <?php foreach ($theme as $theme_name) { ?>
      <option value="<?php echo $theme_name;?>"
        <?php if(isset($theme_chanche)&&($theme_chanche==$theme_name)){?> 
              selected="selected"<?php } ?>>
          <?php echo $theme_name;?>
      </option>
      <?php } ?>
    </select>
    <input type="submit" value="Сменить">
  </form>
</div>