<?php
session_start();
/**
 * Communicates with the Account table in the database
 */
class Account extends Model
{	
	/**
	 * @param int $student_id, string $username, string $password Registers new user to the database 
	 * @return int containing the account_id of the newly created account
	 */
   public function registerAccount($username, $password, $sfsu_id) {
		try 
		{
			// generate the unique salt for the Account
			$size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
			$salt = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
		
			$NaCl_Hash = Hash("SHA256", $password . $salt);
			
			$sql1 = "INSERT INTO Account(Student_ID, Username, NaCl_Hash, NaCl) 
					VALUES (:Student_ID, :Username, :NaCl_Hash, :NaCl)";
			
			// Query for creating new Account row
			$query1 = $this->db->prepare($sql1);
			$parameters1 = array(':Student_ID' => $sfsu_id, ':Username' => $username, ':NaCl_Hash' => $NaCl_Hash, ':NaCl' => $salt);
			
			$query1->execute($parameters1);
                                                                    
			// Query for retrieving Account_ID
			$sql2 = "SELECT Account_ID FROM Account WHERE Username = :Username;";
			
			$query2 = $this->db->prepare($sql2);
			$parameters2 = array(':Username' => $username);
			
			$query2->execute($parameters2);
			$account_id = $query2->fetch(PDO::FETCH_ASSOC);
			

                        
                        $_SESSION['username'] = $username;
                        $_SESSION['login'] = true;
                        echo $_SESSION['account_id'] = $account_id;
                        
			return $account_id['Account_ID'];		
		} 
		catch(PDOException $e) 
		{
			echo $sql2 . "<br>" . $e->getMessage();
		}

	}
	
    
         		
}
