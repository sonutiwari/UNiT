
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UNiT Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="UNiT">
  <link rel="icon"  href="images/logo3.png" >
   <link rel="stylesheet" href="css/styles.css"> 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
</head>
<body style="background-color:#9d9e9e;">

<div class="container" >
     <h1 style="text-align:left;">UNiT Form</h1>
     <h6>Akai Service Private Ltd.</h6>
     <hr>
     <marquee><h4 style=";font-family: 'Satisfy', cursive;">We are hiring!</h4></marquee>
     <form action="" style="padding-left:20%;padding-right:20%;color:black;" method = "post"  enctype="multipart/form-data">
    
         <label for="text">Name*:</label>
         <input type="text" class="form-control" id="" placeholder="Enter Name" name="Sender" required>
    
    
         <label for="number">Phone No.*:</label>
         <input type="number" class="form-control" id="" placeholder="Enter Phone no." name="Pnumber" required>
  
	     <div class="form-group">
             <label for="email">Email Id*:</label>
		     <input type="email" class="form-control" id="" placeholder="Enter Email" name="SenderMail" required>
		 </div>
	     <label for="options" >Options to Apply*:</label>
			<div class="radio">
				  <label><input type="radio" name="optradio" required>Android Developer</label>
			</div>
			<div class="radio">
				  <label><input type="radio" name="optradio" required>Web Developer</label>
			</div>
			<div class="radio">
				  <label><input type="radio" name="optradio" required>Graphic Designer</label>
			</div>
			<div class="radio">
				  <label><input type="radio" name="optradio" required>Networking</label>
			</div>
			<div class="radio">
				  <label><input type="radio" name="optradio" required>Delivery Boy</label>
			</div>
			<div class="radio">
				  <label><input type="radio" name="optradio" required>Salesman</label>
			</div>
			<label>Upload Resume</label>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<center><button type="submit" class="btn btn-warning">Submit</button></center>
	 </form>
</div>
</body>
</html>
