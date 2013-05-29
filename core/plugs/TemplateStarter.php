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
include("core/controller/TemplateController.php");
	
class TemplateStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function TemplateStarter($fetch){
		
		//Setup the class page
		$ed = new TemplateController($fetch);
	}
}

?>