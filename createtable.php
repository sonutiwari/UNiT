<html>
     <head>
	     <title>abc</title>
	 </head>
	 <body>
	    <?php
	     include('connection.php');
		 //creating the database
		 $sql="CREATE TABLE user(id INT[6] PRIMARY KEY,firstname VARCHAR[34] NOT NULL,lastname VARCHAR[40],email VARCHAR[40])";//variable for query
		 if($conn->query($sql)===TRUE){
		     echo'TABLE created succesfully';
		 }
		 else{
			 echo'error creating TABLE'.$conn->error;
		 }
		?>
	 </body>
</html>