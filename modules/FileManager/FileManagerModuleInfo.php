<?php
/**
 * Menu Module Information
 */
class ModuleInfo extends Info{
	
	/**
	 * Setup system
	 */
	public function ModuleInfo(){
		
		//Setup Unix
		$this->unix = "FileManager";
		
		//Title setup
		$this->title = "ContentMadeSimple FileManager";
		
		//Setup Author
		$this->author = "ContentMadeSimple Integration Team";
		
		//Support URL
		$this->support = "http://norox.org/cms";
		
		//Version
		$this->version = "1.0";
		
		//Administration Area Exists
		$this->admin = true;
		
		//Overriding Anything
		$this->overrider = false;
		
		//Organisation Committing Development
		$this->organisation = "ContentMadeSimple Core Development Team";
	}
}

?>