<?php
/**
 * Communicates with the Item table in the database
 */
class Item extends Model
{
    public function getCategories() 
    {
	try 
        {
            // Query for retrieving item categories from the database
            $sql = "SELECT C.Category_ID, C.Category_Name  
                    FROM Item_Category C;";

            $query = $this->db->prepare($sql);
            $query->execute();

            $categoryList = $query->fetchAll();

            return $categoryList;

        } catch (PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
        }
    }
        
    public function createItem($item_accid, $item_title, $item_category, $item_price, $item_desc, $item_condition)
    {
        $sql = "INSERT INTO Item(Account_ID, Title, Price, Category, Item_Condition, Description) 
		VALUES (:Account_ID, :Title, :Price, :Category, :Item_Condition, :Description)";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':Account_ID' => $item_accid, ':Title' => $item_title, ':Price' => $item_price, 
                     ':Category' => $item_category, ':Item_Condition' => $item_condition, ':Description' => $item_desc);
        
        $query->execute($parameters);
 
    }
    
    /**
	 * @param string $keyword Searching for items with the specified keyword(s)
	 * @return mixed array containing the result set and the number of results 
	 */
	public function searchItems($keyword, $category)
    {
		//echo $keyword . " " . $category;
		//$sql = "";
        
        if(empty($keyword) == true) {   
		  //Query for searching the Item table when there's no keyword
		  $sql = "SELECT I.Item_ID, I.Title, I.Category_ID, I.Price, Description, Im.IMG, I.List_Date as List_Order 
				  FROM Item I, Item_Img Im 
				  WHERE I.Item_ID = Im.Item_ID AND Is_Visible = 1 " ;
				  
        } else {
		  //Parse the string into an array
          $keywordarray = explode(" ",      $keyword);
      
          $searchString = "";
        
          foreach ($keywordarray as $word)
          {
            $searchString = $searchString . " +" . $word . "*" ; 
          }
		  
		  //Query for searching the Item table using the search keyword
		  $sql = "SELECT I.Item_ID, I.Title, I.Category_ID, I.Price, Description, Im.IMG, 
				    Match(I.Title,  I.Description) AGAINST ('". $searchString . "') AS List_Order 
				  FROM Item I, Item_Img Im 
				  WHERE Match(I.Title, I.Description, I.Details) AGAINST ('" . $searchString . "' IN BOOLEAN MODE) 
					AND I.Item_ID = Im.Item_ID AND Is_Visible = 1 " ;
        }
      
        try {		
            //Filtering by case   
            $category = strtolower($category);
            switch($category ) {
                case "1" :
                    break;
                default:
                    $sql = $sql . "AND I.Category_ID = '" . $category . "' ";
                    break;
            }
            
			$sql = $sql .	"ORDER BY List_Order DESC;";	

			$query = $this->db->prepare($sql);
			$query->execute();
			
			// Counts the number of results from the search
			$resultCount = $this->db->prepare($sql);
			$resultCount->execute();
			$number_of_rows = $resultCount->rowCount();
			//echo " $number_of_rows results for $search" ;
			
			$resultSet = $query->fetchAll();
			
			$results = array("results" => $resultSet, "count" => $number_of_rows);
				return $results;
				
		} catch (PDOException $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
    }
}
?>