<?php require_once ('include/menu_main_data.php'); ?>
<ul id="main_menu" class="nav">
  <?php foreach ($menu_main as $menu_main_item) { ?>
    <?php
    if ((isset($menu_main_item['role']) && isset($_SESSION['role']) && ($menu_main_item['role'] >= $_SESSION['role'])
            ) || (!isset($menu_main_item['role']))) {
      ?>
      <li title="<?php echo $menu_main_item['title']; ?>">
        <a href="?page=<?php echo $menu_main_item['href']; ?>">
          <?php echo $menu_main_item['name']; ?>
        </a>
      </li>
    <?php } ?>
  <?php } ?>
</ul>

