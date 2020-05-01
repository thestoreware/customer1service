<?php

//===================================================================================================================================================================================================================================
	//connect to the cloudhost
	$conn_string = "host=ec2-18-235-20-228.compute-1.amazonaws.com port=5432 dbname=d477k8h809b5sn user=tkoufmjrlbjvgu password=78e287b29092e1024fcd562e3f97fabc153cde60dc3adb0e8ad56efebf037e5b options='--client_encoding=UTF8'";
//====================================================================================================================================================================================================================================

		
	$mysqli = pg_connect($conn_string);
 
		if (!$mysqli) 
			{
			
				echo "Not Connected to the PostgreSQL Database"  ;
							
			} 
		else
		{
				echo "Connected to the PostgreSQL Database"  ;
		}

		