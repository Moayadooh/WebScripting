<?php
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    include_once 'UserInfo.php';
    $error = array();
    function getHour($sh,$eh) {
        if($eh<$sh)
        {
            $dh = 0;
            for($i=$sh;$i<12;$i++)
            {
                $dh++;
            }
            for($i=1;$i<=$eh;$i++)
            {
                $dh++;
            }
        }
        else{
            $dh = $eh - $sh;
        }
        return $dh;
    }
    function getTime($sms,$ems) {
        if($ems<$sms)
        {
            $dms = 0;
            for($i=$sms;$i<60;$i++)
            {
                $dms++;
            }
            for($i=1;$i<=$ems;$i++)
            {
                $dms++;
            }
        }
        else{
            $dms = $ems - $sms;
        }
        return $dms;
    }
    $con = mysqli_connect("localhost","root","root","db");
    if (!$con)
        die("Unable to connect".mysqli_error($con));   
    if(isset($_POST['register']))
    {
        $object = new UserData();
        $object->setUsername($_POST['username']);
        $object->setEmail($_POST['email']);
        $object->setPassword($_POST['password']);
        $object->setCpassword($_POST['cpassword']);
        
        $username = $object->getUsername();
        $email = $object->getEmail();
        $password = $object->getPassword();
        $cpassword = $object->getCpassword();
        
        if(empty($username))
            array_push($error,"Please enter username");
        if(empty($email))
            array_push($error,"Please enter email");
        if(empty($password))
            array_push($error,"Please enter password");
        if(empty($cpassword))
            array_push($error,"Please enter confirm password");
        
        if($password!=$cpassword)
            array_push($error,"The two password is not match");
        
        $sql = "select * from users where username = '$username'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row)
            array_push($error,"Username already exist");
        
        if(count($error)==0)
        {
            $sql = "insert into users (username,email,password) values ('$username','$email','$password')";
            mysqli_query($con, $sql);
            echo "<script>window.location='Login.php'</script>";
        }
    }
    elseif(isset($_POST['login']))
    {
        $object = new UserData();
        $object->setUsername($_POST['username']);
        $object->setPassword($_POST['password']);
        
        $username = $object->getUsername();
        $password = $object->getPassword();
        
        if(empty($username))
            array_push($error,"Please enter username");
        if(empty($password))
            array_push($error,"Please enter password");
        
        if(count($error)==0)
        {
            $sql = "select * from users where username = '$username' and password = '$password'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            if($row)
            {
                $_SESSION['username'] = $row['username'];
                $_SESSION['userid'] = $row['id'];
                header('location:Welcome.php');
            }
            else 
                array_push($error,"Wrong username or password");
        }
    }
    elseif(isset($_POST['start']))
    {
        date_default_timezone_set("Asia/Muscat");
        if(isset($_SESSION['userid']))
            $userid = $_SESSION['userid'];
        $date = date("d/m/y");
        $time = date("h:i:s");
        
        $sql = "insert into scores (user_id,date,start_time) values ('$userid','$date','$time')";
        $result = mysqli_query($con, $sql);
        
        $result1 = mysqli_query($con, "select * from scores where date = '$date' and start_time = '$time'");
        $row = mysqli_fetch_assoc($result1);
        $_SESSION['id'] = $row['id'];
    }
    elseif(isset($_POST['finish']))
    {
        date_default_timezone_set("Asia/Muscat");
        if(isset($_SESSION['id']))
            $id = $_SESSION['id'];
        $score =  $_REQUEST['val'];
        $time = date("h:i:s");
        $sql = "update scores set end_time = '$time',score = '$score' where id = '$id'";
        mysqli_query($con, $sql);
    }
    elseif(isset($_POST['results']))
    {
        $userid = $_SESSION['userid'];
        $sql = "select * from scores where user_id = '$userid'";
        $result = mysqli_query($con,$sql);
        if (!$result)
            die('Unable to print'.mysqli_error());
        $num_rows = mysqli_num_rows($result);
        if($num_rows>0)
        {
            date_default_timezone_set("Asia/Muscat");
            echo "<table border = 1>";
            echo "<tr>";
            echo "<th>Date</th>";
            echo "<th>Start Time</th>";
            echo "<th>End Time</th>";
            echo "<th>Duration Time</th>";
            echo "<th>Score/10</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result))
            {
                $startTime = $row['start_time'];
                $endTime = $row['end_time'];
                echo "<tr>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$startTime."</td>";
                echo "<td>".$endTime."</td>";
                
                $startHour = $startTime[0].$startTime[1];
                $endHour = $endTime[0].$endTime[1];
                $hour = getHour($startHour,$endHour);
                $hourMinutes = $hour * 60;
                
                $startMinutes = $startTime[3].$startTime[4];
                $endMinutes = $endTime[3].$endTime[4];
                $minutes = getTime($startMinutes,$endMinutes);
                
                $startSecond = $startTime[6].$startTime[7];
                $endSecond = $endTime[6].$endTime[7];
                $seconds = getTime($startSecond,$endSecond);
                
                if($endSecond<$startSecond)
                    $minutes -= 1;
                $minutes += $hourMinutes;
                
                echo "<td>".$minutes.":".$seconds."</td>";
                echo "<td>".$row['score']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
            echo "<h2 style='color:red;'>You haven't done any quiz yet!!</h2>";
    }
    elseif(isset($_SESSION['quiz_done']))
    {
        $id = $_SESSION['id'];
        $sql = "select * from scores where id = '$id'";
        $result = mysqli_query($con,$sql);
        if (!$result)
            die('Unable to print'.mysqli_error());
        $row = mysqli_fetch_assoc($result);
        echo "<table border = 1>";
        echo "<tr>";
        echo "<th>Date</th>";
        echo "<th>Start Time</th>";
        echo "<th>End Time</th>";
        echo "<th>Duration Time</th>";
        echo "<th>Score/10</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['start_time']."</td>";
        echo "<td>".$row['end_time']."</td>";
        
        $startTime = $row['start_time'];
        $endTime = $row['end_time'];
        
        $startHour = $startTime[0].$startTime[1];
        $endHour = $endTime[0].$endTime[1];
        $hour = getHour($startHour,$endHour);
        $hourMinutes = $hour * 60;
        
        $startMinutes = $startTime[3].$startTime[4];
        $endMinutes = $endTime[3].$endTime[4];
        $minutes = getTime($startMinutes,$endMinutes);
        
        $startSecond = $startTime[6].$startTime[7];
        $endSecond = $endTime[6].$endTime[7];
        $seconds = getTime($startSecond,$endSecond);
        
        if($endSecond<$startSecond)
            $minutes -= 1;
        $minutes += $hourMinutes;
        
        echo "<td>".$minutes.":".$seconds."</td>";
        echo "<td>".$row['score']."</td>";
        echo "</tr>";
        echo "</table>";
        unset($_SESSION['quiz_done']);
    }
    mysqli_close($con);

?>