<!DOCTYPE html>
<html>
<head>
	<title>Dan Canua - My Website</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Keywords" content="Portfolio,Dan Canua,Programming">
		<meta name="`Description" content="This is my online Portfolio. I love Web Development.">
		<meta name="viewport" content="width=device-width, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.css">
</head>
<body>
<div class="loading-bar">
<header></header>
<div class="container">
<div class="row" style="margin-top: 10%;">
	<div class="col-md-6" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine"
     data-aos-duration="1500">
		<img src="image/me.jpg" alt="Developer" class="dev-logo">
		<h4 id="myname">Dan Canua</h4>
		<span id="desc-box">I am a <span class="element"></span></span>
		<br>
		<br>
		<p class="address">
			December 5, 1994 
			<br>Cabuyao City, Laguna
		</p>
	</div>
	<div class="col-md-6">
		<div class="glossy-box" data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1500">
			<h1 id="main-text">Hi there!</h1>
			<br>
			<h3 id="second-text">Welcome to my website.</h3>
			<br>
			<p class="desc-text">I am Dan Canua, graduated of BS Computer Science. A freelance web developer in Cabuyao City, Laguna. My first encounter with web development was back in the days, when I am in mid-year in college. I love problem solving, and challenging works about programming.</p>
			<br>
			<span id="mycv"><a class="mycvclass" href="file/my_cv.docx" download="My Resume"><i class="fas fa-cloud-download-alt"></i> Download CV</a></span>
			<span id="hireme"><i class="far fa-heart"></i> Hire me now!</span>
			<br>
			<br>
		</div>
	</div>
</div>
<!-- Second row below -->
<div class="row">
	<div class="col-md-12">
		<hr class="style-seven"></hr>
	</div>
	<!-- data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500" -->
     <div class="ensure" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
     	<img src="image/medal.png">&nbsp;Everything is guaranteed in your project!
     </div>
</div>
</div> <!-- this if for container first -->
<br>
<div class="container">
	<div class="row">
		<div class="firstlayer" data-aos="fade-right"
     data-aos-duration="1500">
	     	<img src="image/check.png">
	     	<br>
	     	<p>Data Security</p>
	     </div>
	     <div class="seclayer" data-aos="fade-down"
     data-aos-duration="1500">
	     	<img src="image/check.png">
	     	<br>
	     	<p>Program optimization</p>
	     </div>
	     <div class="thirdlayer" data-aos="fade-left"
     data-aos-duration="1500">
	     	<img src="image/check.png">
	     	<br>
	     	<p>User-friendly</p>
	     </div>
	</div>
	<div class="col-md-12">
		<hr class="style-seven"></hr>
	</div>
</div><!--second container -->
<div class="container">
	<div class="technology" data-aos="fade-in">
		<p>My Technologies</p>
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="progressbar" data-animate="false">
			    <div class="circle bs" data-percent="85">
			        <div class="percent"></div>
			        <p class="icons">Bootstrap</p>
			    </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="progressbar" data-animate="false">
			    <div class="circle jq" data-percent="80">
			        <div class="percent"></div>
			        <p class="icons">Jquery</p>
			    </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="progressbar" data-animate="false">
			    <div class="circle js" data-percent="75">
			        <div class="percent"></div>
			        <p class="icons">Javascript</p>
			    </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="progressbar" data-animate="false">
			    <div class="circle php" data-percent="90">
			        <div class="percent"></div>
			        <p class="icons">PHP</p>
			    </div>
			</div> 
		</div>
	</div>
</div><!-- third container -->
<footer id="sticky-footer" class="py-4">
    <div class="container">
      <p>Copyright &copy; 2020 My Website | Developed and Designed by Dan Canua</p>
    </div>
</footer>
</div> <!-- This div is the paired to class loading bar on the top -->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.js"></script>


<!-- Bootstrap cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<!-- Cirle progress bar plugins -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/circle-progress.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>

<!-- Type.Js CDn -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script>
    var typed = new Typed('.element', {
        strings: ["web developer", "web freelancer", "web architect"],
        loop: true,
        typeSpeed: 100,
    });
</script>
</body>
</html>
