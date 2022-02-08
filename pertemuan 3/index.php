<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pertemuan 3</title>
</head>

<body>
  <?php 
      echo"<h2>Belajar Web Programing</h2>";
      echo ("Selamat Belajar<br>");
      echo "Saya Sedang Belajar Web Programing<br>";
      echo "Nama"," Saya "," Anisa "," Nurul "," Istiqomah ";
   ?>

  <?php
      print "<h2>Belajar Web Programing Pemula</h2>";
      print "Selamat Belajar<br>";
      print "Belajar Memahami Ilmu Web Programing";
   ?>

  <?php
      $namadepan = "Anisa Nurul";
      $namablkg = "Istiqomah";
      $ttl = "Tangerang, 03-05-2001";
      $jeniskelamin = "Perempuan";
      $agama = "Islam";
      $fakultas = "Teknik Informatika";
      $mk = "Web Programing";
      $hobi = "Hunting Foto";
      $alamat = "RAJEG";
      $hp = "089668874647";
   ?>

  <h4>Indentitas diri</h4>
  <p>Nama : <?php echo $namadepan ." ". $namablkg ; ?></p>
  <p>Tanggal Lahir : <?php echo (03052001) ; $ttl; ?></p>
  <p>Jenis Kelamin : <?php echo $jeniskelamin ; ?></p>
  <p>Agama : <?php echo $agama ; ?></p>
  <p>Fakultas : <?php echo $fakultas ; ?></p>
  <p>Mata Kuliah : <?php echo $mk ; ?></p>
  <p>Hobi : <?php echo $hobi ; ?></p>
  <p>Alamat : <?php echo $alamat ; ?></p>
  <p>Hp : <?php echo $hp ; ?></p>
</body>

</html>