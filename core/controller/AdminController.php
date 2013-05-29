<?php

//Default Controller
include("core/controller/controller.php");

class AdminController extends Controller{
	
	/**
	 * Starts the controller of the classes system
	 */
	public function AdminController($page){
		
		//Setup basic variables
		$this->varSetup();
		
		//Sets the name of the other classes
		$this->setSystem("Admin");
		
		//Setup the page
		$this->setup("ContentMadeSimple Administration");
		
		//Set the requests accepted
		$this->putRequests();
		
		//Process Request
		$this->processRequest();
		
		$this->displayPage();
	}
	
	/**
	 * Sets the requests of the system
	 */
	protected function putRequests(){
		
		//Create the array of request
		$requests = array(
							"login",
							"loginSubmit",
							"logout"
						);
		
		//Set all the request
		$this->setRequests($requests);
	}
	
	/**
	 * Show default classes
	 */
	protected function defaultRequest(){
		
		//If the user is logged in
		if($this->getModel()->checkLogin(true))
		{
			//Redirect to Dashboard
			$this->getPaging()->setRedirect('?system=Dash&page=index');	
		}
		else
		{
			//Redirect to Login
			$this->getPaging()->setRedirect('?system=Admin&page=login');	
		}
	}

	/**
	 * Show default classes
	 */
	protected function loginRequest(){
		
		//If the user is logged in
		if($this->getModel()->checkLogin(true))
		{
			//Redirect to Dashboard
			$this->getPaging()->setRedirect('?system=Dash&page=index');	
		}
		
	}
	
	/**
	 * Login Submit System
	 */
	protected function loginSubmitRequest(){
		
		$username = $this->getModel()->getInputString("username");
		$password = $this->getModel()->getInputString("password");
		
		if(empty($username)||empty($password))
		{
			//Show that the details are missing
			$this->getView()->missingDetails();
		}
		//If entered details
		else
		{
			//Check the user details
			$check = $this->getModel()->checkUserDetails($username, $password);
			
			//Direct to Dash if details are correct
			if($check)
			{
				//Set the login token
				$this->getModel()->setLoginToken();
				
				//Set the users access level
				$this->getModel()->setAccessLvl($username);
				
				//Redirect to the dashboard
				$this->getPaging()->setRedirect("index.php?system=Dash&page=index");
			}
			//Show failed login if the details were incorrect
			else
			{
				$this->getView()->setWrongLogin();
			}
		}
	}
	
	/**
	 * Show default classes
	 */
	protected function logoutRequest(){
		if($this->getModel()->checkLogin(true))
		{
			$this->getModel()->unsetLoginToken();
		}
	}
}

?>