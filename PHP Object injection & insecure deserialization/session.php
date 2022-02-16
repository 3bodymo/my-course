<?php 

class User {

public $user_id;
public $user_name;
public $is_admin;

public function __construct($user_id, $user_name, $is_admin) {

	$this->user_id = $user_id;
	$this->user_name = $user_name;
	$this->is_admin = $is_admin;

}

}

$user = new User(325, "ahmed0x00", false);

if(!isset($_COOKIE['session'])) {

	$serial_user = serialize($user);
	$serial_user_encoded = base64_encode($serial_user);
	
	$cookie_name = "session";
	setcookie($cookie_name, $serial_user_encoded);
	echo "Session are set.";

}

else if(isset($_COOKIE['session'])) {

	$user_decoded = urldecode(base64_decode($_COOKIE['session'])); // O:4:"User":3:{s:7:"user_id";i:325;s:9:"user_name";s:9:"ahmed0x00";s:8:"is_admin";b:1;}
	$unserial_user = unserialize($user_decoded);
	
	//var_dump($unserial_user);

	if ($unserial_user->is_admin == true){
		echo "You are admin, here is your secret key => \"rdsd$0ksdjuik0d?skma\o\".";
	}
	else if ($unserial_user->is_admin == false){
		echo "You are normal user.";
	}

}

?>
