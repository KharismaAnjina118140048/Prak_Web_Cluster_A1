<html>
<?php
if (isset($_POST['submit'])) {
  $bil = $_POST['bil'];
  $prima = true;
  for ($i = 2; $i < $bil; $i++) {
    if ($bil % $i == 0)
      $prima = false;
  }
  if ($prima) {
    $text = "bilangan prima";
  } else {
    $text = "bilangan prima";
  }
}
?>
<form method='post' action='Latihan3_prima.php'>
  <input type='text' name='bil' class='bil' autocomplete='off'>
  <input type='submit' name='submit' value='submit'>
</form>
<?php if (isset($_POST['submit'])) { ?>
  <input type="text" value="<?php echo $text; ?>">
<?php } else { ?>
  <input type="text" value="-">
<?php } ?>

</html>
