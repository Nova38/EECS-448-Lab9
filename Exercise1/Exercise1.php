<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//Inside myfirstprogram.php
function tb($product) {
 $z = "<td>". $product ."</td>";
 return $z;
}
function product($x, $y){
    $product = $x * $y;
    return $product;
}

echo "<table>";

echo "<tr>";
for ($i = 0; $i <= 100; $i++) {
    if($i == 0 ){
        echo "<th> </th>";
    }else{

        echo "<th>". product(1,$i) . "</th>";
    }
}
echo "</tr>";


for ($i = 1; $i <= 100; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= 100; $j++) {
        if($j == 0 ){
            echo "<th>". $i. "</th>";
        }else{

            echo "<th>". product($i,$j) . "</th>";
        }
    }
    echo "</tr>";

}


echo "</table>";
