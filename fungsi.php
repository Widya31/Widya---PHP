<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
 </head>
 <body>
   
   <h1>Fungsi PHP</h1>
   
   <?php  
		// -------- Fungsi -----
	
	// parameter
	// function print_text($text, $angka)
	// {
		// $text = "gedung" . $text . " " . $angka;
		// echo "-------";
		// echo $text;
		// echo "-------";
	// }
	
	// function jarak(){
		// echo "<br>";
	// }
	
	// print_text("koding", 43);
	// jarak();
	// print_text("dokter", 87);
	// jarak();
	// print_text("komputer", 456);
	// jarak();
	
	// -----return fungsi-------
	// function menghitung($x,$y){
		// $z = $x + $y;
		// return $z;
	// }
	
	// $hasil = menghitung(2,5) * 10;
	// echo"hasil dari penjumlahan adalah " . $hasil;
	
	
	// -------scope-------
	
	// $a = 300;
	// $b = 20;
	
	// function menghitung(){
		// global $a, $b;
		
		// $c = $GLOBALS['a'] + $GLOBALS['b'];
		// $c = $a + $b;
		// return $c;
	// }
	
	// echo menghitung();
	
	// --- anonymous fungtion ---
	
	// $ngetik = function($text){
		// echo $text;
	// };
	
	// $greeting = $ngetik;
	
	// $greeting('hehehehhe78');
	
	//----callback function ----
	
	function berteriak($callback){
		 echo ' HALLOOOOOOOO <br>';
	//$callback();
		
		if (is_callable($callback) ){//menguji apakah dia fungsi
			call_user_func($callback, 'wkwkkwk');
		}else{
			echo ' bukan fungsi';
		}
		
	}
	
	//berteriak(function(){
	//echo ' saya peri jatuh dari  genteng';
	//});
	
	 $panggil = function($text){
		 echo $text;
	 };
	 
	 berteriak( $panggil );

	?>

 </body>
</html>