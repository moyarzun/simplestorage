<html>
<head>
</head>
<body>
	<center><img src="/app/webroot/img/sslogo.png" style="overflow:hidden; border:none; height:300px; width:390px;" />

		<div id="login" style="width: 300px"> 
			<?php
			    echo $this->Session->flash('auth');
			    echo $this->Form->create('User');
			    echo $this->Form->input('username');
			    echo $this->Form->input('password');
			    echo $this->Form->end('Login');
?>
		</div>
</center>
</body>
</html>