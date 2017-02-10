<?php defined( '_JEXEC' ) or die( 'Restricted access' );
	$app = JFactory::getApplication();
	$params = $app->getTemplate(true)->params;

	$doc = JFactory::getDocument();

	$this->addStyleSheet( 'templates/' . $this->template . '/css/template.css' );	

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
	</head>
	<body>
		<div class="container" id="top">
			<div class="row" id="header">
				<div class = "col-sm-4" id="logotype"></div>
				<div class = "col-sm-8" id="navigation">
					<jdoc:include type="modules" name="navigation" style = "none"/>
				</div>
			</div>
			<div class="row" id="banner"></div>
		</div>
		<div class="container" id="middle"></div>
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
		<div class="container" id="bottom">
			<div class="row" id="footer">
				<jdoc:include type="modules" name="footer" style = "none"/>
				<jdoc:include type="modules" name="debug" style = "none"/>
			</div>
		</div>
	</body>
</html>