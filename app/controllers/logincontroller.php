<?php

/**
* 
*/
class logincontroller extends Controller
{
	
	public function index()
	{
		$this->view('login/login');

	}

	public function logout()
	{
		session_start();
		if(isset($_SESSION['login']))
		{
			session_destroy();
			header("Location: http://localhost/ccps/public/"); 
            exit();
		}
	}
	public function login()
	{
		 $userName = $_POST['userName'];
		 $password = $_POST['password'];
		 $password = md5($password);

	  $User = $this->model("User");

	  $result = $User->loginUser($userName,$password);


	  if($result == true)
	  {
	  	/* Redirect browser */
	  	$userType = $_SESSION['rolename'];
	  	header("Location: http://localhost/ccps/public/".$userType."/home"); 
        
	  }
	  else 
	  {

	  	$this->view('login/login',"This username is not abilable");
	  }

	}
}

?>