<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?> 
<?php
// include "config.php";

class ajaxcontroler
{

    public function getmoredetail($id)
    {


      
        $db = getDB();
        $stmt = $db->prepare("SELECT *
        FROM `shops`
        JOIN `promo` ON shops.id=promo.shop_id where shops.id=:id");
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
            $array[] = array("datas" => $data);
        }
        if ($count) {
            return $array;
        } else {
            return false;
        }
    }
    

}
