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
include("core/controller/EditorController.php");
	
class EditorStarter{
	
	/**
	 * Fetches the page one way or another.
	 */
	public function EditorStarter($fetch){
		
		//Setup the class page
		$ed = new EditorController($fetch);
	}
}

?>