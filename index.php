<!DOCTYPE html>
<html lang="en">
<head>
<title>SERENIDAD HOMES </title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style>
  	 html{
  	 	  background:url('images/wel.jpeg')no-repeat center center fixed;
  	 	  background-size: cover; 
  	 	  background-position: center;
  	 	  height: 100vh;
  	 }
  	 #btn1 {
      position: absolute;
      left: 90%;
}
   #btn1 a {
   
    width: 100%;
    line-height: 2em;
    text-align: center;
    font-size:18px;
 	text-decoration: none;
 	border:1px solid;
 	padding:10px 20px;
 	border-radius: 10px;
 	background-color: #ffffff;
}
#btn1 a:hover {
    color: #ffffff;
    background: #fb3958;
}

.social-media{
	background-color:black;
	opacity: 0.7;
    position: absolute;
    top:300px;
    left:95%;
    right: 5%;


}

.fa{
	padding: 15px;
	font-size: 30px;
	width:20px;
	text-align: center;
	text-decoration: none;
	border-radius: 50%;

}

.fa:hover{
	opacity:0.7;
}

.fa-facebook{
	background:#3b5998;
	color:white;
	padding-bottom: 8px;
	margin-bottom: 4px;
}

.fa-twitter{
	background:#55acee;
	color:white;
	padding-bottom: 8px;
	margin-bottom: 4px;
}

.fa-instagram{
	background:#dd2a7b; 
	color:white;
	padding-bottom: 8px;
	margin-bottom: 4px;
}
.fa-google{
	background-color:#dd4b39;
	color: white;
	padding-bottom: 8px;
	margin-bottom: 4px;
}

#showcase{
	font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size: 17px;
	line-height: 1;
	color: #ffffff;
	opacity:0.9%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	text-align: center;
	position:absolute;
	top:40%;
	left:30%;

}

#showcase h1{
     font-size:30px;
     border-bottom: 20px;
 }

 #showcase p{
 	font-size: 20px;
 }

 #showcase #btn2{
 	font-size:18px;
 	text-decoration: none;
 	color:;
 	border:#926239 1px solid;
 	padding:10px 20px;
 	border-radius: 10px;
 	background-color: #ffffff;
 }
#showcase #btn2:hover{
    color: black;
    background: #fb3958;
}
  </style>

</head>
<body>



<div class="button" id="btn1"><a href="home.php">HOME</a></div>

<div class="social-media">
	<a href="#"class="fa fa-facebook"></a>
	<a href="#"class="fa fa-twitter"></a>
	<a href="#"class="fa fa-instagram"></a>
	<a href="#"class="fa fa-google"></a>
</div>

<header id="showcase">
	<h1>Welcome To Serenidad Homes</h1>
	<p>Buy property from us at competitive and discounted prices</p>
	<a href="home.php" class="button" id="btn2">Get More</a>
</header>
</body>
</html>
