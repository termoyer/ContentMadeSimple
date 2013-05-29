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
include("core/controller/DashController.php");
	
class DashStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function DashStarter($fetch){
		
		//Setup the class page
		$ac = new DashController($fetch);
	}
}

?>