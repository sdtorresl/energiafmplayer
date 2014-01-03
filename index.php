<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<html>
	<head>
		<meta charset="utf-8">

		<!-- Joomla head -->
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

		<!-- <title>Energia FM Player</title> -->

		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/reset.css">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css">
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

		<!-- Javascript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.jplayer.js" ></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/minified/jquery.mCustomScrollbar.min.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/minified/jquery.mousewheel.min.js"></script>
	</head>

	<body>
		<!-- Facebook code -->
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

		<script>
		    (function($){
		        $(window).load(function(){
		            $("#newsContainer").mCustomScrollbar();
		        });
		    })(jQuery);
		</script>

		<header>
			<div id="header">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" alt="logo" id="logo">
				<div id="playerContainer">			
					<div id="cover"></div>

					<div id="jquery_jplayer_1" class="jp-jplayer"></div>

					<div id="jp_container_1" class="jp-audio">
					    <div class="jp-type-single">
					        <div class="jp-gui jp-interface">
					            <ul class="jp-controls">

					                <!-- comment out any of the following <li>s to remove these buttons -->

					                <li><a href="javascript:;" class="jp-play" tabindex="1">
					                		<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-play.png" alt="play">
					                	</a>
					                </li>
					                <li>
					                	<a href="javascript:;" class="jp-mute" tabindex="1" title="mute">
					                		<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-volume.png" alt="mute">
					                	</a>
					                </li>
					            </ul>
					            
					            <!-- you can comment out any of the following <div>s too -->

					            <div class="jp-volume-bar">
					                <div class="jp-volume-bar-value"></div>
					            </div>
					            <div class="jp-current-time"></div>                
					        </div>
					        <div class="jp-title">
					            <ul>
					                <li>Energía FM</li>
					            </ul>
					        </div>
					        <div class="jp-no-solution">
					            <span>Actualización requerida</span>
					            Para reproducir este contenido usted necesita adquirir la versión más reciente de su navegador o actualizar su versión del plugin de <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash Player</a>.
					        </div>
					    </div>
					</div>

					<div id="shareSong">
						<p>Compartir canción en 
							<span id="facebookShare"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-fb.png" alt="facebook"></span>
							<span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-tw.png" alt="tweeter"></span>
						</p>
					</div>
				</div>
			</div>
		</header>

		<div id="main">
			<div id="program" class="upperBoxes box">
				<h1 id="programTittle">Programación</h1>
				<ul>
					<li>
						<h2>Nombre Programa</h2>
						<p>Lun. a Vie. de 6am a 12pm</p>
					</li>
					<li>
						<h2>Nombre Programa</h2>
						<p>Lun. a Vie. de 6am a 12pm</p>
					</li>
					<li>
						<h2>Nombre Programa</h2>
						<p>Lun. a Vie. de 6am a 12pm</p>
					</li>
					<li>
						<h2>Nombre Programa</h2>
						<p>Lun. a Vie. de 6am a 12pm</p>
					</li>
					<li>
						<h2>Nombre Programa</h2>
						<p>Lun. a Vie. de 6am a 12pm</p>
					</li>
					<li>
						<h2>Nombre Programa</h2>
						<p>Lun. a Vie. de 6am a 12pm</p>
					</li>
				</ul>
			</div>

			<div id="news" class="upperBoxes box">
				<h1 id="newsTittle">Noticias</h1>
				<div id="newsContainer">
					<ul>
						<li class="itemNews">
							<img class="imgNews" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/news.png">
							<h2>Lorem ipsum dolor</h2>
							<p>Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<a href="" class="readMore">Leer más</a>
						</li>
						<li class="itemNews">
							<img class="imgNews" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/news.png">
							<h2>Lorem ipsum dolor</h2>
							<p>Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<a href="" class="readMore">Leer más</a>
						</li>
						<li class="itemNews">
							<img class="imgNews" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/news.png">
							<h2>Lorem ipsum dolor</h2>
							<p>Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<a href="" class="readMore">Leer más</a>
						</li>
						<li class="itemNews">
							<img class="imgNews" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/news.png">
							<h2>Lorem ipsum dolor</h2>
							<p>Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<a href="" class="readMore">Leer más</a>
						</li>
						<li class="itemNews">
							<img class="imgNews" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/news.png">
							<h2>Lorem ipsum dolor</h2>
							<p>Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<a href="" class="readMore">Leer más</a>
						</li>
					</ul>
				</div>
			</div>

			<div id="podcasts" class="upperBoxes box">
				<h1 id="podcastsTittle">Podcasts</h1>
				<ul>
					<li class="odd">
						<h2>Lorem ipsum</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<span class="podcastPlay"><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-play.png"></a></span>
					</li>
					<li class="even">
						<h2>Lorem ipsum</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<span class="podcastPlay"><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-play.png"></a></span>
					</li>
					<li class="odd">
						<h2>Lorem ipsum</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<span class="podcastPlay"><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-play.png"></a></span>
					</li>
					<li class="even">
						<h2>Lorem ipsum</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<span class="podcastPlay"><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-play.png"></a></span>
					</li>
				</ul>
			</div>

			<div id="facebook" class="lowerBoxes box">
				<h1 id="facebookTittle">Síguenos en Facebook</h1>
				<div class="fb-like-box" data-href="https://www.facebook.com/EnergiaFmOnline" data-width="270" data-height="220" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
			</div>

			<div id="tweets" class="lowerBoxes box">
				<!-- <h1 id="tweetsTittle">Tweets</h1> -->
				<a class="twitter-timeline"  href="https://twitter.com/EnergiaFmOnline"  data-widget-id="418782439649972224">Tweets por @EnergiaFmOnline</a>
    			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    			</script>
			</div>

			<div id="contact" class="lowerBoxes box">
				<h1 id="contactTittle">Contacto</h1>
				<ul class="contactText">
					<li>Cra 123 Risque 67-89</li>
					<li>storres@exeamedia.com</li>
					<li>3251888</li>
					<li>3152238974</li>
				</ul>
			</div>

			<div id="networks" class="lowerBoxes box">
				<h1 id="networksTittle">Redes         
					<div class="socialImg">
						<a href="https://twitter.com/EnergiaFmOnline" id="twButton"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-tw.png" alt="">		<a href="https://www.facebook.com/EnergiaFmOnline" id="fbButton"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-fb.png" alt="" width="7px"></a>
					</div>     
				</h1>
			</div>
		</div>	

		<footer>
			<div id="info">
				<div id="license">
					<p>Copyright 2013. Energia. Todos los derechos reservados</p>
				</div>
				<div id="credits">
					<p>Desarrollado por <a href="http://exeamedia.com">Exea</a></p>
				</div>
			</div>
		</footer>

	</body>
</html>