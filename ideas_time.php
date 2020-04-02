<?php
$from = strtotime("-3600 second"); // 現在から3600秒前（＝1時間前）
$to   = strtotime("now");          // 現在日時
echo time_diff($from, $to);
// 結果：0days 01:00:00

$from = strtotime("2016-01-01");  // 2016年元旦 (0時0分0秒)
$to   = strtotime("now");         // 現在日時
echo time_diff($from, $to);
// 結果：32days 12:34:56

$from = strtotime("2016-01-01 06:00:00"); // 2016年元旦 6時
$to   = strtotime("2017-01-01 15:00:00"); // 2017年元旦 15時
echo time_diff($from, $to);
// 結果：366days 09:00:00

//***************************************
// 日時の差を計算
//***************************************
function time_diff($time_from, $time_to)
{
    // 日時差を秒数で取得
    $dif = $time_to - $time_from;
    // 時間単位の差
    $dif_time = date("H:i:s", $dif);
    // 日付単位の差
    $dif_days = (strtotime(date("Y-m-d", $dif)) - strtotime("1970-01-01")) / 86400;
    return "{$dif_days}days {$dif_time}";
}
?>


sleep()以下のスクリプトは１０秒後に実行される
<?php

// 現在の時刻
echo date('h:i:s') . "\n";

// 10 秒間遅延させる
sleep(10);

// 再開!
echo date('h:i:s') . "\n";

?>
