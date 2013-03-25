<?php session_start(); ?>
<?php require_once ('./include/auth_check.php');?>
<?php require_once ('./include/page.php'); ?>
<?php
if (isset($_POST['theme'])) {
  $theme_chanche = $_POST['theme'];
  setcookie("theme", $theme_chanche, time()+60*60*24*30, "/");
  setcookie("test", "312");
}else{
  if(isset($_COOKIE['theme'])){
    $theme_chanche = $_COOKIE['theme'];
  }
}
?>

<?php
if (isset($_GET['page'])) {
  if(!isset($page[$_GET['page']])){
    $_GET['page']='404';
  }
} else {
  $_GET['page'] = 'index';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $page[$_GET['page']]['title']; ?> - ASA WEB</title>
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