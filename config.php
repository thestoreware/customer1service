<?php

//===================================================================================================================================================================================================================================
		//connect to the cloudhost
		$conn_string = "host=ec2-52-207-25-133.compute-1.amazonaws.com port=5432 dbname=d47jklh3b3t0ro user=zynwhhjixnngrq password=9a22c32f4e7f9004a82186d5a2fd0c89b93f30a6a98386f2eb0a1468eba1be10 options='--client_encoding=UTF8'";
	//====================================================================================================================================================================================================================================
		//connect to the localhost
		//	$conn_string= "host=localhost port=5432 dbname=rddevoir user=postgres password=Sa@1234 options='--client_encoding=UTF8'";
	//=========================================================================================================================
		
		
		$mysqli = pg_connect($conn_string);
 
		/*if (!$mysqli) 
			{
			
				echo "Not Connected to the PostgreSQL Database"  ;
							
			} 
		else
		{
				echo "Connected to the PostgreSQL Database"  ;
		}*/

		