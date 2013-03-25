<?php require_once ('./include/page.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ASA WEB</title>
    <meta name="description" content="Описание сайта">
    <link href="css/screen.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="wrapper">
      <?php include ('./include/header.php'); ?>
      <div id="middle">
        <?php include ('./include/sidebar.php'); ?>
        <div id="content">
          <div class="inner">
            <div class="top">
              <ul class="bradcrambs">
                <li>
                  <a href="/">Главная</a>
                </li>
                <li>
                  <a href="#">Тестовая 1</a>
                </li>
                <li>
                  <a href="#">Тестовая 1.1</a>
                </li>
              </ul>
              <div class="page_name">
                <?php echo $page[$_GET['page']]['h1']; ?>
              </div>
            </div>            
            <div class="data">
              <?php echo $page[$_GET['page']]['content']; ?>
            </div>
          </div>
        </div>
      </div>
      <?php include ('./include/footer.php'); ?>
    </div>
  </body>
</html>