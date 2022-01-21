<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Belajar PHP</title>
 </head>
 <body>
   
   <h1>STUDY PHP</h1>
   
   <?php 
	// /*
	  // berapa baris
	  // komentar
	  // terserah teman2
	
	
	//variabel pada php
	//tipe data -string-
	// $nama = "Sekolah Koding";
	// $nama2 = "Bermain Koding";
	
	 // echo "selamat datang di $nama <br>";
	 
	 //tipe data angka/number
	 //1. integer  2. float
	 
	 // $angka = 500;
	 // $angka2 = 400;
	 // $angka3 = 8;
	 
	 //------operator Math-------
	 //+ - * / % ++ --
	 
	 //nama = nilai
	 // $angka = $angka + $angka2;
	 // $angka *= $angka2;
	 
	 //math method
	 //round rand(min, max) max min 
	 // echo "Angka hari ini adalah " . min($angka3, $angka, $angka3);
	 
	// -------string method------
	 // strlen && str_word_count
	 // str_replace(find,replace,string)
	 // str_repeat(text, times); str_shuffle(text)
	 
	 $text = "Hai semuanya di sini";
	 echo str_repeat(str_replace( "Hai", "Hallo" ,$text), 10 );
	 
   ?>
   
 </body>
</html>