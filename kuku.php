<?php
$i=1;
print '<table>';
while ($i<=9) {
  $j=1;
  print '<tr>';
  while ($j<=9) {
    print '<td>'. $i*$j. '</td>';
    $j++;
  }
  print '</tr>';
  $i++;
}
print '</table>';
 ?>
