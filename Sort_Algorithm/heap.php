<?php
require_once 'items.php';       /*ファンクション呼び出し*/
//setArray
$N=20;                          /*２０個の*/
$A=randSuu($N);                 /*乱数列を生成*/
printArray($A);                 /*生成した乱数列を表示*/

//Heapsort_Start
$A2=Heapsort($A,$N);            /*この２行で*/
printArray($A2);                /*実行される*/

//Heapsort_functions
function Heapsort($A,$N){         //関数の定義開始
  for ($Num=$N; $Num >=1 ; $Num--) {
    for ($P=intval($Num/2); $P >=0 ; $P--) {
      $A=MakeHeap($A,$P,$Num);       /*ヒープを作る*/
    }
    $tmp=$A[0];                   /*データの交換*/
    $A[0]=$A[$Num];
    $A[$Num]=$tmp;
  }
  return $A;
}

function MakeHeap($A,$P,$Num){       /*P:親ノードのポインタ*/
  $L=$P*2;                        /*Num:未整列データ数*/
  $R=$L+1;
  if ($R<=$Num) {                 /*右の子が存在するか*/
    if ($A[$L]>$A[$R]) {          /*左の子が大きいなら*/
      if ($A[$L]>$A[$P]) {        /*親より子が大きいなら*/
        $tmp=$A[$L];              /*データの交換*/
        $A[$L]=$A[$P];
        $A[$P]=$tmp;
        MakeHeap($A,$L,$Num);
      }
    }else {                       /*右の子が大きいなら*/
      if ($A[$R]>$A[$P]) {        /*親より子が大きいなら*/
        $tmp=$A[$R];              /*データの交換*/
        $A[$R]=$A[$P];
        $A[$P]=$tmp;
        MakeHeap($A,$R,$Num);
      }
    }
  }elseif ($L<=$Num) {            /*左の子が存在するか*/
    if ($A[$L]>$A[$P]) {
      $tmp=$A[$L];                /*データの交換*/
      $A[$L]=$A[$P];
      $A[$P]=$tmp;
      MakeHeap($A,$L,$Num);
    }
  }
  return $A;
}
 ?>
