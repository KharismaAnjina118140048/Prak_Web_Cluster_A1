<html>

<body>
  <?php
  if (isset($_POST['hitung'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    if ($bil2 !=  0 && $bil1 != 0) {
      $tambah = $bil1 + $bil2;
      $kurang = $bil1 - $bil2;
      $kali = $bil1 * $bil2;
      $bagi = $bil1 / $bil2;
      $mod = $bil1 % $bil2;
    } else {
      $tambah = 0;
      $kurang = 0;
      $kali = 0;
      $bagi = 0;
      $mod = 0;
    }
  }
  ?>
  <div>
    <form method="post" action="Latihan1_Kalkulator.php">
      <input type="number" name="bil1" autocomplete="on" placeholder="Bilangan Pertama"><br>
      <input type="number" name="bil2" autocomplete="on" placeholder="Bilangan Kedua">
      <input type="submit" name="hitung" value="Hitung">
    </form>
    <?php if (isset($_POST['hitung'])) { ?>
      <h2 class="judul">Hasil Dari Tiap Operasi :</h2>
      <input type="text" value="<?php echo "Penjumlahan  :   " . $tambah; ?>">
      <input type="text" value="<?php echo "pengurangan  :   " . $kurang; ?>">
      <input type="text" value="<?php echo "Perkalian    :   " . $kali; ?>">
      <input type="text" value="<?php echo "Pembagian    :   " . $bagi; ?>">
      <input type="text" value="<?php echo "Modulo       :   " . $mod; ?>">
    <?php } else { ?>
      <input type="text" value="0">
      <input type="text" value="0">
      <input type="text" value="0">
      <input type="text" value="0">
      <input type="text" value="0">
    <?php } ?>
</body>

</html>
