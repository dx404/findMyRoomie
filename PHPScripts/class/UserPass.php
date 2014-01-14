<?php 
class UserPass{ //server-commited
	private $uid;

	private $saltLength = 7;

	public function __construct($uid){
		$this->uid = $uid;
	}

	public function is_uid_available(){
		$db = new mysqli("mydb.cs.unc.edu", "duozhao", "bison;2358+13", "comp426f12db");
		$query = "SELECT `uid` FROM Password where uid='" . $this->uid . "'";
		$result = $db->query($query);
		if ($result) {
			if ($result->num_rows == 0){
				$db->close();
				return true;
			}
		}
		$db->close();
		return false;
	}
	
	public function update_uid($uid){
		$db = new mysqli("mydb.cs.unc.edu", "duozhao", "bison;2358+13", "comp426f12db");
		$update_query = "UPDATE `Password` SET uid='" . $uid . "' WHERE `uid`='" . $this->uid . "';";
		$db->query($update_query);
		$this->uid = $uid;
		$db->close();
	}
	
	public function check_pw_with_DB($pw){
		$db_hash = $this->get_hash_from_DB();
		$salt = substr($db_hash, 0, $this->saltLength);
		$user_hash = $salt . sha1($salt . $pw);
		if ($user_hash == $db_hash){
			return true;
		}
		return false;
	}

	public function get_hash_from_DB(){
		$db = new mysqli("mydb.cs.unc.edu", "duozhao", "bison;2358+13", "comp426f12db");
		$query = "SELECT * FROM Password where uid='" . $this->uid . "'";
		$result = $db->query($query);
		if ($result){
			if ($result->num_rows == 0){
				return null;
			}
			$db_tuple =  $result->fetch_array();
			$db_hash =  $db_tuple['password'];
			$db->close();
			return $db_hash;
		}
		$db->close();
		return null;
	}

	public function write_hash_to_DB($pw, $salt = NULL){
		if (is_null($salt)){
			$salt = substr(md5(time()), 0, $this->saltLength);
		}
		$hash = $salt . sha1($salt . $pw);

		$db = new mysqli("mydb.cs.unc.edu", "duozhao", "bison;2358+13", "comp426f12db");
		$insert_query = "INSERT INTO `Password` (`uid` ,`password`) VALUES ('" . $this->uid . "',  '" . $hash ."');";
		$update_query = "UPDATE `Password` SET password='" . $hash . "' WHERE `uid`='" . $this->uid . "';";
		$db_hash = $this->get_hash_from_DB();
		if (is_null($db_hash)){
			$db->query($insert_query);
		}
		else{
			$db->query($update_query);
		}
		$db->close();
	}
	
	public function account_delete(){
		$db = new mysqli("mydb.cs.unc.edu", "duozhao", "bison;2358+13", "comp426f12db");
		$result = $db->query("delete from Password where uid = '" . $this->uid . "'");
		$db->close();
		return $result;
	}

}

?>