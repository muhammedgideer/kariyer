
<?php 


try {

	$db=new PDO("mysql:host=localhost;dbname=jobfinder;charset=utf8",'root','123654789');
 	
 	// echo "baglantı kuruldu";


 } catch (PDOExpception $e) {

 	echo $e->getMessage();
 	
 } 
 ?>