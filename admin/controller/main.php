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
class dashboard
{
    public $db;
    public function __construct()
    {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    // edit image in edit demat.php
    public function unlinkimage($icon, $path)
    {
        if (file_exists("$path/$icon")) {
            unlink("$path/$icon");
        } else {
            return false;
        }
    }

    public function admindetails($uid)
    {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM `admin` WHERE id=:id");
        $stmt->bindParam("id", $uid, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        if ($count) {
            return $data;
        } else {
            return false;
        }
    }



    public function adduser($name, $email, $mobile_number, $location)
    {
        $db = getDB();
        $beneficiary = '0';

        $stmt = $db->prepare("INSERT INTO `users`(`name`,`email`,`mobile`, `location`) VALUES (:name,:email,:mobile,:location)");
        $stmt->bindParam("name", $name, PDO::PARAM_STR);
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->bindParam("mobile", $mobile_number, PDO::PARAM_STR);
        $stmt->bindParam("location", $location, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {

            return true;
        } else {
        }
    }

    public function edituser($id, $name, $email, $mobile_number, $location)
    {
        $db = getDB();

        $stmt = $db->prepare("
            UPDATE `users` SET 
            `id`=:id,
            `name`=:name,
            `email`=:email,
            `mobile`=:mobile,
            `location`=:location
            WHERE `id`=:id
             ");
        $stmt->bindParam("name", $name, PDO::PARAM_STR);
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->bindParam("mobile", $mobile_number, PDO::PARAM_STR);
        $stmt->bindParam("location", $location, PDO::PARAM_STR);
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
            return false;
        }
    }




    public function addshops($name, $shop_name, $mobile_number, $address, $location)
    {
        $db = getDB();
        $beneficiary = '0';

        $stmt = $db->prepare("INSERT INTO `shops`(`name`,`shop_name`,`mobile`,`address`, `location`) VALUES (:name,:shop_name,:mobile,:address,:location)");
        $stmt->bindParam("name", $name, PDO::PARAM_STR);
        $stmt->bindParam("shop_name", $shop_name, PDO::PARAM_STR);
        $stmt->bindParam("mobile", $mobile_number, PDO::PARAM_STR);
        $stmt->bindParam("address", $address, PDO::PARAM_STR);
        $stmt->bindParam("location", $location, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {

            return true;
        } else {
        }
    }


    public function editshops($id, $name, $shop_name, $mobile_number, $address, $location)
    {
        $db = getDB();

        $stmt = $db->prepare("
            UPDATE `shops` SET 
            `id`=:id,
            `name`=:name,
            `shop_name`=:shop_name,
            `mobile`=:mobile,
            `address`=:address,
            `location`=:location
            WHERE `id`=:id
             ");
        $stmt->bindParam("name", $name, PDO::PARAM_STR);
        $stmt->bindParam("shop_name", $shop_name, PDO::PARAM_STR);
        $stmt->bindParam("mobile", $mobile_number, PDO::PARAM_STR);
        $stmt->bindParam("address", $address, PDO::PARAM_STR);
        $stmt->bindParam("location", $location, PDO::PARAM_STR);
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
            return false;
        }
    }


    public function addpromo($shop_id, $product_name, $amount, $discount)
    {
        $db = getDB();
        $dis = $discount / 100;
        $dis_price = $amount * $dis;
        $offer_price = $amount - $dis_price;
        $stmt = $db->prepare("INSERT INTO `promo`(`shop_id`,`product_name`,`amount`,`discount`,`offer_price`)
                     VALUES (:shop_id,:product_name,:amount,:discount,:offer_price)");
        $stmt->bindParam("product_name", $product_name, PDO::PARAM_STR);
        $stmt->bindParam("amount", $amount, PDO::PARAM_STR);
        $stmt->bindParam("discount", $discount, PDO::PARAM_STR);
        $stmt->bindParam("offer_price", $offer_price, PDO::PARAM_STR);
        $stmt->bindParam("shop_id", $shop_id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
        }
    }



    public function addnewbanner($banner)
    {
        $db = getDB();

        $stmt = $db->prepare("INSERT INTO `banner`(`banner`) VALUES (:banner)");
        $stmt->bindParam("banner", $banner, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {

            return true;
        } else {
        }
    }


    public function addnewgallery($gallery)
    {
        $db = getDB();

        $stmt = $db->prepare("INSERT INTO `gallery`(`gallery`) VALUES (:gallery)");
        $stmt->bindParam("gallery", $gallery, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
        }
    }







    public function addnewtestimonals($name, $content, $testimonals)
    {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO `testimonals`(`name`, `image`, `content`) VALUES (:name,:testimonals,:content)");
        $stmt->bindParam("name", $name, PDO::PARAM_STR);
        $stmt->bindParam("testimonals", $testimonals, PDO::PARAM_STR);
        $stmt->bindParam("content", $content, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
        }
    }


    public function edittestiomnals($id, $testimonals, $name, $content)
    {
        $db = getDB();
        $stmt = $db->prepare("
        UPDATE `testimonals` SET `name`=:name,`image`=:testimonals,`content`=:content WHERE `test_id`=:id
        ");
        $stmt->bindParam("name", $name, PDO::PARAM_STR);
        $stmt->bindParam("testimonals", $testimonals, PDO::PARAM_STR);
        $stmt->bindParam("content", $content, PDO::PARAM_STR);
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
            return false;
        }
    }





    public function bannerdetails($id)
    {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM banner where banner_id=:id");
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        if ($count) {
            return $data;
        } else {
            return false;
        }
    }



    public function testimonalsdetails($id)
    {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM testimonals where test_id=:id");
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        if ($count) {
            return $data;
        } else {
            return false;
        }
    }

    public function editbanner($id, $title, $banner)
    {
        $db = getDB();
        $stmt = $db->prepare("
            UPDATE `banner` SET 
            `title`=:title,
            `banner`=:banner,
            `banner_id`=:id
            WHERE `banner_id`=:id ");

        $stmt->bindParam("title", $title, PDO::PARAM_STR);
        $stmt->bindParam("banner", $banner, PDO::PARAM_STR);
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
            return false;
        }
    }





    public function gallerydetails($id)
    {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM gallery where gallery_id=:id");
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        if ($count) {
            return $data;
        } else {
            return false;
        }
    }

    public function editgallery($id, $gallery)
    {
        $db = getDB();
        $stmt = $db->prepare("
            UPDATE `gallery` SET 
            `gallery`=:gallery,
            `gallery_id`=:id
            WHERE `gallery_id`=:id ");
        $stmt->bindParam("gallery", $gallery, PDO::PARAM_STR);
        $stmt->bindParam("id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count) {
            return true;
        } else {
            return false;
        }
    }
}
