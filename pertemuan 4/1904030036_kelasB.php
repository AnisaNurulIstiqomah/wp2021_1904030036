<!DOCTYPE html>
<html>

<head>
    <title>Pertemuan 4</title>
</head>

<body>
    <h2>Nama : Anisa Nurul Istiqomah <br>
        Nim : 1904030036
    </h2>

    <h1>Membuat Array</h1>
    <?php
    $values = array(1,2,3,4,5,60);
    var_dump($values);
    echo"<br>";
    echo($values[4]);
    
    echo"<br>";

    $prodi = ["T.Sipil","T.Industri","T.Informatika","T.Kimia"];
    var_dump($prodi);
    echo"<br>";
    echo "$prodi[3]";

    echo"<br>";
    //mengganti isi value
    $prodi[0] = "T.Elektro";
    var_dump($prodi);
    echo"<br>";

    //menambahkan value
    $prodi[] = "T.Pertambangan";
    var_dump($prodi);
    echo"<br>";

    //menghapus salah satu value
    unset($prodi[0]);
    var_dump($prodi);
    echo"<br>";

    // menghitung total array
    echo"<br>";
    var_dump(count($prodi));

    ?>

    <hr>
    <h1>Map Dengan Array</h1>
    <?php
    $anisa = array(
        "id" => "Anisa",
        "nama" => "Anisa Nurul Istiqomah",
        "umur" => "20"
    );
    var_dump($anisa);
    echo"<br>";

    $nisa = [
        "id" => "Nisa",
        "nama" => "Anisa Nurul",
        "umur" => "20",
        "alamat" => [
            "kota" => "Tangerang",
            "Prov" => "Banten"
            ]
    ];
    var_dump($nisa);

    // echo"<br>";
    // echo("Nama Id :" . $nisa["id"]);
    // echo"<br>";
    // echo("Nama Lengkap :" . $nisa["nama"]);
    // echo"<br>";
    // echo("Umur :" . $nisa["umur"]);
    // echo"<br>";
    // echo("Alamat :" . $nisa["alamat"]);

    ?>

    <hr>
    <h1>Operator Matematika</h1>

    <?php
    $tambah = 10 + 10;
    $kurang = 100 - 10;
    $kali = 5 * 5;
    $bagi = 50 / 10;
    $modular = 100 % 3;
    $pangkat = 4 ** 3;

    echo "Tambah    : " . $tambah . "<br>";
    echo "Kurang    : " . $kurang . "<br>";
    echo "Kali      : " . $kali . "<br>";
    echo "Bagi      : " . $bagi . "<br>";
    echo "Modular   : " . $modular . "<br>";
    echo "Pangkat   : " . $pangkat . "<br>";
    ?>

    <hr>
    <h1>Increment</h1>
    <?php
    $a = 10;
    $a++;
    // $a = $a + 1;
    $a++;
    // Decrement
    $a--;

    echo($a);
    ?>

    <hr>
    <?php
    $nama1= "Anisa Nurul Istiqomah";
    $nama2= "Erika Novianti";
    $nama3= "Siti Nuraini";
    $nama4= "Annisaa Azizatul Munawaroh";
    $nama5= "Muthu Ratna Manikam";
    ?>

    <h1>Daftar Nama Anggota Kelas</h1>

    <?php echo "$nama1";?><br>
    <?php echo "$nama2";?><br>
    <?php echo "$nama3";?><br>
    <?php echo "$nama4";?><br>
    <?php echo "$nama5";?><br>

    <hr>
    <h1>Membuat Array di PHP</h1>
    <?php
    // membuat array kosong
    $array1 = array("elemen","elemen");//cara dibawah php 5
    $array2 = ["elemen","elemen"];//diatas php 5

    //membuat array sekaligus mengisinya
    $minuman = array("Es Teh Manis", "Jus Buah", "Es Jeruk");
    $makanan = array("Baso", "Mie Ayam", "Soto Ayam");
    ?>

    <?php
    var_dump($minuman);
    ?>

    <?php
    print_r($makanan);
    ?>

    <?php
    echo "$makanan[0]";
    ?>

    <hr>
    <?php
    // membuat array mhs
        $nama= ["Anisa Nurul Istiqomah","Erika Novianti","Siti Nuraini","Annisaa Azizatul Munawaroh","Muthu Ratna Manikam"];
    ?>

    <?php
    // menampilkan isi array perulangan for
    for($i=0; $i < count($nama); $i++){
        echo $nama[$i]."<br>";
    }
    ?>

    <hr>
    <?php
    //membuat array kumpulan buku
    $books= ["Belajar PHP","Cara Cepat Belajar HTML","Buku Sakti Pemrograman Web"];

    // menampilkan isi array dengan perulangan foreach
    foreach($books as $book){
        echo $book."<br>";
    }
    ?>

    <hr>
    <h1>Menambahkan Array</h1>
    <?php
    // membuat array
    $hobi = [
     	"Hunting Foto",
     	"Travel",
     	"Bernyanyi"
        ];

    // mengganti isi pada indeks ke-2
    $hobi[2] = "Mendengarkan Musik";
    // menambahkan isi pada indeks ke-3
    $hobi [3] = "Menulis";
    // menambahkan isi pada indeks terakhir
    $hobi[] = "Travel";

    // cetak array dengan perulangan
    foreach ($hobi as $hobiku){
        echo $hobiku."<br>";
    }
    ?>

    <hr>
    <h1>Membuat Array Asosiatif</h1>
    <?php
    // membuat array asosiatif
    $mhs = [
        "nim" => "1904030036",
        "nama" => "Anisa Nurul Istiqomah",
        "fakultas" => "Teknik",
        "jurusan" => "Teknik Informatika"
    ];
        
    // mencetak isi array assosiatif
    echo "<h2>Data Mahasiswa</h2>";
    echo "<p>Nim        : ".$mhs["nim"]."</br>";
    echo "<p>Nama       : ".$mhs["nama"]."</br>";
    echo "<p>Fakultas   : ".$mhs["fakultas"]."</br>";
    echo "<p>Jurusan    : ".$mhs["jurusan"]."</br>";
    ?>

    <hr>
    <h1>Array Multi Dimensi</h1>
    <?php
    // ini adalah array dua dimensi
    $matrik = [ 
        [2,3,4],
        [7,5,0],
        [4,3,8],
    ];

    // cara mengakses isinya
    echo $matrik[1][0]; //-> output: 7
    ?>

    <hr>
    <h1>Ini Adalah Array 2 Dimensi</h1>
    <?php
    // membuat array 2 dimensi yang berisi array asosiatif
    $ortus = [
        [ 
            "nama" => "Kurtubi",
            "hubungan" => "Hubungan : Ayah Kandung"
        ],
        [
            "nama" => "Umi Kulsum",
            "hubungan" => "Hubungan : Ibu Kandung"
        ],
        [ 
            "nama" => "Ade Indra Mulyana",
            "hubungan" => "Hubungan : Kakak Laki-Laki"
        ]
    ];

    // menampilkan array
    foreach($ortus as $ortu){
        echo "<h3>".$ortu["nama"]."</h3>";
        echo "<p>".$ortu["hubungan"]."<p>";
        echo "<hr>";
    }
    ?>
</body>

</html>ss