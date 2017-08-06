<!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Bem vindo à página de Flávio Santos, tecladista apaixonado pelo que faz! Veja meus trabalhos!">
    <meta name="author" content="Flávio Santos">

    <title>Flávio Santos - Experiência, profissionalismo e Requinte!</title>

    <!-- Bootstrap core CSS -->
    <link href="theme/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="theme/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="theme/css/general.css" rel="stylesheet">
    <link href="theme/css/agenda.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="theme/css/custom.css" rel="stylesheet">
	<link href="theme/css/owl.carousel.css" rel="stylesheet">
    <link href="theme/css/owl.theme.css" rel="stylesheet">
	<link href="theme/css/style.css" rel="stylesheet">
	<link href="theme/css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="theme/css/magnific-popup.css"> 
	
	<script src="theme/js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="theme/js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="theme/js/PIE_IE678.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="theme/js/html5shiv.js"></script>
	<![endif]-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="titulo wow fadeIn" data-wow-delay="0.4s">Flavio Santos</h1>
			<h3 class="slogan wow fadeIn" data-wow-delay="0.6s">Experiência, profissionalismo e requinte.</h3>
		</div>    
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#videos"> <img class="img_scroll" src="theme/img/icon/circle.png" alt=""> </a>
			</div>
		</div>
    </div>
	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Navegar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">Flavio Santos</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="menuItem"><a href="#videos">Vídeos</a></li>
					<li class="menuItem"><a href="#social">Redes Sociais</a></li>
					<li class="menuItem"><a href="#contato">Entre em contato!</a></li>
				</ul>
			</div>
		   
		</div>
	</nav>

<!---------------------------Casamentos------------------------------------>
    
   <div id="videos" class="content-section-a">
        <div class="container">
                <div class="wow fadeInLeftBig">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                            <h3>Vídeos</h3>
                        </div>
                    </div>
                @foreach($videos as $cada)
                    <div class="col-sm-6 pull-right wow fadeInRightBig" style="margin-bottom:60px">
                        <h4><?php echo $cada->tituloVideo?></h4>
                        <p>
                        <?php echo $cada->descricaoVideo?>
                        </p>
                        <div class="videoWrapper">
                            <iframe width="600" height="338" src="https://www.youtube.com/embed/<?php echo $cada->video?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>

                @endforeach
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- -------------------------- redes -------------------------------------- -->
<div id="social" class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Siga-nos!</h2>
                <p class="lead" style="margin-top:0">Muito mais conteúdo nas nossas redes sociais.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3  block wow bounceIn">
                <div class="row">
                    <a href="https://fb.com/FlavioSantosTecladista" target="_blank">
                        <div class="col-md-4 box-icon rotate"> 
                            <i class="fa fa-facebook fa-4x "> </i> 
                        </div>
                        <div class="col-md-8 box-ct">
                            <h4>FlavioSantosTecladista </h4>
                            <p> </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 block wow bounceIn">
                <div class="row">
                    <a href="https://www.youtube.com/channel/UCVmzFZXaakfzRDMWYmrY1qw" target="_blank">
                        <div class="col-md-4 box-icon rotate"> 
                            <i class="fa fa-youtube fa-4x"> </i> 
                        </div>
                        <div class="col-md-8 box-ct">
                            <h4>Flávio Santos Tecladista</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3  block wow bounceIn">
                <div class="row">
                    <a href="https://twitter.com/fstecladista" target="_blank">
                        <div class="col-md-4 box-icon rotate"> 
                            <i class="fa fa-twitter fa-4x "> </i> 
                        </div>
                        <div class="col-md-8 box-ct">
                            <h4>@FSTecladista</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 block wow bounceIn">
                <div class="row">
                    <a href="Instagram.com/FlavioSantosTecladista" target="_blank">
                        <div class="col-md-4 box-icon rotate"> 
                            <a href="Instagram.com/FlavioSantosTecladista" target="_blank"><i class="fa fa-instagram fa-4x "> </i></a> 
                        </div>
                        <div class="col-md-8 box-ct">
                            <h4>@FlavioSantosTecladista</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
        <button type="button"><span></span></button>
    </div>
	<!-- Contact -->
	<div id="contato" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Entre em contato!</h2>
				<p class="lead" style="margin-top:0"/p>
			</div>
			
			<form role="form" action="" method="post" >
				<div class="col-md-6">
					<div class="form-group">
						<label for="contatoNome">Nome:</label>
						<div class="input-group">
							<input type="text" class="form-control" name="contatoNome" id="contatoNome" placeholder="Seu nome" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-user form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="contatoEmail">E-Mail:</label>
						<div class="input-group">
							<input type="email" class="form-control" id="contatoEmail" name="contatoEmail" placeholder="Seu e-mail" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope form-control-feedback"></i></span>
						</div>
					</div>
					<div class="form-group">
						<label for="contatoTelefone">Telefone:</label>
						<div class="input-group">
							<input type="email" class="form-control" id="contatoTelefone" name="contatoTelefone" placeholder="Seu Telefone" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-phone form-control-feedback"></i></span>
						</div>
					</div>
					
				</div>
                <div class="col-md-6">
					<div class="form-group">
						<label for="InputMessage">Mensagem:</label>
						<div class="input-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="8" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input type="submit" name="enviar" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">

			</form>
					<address>
					Ou podemos conversar pelo  
					<i class="fa fa-mobile"></i> (43) 9 9837-2311<br>
					</address>

			<hr class="featurette-divider hidden-lg">
			</div>
		</div>
	</div>
	
	
	
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title"></h3>
            <p></a>
            </p>
	   
          </div> <!-- /col-xs-7 -->

          <div class="col-md-5">
            <div class="footer-banner">
              <h3 class="footer-title">Flávio Santos</h3>
              <ul>
                <li>Experiência, profissionalismo e requinte.</li>
              </ul>
             
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="theme/js/geral.js"></script>
    <script src="theme/js/jquery-1.10.2.js"></script>
    <script src="theme/js/bootstrap.js"></script>
	<script src="theme/js/owl.carousel.js"></script>
	<script src="theme/js/script.js"></script>
	<!-- StikyMenu -->
	<script src="theme/js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="theme/js/jquery.corner.js"></script> 
	<script src="theme/js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="theme/js/classie.js"></script>
	<script src="theme/js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="theme/js/jquery.magnific-popup.js"></script> 
</body>

</html>
