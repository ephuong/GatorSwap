<?php
/**
 * Communicates with the User table in the database
 */
class User extends Account
{
        
        public function __construct($db) {
           parent::__construct($db);
           try {
            $this->db = $db;
             } catch (PDOException $e) {
            exit('Database connection could not be established.');
          }
        }
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
}


?>