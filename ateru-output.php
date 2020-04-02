<?php require '../header.php'; ?>

<?php
$a=[];
foreach ($_REQUEST['num'] as $item) {
  array_push($a, $item);
}
echo "<p>答えはこの３つでした！</p>";
foreach ($a as $i) {
  echo $i, '　';
}
echo "<br>";
if (in_array($_REQUEST['kai'], $a)) {
  echo "<p>正解！君の奢りね♪</p>";
} else {
  echo "<p>残念、、君の奢りね、、</p>";
}
echo "<p>今日の優先順位は〜</p>";
shuffle($a);
foreach ($a as $i) {
  echo $i, '　';
}
 ?>
