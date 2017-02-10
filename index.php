<?php defined( '_JEXEC' ) or die( 'Restricted access' );
	$app = JFactory::getApplication();
	$params = $app->getTemplate(true)->params;
	
	$templateStyle = $this->params->get('templateStyle');

	$this->addStyleSheet( 'templates/' . $this->template . '/css/template.css' );	
	$this->addStyleSheet( 'templates/' . $this->template . '/css/bootstrap.css' );	

	$document = JFactory::getDocument();
	$document->addScript('templates' . $this->template . '/js/bootstrap.js');	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<jdoc:include type="head" />
		<?php if ($templateStyle == 0) :?>
			<style>
				body, #header {background-color:#600051;}
			</style>
		<?php else :?>
			<style>
				body, #header {background-color:#1c661b;}
			</style>
		<?php endif; :?>
	</head>
	<body>
		<div class="container-fluid" id="top">
			<div class="row" id="header">
				<div class = "col-sm-4" id="logotype"></div>
				<div class = "col-sm-8" id="navigation">
					<jdoc:include type="modules" name="navigation" style = "none"/>
				</div>
			</div>
			<div class="row" id="banner"></div>
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
			<div class="row">
				<div class = "col-sm-4" id="bottom-1">
					<jdoc:include type="modules" name="bottom-1" style = "xhtml"/>
				</div>
				<div class = "col-sm-4" id="bottom-2">
					<jdoc:include type="modules" name="bottom-2" style = "xhtml"/>
				</div>
				<div class = "col-sm-4" id="bottom-3">
					<jdoc:include type="modules" name="bottom-3" style = "xhtml"/>
				</div>
			</div>
		<div class="container-fluid" id="bottom">
			<div class="row" id="footer">
				<jdoc:include type="modules" name="footer" style = "none"/>
				<jdoc:include type="modules" name="debug" style = "none"/>
			</div>
		</div>
	</body>
</html>