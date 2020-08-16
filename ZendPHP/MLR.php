<?php

$hostname = "localhost";
$username = 'root';
$password = 'root';
$dbname = 'records';

$link = mysqli_connect($hostname, $username, $password, $dbname);
if(!$link){
    die("Unable to connect".mysqli_error($link));
}
else{
    $query = "SELECT temp_level, soil_mois_level, water_amount FROM records;";
    $result = mysqli_query($link, $query);
    if(!$result)
        die("Unable to retrieve".mysqli_error($link));
    else
    {
        $N = 0;
        
        $x1 = 0;
        $x2 = 0;
        $y = 0;
        
        $x1Total = 0;
        $x2Total = 0;
        $yTotal = 0;
        
        $x1SquareTotal = 0;
        $x2SquareTotal = 0;
        
        $x1y = 0;
        $x2y = 0;
        $x1x2 = 0;
        while ($row = mysqli_fetch_assoc($result))
        {
            $N++;
            $x1 = $row['temp_level'];
            $x2 = $row['soil_mois_level'];
            $y = $row['water_amount'];
            
            $x1Total += $x1;
            $x1SquareTotal += $x1 * $x1;
            $x1y += $x1 * $y;
            
            $x2Total += $x2;
            $x2SquareTotal += $x2 * $x2;
            $x2y += $x2 * $y;
            
            $yTotal += $y;
            $x1x2 += $x1 * $x2;
        }
        if($N==0)
            echo "No Records";
        else
        {
            $x1Mean = $x1Total / $N;
            $x2Mean = $x2Total / $N;
            $yMean = $yTotal / $N;
            
            $x1SquareTotal = $x1SquareTotal - $x1Total * $x1Total / $N;
            $x2SquareTotal = $x2SquareTotal - $x2Total * $x2Total / $N;
            
            $x1y = $x1y - $x1Total * $yTotal / $N;
            $x2y = $x2y - $x2Total * $yTotal / $N;
            $x1x2 = $x1x2 - $x1Total * $x2Total / $N;
            
            $b1 = ($x2SquareTotal * $x1y - $x1x2 * $x2y) / ($x1SquareTotal * $x2SquareTotal - $x1x2 * $x1x2);
            $b2 = ($x1SquareTotal * $x2y - $x1x2 * $x1y) / ($x1SquareTotal * $x2SquareTotal - $x1x2 * $x1x2);
            $b0 = $yMean - $b1 * $x1Mean - $b2 * $x2Mean;
            
            $query = "SELECT avg(temp_level) AS average FROM records ORDER BY trend_id DESC LIMIT 5;";
            $result = mysqli_query($link, $query);
            if(!$result)
                die("Unable to retrieve".mysqli_error($link));
            $row = mysqli_fetch_assoc($result);
            $x1 = $row['average'];
            //$x1 = 37.2;
            echo $x1.'<br>';
            
            $query = "SELECT avg(soil_mois_level) AS average FROM records ORDER BY trend_id DESC LIMIT 5;";
            $result = mysqli_query($link, $query);
            if(!$result)
                die("Unable to retrieve".mysqli_error($link));
            $row = mysqli_fetch_assoc($result);
            $x2 = $row['average'];
            //$x2 = 5.8;
            echo $x2.'<br>';
            
            $y = $b0 + $b1 * $x1 + $b2 * $x2;
            echo $y;
        }
    }
}
mysqli_close($link);

/*
$N = 0;

$x1 = 0;
$x2 = 0;
$y = 0;

$x1Total = 0;
$x2Total = 0;
$yTotal = 0;

$x1SquareTotal = 0;
$x2SquareTotal = 0;

$x1y = 0;
$x2y = 0;
$x1x2 = 0;

$temp = array(33,38,40,45,30,40);
$soil = array(8,4,5,2,10,5);
$amount = array(218.55,227.82,228.52,228.52,208.47,228.52);
$N = 6;

for($i=0;$i<$N;$i++)
{
    $x1 = $temp[$i];
    $x2 = $soil[$i];
    $y = $amount[$i];
    
    $x1Total += $x1;
    $x1SquareTotal += $x1 * $x1;
    $x1y += $x1 * $y;
    
    $x2Total += $x2;
    $x2SquareTotal += $x2 * $x2;
    $x2y += $x2 * $y;
    
    $yTotal += $y;
    $x1x2 += $x1 * $x2;
}

$x1Mean = $x1Total / $N;
$x2Mean = $x2Total / $N;
$yMean = $yTotal / $N;

$x1SquareTotal = $x1SquareTotal - $x1Total * $x1Total / $N;
$x2SquareTotal = $x2SquareTotal - $x2Total * $x2Total / $N;

$x1y = $x1y - $x1Total * $yTotal / $N;
$x2y = $x2y - $x2Total * $yTotal / $N;
$x1x2 = $x1x2 - $x1Total * $x2Total / $N;

$b1 = ($x2SquareTotal * $x1y - $x1x2 * $x2y) / ($x1SquareTotal * $x2SquareTotal - $x1x2 * $x1x2);
$b2 = ($x1SquareTotal * $x2y - $x1x2 * $x1y) / ($x1SquareTotal * $x2SquareTotal - $x1x2 * $x1x2);
$b0 = $yMean - $b1 * $x1Mean - $b2 * $x2Mean;

$x1 = 37.2;
$x2 = 5.8;

$y = $b0 + $b1 * $x1 + $b2 * $x2;
echo $y;
*/

?>