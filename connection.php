<?php
     $servername="localhost";
	 //always with this name
     $username="root";
     $password="";
     $dbname="abc";
      
     //connnection 
     $conn=new mysqli($servername,$username,$password,$dbname);
     
	 //check for the connecttion i-improved////	
     if($conn->connect_error){
	     die("connection failed " . $conn->connect_error);
		 //conca
	 }	
     
	 echo("succesfull connection ");	 

?>