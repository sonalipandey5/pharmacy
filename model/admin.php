<?php
Class Admin {
    private $_db;
    function __construct($db_data){
        $this->_db = $db_data;
    }
    public function sign_out(){
        session_destroy();
        return true;
    }
    public function sign_in($uname,$pass){
        try {
            $pass=md5($pass);
            $query = $this->_db->prepare('SELECT * FROM users WHERE username=:uname AND password=:pass');
            $query->execute(array(':uname'=>$uname,':pass'=>$pass));
            $r=$query->fetch(PDO::FETCH_ASSOC);
            $_SESSION['uname']=$r['username'];
            $_SESSION['position']=$r['position'];
            $_SESSION['name']=$r['name'];
            $_SESSION['email']=$r['email'];
            if(!empty($_SESSION["uname"]) && !empty($_SESSION['position']))
            {
                return true;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function add_medicine($name,$quantity,$cost,$dat,$des,$category,$image_path){
        try {
            $query=$this->_db->prepare('INSERT INTO medicine(name,quantity,cost,dat,description,category_name,image) VALUES (:name,:quantity,:cost,:dat,:des,:category,:image_path)');
            $query->execute(array(':name'=>$name,'quantity'=>$quantity,'cost'=>$cost,':dat'=>$dat,':des'=>$des,':category'=>$category,':image_path'=>$image_path));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function category_list(){
        try {
            $query=$this->_db->prepare('SELECT * FROM category');
            $query->execute();
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function product_list($category){
        try {
            $query=$this->_db->prepare('SELECT * FROM medicine WHERE category_name=:category');
            $query->execute(array(':category'=>$category));
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            return $result;

        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function saveImage($image_path,$projectID){
        try {
            $string= "INSERT INTO fixture_images(image_path,submission_date,projectID) VALUES('".$image_path."','".date("Y-m-d")."','".$projectID."') ON DUPLICATE KEY UPDATE image_path='".$image_path."',submission_date='".date("Y-m-d")."'";
            $query=$this->_db->prepare($string);
            $query->execute();
            $query->rowCount();
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function edit_details($id,$text,$column_name){
        try {
            $que="UPDATE medicine SET ".$column_name."=:text WHERE id=:id";
            $query=$this->_db->prepare($que);
            $query->execute(array(':text'=>$text,':id'=>$id));
            $query->rowCount();
            return true;

        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function del_fun($id){
        try {
            $query=$this->_db->prepare('DELETE FROM medicine WHERE id=:id');
            $query->execute(array(':id'=>$id));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function register_data($full_name,$email,$phone,$password){
        try {
            $query=$this->_db->prepare('INSERT into users(name,email,phone,username,password,position) VALUES(:name,:email,:phone,:uname,:pass,:pos)');
            $query->execute(array(':name'=>$full_name,':email'=>$email,':phone'=>$phone,':uname'=>$email,':pass'=>$password, ':pos'=>'2'));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>
