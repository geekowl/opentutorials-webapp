<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>생활표현</title>
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/app.css">
</head>
<body id="target">
  <header>
    <h1><a href="http://localhost:8080/">나라별인사말</a></h1>
  </header>

  <nav>
    <ol>
      <?php
        echo file_get_contents('/php/list.txt');
      ?>
    </ol>
  </nav>

  <div id="control">
    <input type="button" value="white" id="white_btn">
    <input type="button" value="black" id="black_btn">
  </div>

  <script src="http://localhost:8080/app.js"></script>
</body>
</html>
