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
include("core/controller/ModulesInstallController.php");
	
class ModulesInstallStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function ModulesInstallStarter($fetch){
		
		//Setup the class page
		$ed = new ModulesInstallController($fetch);
	}
}

?>