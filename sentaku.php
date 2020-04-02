<?php
for ($i=0; $i <10 ; $i++) {
  $TBL[$i]=rand(1,100);
}
foreach ($TBL as $row) {
  echo $row, '　';
}
echo '<br>';
$n=$i+1;
for ($i=0; $i <$n ; $i++) {
  for ($j=$i+1; $j <=$n ; $j++) {
    if ($TBL[$i]>$TBL[$j]) {
      $wk=$TBL[$i];
      $TBL[$i]=$TBL[$j];
      $TBL[$j]=$wk;
    }
  }
}
for ($i=2; $i <12 ; $i++) {
  $row=$TBL[$i];
  echo $row, '　';
}
echo '<br>', $TBL[2];
 ?>
