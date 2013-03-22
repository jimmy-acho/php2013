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
      <div id="header">
        <a href="#" id="logo">
          <img src="img/asaweb-logo.png" alt="ASA web - start your business">
        </a>
        <ul id="common_menu">
          <li>
            <a href="#">Login</a>
          </li>
          <li>
            <a href="#">Sitemap</a>
          </li>
          <li>
            <a href="#">Contact us
            </a>
          </li>
        </ul>
        <ul id="main_menu" class="nav">
          <li title="Главная страница нашего демонстрационного сайта по курсу веб-программирования">
            <a href="index.php">Главная</a>
          </li>
          <li title="Страница контактов">
            <a href="contacts.php">Контакты</a>
          </li>
          <li title="Примеры работ">
            <a href="examples.php">Примеры</a>
          </li>
          <li title="Карта сайта">
            <a href="sitemap.php">Карта сайта</a>
          </li>
          <li title="Цены">
            <a href="price.php">Цены</a>
          </li>
        </ul>        <div id="site_title">
          <div class="site_info">
            <h1>DIGITAL DREAM UTOPIA!</h1>
            <h2>Start your business</h2>
            <p class="description">Site about IT</p>
          </div>
        </div>
      </div>      <div id="middle">
        <div id="sidebar">

          <div id="login">
            <div class="error"></div>
            <form method="post" enctype="multipart/form-data">
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
        <div id="content">
          <div class="inner">
            <div class="top">
              <ul class="bradcrambs">
                <li>
                  <a href="http://localhost/">Главная</a>
                </li>
                <li>
                  <a href="#">Тестовая 1</a>
                </li>
                <li>
                  <a href="#">Тестовая 1.1</a>
                </li>
              </ul>
              <div class="page_name">
                Главная
              </div>
            </div>            
            <div class="title"></div>
            <div class="data">
              <table>
                <thead>
                  <tr>
                    <th class="numb">№</th>
                    <th class="name">Наименование товара</th>
                    <th class="model">Модель</th>
                    <th class="date">Дата поступления</th>
                    <th class="count">Кол-во</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="numb">1</td>
                    <td class="name">Телевизор LG</td>
                    <td class="model">SmartTV</td>
                    <td class="date">2012-12-01 16:26:29</td>
                    <td class="count">2</td>
                  </tr>
                  <tr>
                    <td class="numb">2</td>
                    <td class="name">Фен Panasonic</td>
                    <td class="model">13</td>
                    <td class="date">2012-12-01 16:27:36</td>
                    <td class="count">1000</td>
                  </tr>
                  <tr>
                    <td class="numb">3</td>
                    <td class="name">LED ТЕЛЕВИЗОР SONY</td>
                    <td class="model">KDL-22EX553</td>
                    <td class="date">2012-12-01 18:23:58</td>
                    <td class="count">12</td>
                  </tr>
                  <tr>
                    <td class="numb">4</td>
                    <td class="name">LED телевизор Philips</td>
                    <td class="model">22PDL4906H</td>
                    <td class="date">2012-12-01 18:23:58</td>
                    <td class="count">8</td>
                  </tr>
                  <tr>
                    <td class="numb">5</td>
                    <td class="name">Холодильник Zanussi</td>
                    <td class="model">ZRT 724 W</td>
                    <td class="date">2012-12-01 18:25:14</td>
                    <td class="count">7</td>
                  </tr>
                  <tr>
                    <td class="numb">6</td>
                    <td class="name">Магнитола Supra</td>
                    <td class="model">BB-CD201RD</td>
                    <td class="date">2012-12-01 18:25:14</td>
                    <td class="count">23</td>
                  </tr>
                  <tr>
                    <td class="numb">7</td>
                    <td class="name">MP3 плеер iRiver</td>
                    <td class="model">E40 8Gb Black</td>
                    <td class="date">2012-12-01 18:27:04</td>
                    <td class="count">35</td>
                  </tr>
                  <tr>
                    <td class="numb">8</td>
                    <td class="name">MP3 плеер Canyon</td>
                    <td class="model">CNR-MPV4CI 8Gb</td>
                    <td class="date">2012-12-01 18:27:04</td>
                    <td class="count">21</td>
                  </tr>
                </tbody>
              </table>
              <form method="post">
                <div class="paging">
                  Кол-во товаров на стр.:
                  <select name="pp">
                    <option value="1">
                      1 товар(ов/а)
                    </option>
                    <option value="2">
                      2 товар(ов/а)
                    </option>
                    <option value="3">
                      3 товар(ов/а)
                    </option>
                    <option value="5">
                      5 товар(ов/а)
                    </option>
                    <option value="10" selected="">
                      10 товар(ов/а)
                    </option>
                  </select>
                  <input type="text" name="keyword">
                  <input type="submit" value="Поиск">
                  <input type="submit" value="Обновить" class="refresh">
                  <div class="pages">
                    <a class="p_first" href="?page=index&p=1">&lt;&lt;</a>
                    <a class="p_first" href="?page=index&p=1">&lt;</a>
                    <span class="numbers">
                      <a class="curr_p">1</a>
                    </span>
                    <a class="p_last" href="?page=index&p=1">&gt;</a>
                    <a class="p_last" href="?page=index&p=1">&gt;&gt;</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="footer">
        <div> ИС@ХНЭУ © 2013 </div>
        <div class="rights">Все права защищены</div>
      </div>          
    </div>
  </body>
</html>