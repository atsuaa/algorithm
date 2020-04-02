<?php
/*
クイックソート
基準値(枢軸)よりも大きい値は右に小さい場合は左に移動させ、これを繰り返して
比較する配列を狭めていき、枢軸と比較ができなくなるまで繰り返す。
*/

//0～200の配列を作成。stepは1
$list = range(0, 200 , 1);
//配列をシャッフルする
shuffle($list);

echo 'ソートする配列は';
echo '<pre>';
var_dump($list);
echo '</pre>';

$N = count($list);

quickSort($list,0, $N-1);

echo 'ソート完了'. '<br>';
foreach ($list as $value) {
    echo $value;
    echo '　';
}
echo '<br>';

function quickSort(&$list, $L, $R) {       /*&記号は参照渡し*/
    $LPointer = $L;
    $RPointer  = $R;
    //枢軸値を決める。配列の中央値
    $j  = $list[intVal(($LPointer + $RPointer) / 2)];

    //並び替えができなくなるまで
    do {
        //枢軸よりも左側で値が小さい場合はポインターは進める
        while ($list[$LPointer] < $j) {
            $LPointer++;
        }
        //枢軸よりも右側で値が大きい場合はポインターを減らす
        while ($list[$RPointer] > $j) {
            $RPointer--;
        }
        //この操作で左側と右側の値を交換する場所は特定

        if ($LPointer <= $RPointer) {
            //ポインターが逆転していない時は交換可能
            $tmp             = $list[$RPointer];
            $list[$RPointer] = $list[$LPointer];
            $list[$LPointer] = $tmp;
            //ポインタを進めて分割する位置を指定
            $LPointer++;
            $RPointer--;
        }
    } while ($LPointer <= $RPointer);

    if ($L < $RPointer) {
        //左側が比較可能の時
        quickSort($list, $L, $RPointer);
    }

    if ($LPointer < $R) {
        //右側が比較可能時
        quickSort($list, $LPointer, $R);
    }
}
