<?php
//stooge_sort3
for ($i=0; $i <10 ; $i++) {
  $TBL[$i]=rand(1,100);
}
foreach ($TBL as $row) {
  echo $row, '　';
}
echo '<br>';

$N=$i-1;                //配列数はi-1個
$i=1;                   //$iを１で初期化
$j=$N;                  //$jを配列のN番目（末尾）で初期化

$TBL2=STOOGE_SORT($TBL, $i, $j);    //ファンクション呼出し
foreach ($TBL2 as $row) {
  echo $row, '　';
}

//ファンクションを定義
function STOOGE_SORT($TBL, $i, $j){        //iとjで昇順
  if ($TBL[$i]>$TBL[$j]) {
    $wk=$TBL[$i];             /*データの交換*/
    $TBL[$i]=$TBL[$j];
    $TBL[$j]=$wk;
  }
  if (($j-$i+1)>=3) {
    $t=intval(($j-$i+1)/3);
    return $TBL=STOOGE_SORT($TBL, $i, $j-$t);
    return $TBL=STOOGE_SORT($TBL, $i+$t, $j);
    return $TBL=STOOGE_SORT($TBL, $i, $j-$t);
  }
  return $TBL;
}
 ?>
