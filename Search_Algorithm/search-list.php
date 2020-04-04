<style media="screen">
  span{
    font-size: 22px;
    color: orange;
  }
</style>

<?php
require_once 'items.php';

$N=10;                            /*10個の文字からなる配列*/
for ($i=0; $i <$N ; $i++) {
  $LIST[$i]=substr(bin2hex(random_bytes(1)),1,1);
};                                /*ランダムな文字列生成*/

$keys=array_keys($LIST);          /*添字を表示する*/
printArray($keys);
printArray($LIST);                /*値を表示する*/

$Pointer=range(1,$N-1,1);         /*ポインターを生成、表示*/
$Pointer[$N-1]='nill';
printArray($Pointer);

//LIST_SEARCH
$CHAR='a';                        /*今回は"a"を探す*/
print '<p>今回探索する文字は<span>'. $CHAR. '</span></p>';
$i=0;
while ($j!='nill' && $LIST[$j]!=$CHAR) {
  $j=$Pointer[$i];                /*ポインターを辿りながら*/
  $i++;                           /*添字を進ませ、値を探していく*/
}
if ($j!='nill') {                 /*見つからなかったらnill*/
  print '一致データあり';
}else {
  print '一致データなし';
}
 ?>
