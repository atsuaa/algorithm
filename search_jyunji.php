<style media="screen">
  span{
    font-size: 22px;
    color: orange;
  }
</style>
<?php
require_once 'items.php';
$N=20;
$TBL=randSuu($N);
$data=rand(1,100);
print "<p>1~100の乱数<span>{$N}</span>個で乱数列TBLを生成する。</p>";
print '乱数列は<br>';
printArray($TBL);
print "<p>今回探索するデータ：<span>{$data}</span></p>";

$i=0;
while ($i<=$N && $TBL[$i]<>$data)
  $i++;
print "探索中...<br>";
if ($i<=$N) {
  print '<span>一致データあり！！</span>';
}else {
  print '一致データはありませんね〜。';
}
 ?>
