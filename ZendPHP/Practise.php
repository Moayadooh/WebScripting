<?php 

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
    
    $temp = array(3,4,5,6,2);
    $soil = array(8,5,7,3,1);
    $amount = array(-3.7,3.5,2.5,11.5,5.7);
    $N = 5;
    
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
    
    $y = $b0 + $b1 * 0 + $b2 * 0;
    echo $y;
    
?>