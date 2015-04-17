<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>생활표현</title>
</head>
<body>
  <h1>감사합니다</h1>
  <ul>
  <script>
    list = new Array("한국", "중국", "미국", "일본", "스웨덴", "프랑스");

    i = 0;
    while (i < list.length){
      document.write("<li>" + list[i] + "</li>");
      i = i + 1;
    }
  </script>
  </ul>
  <h2>안녕하세요</h2>
  <ul>
  <?php
    $list = array("한국", "중국", "미국", "일본", "스웨덴", "프랑스");
    $i = 0;
    while($i < count($list)) {
      echo "<li>".$list[$i]."</li>";
      $i = $i + 1;
    }
  ?>
  </ul>
</body>
</html>
