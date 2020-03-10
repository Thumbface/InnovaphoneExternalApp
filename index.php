<?php 

require "class.php";
$system = new Inno();

if(!empty($_GET[1])){
	switch ($_GET[1]) {
	
	// Customer 1
	case "Customer1":
		$system->Customer1($_GET[2]);
		break;
      
    	// Customer 2
	case "Customer2":
		$system->Customer2($_GET[2]);
		break;
			
	}
}
