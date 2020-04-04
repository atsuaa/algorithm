<?php
require_once 'items.php';       /*ファンクション呼び出し*/
//setArray
$N=20;                          /*２０個の*/
$A=randSuu($N);                 /*乱数列を生成*/
printArray($A);                 /*生成した乱数列を表示*/

//Main
$L=0;
$R=$N-1;

$A2=partition($A,$L,$R);
print_r($A2);

function partition($A,$L,$R){
  $flg=true;
  $i=$L;
  $j=$R+1;
  $pivot=$A[$L];
  do {
    do {
      $i++;
    } while ($i<=$R && $A[$i]<$pivot);
    do {
      $j--;
    } while ($A[$j]>$pivot);
    if ($i<$j) {
      $tmp=$A[$i];                   /*データの交換*/
      $A[$i]=$A[$j];
      $A[$j]=$tmp;
    }else {
      $flg=false;
    }
  } while ($flg==true);
  $tmp=$A[$L];                   /*データの交換*/
  $A[$L]=$A[$j];
  $A[$j]=$tmp;
  return array($A,$j);
}
 ?>
