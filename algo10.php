<?php require '../header.php'; ?>

<?php
function f($a){
  return $a*$a;
}
$x1=2;
$x2=5;

$U=f($x1)+f($x2);
while ($n<=65536) {
  $delta=($x2-$x1)/$n;
  $T=0.0;
  for ($i=0; $i < $n ; $i++) {
    $T=$T+f($x2+$i*$delta);
  }
  $S=($U+2*$T)*$delta/2;
  echo $n, $S;
  $n=$n*2;
}

 ?>

<?php
for ($i=0; $i <=10 ; $i++) {
  echo pow(2,$i);
  echo '<br>';
}
for ($i=0; $i <=10 ; $i++) {
  echo f($i);
  echo '<br>';
}
 ?>

<?php require '../footer/php'; ?>
