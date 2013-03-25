<?php require_once ('include/menu_main_data.php'); ?>
<ul id="main_menu" class="nav">
  <?php foreach ($menu_main as $menu_main_item) { ?>
    <li title="<?php echo $menu_main_item['title']; ?>">
      <a href="?page=<?php echo $menu_main_item['href']; ?>">
        <?php echo $menu_main_item['name']; ?>
      </a>
    </li>
  <?php } ?>
</ul>