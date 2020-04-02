<style media="screen">
  span{
    font-size: 22px;
    color: orange;
  }
</style>
<?php
$M=$m=rand(100,200);
$N=$n=rand(100,200);
if ($M>$N) {
  $gcd=GCD($M,$N);
}else {
  $gcd=GCD($N,$M);
}
?>
<h2><span><?=$M?></span>と<span><?=$N?></span>の最大公約数を求める</h2>
<p>最大公約数：<span><?=$gcd?></span></p>
<h3>計算過程</h3>
<?php
if ($m>$n) {$A=$m; $B=$n;}
else       {$A=$n; $B=$m;}
$t=$A-intval($A/$B)*$B;
if ($t==0) {
  print "{$A}/{$B}=". intval($A/$B).'・・・0';
}else {
  while ($t<>0) {
    print "{$A}/{$B}=".intval($A/$B)."・・・{$t}<br>";
    $A=$B;
    $B=$t;
    $t=$A-intval($A/$B)*$B;
  }
  print "{$A}/{$B}=".intval($A/$B)."・・・{$t}";
}
 ?>

<?php
//function
function GCD($A,$B){
  $t=$A-intval($A/$B)*$B;
  if ($t==0) {
    return $B;
  }
  return GCD($B,$t);
}
 ?>
