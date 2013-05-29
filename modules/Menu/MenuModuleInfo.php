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
		$this->unix = "Menu";
		
		//Title setup
		$this->title = "ContentMadeSimple Menu Editor";
		
		//Setup Author
		$this->author = "ContentMadeSimple Development Team";
		
		//Support URL
		$this->support = "http://norox.org/cms";
		
		//Version
		$this->version = "1.3";
		
		//Administration Area
		$this->admin = true;
		
		//Overriding Anything
		$this->overrider = false;
		
		//Organisation Committing Development
		$this->organisation = "ContentMadeSimple Core Development Team";
	}
}

?>