<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    
    /**
     * Add a User to the database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     
    public function addUser($firstname, $lastname,  $username,$password,$confirmPassword,$sfsu_id,$phoneNumber,$address,$city,$zipcode)
    {
        $sql1 = "INSERT INTO User (F_Name, L_Name,Address,City,Zipcode,Phone,) VALUES (:firstname, :lastname,:address,:city,:zipcode,:phoneNumber)";
        $query1 = $this->db->prepare($sql);
        $parameters1 = array(':firstname' => $firstname, ':lastname' => $lastname,':address'=>$address,':city'=>$city,':zipcode'=>$zipcode,':phoneNumber'=>$phoneNumber);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters1);
        
        $sql2 = "INSERT INTO User (Student_ID, Username,NaCl_Hash,NaCl) VALUES (:student_id, :username,:password,:confirmPassword)";
        $query2 = $this->db->prepare($sql);
        $parameters2 = array(':student_id'=>$sfsu_id, ':username'=>$username,':password'=>$password,':confirmPassword'=>$confirmPassword);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters2);
    }
*/

}
