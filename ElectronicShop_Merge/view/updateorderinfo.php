<?php 
			include ('../db/db.php');
            //get the id of selected user
            $id = $_GET['id'];

            //sql to get the id
            $sql = "UPDATE ordered SET delivered= 1 WHERE id=$id";

            //execuate the cuery
            $res = mysqli_query($conn, $sql);

            //check weather the quary exucation
            if($res==true)
            {
                //check the data 
                $count = mysqli_num_rows($res);

                
                if($count==1)
                {    
                    $row = mysqli_fetch_assoc($res);
					$id = $row['id'];
                    $name = $row['name'];
					$model = $row['model'];
					$vendorname = $row['vendorname'];
					$price = $row['price'];
                    $quantity = $row['quantity'];
					$total = $row['total'];
					$delivered = $row['delivered'];
	              
	            	
                              
                }
                else
                {
                    
                }
            }
        
?>