<?
Class User {
	private $login = 'Developer',
			$pass = 'betapass',
			$name = 'Munzil ',
			$second_name = 'Agliullin', 
			$status = false, // authorization
			$block = false, //ban
			$access = 1; //1- user, 2-developer, 3-admin

	function __construct($login) {
		$this->login = $login;
	}
	public function SetName() {
		//
	} 	
	public function GetName($second_name) {
		if ($second_name) return $this->name .= $this->second_name; 
		else return $this->name;
	}
	public function check_link (){
		//
	}
	public function check_status() {
		return $this->status;
	}
	public function checkEnter ($pass) {
		if ($this->pass == $pass) {
			$status = true;
			setcookie('login', $this->login, time()+3600*8);
			
		} 
	}
}
?>