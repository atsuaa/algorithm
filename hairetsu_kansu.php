<?php
function sample( $varArray ) {
    echo '$varArray[0] + $varArray[1] = ' , $varArray[0] + $varArray[1];
}
sample( array( 2, 3 ) );
echo "<br>";


function sample2( $varArray,$i,$j ) {
    echo '$varArray[0] + $varArray[1] = ' , $varArray[$i] + $varArray[$j];
}

$i=0;
$j=1;
$array=array( 2, 3 );
sample2( $TBL,$i,$j );





for ($i=0; $i <10 ; $i++) {
  $TBL[$i]=rand(1,100);
}


echo "<br>";
foreach ($TBL as $row) {
  echo $row, '　';
}

$TBL2=koukan($TBL,10);

echo "<br>";
foreach ($TBL2 as $row) {
  echo $row, '　';
}


function koukan($TBL,$N){
  for ($i=$N; $i >0 ; $i--) {
    for ($j=0; $j <$i ; $j++) {
      if ($TBL[$j]>$TBL[$j+1]) {
        $wk=$TBL[$j];
        $TBL[$j]=$TBL[$j+1];
        $TBL[$j+1]=$wk;
      }
    }
  }
  return $TBL;
}
 ?>
