<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>생활표현</title>
</head>
<body>
  <?php
    echo file_get_contents($_GET['id'].".txt");
  ?>
</body>
</html>
