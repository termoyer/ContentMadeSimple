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
include("core/controller/PageListController.php");
	
class PageListStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function PageListStarter($fetch){
		
		//Setup the class page
		$ac = new PageListController($fetch);
	}
}

?>