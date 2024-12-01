<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pemrograman Berorientasi Objek</title>
  </head>
  <body>
<br>
<img src="img/produk.jpg" alt="Image" height="250" width="260">

<h4 align="“left”">Fathulloh : 005100249</h1>


<br>
    <h1 align="“center”">Pemrograman Berorientasi Objek</h1>

<h2 style="color: blue;" align="“left”">Pertemuan-1 </h1>

<h3 style="color: black;" align="“left”">Pengentar Pemrograman Web dan Kontrak Belajar </h1>


    <h3 align="“right”">Pengertian</h1>
    <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method. Semua data dan fungsi di dalam paradigma ini dibungkus dalam kelas-kelas atau objek-objek. Bandingkan dengan logika pemrograman terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya,</p>

    <h3 align="“left”">Bahasa pemrograman yang mendukung PBO</h1>
    <p>Berikut ini adalah Bahasa pemrograman yang mendukung OOP antara lain seperti:

<ul>
  <li>Visual Foxpro</li>
  <li>Java</li>
  <li>C++</li>
  <li>Python</li>
  <li>PHP</li>
  <li>Ruby</li>
</ul>

    <h3 align="“left”">Database Management System</h1>
    <p>Berikut ini Database Management System yang umum digunakan pemula: 
<ol>
  <li>MySQL</li>
  <li>PostgreSQL</li>
  <li>Oracle</li>
</ol>


</p>

<br>
<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>


<h3 align="“left”">Apa yang disebut Kelas pad PBO</h1>
<p>Kelas adalah....: 

<br>
<h2 style="color: blue;" align="“left”">Pertemuan-2 </h1>

<h3 style="color: black;" align="“left”">Git dan Github </h1>

<br>

<h2 style="color: blue;" align="“left”">Pertemuan-3 </h1>

<h3 style="color: black;" align="“left”">Membuat kelas "Buah" dengan property "nama" dan "warna" </h1>

<?php
class Buah {
    // Properties
    public $nama;
    public $warna;

    // Methods
    function set_name($nama) {
        $this->nama = $nama;
    }

    function get_name() {
        return $this->nama;
    }
}

// Membuat objek dari kelas Buah
$apel = new Buah();
$pisang = new Buah();

// Mengatur nama buah
$apel->set_name('Apel');
$pisang->set_name('Pisang');

// Menampilkan nama buah
echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
?>



<br>
<h3 style="color: black;" align="“left”">Membuat kelas "Mobil" dengan objek "toyota" property "warna" </h1>
<?php

class Mobil {
    // Properties
    public $nama;
    public $warna;

    // Methods
    function set_name($nama) {
        $this->nama = $nama;
    }

    function get_name() {
        return $this->nama;
    }
}

// Membuat objek dari kelas Mobil
$toyota = new Mobil();


// Mengatur nama mobil
$toyota->set_name('Toyota');

// Menampilkan nama mobil
echo $toyota->get_name();

?>

<h2 style="color: blue;" align="“left”">Pertemuan-4 </h1>

<h3 style="color: black;" align="“left”">Konstruktor dan Destruktor </h1>
<h4 style="color: black;" align="“left”">Konstruktor</h1> 

<br>
<?php

//code here

?>


<h4 style="color: black;" align="“left”">Destruktor</h1> 

<br>
<?php

//code here

?>


<h2 style="color: blue;" align="“left”">Pertemuan-5 </h1>

<h3 style="color: black;" align="“left”">Konstanta dan Abstrak </h1>
<h4 style="color: black;" align="“left”">Konstanta</h1> 

<br>
<?php

//code here

?>


<h4 style="color: black;" align="“left”">Abstrak</h1> 

<br>
<?php

//code here

?>



<h2 style="color: blue;" align="“left”">Pertemuan-7 </h1>

<h3 style="color: black;" align="“left”">Penjelasan Koding CRUD </h1>


<br>






  </body>
</html>
