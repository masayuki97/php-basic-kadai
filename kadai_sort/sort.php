<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP基礎編</title>
</head>

<body>
<p>
  <?php
  // ソートする配列を宣言
  $nums = [ 15, 4, 18, 23, 10 ];

  function sort_2way( $array, bool $order ) {
    if ( $order ) {
      echo '昇順に並べ替え' . '<br>';
      sort( $array );

    } else {
      echo '降順に並べ替え' . '<br>';
      rsort( $array );

    }
    foreach ( $array as $val ) {
      echo $val . '<br>';
    }


  }
  sort_2way( $nums, true );
  sort_2way( $nums, false );


  ?>
</p>
</body>
</html>