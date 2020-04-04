<?php
require_once '../items.php';
$N=20;
$keys=range(10, $N*10, 10);
$values=randSuu($N);
$TBL=array_combine($keys, $values);
print 'キー値：';
printArray($keys);
print '<br>';
print 'データ：';
printArray($TBL);
print '<br>';

//functions
function hash_($key){
  return $key - intval($key/100)* 100;
}

function search($NUM){
  $i=1;
  $h=hash_($NUM);
  while ($NUM<>array_keys($TBL[$h]) && $i<=$N) {
    $h=hash_($h+1);
    $i++;
  }
  if ($i<=$N) {
    return $TBL[$h];
  }
  return -1;
}
 ?>
