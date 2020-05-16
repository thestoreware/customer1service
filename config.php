<?php

//===================================================================================================================================================================================================================================
		//connect to the cloudhost
		$conn_string = "host=ec2-18-233-32-61.compute-1.amazonaws.com port=5432 dbname=de360f4shrlbjd user=dcbgrevvwddcbc password=de67d2731395f66851a3e0d5806e3ef3c21034096c46fb2993b1505428b75e9a options='--client_encoding=UTF8'";
	//====================================================================================================================================================================================================================================
	
		
		$mysqli = pg_connect($conn_string);
 
		/*if (!$mysqli) 
			{
			
				echo "Not Connected to the PostgreSQL Database"  ;
							
			} 
		else
		{
				echo "Connected to the PostgreSQL Database"  ;
		}*/

		
