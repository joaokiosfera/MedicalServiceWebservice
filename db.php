<?php  
	
     
         
         $conn = mysqli_connect('localhost', 'quimmedes', '33551868', 'medical');
	 
        if (!$conn) {
            die('Could not connect: ' . mysqli_connect_error());
	}

        mysqli_select_db($conn,"medical");
        
     

?>

