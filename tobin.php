<?php
require_once 'items.php';
print '１０進数N(0<=N<=255)を８桁の２進数に変換する。<br>
        ２進数は下位桁から順に配列の要素NISHIN[0]からNISHIN[7]に格納する。<br>';
//ToBin(N, Nishin[])
$N=rand(0,255);                           /*範囲内の数を生成*/
print '１０進数は　'. $N. '<br>';
$i; $NISHIN=range(0,7,1);                 /*要素数８の配列を生成*/
for ($i=0; $i <=7 ; $i++) {               /*2進数へ変換*/
  $NISHIN[7-$i]=$N-(intval($N/2)*2);
  $N=intval($N/2);
}
print '２進数は　';
printArray($NISHIN);                      /*結果を表示*/
 ?>
