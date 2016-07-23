<?php
/**
 * Communicates with the User table in the database
 */
class User extends Model
{
        
  	/**
	 * Set's the user's full name in the database when they first register
	 */
    public function setUser($account_id,$firstname, $lastname,$country,$state,$address, $city, $zipcode,$phoneNumber) 
        {	
            try {	
                       $sql = "UPDATE User SET F_Name= :firstname,L_Name=:lastname,Country=:country,State=:state,Address=:address,City=:city,Zipcode=:zipcode,Phone=:phoneNumber WHERE Account_ID = :account_id;";
                       $query = $this->db->prepare($sql);
                       $parameters = array(':account_id'=>$account_id,':firstname' => $firstname, ':lastname' => $lastname,':country'=>$country,':state'=>$state,':address'=>$address,':city'=>$city,':zipcode'=>$zipcode,':phoneNumber'=>$phoneNumber);
		       $query->execute($parameters); 
		
		} 
                catch(PDOException $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
	}
        
        
      	/**
	 * @param int $student_id, string $username, string $password Logs a user to the site
	 * @return boolean check that the user logging in exists in the Account table
	 * */ 
	public function loginAccount($username, $password) {
            
		try {
			//$account_exist = true;
			
			// Query to retrieve salt to verify password
			$sql1 = "SELECT NaCl FROM Account WHERE Username = :username;";
			 
			$query1 = $this->db->prepare($sql1);
			$parameters1 = array(':username' => $username);
			$query1->execute($parameters1);
			$row1 = $query1->fetch(PDO::FETCH_ASSOC);
			 
			$salt = $row1['NaCl'];
			 
			$NaCl_Hash = Hash("SHA256", $password . $salt);

			// Query to retrieve a row that matches the log in information
			$sql2 = "SELECT Account_ID, Student_ID, Username, Date_created 
					FROM Account 
					WHERE Username = :username AND NaCl_Hash = :Nacl_Hash;";// AND NaCl_Hash = :Nacl_Hash;";

			$query2 = $this->db->prepare($sql2);
			$parameters2 = array(':username' => $username, ':Nacl_Hash' => $NaCl_Hash); 
		
			$query2->execute($parameters2);
			
			// Check that a row exists with the log in information
			if(empty($query2->fetchAll())) {
			    //$account_exist = false;
                            $_SESSION['login'] = false; 
			}
                        else
                        {
                         $_SESSION['username'] = $username;
                         $_SESSION['login'] = true;  
                        }
                                            			
			//return $account_exist;
			
		} catch (PDOException $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
	}
          
}


