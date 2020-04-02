<?php
for ($i=0; $i <10 ; $i++) {
  $TBL[$i]=rand(1,100);
}
foreach ($TBL as $row) {
  echo $row, '　';
}
echo '<br>';
$N=$i-1;
$M=intval($N/2);
$flg=0;
while ($M>1 || $flg==1) {
  $flg=0;
  $i=0;
  while ($i<=$N-$M) {
    if ($TBL[$i]>$TBL[$i+$M]) {
      $wk=$TBL[$i];
      $TBL[$i]=$TBL[$i+$M];
      $TBL[$i+$M]=$wk;
      $flg=1;
    }
    $i++;
  }
  if ($M>1) {
    $M=intval($M/2);
  } else {
    $M=1;
  }
}
foreach ($TBL as $row) {
  echo $row, '　';
}
 ?>
