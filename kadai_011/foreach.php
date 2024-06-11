<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
</head>

<body>
  
  <?php
  
  $data=['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];
  foreach($data as $key =>$value){
    echo "{$key}:{$value}".'<br>';
    
    
  }
  
  ?>
  
</body>
</html>
