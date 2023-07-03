<?php
    function loadall_taikhoan() {
        $sql = "SELECT * from taikhoan order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function insert_taikhoan($email,$user,$pass) {
        $sql = "INSERT into taikhoan(email,user,pass) values('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass) {
        // $sql = "select * from taikhoan where user =" .$user. " and pass=".$pass;
        $sql = "SELECT * FROM taikhoan WHERE user = '$user' AND pass = '$pass'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email) {
        // $sql = "select * from taikhoan where user =" .$user. " and pass=".$pass;
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id, $user, $pass, $email, $address, $tel) {
            $sql = "UPDATE taikhoan SET user='$user', pass='$pass', email='$email', address='$address' , tel='$tel' WHERE id='$id'";
            // $params = array($user, $pass, $email, $address, $tel, $id);
            // pdo_execute($sql, $params);
            pdo_execute($sql);
            // pdo_execute($user, $pass, $email, $address, $tel, $id);
    }
    function delete_taikhoan($id) {
        $sql = "DELETE from taikhoan where id=".$id;
        pdo_execute($sql);
    }
    function loadone_taikhoan($id) {
        $sql = "select * from taikhoan where id=".$id;
        $tk = pdo_query_one($sql);
        return $tk;
    }
    function update_taikhoan_admin($id,$user, $pass, $email, $address, $tel, $role) {
            $sql = "UPDATE taikhoan SET user=?, pass=?, email=?, address=?, tel=?, role=? WHERE id=?";
            pdo_execute($sql, $user, $pass, $email, $address, $tel, $role, $id);
    }
?>