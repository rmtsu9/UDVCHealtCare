<?php
class connect{
    function __CONSTRUCT(){
        $conn = mysqli_connect('localhost','root','','test34');
        $this -> connect=$conn;
    }
    public function in_member($name,$lastname,$user,$password){
        $sql="INSERT INTO member(name,lastname,user,password)VALUES('$name','$lastname','$user','$password')";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function in_partner($name,$lastname,$user,$password){
        $sql="INSERT INTO partner(name,lastname,user,password)VALUES('$name','$lastname','$user','$password')";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function in_news($news,$date){
        $sql="INSERT INTO new(news,date)VALUES('$news','$date')";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function in_order($id_partner,$id_member,$date,$order){
        $sql="INSERT INTO order_db(id_partner,id_member,date,detail,status)VALUES('$id_partner','$id_member','$date','$order','รอรับบริการ')";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function login_member($user,$password){
        $sql="SELECT * FROM member WHERE user='$user'and password='$password'";
        $query=mysqli_query($this->connect,$sql);
        $data=mysqli_fetch_array($query);
        $_SESSION['name']=$data['name'];
        $_SESSION['id']=$data['id'];
        return $query;
    }
    public function login_partner($user,$password){
        $sql="SELECT * FROM partner WHERE user='$user'and password='$password'";
        $query=mysqli_query($this->connect,$sql);
        $data=mysqli_fetch_array($query);
        $_SESSION['name']=$data['name'];
        $_SESSION['id']=$data['id'];
        return $query;
    }
    public function logout(){
        Unset($_SESSION['name']);
        Unset($_SESSION['id']);
        Unset($_SESSION['insert']);
        header('location:index.php');
    }
    public function show_member(){
        $sql="SELECT * FROM member";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function show_partner(){
        $sql="SELECT * FROM partner";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function show_news(){
        $sql="SELECT * FROM new";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function show_order_member($id){
        $sql="SELECT * FROM order_db WHERE id_member='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function show_order_partner($id){
        $sql="SELECT * FROM order_db WHERE id_partner='$id'";
        $query=mysqli_query($this -> connect,$sql);
        return $query;
    }
    public function read_partner($id){
        $sql="SELECT * FROM partner WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function delete_member($id){
        $sql="DELETE FROM member WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function delete_partner($id){
        $sql="DELETE FROM partner WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function delete_news($id){
        $sql="DELETE FROM new WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function update_member($id,$name,$lastname,$user,$password){
        $sql="UPDATE member SET name='$name', lastname='$lastname',user='$user',password='$password' WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function update_member_show($id){
        $sql="SELECT * FROM member WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function update_partner($id,$name,$lastname,$user,$password){
        $sql="UPDATE partner SET name='$name', lastname='$lastname',user='$user',password='$password' WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function update_partner_show($id){
        $sql="SELECT * FROM partner WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function update_news($id,$news,$date){
        $sql="UPDATE new SET news='$news', date='$date'WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function update_news_show($id){
        $sql="SELECT * FROM new WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
    public function update_vote($id,$sumvote){
        $sql="UPDATE new SET score='$sumvote'WHERE id='$id'";
        $query=mysqli_query($this->connect,$sql);
        return $query;
    }
}
?>