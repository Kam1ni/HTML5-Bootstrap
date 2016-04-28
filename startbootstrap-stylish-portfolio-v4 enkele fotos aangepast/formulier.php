<!DOCTYPE html>
     

<html lang="nl">
	<head>
		<title>Verwerking feedbackformulier</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/stylish-portfolio.css" rel="stylesheet">
		
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"/>
        <link href="css/stijl.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="logo">
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="index.html#top" onclick=$ ( "#menu-close").click();>Webbusters</a>
            </li>
            <li>
                <a href="index.html#top" onclick=$ ( "#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="index.html#about" onclick=$ ( "#menu-close").click();>Over Ons</a>
            </li>
            <li>
                <a href="index.html#services" onclick=$ ( "#menu-close").click();>Team</a>
            </li>
            <li>
                <a href="index.html#portfolio" onclick=$ ( "#menu-close").click();>Portfolio</a>
            </li>
            <li>
                <a href="index.html#contact" onclick=$ ( "#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>
		
		<section class="services callout">
			<div class="container">
			<div class="col-lg-12">
				<div>
					<h1>Bedankt</h1>           
					<p>We gaan met de input aan de slag</p>
				</div>			
				<p> Hieronder kun je nog eens nalezen wat je verstuurde</p>		
				<p>Je vulde de volgende gegevens in:</p>			
				<ul>
					<li><?php echo $_POST["name"]; ?></li>
					<li><?php echo $_POST["email"]; ?></li>
					<li><?php echo $_POST["message"]; ?></li>                    
				</ul>
			</div>
			</div>
		</section>
        
        
        <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Thomas More Kempen</strong>
                    </h4>
                    <p>Kleinhoefstraat 4
                        <br>B - 2440 Geel</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> tel +32 14 56 23 10</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:info.geel@thomasmore.be">info.geel@thomasmore.be </a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/ToegepasteInformatica.ThomasMoreBE/?ref=ts&fref=ts"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/thomasmorebe"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://www.thomasmore.be/"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                </div>
            </div>
        </div>
    </footer>
		
		
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<!-- Custom Theme JavaScript -->
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
		
		
	</script>
	</body>
</html>

