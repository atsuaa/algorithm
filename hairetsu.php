<?php require '../header.php'; ?>

<?php
for ($i=0; $i <=10 ; $i++) {
  $suu[$i]=rand(1,100);
  echo $suu[$i], ', ';
}
  echo '<hr>';
 ?>

<?php
  $n=10;
  $data=1;
  $i=1;
  while ($i<=$n and $suu[$i]<>$data) {
    $i++;
  }
  if ($i<=$n) {
    echo '一致データあり';
  } else {
    echo '一致データなし';
  }
 ?>

<?php require '../footer.php'; ?>
