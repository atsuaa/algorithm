<?php
$counter_file = 'count.txt';
$counter_lenght = 8;
$fp = fopen($counter_file, 'r+');
if ($fp) {
    if (flock($fp, LOCK_EX)) {
        $counter = fgets($fp, $counter_lenght);
        $counter++;
        rewind($fp);
        if (fwrite($fp,  $counter) === FALSE) {
            echo ('<p>'.'ファイル書き込みに失敗しました'.'</p>');
        }else {
          echo "3";
        }
        flock ($fp, LOCK_UN);
    }else {
      echo "2";
    }
}else {
  echo "1";
}
fclose ($fp);

echo '<p>';
echo ('あなたは <em>'.$counter.'</em> 人目の訪問者です。');
echo '</p>';
?>
