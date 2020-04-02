<?php require '../header.php'; ?>
<form action="hairetsu3-output.php" method="post">
  <?php
  $num=[0,1,2,3,4,5,6,7,8,9];
  foreach ($num as $item) {
    echo '<p>';
    echo '<input type="checkbox" name="num[]" value="', $item, '">';
    echo $item;
    echo '</p>';
  }
   ?>
   <p><select name="kai">
     <option value="1">1</option>
     <?php
     for ($i=0; $i <10 ; $i++) {
       echo "<option value=", $i, ">$i</option>";
     }
      ?>
   </select></p>
   <input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>
