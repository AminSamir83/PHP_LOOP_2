<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 06/11/2018
 * Time: 14:30
 */
$tab1=[1,2,3,4,5,6,7,8,9];
$tab2=$tab1;
echo "<table  border=1><tr bgcolor=yellow> <td>* </td> <td>1 </td><td>2 </td><td>3 </td><td>4 </td><td>5 </td><td>6 </td><td>7 </td><td>8</td> <td>9 </td></tr>";
for ($i=0;$i<9;$i++) {
    echo "<tr><td bgcolor=yellow>".($i+1)."</td>";
    for ($j = 0; $j < 9; $j++) {

        echo "<td bgcolor=red style='color: white'>".$tab1[$i] * $tab2[$j]."</td>";

    }
    echo "</tr>";
}
echo "</table>";