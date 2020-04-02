<!--
rand関数を使って以下の処理がしたいです。
６０%の確率でCが出力
２０％の確率でUCが出力
１０％の確率でRが出力
７％の確率でSRが出力
３％の確率でURが出力
-->
<?php
$like = array(
'C' => 60,
'UC' => 80,
'R' => 90,
'SR' => 97,
'UR' => 100,
);

//$keyをランダムに表示させる
$rand = mt_rand(1,100);
foreach($like as $key =>$val){
 if($rand <= $val){
   echo $key;
   break;
 }
}
?>

<!--
プログラムの確率によるデータ取得について質問です。
現在、制作しようとしているプログラムは、登録フォームを作りデータを登録し、
その登録したデータにパーセントを設定できるようにし、
設定したパーセントにより表示する確率を変動させたいと考えています。

こちらの考えとしては、
例えば、登録データ「A」「B」「C」「D」とあり、それぞれの確率が
「A(36%)」「B(21%)」「C(18%)」「D(25%)」と設定されているとします。
※小数点以下は表示しないものとします。
-->

<?php
$weights = ["A" => 36, "B" => 21, "C" => 18, "D" => 25];

// 抽選関数
$raffle = function($weights){
   $val = mt_rand(0, array_sum($weights));
   $tmp = 0;
   foreach($weights as $k => $v){
       $tmp += $v;
       if($val <= $tmp){
           return $k;
       }
   }
};
// 実行
var_dump($raffle($weights));

# 以下はテスト用（１０万回抽選）
$ret     = ["A" => 0, "B" => 0, "C" => 0, "D" => 0];
for($i=0; $i < 100000; $i++){
   $ret[$raffle($weights)]++;
}
var_dump($ret);
?>


要素が複数あって、その中からランダムに抽出するというのは、よくやりたくなります。
さらには、各要素ごとに「確率」が定められていて、
その確率に準じてランダムに抽出したくなることもあります。

<?php

    // ３つの要素を用意してそれぞれの出没確率を設定
    $first = array("text" => "first", "per" => 10);
    $second = array("text" => "second",  "per" => 20);
    $third = array("text" => "third",  "per" => 70);

    // ランダムで抽出する方法
    $array = array($first, $second, $third);
    shuffle($array);
    echo "ランダムに表示：" . $array[0]['text'] . "\n";

    // 決められた確率に準じて、抽出する方法
    $array = array($first, $second, $third);
    $target = rand(1, 100);
    foreach ($array as $val) {
        if ($target <= $val['per']) {
            echo "確率に応じて表示；" . $val['text']. "\n";
            break;
        } else {
            $target -= $val['per'];
        }
    }
?>


WordPressには『50%の確率で条件分岐するスクリプト』ってあるのかなーと思ってググってみたら、
そういったスクリプトはなかったようでした。とういうわけでPHPで実装。

<?php
	// 50%の確率でランダム表示
	$r = rand(0, 1);
	if ($r == 0) {
?>
<!-- 1つ目 -->
<p>ここのコンテンツが50%の確率で表示されます</p>

<?php }else{ ?>
<!-- 2つ目 -->
<p>ここのコンテンツが50%の確率で表示されます</p>

<?php } ?>

<style media="screen">
table{
border-collapse:separate;
border-spacing: 5px;
width: 100%;
}

table th,table td{
border-radius: 5px;
text-align: center;
padding: 10px 0;
}

table th{
background-color: #c79852;
color: white;
border:solid 1px #927141;
}

table td{
background-color: #e4d4bc;
border:solid 1px #af9d85;
}
</style>
<?php
// -----------------------------------
// 出現確率の定義 : 合計が100でなくともOK
// -----------------------------------
$randArray = Array(
    "A"=> 60,
    "B"=> 20,
    "C"=> 10,
    "D"=> 7,
    "E"=> 3 );

// -----------------------------------
// 出現確率に応じて回答を返す関数
// -----------------------------------
function rndAnswer( $rndArray ) {
    $rndNum = rand(1, array_sum( $rndArray ) ); // 1 ～合計 の中で乱数を発生

    $subTotal = 0;
    foreach( $rndArray as $key => $num ) {
        $subTotal += $num;
        if ( $subTotal >= $rndNum ) {
            return $key;
        }
    }
}
// -----------------------------------
// 実際に100回実行してみるテスト
// -----------------------------------
print "RANDOM TEST<br>\n";
print '<table border="1">'."\n";
foreach( $randArray as $key => $num ) {
    $ansCount[$key] = 0;
}

for( $i=0 ; $i<10 ; $i++ ) {
    print "<tr>\n";
    for( $j=0 ; $j<10 ; $j++ ) {
        $ans = rndAnswer( $randArray );
        $ansCount[$ans]++;
        print "<td>$ans</td>\n";
        print "</td>\n";
    }
    print "</tr>\n";
}
print "</table>\n";
  // キー順にソート
ksort( $ansCount );
  // 回答の回数を表示
foreach( $randArray as $key => $num ) {
    print "$key({$num})... {$ansCount[$key]}回<br>\n";
}
?>


今回は1/4で当たり(25%)、1/2で小当たり(50%)、残り1/4でハズレ(25%)の抽選をします。

<?php $probability = mt_rand( 1, 100 );?>
<?php if ($probability <= 25):?><!--1〜25-->
<p>大当たり</p>
<p><?php echo $probability;?></p>
<?php elseif ($probability <= 75):?><!--26〜75-->
<p>小当たり</p>
<p><?php echo $probability;?></p>
<?php else:?><!--76〜100-->
<p>ハズレ</p>
<p><?php echo $probability;?></p>
<?php endif;?>


一定確率でCSSを変える！
<?php
if( is_spring() && is_percent(10) ):
    echo 'CSSファイル読み込みタグ';
endif;
?>
