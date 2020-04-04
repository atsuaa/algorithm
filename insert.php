<style media="screen">
  .tables{
    display: flex;
  }
  .table-left{
    margin-right: 10px;
  }
  .table-right{
    margin-left: 10px;
    margin-right: 10px;
  }
  span{
    color: orange;
  }
</style>

<p>要素番号１〜Nの一に値が格納されている配列Aを対象とする。</p>
<h2>手続きINSERT</h2>
<p>要素番号M（１≦M≦N）以降の値をそれぞれひとつ後ろにずらし、
要素番号Mの位置に値Dを追加する。</p>
<?php
$N=20;
$A=range(1,$N);             //配列Aを生成
shuffle($A);
$D=rand(1,20);
$M=rand(0,19);
print "追加番号M：<span><b>{$M}</b></span><br>";
print "値D：<span><b>{$D}</b></span>";
?>

<div class="tables">
  <div class="table-left">
    <table border="1">
      <th>要素番号</th><th>値</th>
      <?php foreach ($A as $key => $value): ?>
        <tr>
          <td><?= $key?></td><td><?= $value?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <?php
  $i=$N-1;
  while ($i>=$M) {          //後ろからひとつずつずらす
    $A[$i+1]=$A[$i];
    $i--;
  }
  $A[$M]=$D;                //値Dを格納
  $N=$N+1;                  //Nは最後尾
   ?>
   <div class="table-right">
     <table border="1">
       <th>要素番号</th><th>値</th>
       <?php foreach ($A as $key => $value): ?>
         <tr>
           <td><?= $key?></td><td><?= $value?></td>
         </tr>
       <?php endforeach; ?>
     </table>
   </div>
