<?php
//Tipe data number
echo "Tipe data number int".PHP_EOL;
var_dump(1223455);
var_dump(122_3455);
var_dump(12222222);

echo "Tipe data number float".PHP_EOL;
var_dump(1.223455);
var_dump(1.22_3455);
var_dump(12_2.22222);



echo "Tipe data Boolean".PHP_EOL;
var_dump(TRUE);
var_dump(true);
var_dump(truE);

echo "Tipe data Boolean".PHP_EOL;
var_dump(FALSE);
var_dump(false);
var_dump(falsE);


echo "Tipe data String".PHP_EOL;
echo 'Rizki'.PHP_EOL;
echo 'Pemrograman Web'.PHP_EOL;

echo "\n";  
echo "Tipe data String".PHP_EOL;
echo "Nama\t: Rizki Septiana\n".PHP_EOL;
echo "Matkul\t:Pemrograman Web\n".PHP_EOL;

//Heredoc

// echo <<<tag 
// ini adalah contoh String panjang dan juga perlu mengetik ENTER secara manual
// jika tidak menggunakan heredoc, "bisa menambahkan quotes"
// tag;

//Variabel
$name = "Arip";
$age = 58;
//$nama depan = "arif" akan error

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;

//Variable Variables

$contoh = "Asep";
$$contoh = "Ahmad Sunaedi";

echo "name : ";
echo $contoh;
echo "\n";
echo "\$asep : ";
echo $Asep;
echo "\n";
//Constant
define("NAMA","Indra Gunawan");
//define("NAMA","Asep"); akan warning karena udah constant
define("UMUR",45);
define("ASAL","Sumetera");

echo "Nama : ";
echo NAMA;
echo "\n";
echo "Umur : ";
echo UMUR;
echo "\n";
echo "Asal : ";
echo ASAL;
echo "\n";

//Data Null
$name = "Rizki";
$name = NULL;

$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//Mengecek Data Null
$kosong = NULL;
$isi = 12;
var_dump(is_null($kosong));
var_dump(is_null($isi));

//Menghapus dan Mengecek Variabel
$contoh = "Amin";
// unset($contoh);
// echo $contoh;//undifined

$age = 15;
$name = Null;
$gender = "Male";
unset($gender);

var_dump(isset($age));
var_dump(isset($name));
var_dump(isset($gender));



?>