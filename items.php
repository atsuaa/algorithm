<?php
//ランダムな1-100の整数をN個格納した配列TBLを生成
function randSuu($N){
  for ($i=0; $i <$N ; $i++) {
    $TBL[$i]=rand(1,100);
  }
  return $TBL;
}
//例
//$A=randSuu(100);

//配列TBLを表示、改行
function printArray($TBL){
  foreach ($TBL as $row) {
    echo $row, '　';
  }
  echo '<br>';
}
//例
//printArray($A);

//配列TBL[A]とTBL[B]を交換
function changeTwoValues($TBL,$i,$j){
  $tmp=$TBL[$i];
  $TBL[$i]=$TBL[$j];
  $TBL[$j]=$tmp;
}

//昇順なら「成功」一つでも昇順になってなかったら「失敗」を返す
function testAscending(array $TBL){
  $N= count($TBL);
  $i=0;
  $kekka='成功';
  while ($i<$N-1) {
    if ($TBL[$i]>$TBL[$i+1]) {
      $kekka='失敗';
    }
    $i++;
  }
  print $kekka;
}

//光順なら「成功」一つでも降順になってなかったら「失敗」を返す
function testDescending(array $TBL){
  $N= count($TBL);
  $i=0;
  $kekka='成功';
  while ($i<$N-1) {
    if ($TBL[$i]<$TBL[$i+1]) {
      $kekka='失敗';
    }
    $i++;
  }
  print $kekka;
}
 ?>
