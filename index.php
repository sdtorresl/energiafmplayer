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
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/favicon.ico" type="image/x-icon">

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

		<div class="pageContainer">

			<header>
				<div id="header">
					<a href="http://energia.fm/online">
						<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" alt="logo" id="logo">
					</a>

					<div id="playerContainer">			
						<div id="cover">
							<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/no-cover.png" alt="">
						</div>

						<div id="jquery_jplayer_1" class="jp-jplayer"></div>

						<div id="jp_container_1" class="jp-audio">
							<div class="jp-artist">
					            <p>Energía FM</p>
					        </div>

							<div class="jp-title">
					            <p>Energía FM</p>
					        </div>

							<div class="jp-controls">	
								<div class="control">
								    <a href="javascript:;" class="jp-play" tabindex="1">
								    	<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-play.png" alt="play">
								    </a>
								    <a href="javascript:;" class="jp-pause" tabindex="1">
								    	<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-pause.png" alt="pause">
								    </a>
								</div>

								<div class="control">
								    <a href="javascript:;" class="jp-mute" tabindex="1" title="mute">
								    	<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-volume.png" alt="mute">
								    </a>
								</div>

								<div class="jp-volume-bar">
									<div class="jp-volume-bar-value"></div>
								</div>
							</div>
						    
						    <div class="jp-nextSong">
						    	<h3>Siguiente canción</h3>
						    	<p>Artista- canción</p>
						    </div>

							<div class="jp-no-solution">
								<span>Actualización requerida</span>
								Para reproducir este contenido usted necesita adquirir la versión más reciente de su navegador o actualizar su versión del plugin de <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash Player</a>.
							</div>
						</div>

						<div id="shareSong">
							<p>Compartir canción en 
								<span id="facebookShare">
									<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fenergia.fm/online/reproductor">
										<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-fb.png" alt="facebook">
									</a>
								</span>
								<span id="twitterShare">
									<a target="_blank" href="twitter.com">
										<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-tw.png" alt="twitter">
									</a>
									
								</span>
							</p>
						</div>
					</div>
				</div>
			</header>

			<section id="main">
				<article id="program" class="upperBoxes box">
					<h1 id="programTittle">Programación</h1>
					<ul>
						<!-- List the programs -->
						<?php
							$catid = 3; // Programs category

							// Get a db connection.
							$db = JFactory::getDbo();
							 
							// Create a new query object.
							$query = $db->getQuery(true);
							 
							// Select all records from the user profile table where key begins with "custom.".
							// Order it by the ordering field.
							$query->select($db->quoteName(array('id', 'title', 'introtext', 'published')));
							$query->from($db->quoteName('#__k2_items'));
							$query->where($db->quoteName('catid') . ' = '. $db->quote($catid));
							$query->order('id DESC');
						
							// Reset the query using our newly populated query object.
							$db->setQuery($query);
							 
							// Load the results as a list of stdClass objects (see later for more options on retrieving data).
							$results = $db->loadObjectList();
							
							$row = $db->loadRowList();
							foreach ($row as $program => $item) {
								// Only show published items
								if ($item[3] == "1") {
									echo "<li>";
									echo "<h2>$item[1]</h2>";
									echo "$item[2]";
									echo "</li>";
								}
							}
						?>
					</ul>
				</article>

				<article id="news" class="upperBoxes box">
					<h1 id="newsTittle">Noticias</h1>
					<div id="newsContainer">
						<jdoc:include type="component" />
					</div>
				</article>

				<article id="podcasts" class="upperBoxes box">
					<h1 id="podcastsTittle">Podcasts</h1>
					
					<div id="podcastContainer">
						<ul class="listPodcasts">

							<?php
							$catid = 2; // Programs category

							// Get a db connection.
							$db = JFactory::getDbo();
							 
							// Create a new query object.
							$query = $db->getQuery(true);
							 
							// Select all records from the user profile table where key begins with "custom.".
							// Order it by the ordering field.
							$query->select($db->quoteName(array('id', 'title', 'introtext', 'published', 'extra_fields_search')));
							$query->from($db->quoteName('#__k2_items'));
							$query->where($db->quoteName('catid') . ' = '. $db->quote($catid));
							$query->order('id DESC');
						
							// Reset the query using our newly populated query object.
							$db->setQuery($query);
							 
							// Load the results as a list of stdClass objects (see later for more options on retrieving data).
							$results = $db->loadObjectList();
							
							$row = $db->loadRowList();
							foreach ($row as $key => $item) {
								// Only show published items
								if ($item[3] == "1") {

									if (($key+1) % 2 == 0) 
										$class = "even";
									else
										$class  = "odd";
									
									$playerClass = $key +2; 

									// Get the link of the media
									$link = $item[4];

									?>

									<!-- Put player scripts for all podcasts -->
									<script type="text/javascript">
									$(document).ready(function() {
										$("<?php echo '#jquery_jplayer_' . $playerClass; ?>").jPlayer({
											ready: function(event) {
												$(this).jPlayer("setMedia", {
													mp3: "<?php echo $link; ?>"
												});
											},
											swfPath: "http://jplayer.org/latest/js",
											supplied: "mp3",
											cssSelectorAncestor: "<?php echo '#jp_container_' . $playerClass; ?>",
										});
									});
									</script>

									<div id="<?php echo 'jquery_jplayer_' . $playerClass; ?>" class="jp-jplayer"></div>
									<div id="<?php echo 'jp_container_' . $playerClass; ?>" class="jp-audio">
										<li class='<?php echo $class; ?>'>
											<h2><?php echo $item[1]; ?></h2>

											<?php echo $item[2]; ?>

											<span class='podcastPlay'>
												<a href="javascript:;" class="jp-play" tabindex="1">
													<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-play.png">
												</a>
												<a href="javascript:;" class="jp-pause" tabindex="1">
													<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-pause.png">
												</a>
											</span>
										</li>
									</div>
								<?php
								}
							}
							?>
						</ul>
					</div>
				</article>


				<aside id="facebook" class="lowerBoxes box">
					<h1 id="facebookTittle">Síguenos en Facebook</h1>
					<div class="fb-like-box" data-href="https://www.facebook.com/EnergiaFmOnline" data-width="270" data-height="220" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
				</aside>

				<aside id="tweets" class="lowerBoxes box">
					<a class="twitter-timeline"  href="https://twitter.com/EnergiaFmOnline"  data-widget-id="418782439649972224">Tweets</a>	    			
				</aside>

				<article id="contact" class="lowerBoxes box">
					<h1 id="contactTittle">Contacto</h1>
					<ul class="contactText">
						<li>Cra 123 Risque 67-89</li>
						<li>storres@exeamedia.com</li>
						<li>3251888</li>
						<li>3152238974</li>
					</ul>
				</article>

				<aside id="networks" class="lowerBoxes box">
					<h1 id="networksTittle">Redes         
						<div class="socialImg">
							<a target="_blank" href="https://twitter.com/EnergiaFmOnline" id="twButton"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-tw.png" alt="">		
							<a target="_blank" href="https://www.facebook.com/EnergiaFmOnline" id="fbButton"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-fb.png" alt="" width="7px"></a>
						</div>     
					</h1>
				</aside>
			</section>	

			<footer>
				<div id="info">
					<div id="license">
						<p>Copyright 2013. Energia. Todos los derechos reservados</p>
					</div>
					<div id="credits">
						<p>Desarrollado por <a target="_blank" href="http://exeamedia.com">Exea</a></p>
					</div>
				</div>
			</footer>
		</div>

	</body>
</html>