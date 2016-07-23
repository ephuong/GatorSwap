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
			
			$sql = "INSERT INTO Account(Student_ID, Username, NaCl_Hash, NaCl) 
					VALUES (:Student_ID, :Username, :NaCl_Hash, :NaCl)";
			
			// Query for creating new Account row
			$query = $this->db->prepare($sql);
			$parameters = array(':Student_ID' => $sfsu_id, ':Username' => $username, ':NaCl_Hash' => $NaCl_Hash, ':NaCl' => $salt);
			
			$query->execute($parameters);
                                                                    
			// Query for retrieving Account_ID
			$sql = "SELECT Account_ID FROM Account WHERE Username = :Username;";
			
			$query = $this->db->prepare($sql);
			$parameters = array(':Username' => $username);
			
			$query->execute($parameters);
			$account_id = $query->fetch(PDO::FETCH_ASSOC);
			

                        
                        $_SESSION['username'] = $username;
                        $_SESSION['login'] = true;

                        
			return $account_id['Account_ID'];		
		} 
		catch(PDOException $e) 
		{
			echo $sql . "<br>" . $e->getMessage();
		}

	}
	
	/**
	 * @param int $student_id, string $username, string $password Logs a user to the site
	 * @return boolean check that the user logging in exists in the Account table
	 */
	public function loginAccount($student_id, $username, $password) {
		try {
			$account_exist = true;
			
			// Query to retrieve salt to verify password
			$sql = "SELECT NaCl FROM Account WHERE Student_ID = :Student_ID AND Username = :Username;";
			 
			$query = $this->db->prepare($sql);
			$parameters = array(':Student_ID' => $student_id, ':Username' => $username);
			
			$query->execute($parameters);
			$row = $query->fetch(PDO::FETCH_ASSOC);
			 
			$salt = $row['NaCl'];
			 
			$NaCl_Hash = Hash("SHA256", $password . $salt);

			// Query to retrieve a row that matches the log in information
			$sql = "SELECT Account_ID, Student_ID, Username, Date_created 
					FROM Account 
					WHERE Student_ID = :Student_ID AND NaCl_Hash = :Nacl_Hash AND Username = :Username;";// AND NaCl_Hash = :Nacl_Hash;";

			$query = $this->db->prepare($sql);
			$parameters = array(':Student_ID' => $student_id, ':Username' => $username, ':Nacl_Hash' => $NaCl_Hash); 
		
			$query->execute($parameters);
			
			// Check that a row exists with the log in information
			if(empty($query->fetchAll())) {
				$account_exist = false;
			}
			
			return $account_exist;
			
		} catch (PDOException $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
	}		
}
