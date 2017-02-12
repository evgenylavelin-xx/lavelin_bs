<?php defined( '_JEXEC' ) or die( 'Restricted access' );
	$app = JFactory::getApplication();
	$params = $app->getTemplate(true)->params;
	
	$this->addStyleSheet( 'templates/' . $this->template . '/css/template.css' );	
	$this->addStyleSheet( 'templates/' . $this->template . '/css/bootstrap.css' );	

	$document = JFactory::getDocument();
	$document->addScript('templates' . $this->template . '/js/bootstrap.js');	
	
	$templateStyle = $this->params->get('templateStyle');
	$linkColor = $this->params->get('linkColor');
	$logotypeImage = $this->params->get('logotypeImage');
	$siteName = $app->get('sitename');
	
	if ($logotypeImage) {
		$logo = '<img src=">' . JUru::root() . $logotypeImage . '" alt=""/>';		
	}
	else {
		$logo = '<span class="site-title">' . $siteName . '</span>';
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<jdoc:include type="head" />
		<?php if ($templateStyle == 0) :?>
			<style>
				body, #header, #bottom {background-color:#600051;}
				.clear-menu > li > a:hover {color: #600051;}
			</style>
		<?php else :?>
			<style>
				body, #header, #bottom {background-color:#1c661b;}
				.clear-menu > li > a:hover {color: #1c661b;}
			</style>
		<?php endif; :?>
		<?php if ($linkColor == 0) :?>
			<style>
				.clear-menu > li > a {color: <?php echo $linkColor>;?>;}
			</style>
		<?php endif; :?>
	</head>
	<body>
		<div class="container-fluid" id="top">
			<div class="row" id="header">
				<div class = "col-sm-4" id="logotype">
					<a href = "<?php echo this->baesurl ?>">$logo</a>
				</div>
				<div class = "col-sm-8" id="navigation">
				<nav class="navbar">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topmenu" aria-expanded="false">
							<span class="sr-only">Кнопка выпадающего меню</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand .visible-xs-inline" href="#">Меню</a>
						</div>
						<div class="collapse navbar-collapse" id="topmenu">					
							<jdoc:include type="modules" name="navigation" style = "none"/>					
						</div>
					</div>
				</nav>
				</div>
			</div>
			<div class="row" id="banner">
				<jdoc:include type="modules" name="banner" style = "none"/>
			</div>
		</div>
		<div class="container-fluid" id="middle"></div>
			<div class="row">
				<div id="breadcrumbs">
					<jdoc:include type="modules" name="breadcrumbs" style = "none"/>
				</div>
			</div>
			<div class="row">
				<div class = "col-sm-4" id="left">
					<jdoc:include type="modules" name="left" style = "xhtml"/>
				</div>
				<div class = "col-sm-8" id="content">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
			</div>
			<div class="row" id="bottom">
				<div class = "col-sm-4">
					<jdoc:include type="modules" name="bottom-1" style = "xhtml"/>
				</div>
				<div class = "col-sm-4">
					<jdoc:include type="modules" name="bottom-2" style = "xhtml"/>
				</div>
				<div class = "col-sm-4">
					<jdoc:include type="modules" name="bottom-3" style = "xhtml"/>
				</div>
			</div>
		<div class="container-fluid">
			<div class="row" id="footer">
				<jdoc:include type="modules" name="footer" style = "none"/>
				<jdoc:include type="modules" name="debug" style = "none"/>
			</div>
		</div>
	</body>
</html>