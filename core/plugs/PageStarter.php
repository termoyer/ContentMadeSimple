<?php
/*
 *
 * GPL v4 
 * (c) ContentMadeSimple 2013.
 *
 * Written by Marco Voigt, Norox Media-Solutions (TM)
 *
 */
 
//Controller of the paging collector.
include("core/controller/PageController.php");
	
class PageStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function PageStarter($fetch){
		
		//Setup the class page
		$pc = new PageController($fetch);
	}
}

?>