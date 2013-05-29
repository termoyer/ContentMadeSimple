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
		$this->unix = "Nicedit";
		
		//Title setup
		$this->title = "ContentMadeSimple Nicedit Integration";
		
		//Setup Author
		$this->author = "ContentMadeSimple Development Team";
		
		//Support URL
		$this->support = "http://norox.org/cms";
		
		//Version
		$this->version = "1.1";
		
		//Administration Area Exists
		$this->admin = true;
		
		//Overriding Anything
		$this->overrider = false;
		
		//Organisation Committing Development
		$this->organisation = "ContentMadeSimple Core Development Team";
	}
}

?>