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
include("core/controller/ModuleUpdateController.php");
	
class ModuleUpdateStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function ModuleUpdateStarter($fetch){
		
		//Setup the class page
		$ed = new ModuleUpdateController($fetch);
	}
}

?>