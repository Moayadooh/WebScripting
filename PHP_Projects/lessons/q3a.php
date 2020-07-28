<?php
$salary1;
$salary2;

function Cal_Totalsalary($a,$b)
{
    global $total;
    $total = $a + $b;
}

Cal_Totalsalary($salary1,$salary2);
echo "$total";
?>