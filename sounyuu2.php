<?php
//insertion_sort2
for ($i=0; $i <10 ; $i++) {
  $TBL[$i]=rand(1,100);
}
foreach ($TBL as $row) {
  echo $row, '　';
}
echo '<br>';
$N=$i-1;
for ($i=1; $i <=$N ; $i++) {        /*外ループ（挿入対象の制御）*/
  $wk=$TBL[$i];
  for ($j=$i-1; $j >=0 ; $j--) {    /*内ループ（挿入位置の探索）*/
    if ($wk<$TBL[$j]) {
      $TBL[$j+1]=$TBL[$j];          /*一つ後ろにずらす*/
    } else {
      break;                        /*内ループから抜け出す*/
    }
  }
  $TBL[$j+1]=$wk;
}
foreach ($TBL as $row) {
  echo $row, '　';
}
 ?>
