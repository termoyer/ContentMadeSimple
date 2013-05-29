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
include("core/controller/SettingsController.php");
	
class SettingsStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function SettingsStarter($fetch){
		
		//Setup the class page
		$ac = new SettingsController($fetch);
	}
}

?>