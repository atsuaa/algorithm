<?php
require_once 'items.php';       /*ファンクション呼び出し*/
//setArray
$N=20;                          /*２０個の*/
$A=randSuu($N);                 /*乱数列を生成*/
printArray($A);                 /*生成した乱数列を表示*/

//Main
$L=0;
$R=$N-1;
$A2=quickSort($A,$L,$R);
//実行結果
printArray($A2);                 /*ソートした数列を表示*/

//Quicksort_functions
function quickSort($A,$L,$R){
  while ($L<$R) {
    $tmp=partition($A,$L,$R);
    $j=$tmp[3];
    $A=$tmp[0];
    quickSort($A,$L,$j-1);            /*左側でクイックソート*/
    quickSort($A,$j+1,$R);            /*左側でクイックソート*/
    $L=$j-1;
    $R=$j+1;
  }
  return $A;
}

function partition($A,$L,$R){
  $flg=true;
  $i=$L-1;
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
  return array($A,$L,$R,$j);
}
 ?>
