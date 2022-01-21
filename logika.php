<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
 </head>
 <body>
   
   <h1>Logika di PHP</h1>
   
   <?php  

	//-------- tipe data bolean -----
	//$hasil = true;
	//$hasil2 = false;
	
	//---------if dan else ---------
	//------ else if
	//operator logika == === > >= < <= !=
	
	// $uang_programmer = 1000;
	// $keyboard        = 2000;
	// $uang_designer   = 4000;
	
	// && atau ||
	
	// if($uang_programmer > $keyboard
		// && $uang_designer > $keyboard){
			
		// echo 'boleh beli keyboard';
	// }else{
		// echo 'nggak bisa beli';
	// }
		
	// if($uang_programmer > $keyboard){
		// echo 'dibeli!';
	// }else if($uang_designer > $keyboard){
		// echo 'dibeli oleh designer!';
		
		// --if bercabang
		// if($uang_designer >= $keyboard * 2){
			// echo 'dibeli dua kali oleh designer!';
		// }
		
	// else{
		// echo 'ngga cukup';
	// }
	
	//switch case
	
	 $nama = "Widya31";
	
	 switch ($nama) {
		 case 'Intan';
		  echo 'namanya intan';
		  break;
		 case 'Ika';
		  echo 'namanya ika';
		  break;
		  case 'Widya';
		  echo 'namanya Widya';
		  break;
		 default:
		  echo 'tidak ada yang benar';
	 }

	?>

 </body>
</html>