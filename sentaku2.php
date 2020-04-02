<?php
//配列を生成
for ($i=0; $i <10 ; $i++) {
  $TBL[$i]=rand(1,100);
}
//配列を表示
foreach ($TBL as $row) {
  echo $row, '　';
}
echo '<br>';
//配列数
$N=$i;
//選択法２
for ($i=0; $i <$N ; $i++) {
  $m=$i;
  for ($j=$i+1; $j <$N ; $j++) {
    if ($TBL[$m]>$TBL[$j]) {
      $m=$j;
    }
  }
  if ($i<>$m) {
    $wk=$TBL[$i];
    $TBL[$i]=$TBL[$m];
    $TBL[$m]=$wk;
  }
}
//昇順を表示
foreach ($TBL as $row) {
  echo $row, '　';
}
 ?>
