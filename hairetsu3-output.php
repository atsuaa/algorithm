<?php require '../header.php'; ?>

<?php
$a=[];
foreach ($_REQUEST['num'] as $item) {
  array_push($a, $item);
}
foreach ($a as $i) {
  echo $i, '　';
}
echo "<br>";
shuffle($a);
foreach ($a as $i) {
  echo $i, '　';
}
if (in_array($_REQUEST['kai'], $a)) {
  echo "一致データあり";
} else {
  echo "一致データなし";
}
 ?>
