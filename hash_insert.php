<p>ハッシュ関数で値を格納するよ</p>
<p>ハッシュ関数
<pre>return key - (key/100)* 100</pre>
（keyを１００で割ったあまり）
</p>
<?php
//フォームが送信される回数を記録するカウンター
//ブラウザーを更新すると０になる
    $a = 0;
    if(isset($_POST['a'])){
        $a = $_POST['a'];
    }
    if(isset($_POST['plus'])){
        $a++; //このデータがポストされ、カウンターとして機能する
    }
 ?>
<?php
//ハッシュ関数でキー値を割り当てる
function Hash100($key){
  return $key - intval($key/100)*100;
}
 ?>
<?php
$data=$_POST['value'];  //入力された値
$TBL=$_POST['TBL'];     //これまでの配列

if (isset($_POST['a'])) {  //もし送信されたら（aである必要はない）
  $hashKey=Hash100($data);
}
while (isset($TBL[$hashKey])) {  //ハッシュ値がコリジョンしたら順次次のキー値へ
  $hashKey++;
}
$TBL[$hashKey]=$data;  //送信されたデータを格納

print $a. '個め<br>';
print 'キー値が重なると順次次のキー値に格納するよ<br>';
foreach ($TBL as $key=>$row) {
  if ($key!==Hash100($row)) {
    echo '[<span style="color:red;">',$key,'</span>]',$row, '　';
  }else {
    echo '[',$key,']',$row, '　';
  }
}
 ?>

 <form action="hash_insert.php" method="post">
   追加する値：<input type="text" name="value" value="<?= rand(101,200)?>">
   <input type="hidden" name="a" value="<?=$a?>">
   <input type="hidden" name="plus" value="plus">
   <input type="submit" value="追加">
   <?php foreach ($TBL as $key => $row): ?>
   <input type="hidden" name="TBL[<?= $key?>]" value="<?= $row?>">
 <?php endforeach; ?>
 </form>
