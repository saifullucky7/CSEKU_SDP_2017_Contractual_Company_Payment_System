<?php

/**
* 
*/
class registercontroller extends Controller
{
	
	public function index()
	{
		$this->view('register/register');
	}

	public function register()
	{
	  $Name = $_POST['Name'];
	  $usrName = $_POST['userName'];
	  $email = $_POST['email'];
	  $phoneNumbe = $_POST['phoneNumber'];
	  $address = $_POST['address'];
	  $userType = $_POST['userType'];
	  $password = $_POST['password'];
	  $password2 = $_POST['password2'];

	  $User = $this->model("User");

	 $User->get();

	  //echo $Name;
	}
}

?>