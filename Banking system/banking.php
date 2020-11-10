<!DOCTYPE html>
<html>
<head>
	<title>Banking System</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

html{
	scroll-behavior: smooth;
}

body{
	margin: 0;
	padding: 0;
	font-family: 'Poppins',sans-serif;
}
*{

	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
.container{
	max-width: 1140px;
	margin: auto;
}


.row{

	display: flex;
	flex-wrap: wrap;
}

/*Header sTRT*/

header{
	
	background-color:#006666;
	position: fixed;
	left: 0px;
	right: 0px;
	border-bottom: 1px solid #423940;
	padding: 0px 15px;
	z-index: 10;

}
header .row{

	justify-content: space-between;
	align-items: center;
}

header .brand-name a{
	text-decoration: none;
	font-size: 22px;
	font-weight: 600;
	color: #ffff;
	text-transform: uppercase;
	position: relative;
     
}


header .navbar ul{
	list-style: none;
	padding: 0;
	margin: 0;
 	
 }
 header .navbar ul li{
 	display: inline-block;
 	margin-left: 35px;

 }


  header .navbar ul li a{
  	font-size: 15px;
  	text-decoration: none;
  	line-height: 72px;
  	color: #ffff;
  	display: block;
  	font-weight: 600;
  	position: relative;


  }
 

/*Home start*/

.home{
	min-height: 100vh;
	background-image: url(land.png);
	background-repeat: no-repeat;
	  background-size: cover;
	  background-position: center;
	  padding: 15px;
}


.home .full-screen{

	min-height: 100vh;
}
 .home .home-content{
 
 	flex: 0 0 100%;
 	max-width: 100%;
 	display: flex;
 	flex-wrap: wrap;
 	align-items: center;
 }
 .home .home-content .block{

 	flex: 0 0 75%;
 	max-width: 75%;
 	padding-left: 35px;
 	border-left: 5px solid #006666;
 	margin-top: 50px;
 }

 .home .home-content .block h1{
 	color: #006666;
 	font-size: 50px;
 	font-weight: 600;
 	margin: 0;
 	padding: 0;
 	transition: all .8s ease;
 
 }
.butt{
	display: inline-block;
	padding: 10px 20px;
	margin-top: 15px;
	background-color:  #006666;
	border-radius: 40px;
	color: white;
	font-size: 16px;
	text-decoration: none;
	
	box-shadow:0 10px 25px 0 rgba(0, 0, 0, 0.2);
}


@media screen and (max-width: 1086px){
	.home .home-content .block h1{
		font-size: 40px;

	}
	
}

@media screen and (max-width: 835px){
	
	.home .home-content .block h1{
		font-size: 30px;
	}
	
	header{
		padding: 15px;
		position: fixed;
		background-color: #ffff;
		border:none;
	}
	header .brand-name a{
		color: #006666;
	}
	
	
	.navbar{
		position: absolute;
		background-color: #ffffff;
		width: 100%;
		left: 0px;
		top: 60px;
		padding: 15px;
		border-top: 1px solid #eeeeee;
		display: none;
		text-align: center;
		
	}
	


	header .navbar ul li{
		display: block;
		margin-left: 0;
	}
	header .navbar ul li a{
		line-height: 42px;
		color: #000000;
	}
	.about-section .about-img{
		margin-bottom: 30px;
	}

	.about-section .about-content,
	.about-section .about-img{
	flex: 0 0 100%;
	max-width: 100%;

}
.about-img{
	display: none;
}
	
	
	
}


@media screen and (max-width: 616px){
	.home .home-content{
		margin-top: 150px;
	}
	.home .home-content .block h1{
		font-size: 30px;
		color: #006666;
	}
	
	.home .home-content .block{
		margin-top: 40px;
		padding-left: 20px;
	}
	.about-section .about-content .stats .stat-box{
		flex:0 0 50%;
		max-width: 50%;
	}
	

.home{
	background-image: url(cam.png);
}

}



/*about start*/

.about-section{
	padding: 80px 0;

}
.about-section .about-img{

	flex: 0 0 33.33%;
	max-width: 33.33%;
	padding: 0 15px;

}
.about-section .about-img .img-box img{
	width: 100%;
	display: block;
}
.about-section .about-content{

	flex: 0 0 66.66%;
	max-width: 66.66%;
}

.section-title{

	flex: 0 0 100%;
	max-width: 100%;
	margin-bottom: 10px;
}
.section-title h1{

	display: inline-block;
	font-size: 40px;
	color: #000000;
	font-weight: 700;
	margin: 0;
	position: relative;
}
.section-title h1:before{
	content: '';
	box-sizing: border-box;
	position: absolute;
	left: 0;
	bottom: 0;
	width: 80px;
	height: 3px;
	background-color: #006666;

}
.about-section .section-title{
	margin-bottom: ;
}
.about-section .about-content p{
	font-size: 16px;
	color: #555555;
	line-height: 26px;
	margin: 0;
}
.about-section .about-content .stats .stat-box{
	flex: 0 0 25%;
	max-width: 25%;
	padding: 0 15px;
	text-align: center;
	margin-top: 30px;

}
.about-section .about-content .stats .stat-box h2{
   font-size: 30px;
   color: #000000;
   margin: 0 0 5px;
}
.about-section .about-content .stats .stat-box h5{
   font-size: 16px;
   color: black;
   font-weight: 600;
   text-transform: uppercase;
}


</style>


</head>
<body>

<!--header start-->
<header>
	<div class="container">
		<div class="row">
		<div class="brand-name">
			<a href="" class="logo">Banking System</a>
			
		</div>
	
		<div class="navbar" id="navbarto">
			<ul>
				<li><a href="">.</a></li>
				<li><a href=""></a></li>
			</ul>
			
		</div>
		
	</div>
	</div>
</header>

<!--header end-->


<!--land start-->

<section class="home" id="home">
<div class="container">
	<div  class="row full-screen">
		<div class="home-content">
			<div class="block">
				<h1>Transfer Money and</h1>
				<h1> view customer details.</h1>
				<a  class="butt" href="cutomer.php"  ><span>View Customer</span></a>
			
			</div>
		</div>
	</div>
</div>
	
</section>

<!--about start-->
<section  class="about-section" id="about">
	<div class="container">
		<div class="row">
			<div class="about-img">
				<div class="img-box">
					<img src="transfer.png" alt="logo">
					
				</div>
				
			</div>
			<div class="about-content">
				<div class="row">
				<div class="section-title">
					<h1>Transfer Money</h1>
				</div>
			</div>
				<p>Now you can Transfer Money to the customer</p>
				<div class="stats">
					<div class="row">
						<div class="stat-box">
							<a class="butt" href="form.php"  ><span>Transfer</span></a>
							<br><br>
							<a class="butt" href="transaction.php"  ><span>All transaction</span></a>
						</div>
						
						
						
						
					</div>
					
				</div>
			</div>
			
		</div>
		
	</div>
	


</section>
<br><br><br><br>
<!--about end-->
  
</body>
</html>