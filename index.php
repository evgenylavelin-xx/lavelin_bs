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
			<div class = "col-sm-4" id="logotype"><div>
			<div class = "col-sm-8" id="navigation">
				<jdoc:include type="modules" name="navigation" style = "none"/>
			<div>
		<div>
		<div class="row" id="banner">
			
		<div>
	<div>
	<div class="container" id="middle"><div>
	<div class="container" id="bottom"><div>


	<jdoc:include type="component" />
	<jdoc:include type="modules" name="bottom" />
</body>