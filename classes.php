<?php  
require_once('databases/DB.php');

class Main {

	public static function index() 
	{

		$db = DB::getInstance();
		$query = "
		SELECT u.id, u.usr_name, u.usr_email, u.usr_address, a.account, a.added AS date
		FROM users u
		LEFT JOIN accounts a ON u.id = a.user_id
		ORDER BY u.usr_name ASC
		";
        
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
	}

	public function addUser()
	{
		if (!empty($_POST) AND $_POST['action'] === 'addUser') {

			$name = htmlspecialchars($_POST['usr_name']);
			$email = htmlspecialchars($_POST['usr_email']);
			$address = htmlspecialchars($_POST['usr_address']);

			$query = "
        	INSERT INTO `users` 
        	SET `usr_name` = '".$name."',
				`usr_email` = '".$email."',
				`usr_address` = '".$address."'
        	";
	       
	        $db = DB::getInstance();
			$insert_res =  $db->query($query);
	        return (bool) $insert_res;
    	}
	}

	public function addAccount()
	{
		if (!empty($_POST) AND $_POST['action'] === 'addAccount') {

			$account = ($_POST['account']);
			$user_id = ($_POST['user_id']);

			$query = "
        	INSERT INTO `accounts` 
        	SET `account` = '".$account."',
				`user_id` = '".$user_id."'
        	";
	       
	        $db = DB::getInstance();
			$insert_res =  $db->query($query);
	        return (bool) $insert_res;
    	}

	}

}

$objMain = new Main;
$users = $objMain->index();
$objMain->addUser();
$objMain->addAccount();





 