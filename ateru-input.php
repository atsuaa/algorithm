<?php require '../header.php'; ?>
<p>好きな食べ物なーんだ？</p>
<p>プレイヤー１</p>
<p>食べたいものを３つ選んでね</p>
<form action="ateru-output.php" method="post">
  <?php
  $num=[
    '寿司',
    '焼肉',
    'ピザ',
    'ラーメン',
    'オムライス',
  ];
  foreach ($num as $food) {
    echo '<p>';
    echo '<input type="checkbox" name="num[]" value="', $food, '">';
    echo $food;
    echo '</p>';
  }
   ?>
   <p>プレイヤー２</p>
   <p>食べたい物はなんだと思う？</p>
   <p><select name="kai">
     <?php
     foreach ($num as $food) {
       echo "<option value=", $food, ">$food</option>";
     }
      ?>
   </select></p>
   <input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>
