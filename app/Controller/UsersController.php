<?php class UsersController extends AppController {
    var $name = 'Users';
    var $components = array('Auth'); // Not necessary if declared in your app controller

    function login_form() { } 

    /**
     *  The AuthComponent provides the needed functionality
     *  for login, so you can leave this function blank.
     */
    function login() {
		// Check if they went here after submitting the form
		// Note that all our form data is preceded by the model name ['User']
		if(empty($this->data['User']['username']) == false)
		{
			// Here we validate the user by calling that method from the User model
			if(($user = $this->User->validateLogin($this->data['User'])) != false)
			{
				// Write some Session variables and redirect to our next page!
				$this->Session->setFlash('Thank you for logging in!');
				$this->Session->write('User', $user);

				// Go to our first destination!
				$this->Redirect(array('controller' => 'my_controller', 'action' => 'my_action'));
				exit();
			}
			else
			{
				$this->Session->setFlash('Incorrect username/password!', true);
				$this->Redirect(array('action' => 'login'));
				exit();
			}
		}
	}

    function logout() {

		$this->Session->destroy();
		$this->Session->setFlash('You have been logged out!');

		// Go home!
		$this->Redirect('/');
		exit();
	}
}
?>