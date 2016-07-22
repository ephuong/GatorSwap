<?php
/**
 * Communicates with the User table in the database
 */
class User extends Model
{
	/**
	 * Set's the user's full name in the database when they first register
	 */
	public function setUser($firstname, $lastname,$address, $city, $zipcode,$phoneNumber,$account_id) {
		try {		
			$sql1 = "UPDATE User SET WHERE Account_ID = :Account_ID;";//(SELECT Account_ID FROM Account WHERE Username = :Username);";
				
			$query1 = $this->db->prepare($sql1);
			$parameters1 = array(':Account_ID' => $account_id);
			
			
			$query1->execute($parameters1);
                        
                       $sql2 = "INSERT INTO Account (F_Name, L_Name,Address,City,Zipcode,Phone,) VALUES (:firstname, :lastname,:address,:city,:zipcode,:phoneNumber)";
                       $query2 = $this->db->prepare($sql2);
                       $parameters2 = array(':firstname' => $firstname, ':lastname' => $lastname,':address'=>$address,':city'=>$city,':zipcode'=>$zipcode,':phoneNumber'=>$phoneNumber);
		       $query2->execute($parameters2); 
		
		} 
                catch(PDOException $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
	}
}


?>