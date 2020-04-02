<?php
 $filename = 'counter.dat'; // counter.datというカウント数を書き込むテキストファイル

 $fp = fopen($filename, "r+"); // counter.datファイルを fopenで開く
 $count = fgets($fp,32); // fgets関数でcounter.datに書かれたカウント数を読み込む
 $count++; // counter.datに書かれたカウント数を加算
 fseek($fp, 0); // fseek関数でcounter.datの読み書きを行う場所を先頭に戻す
 fputs($fp, $count); // fputs関数でカウントされた数をファイルに書き込む
 flock($fp, LOCK_UN); // flock関数でファイルを上書きされないようにロックする
 fclose($fp); // fclose関数でファイルを閉じる
 echo $count; // カウントされた数字を表示
?>
