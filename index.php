<html>
<head>
  <title>Thời gian hiện tại</title>
</head>
<body>
  <h1> Bây giờ là:
    <?php
      date_default_timezone_set('Japan/Tokyo');
      echo date('Y-M-d h:m:s');
    ?>
  </h1>
</body>
</html>
