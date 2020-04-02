<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content=" 1; http://localhost/algorithm/ideas_test.php"> -->
    <title></title>
  </head>
  <body>
    <?php

    for ($i=0; $i < 10; $i++) {
      $arrAll[0]=$arr[0]='●';
      for ($j=1; $j <10 ; $j++) {
        $arr[$j]='◯';
      }
      $ArrAll[$i]=$arr;
    }



    print '<table border="1">';

    for( $i=0 ; $i<10 ; $i++ ) {
      print "<tr>";
      for( $j=0 ; $j<10 ; $j++ ) {
        print "<td>$arr[$j]</td>";
      }

      print "</tr>";

    }
    print "</table>";



    // print '<table border="1">';
    // $array[0]=[0, 0, 1, 0];
    //
    // print "<tr>";
    // for( $j=0 ; $j<4 ; $j++ ) {
    //   print "<td>$array[0][$j]</td>";
    // }
    // print "</tr>";
    //
    // print "<tr>";
    // for ($i=0; $i <4 ; $i++) {
    //   if ($array[0][$i]=1) {
    //     $array[1][$i]=1;
    //     print "<td>$array[1][$i]</td>";
    //   }else {
    //     $array[1][$i]=0;
    //     print "<td>$array[1][$i]</td>";
    //   }
    // }
    // print "</tr>";
    //
    // print "</table>";

    $array[0]=[0, 0, 1, 0];
    $array[1]=[0, 0, 1, 0];
    $array[2]=[0, 0, 1, 0];
    $array[3]=[0, 0, 1, 0];


    print '<table border="1">';
    foreach ($array as $value) {
      print "<tr>";
      foreach ($value as $val) {
        print "<td>$val</td>";
      }
      print "</tr>";
    }
    print "</table>";


      sleep(5);
     ?>
  </body>
</html>
