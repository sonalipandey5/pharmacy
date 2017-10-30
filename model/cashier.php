<?php
Class Cashier {
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
}
?>
