<?php
Class User {
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
    public function credit_pay($debit,$debit1,$debit2,$debit3,$dat1,$cvv){
        try {
            $query=$this->_db->prepare('INSERT INTO credit(card_number,debit,debit1,debit2,debit3,expiry,cvv) VALUES (:card_number,:debit,:debit1,:debit2,:debit3,:expiry,:cvv)');
            $query->execute(array(
                ':card_number' => $debit.$debit1.$debit2.$debit3,
                ':debit' => $debit,
                ':debit1' => $debit1,
                ':debit2' => $debit2,
                ':debit3' => $debit3,
                ':expiry' => $dat1,
                ':cvv' => $cvv));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function cod_pay($addr){
        try {
            $query=$this->_db->prepare('INSERT INTO cod(address) VALUES (:addr)');
            $query->execute(array(':addr'=>$addr));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function paytm_pay($pnum,$cost){
        try {
            $query=$this->_db->prepare('INSERT INTO paytm(phone,cost) VALUES (:phone,:cost)');
            $query->execute(array(':phone'=>$pnum,':cost'=>$cost));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function infant_list(){
        try {
            $query=$this->_db->prepare('SELECT * FROM medicine WHERE category_name="Infants"');
            $query->execute();
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function women_list(){
        try {
            $query=$this->_db->prepare('SELECT * FROM medicine WHERE category_name="Women"');
            $query->execute();
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function med_list(){
        try {
            $query=$this->_db->prepare('SELECT * FROM medicine WHERE category_name="Medicines"');
            $query->execute();
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function get_price($id){
        try {
            $query=$this->_db->prepare('SELECT cost FROM medicine WHERE name=:id');
            $query->execute(array(':id'=>$id));
            $result=$query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {

            return $e->getMessage();
        }
    }
    public function add_cart($id,$quantity,$price){
        try {
            $query=$this->_db->prepare('INSERT INTO cart(name,product_id,quantity,cost) VALUES (:name,:id,:quant,:price) ON DUPLICATE KEY UPDATE quantity=quantity+:quantity, cost=cost+:cost');
            $query->execute(array(':name'=>$_SESSION['email'],':id'=>$id,':quant'=>$quantity,':price'=>$price,':quantity'=>$quantity,':cost'=>$price));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function buy_now($id,$price){
        try {
            $query=$this->_db->prepare('INSERT INTO buy_now(user,product_name,cost) VALUES (:name,:id,:price)');
            $query->execute(array(':name'=>$_SESSION['email'],':id'=>$id,':price'=>$price));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function get_cart(){
        try {
            $query=$this->_db->prepare('SELECT * FROM cart WHERE name=:name AND paid=:paid');
            $query->execute(array(':name'=>$_SESSION['email'],':paid'=>'0'));
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function del_fun($id){
        try {
            $query=$this->_db->prepare('DELETE FROM cart WHERE id=:id');
            $query->execute(array(':id'=>$id));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function plus_fun($id, $cost){
        try {
            $query=$this->_db->prepare('UPDATE cart SET quantity= quantity + :quant , cost = cost + :cost WHERE id=:id');
            $query->execute(array(':quant'=>1,':cost'=>$cost,':id'=>$id));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function minus_fun($id, $cost){
        try {
            $query=$this->_db->prepare('UPDATE cart SET quantity= quantity - :quant , cost = cost - :cost WHERE id=:id');
            $query->execute(array(':quant'=>1,':cost'=>$cost,':id'=>$id));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function get_cart_details(){
        try {
            $query=$this->_db->prepare('SELECT * FROM cart WHERE paid=:paid AND name=:name');
            $query->execute(array(':paid'=>'0',':name'=>$_SESSION['email']));
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function reduce_quant($product,$quantity){
        try {
            $query=$this->_db->prepare('UPDATE medicine SET quantity=quantity-:quant WHERE name=:product');
            $query->execute(array(':quant'=>$quantity,':product'=>$product));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function mark_cart_paid($id){
        try {
            $query=$this->_db->prepare('UPDATE cart SET paid=:paid WHERE id=:id');
            $query->execute(array(':paid'=>'1',':id'=>$id));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function get_buy_now(){
        try {
            $query=$this->_db->prepare('SELECT * FROM buy_now WHERE paid=:paid AND user=:name ORDER BY id DESC LIMIT 1');
            $query->execute(array(':paid'=>'0',':name'=>$_SESSION['email']));
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function mark_bn_paid($id){
        try {
            $query=$this->_db->prepare('UPDATE buy_now SET paid=:paid WHERE id=:id');
            $query->execute(array(':paid'=>'1',':id'=>$id));
            $result=$query->rowCount();
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>