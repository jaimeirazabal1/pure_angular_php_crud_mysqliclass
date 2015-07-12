<?php 
require_once("connect.php");

class User extends Connection{

	private $dbname='user';

	public function __construct(){
		parent::__construct();
	}
	public function create($data){
		if (isset($data['password'])) {
			$data['password'] = md5($data['password']);
			return $this->db->insert($this->dbname,$data);
		}
	}
	public function login($user,$password){
		$password = md5($password);
		$this->db->where('username',$user);
		$this->db->where('password',$password);
		$this->db->get("user");
		return $this->db->count;
	}

}

 ?>