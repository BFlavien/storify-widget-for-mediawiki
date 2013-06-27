<?php

// Protect against register_globals vulnerabilities.
// This line must be present before any global variable is referenced.
if( !defined('MEDIAWIKI') ){
	echo("This is an extension to the MediaWiki package and cannot be run standalone.\n");
	die(-1);
}

// Extension credits that will show up on Special:Version    
$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'StorifyWidget',
	'version'        => '0.1',
	'author'         => 'Flavien Bossiaux', 
	'url'            => 'https://github.com/BFlavien/storify-widget-for-mediawiki',
	'descriptionmsg' => 'storifywidget-descriptionmsg',
	'description'    => 'storifywidget-description'
);

// Load the main class of the extension and his i18n
$wgAutoloadClasses['StorifyWidget']        = dirname( __FILE__ ) . "/StorifyWidget.body.php";
$wgExtensionMessagesFiles['StorifyWidget'] = dirname( __FILE__ ) . '/StorifyWidget.i18n.php';

$wgResourceModules['StorifyWidget'] = array(	
	'localBasePath' => dirname( __FILE__ ),
	'remoteExtPath' => 'StorifyWidget'
);

$wgHooks['ParserFirstCallInit'][] = 'wfStorifyWidget';

// Hook our callback function into the parser
function wfStorifyWidget( Parser $parser ) {
	$StorifyWidget = new StorifyWidget;
	
	// When the parser sees the <sample> tag, it executes 
	// the 'createWidget' function of '$StorifyWidget' previously created
	$parser->setHook( 'storifywidget', array($StorifyWidget, 'createWidget') );
	
	// Always return true from this function. The return value does not denote
	// success or otherwise have meaning - it just must always be true.
	return true;
}
