<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PRC3 - Include</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
  <ul>
    <li><a href="./">Úvod</a></li>
    <li><a href="?page=sluzby">Služby</a></li>
    <li><a href="?page=onas">O nás</a></li>
    <li><a href="?page=kontakt">Kontakt</a></li>
  </ul>
</nav>
  <?php
    $page = filter_input(INPUT_GET, "page");
    if (!isset($page)) {
        $page = "uvod";
    } 
    $file = 'includes/' . $page. '.php';
    if (file_exists($file)) {
        include_once $file;
    } else {
        include_once "includes/error404.php";
    }
    ?>
  <footer>
    <p>©2022 | <a href="mailto:daniel.suman@student.ossp.cz">daniel.suman@student.ossp.cz</a></p>
  </footer>
</body>
</html>