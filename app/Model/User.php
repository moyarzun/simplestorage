<?php 
class User extends AppModel {
	function validateLogin($data)
	{
		// Search our database where the 'username' field is equal to our form input.
		// Same with the password (this example uses PLAIN TEXT passwords, you should encrypt yours!)
		// The second parameter tells us which fields to return from the database
		// Here is the corresponding query:
		// "SELECT id, username FROM users WHERE username = 'xxx' AND password = 'yyy'"
		$user = $this->find(array('username' => $data['username'], 'password' => $data['password']), array('id', 'username'));

		if( empty($user) == false )
		{
			return $user;
		}

		return false;
	}
}
?>