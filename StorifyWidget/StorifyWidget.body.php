<?php

class StorifyWidget {

	function createWidget($input, array $args, Parser $parser, PPFrame $frame ) {
		
		global $wgOut;

		$width = 32;
		$height = 50;
		
		/**
			Example of the output :  
			<script src="//storify.com/torontostar/search-for-rusty-the-red-panda.js"></script>
			<noscript>[
				<a href="//storify.com/torontostar/search-for-rusty-the-red-panda" target="_blank">
					View the story "Search for Rusty the red panda " on Storify
				</a>
			]</noscript>
		*/
		
		if( isset($args['src']) && $args['src'] ){
			$src = $args['src'];
		}
		else{
			return wfMessage( 'no-src-parameter' )->text();
		}
		
		if( isset($args['width']) && $args['width'] ){
			$width = $args['width'];
		}
		
		if( isset($args['height']) && $args['height'] ){
			$height = $args['height'];
		}
		
		$wgOut->addModules( 'StorifyWidget' );
		
		return '<div style="width:'.$width.'em;height:'.$height.'em;overflow:auto;"><script src="'.$src.'.js"></div></script>
				<a href="'.$src.'" target="_blank"> '.wfMessage( 'view-the-story' )->text().' </a>';
	}
}
