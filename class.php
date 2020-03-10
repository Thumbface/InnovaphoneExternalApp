<?php 

class Inno{
	
	// Customer 1
	public function Customer1($number){

		//Check if number length is equal or larger than 5 digits
		if(strlen($number) >= 5){ 
			header('Location: http://crm.example.com/customer-by-number/'.$number); 
		}
      
		// Else close the window
		else{ 
			echo "<script type='text/javascript'> window.close(); </script>"; 
		}
	}
}
