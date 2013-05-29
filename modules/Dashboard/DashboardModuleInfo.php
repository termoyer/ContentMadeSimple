<?php
include_once("core/lib/ModuleInfo.php");

/**
 * Menu Module Information
 */
class ModuleInfo extends Info{
	
	/**
	 * Setup system
	 */
	public function ModuleInfo(){
		
		//Setup Unix
		$this->unix = "Dashboard";
		
		//Title setup
		$this->title = "ContentMadeSimple jQuery Dashboard";
		
		//Setup Author
		$this->author = "ContentMadeSimple Development Team";
		
		//Support URL
		$this->support = "http://norox.org/cms";
		
		//Version
		$this->version = "1.0.0";
		
		//Administration Area Exists
		$this->admin = false;
		
		//Overriding Anything
		$this->overrider = false;
		
		//Organisation Committing Development
		$this->organisation = "ContentMadeSimple Core Development Team";
	}
	
	/**
	 * Install/Activation instructions 
	 */
	public function InstallInfo(){
		//None
	}
}

?>