<?php
//BUCKET_SORT
for ($i=0; $i <10 ; $i++) {          /*乱数配列を作る*/
  $TBL[$i]=rand(1,99);
}
foreach ($TBL as $row) {
  echo $row, '　';
}
echo '<br>';

$N=$i;                              /*配列要素数+1*/
$M=100;                             /*配列整数値のMAX-1*/
for ($i=0; $i <$M ; $i++) {           /*START*/
  $D[$i]=0;
}
for ($i=0; $i <$N ; $i++) {           /*整数値iの個数をカウント*/
  $D[$TBL[$i]]=$D[$TBL[$i]]+1;
}
foreach ($D as $row) {
  echo $row, '　';
}
echo '<br>';
$j=0;
for ($i=0; $i <$M ; $i++) {
  if ($D[$i]<>0) {
    for ($k=1; $k <=$D[$i] ; $k++) {
      $TBL[$j]=$i;
      $j++;
    }
  }
}                                     /*END*/

foreach ($TBL as $row) {              /*ソートした後*/
  echo $row, '　';
}
 ?>
