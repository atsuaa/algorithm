<?php
require_once 'items.php';       /*ファンクション呼び出し*/
//setArray
$N=20;                          /*２０個の*/
$A=randSuu($N);                 /*乱数列を生成*/
printArray($A);                 /*生成した乱数列を表示*/

//Main
$L=0;
$R=$N-1;
quickSort($A,$L,$R);
//実行結果
printArray($A);                 /*ソートした数列を表示*/
//昇順になっているか調べるファンクション
print '<br>'. 'ソートの結果：';
testAscending($A);

//Quicksort_function
function quickSort(&$A,$L,$R){
    $flg=true;                          /*フラグ用意*/
    $i=$L;
    $j=$R+1;
    $pivot=$A[$L];                      /*基準値は先頭の値*/
    do {                                /*基準値より大きい値を左から探す*/
      do {
        $i++;
      } while ($i<=$R && $A[$i]<$pivot);
      do {                              /*基準値より小さい値を右から探す*/
        $j--;
      } while ($A[$j]>$pivot);
      if ($i<$j) {
        $tmp=$A[$i];                   /*基準値未満とそれ以上で仕分けする*/
        $A[$i]=$A[$j];
        $A[$j]=$tmp;
      }else {
        $flg=false;                    /*仕分けが完了するまで*/
      }
    } while ($flg==true);
    $tmp=$A[$L];                       /*jは必然的に基準値以下となり*/
    $A[$L]=$A[$j];                     /*必然的にj番目が基準値位置となる*/
    $A[$j]=$tmp;

    $Lj=$j+1;
    $Rj=$j-1;

    if ($L<$Rj) {
      quickSort($A,$L,$Rj);            /*左側でクイックソート*/
    }
    if ($Lj<$R) {
      quickSort($A,$Lj,$R);            /*右側でクイックソート*/
    }
}
 ?>
