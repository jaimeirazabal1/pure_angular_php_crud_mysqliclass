<?php 
require_once("../db/user.php");
$postdata = json_decode(file_get_contents("php://input"));

if (isset($postdata->user) and isset($postdata->password)) {

	$user = $postdata->user;
	$password = $postdata->password;
	
	$user_object = new User();
	$response = $user_object->login($user,$password);

	echo json_encode(array('message'=>$response));

}else{
	echo json_encode(array('message'=>'User and password is required!'));
}


?>