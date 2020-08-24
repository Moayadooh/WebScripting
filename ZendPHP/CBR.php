<?php

$hostname = "localhost";
$username = 'root';
$password = 'root';
$dbname = 'records';

$link = mysqli_connect($hostname, $username, $password, $dbname);
if(!$link)
    die("Unable to connect".mysqli_error($link));
else
{
    date_default_timezone_set("Asia/Muscat");
    
    $temperature = $_POST['temp_level'];
    $soil_moisture = $_POST['soil_mois_level'];
    $plant_id = $_POST['plant_id'];
    $date_time = date("Y-m-d H:i:s");
    
    $query = "select plant_name as name from plants where plant_id = '$plant_id';";
    $result = mysqli_query($link, $query);
    if(!$result)
        die("Unable to retrieve ".mysqli_error($link));
    $row = mysqli_fetch_assoc($result);
    $plant_name = $row['name'];
    $plant_name = strtolower($plant_name);
    
    //Check if the problem is exist 'RETRIEVE'
    $query = "select COUNT(*) as total, water_amount as amount from ".$plant_name." where temp_level = '".$temperature."' and soil_mois_level = '".$soil_moisture."';";
    $result = mysqli_query($link, $query);
    if(!$result)
        die("Unable to retrieve ".mysqli_error($link));
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];
    if($total>0)
    {
        $water_amount = $row['amount']; //REUSE
        $query = "INSERT INTO trends (plant_id,temp_level,soil_mois_level,water_amount,sensors_status,date_time) VALUES ('$plant_id','$temperature','$soil_moisture','$water_amount','ON','$date_time');";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to insert ".mysqli_error($link));
            echo json_encode(array("water_amount"=>$water_amount));
    }
    else //REVISE
    {
        $query = "select min(temp_level) as min_temp from ".$plant_name.";";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to retrieve ".mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        $minTempLevel = $row['min_temp'];
        
        $query = "select max(temp_level) as max_temp from ".$plant_name.";";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to retrieve ".mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        $maxTempLevel = $row['max_temp'];
        
        $rangeTempLevel = $maxTempLevel - $minTempLevel;
        
        $query = "select min(soil_mois_level) as min_mois from ".$plant_name.";";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to retrieve ".mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        $minSoilMoisLevel = $row['min_mois'];
        
        $query = "select max(soil_mois_level) as max_mois from ".$plant_name.";";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to retrieve ".mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        $maxSoilMoisLevel = $row['max_mois'];
        
        $rangeSoilMoisLevel = $maxSoilMoisLevel - $minSoilMoisLevel;
        
        function LocalSimilarityContinuous($input, $retrievedData, $range)
        {
            $sum = 1 - abs(($input - $retrievedData)) / $range;
            return $sum;
        }
        
        function GlobalSimilarity($tempLevel, $soilMoisLevel)
        {
            $sum = 0.5 * ((1 * $tempLevel) + (1 * $soilMoisLevel));
            return $sum;
        }
        
        $query = "select * from ".$plant_name.";";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to retrieve ".mysqli_error($link));
        $highestGS = 0;
        while ($row = mysqli_fetch_assoc($result))
        {
            $lsTemp = LocalSimilarityContinuous($temperature, $row['temp_level'], $rangeTempLevel);
            $lsSoilMois = LocalSimilarityContinuous($soil_moisture, $row['soil_mois_level'], $rangeSoilMoisLevel);
            $GS = GlobalSimilarity($lsTemp, $lsSoilMois);
            
            if($GS>$highestGS)
            {
                $highestGS = $GS;
                $water_amount = $row['water_amount'];
            }
        }
        $water_amount *= $highestGS;
        
        //RETAIN
        $query = "INSERT INTO trends (plant_id,temp_level,soil_mois_level,water_amount,sensors_status,date_time) VALUES ('$plant_id','$temperature','$soil_moisture','$water_amount','ON','$date_time');";
        $result = mysqli_query($link, $query);
        if(!$result)
            die("Unable to insert ".mysqli_error($link));
        echo json_encode(array("water_amount"=>$water_amount));
    }
}

?>