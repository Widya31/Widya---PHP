<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Belajar PHP</title>
 </head>
 <body>
	   <h1>Array PHP</h1>
	   
	<?php
		//--------tipe data array--------
/* 	$angka = [5, 11, 9, 15, 3];
	$kotak = array('anjing', 'kurakura', '//koala', 'kelinci');
	$nama = ['Hilman', 'Endy', 'Widya'];
	
	print_r($kotak);
	echo $nama[2];
 */	
	//--------metode array--------
/* 	array_unique, _reverse, shuffle, count, sort
	
	sort($angka);
	print_r($angka);
	
	echo count ($nama);
 */	
	//----------- Associative array ----------
/* 	key => isi
	
	$data = array( "nama" => "Widya", "umur" => 16, "profesi" => "Pelajar");
			
	$data2 = array( "suami" => "masih di bawah umur",
				   "alamat" => "Baujeng"
			);
			
	print_r($data);
	$data['nama'] = "Widya Ramadani";
	echo "Nama Saya Adalah " . $data['nama'];
 */	
	//----------- metode assosiatif array -------
/* 	array_values array_keys array_merge
	print_r( array_merge($data, $data2) );
 */	
	//----------multi dimensi array ----------
	
	$data = array(
				array("programmer", "25", "laki"),
				array("designer", "19", "cewek"),
				array("manager", "35", "lakicewek"),
			);
			
	// 00 01 02
	// 10 11 12
	// 20 21 22
	
	$data[2][0] = "proyek manager";
	echo $data[2][0];
	
	?>

 </body>
</html>