<?php
//insertion_sort
for ($i=0; $i <10 ; $i++) {
  $TBL[$i]=rand(1,100);
}
foreach ($TBL as $row) {
  echo $row, '　';
}
echo '<br>';
$N=$i-1;
for ($i=0; $i <$N ; $i++) {     /*外ループ（整列済みの範囲の制御）*/
  for ($j=$i; $j >=0 ; $j--) {  /*内ループ（追加要素の制御）*/
    if ($TBL[$j]>$TBL[$j+1]) {
      $wk=$TBL[$j];             /*データの交換*/
      $TBL[$j]=$TBL[$j+1];
      $TBL[$j+1]=$wk;
    } else {
      break;                    /*内ループから抜け出す*/
    }
  }
}
foreach ($TBL as $row) {
  echo $row, '　';
}
 ?>
