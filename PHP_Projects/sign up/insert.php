<?php
$username = trim($_POST['username']);
$email = test_input($_POST['email']);
$password = test_input($_POST['password']);

function test_input($value) {
    $data = trim($value);
    
    return $data;
}

if(!empty($username) && !empty($email) && !empty($password)){
    
    $db = new mysqli("localhost","root","root","db");
    if(mysqli_connect_error()){
        die();
        echo "error to connect to database";
    }
    else{
        $select = "select username from record where username = ? limit 1";
        $stm = $db->prepare($select);
        $stm->bind_param("s", $username);
        $stm->execute();
        $stm->bind_result($username);
        $stm->store_result();
        $numr = $stm->num_rows;
        
        if($numr==0){
            $stm->close();
            $insert = "insert into record (username,email,password) values (?,?,?)";
            $stm = $db->prepare($insert);
            $stm->bind_param("sss", $username,$email,$password);
            $stm->execute();
            echo "you have signed up";
        }
        else{
            echo "user name is already used";
        }
        $stm->close();
        $db->close();
    }
    
}
else{
    echo "you must fill all field!!!";
}
?>