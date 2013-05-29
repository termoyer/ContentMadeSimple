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
include("core/controller/GeneralSettingsController.php");
	
class GeneralSettingsStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function GeneralSettingsStarter($fetch){
		
		//Setup the class page
		$ed = new GeneralSettingsController($fetch);
	}
}

?>