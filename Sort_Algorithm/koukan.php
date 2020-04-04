<?php
for ($i=0; $i <10 ; $i++) {
  $TBL[$i]=rand(1,100);
}
foreach ($TBL as $row) {
  echo $row, '　';
}
echo '<br>';
$N=$i;
for ($i=$N; $i >0 ; $i--) {
  for ($j=0; $j <$i ; $j++) {
    if ($TBL[$j]>$TBL[$j+1]) {
      $wk=$TBL[$j];
      $TBL[$j]=$TBL[$j+1];
      $TBL[$j+1]=$wk;
    }
  }
}
foreach ($TBL as $row) {
  echo $row, '　';
}
 ?>
