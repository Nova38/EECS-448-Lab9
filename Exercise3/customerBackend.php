<?php
//access the global array called $_POST to get the values from the text fields


echo '<link rel="stylesheet" href="style.css">';

$products = [
    [
        'name' => $_POST['prod_1_name'],
        'num' => $_POST['prod_1_num'],
        'price' => $_POST['prod_1_price'],
        'total' => 0
    ],
    [
        'name' => $_POST['prod_2_name'],
        'num' => $_POST['prod_2_num'],
        'price' => $_POST['prod_2_price'],
        'total' => 0
    ],
    [
        'name' => $_POST['prod_3_name'],
        'num' => $_POST['prod_3_num'],
        'price' => $_POST['prod_3_price'],
        'total' => 0
    ],
];


$userInfo = [
    'user' => $_POST['user'],
    'password' => $_POST['pass']
];

switch ($_POST['Shipping']) {
    case '1':
        $shipping = [
            'cost' => 0,
            'type' => ' 7 Day Shipping'
        ];
        break;
    case '2':
        $shipping = [
            'cost' => 5,
            'type' => ' 3 Day Shipping'
        ];        break;
    case '3':
        $shipping = [
            'cost' => 50,
            'type' => 'Over Night Shipping'
        ];        break;
    default:
        # code...
        break;
}

// Make the header row
echo "<table>";
echo"<tr>";
echo "<th> </th>";
echo "<th class='t1'>Quantity</th>";
echo "<th class='t1'>Cost per Item</th>";
echo "<th class='t1'>Sub Total</th>";
echo "</tr>";


$total = 0;

// Make the item rows
foreach ($products as $prod) {
    $prod['total'] = $prod['num'] * $prod['price'];

    echo"<tr>";

    echo "<th class='t1'>" . $prod['name']  . "</th>";
    echo "<th class='t2'>" . $prod['num']   . "</th>";
    echo "<th class='t2'>" . $prod['price'] . "</th>";
    echo "<th class='t2'>" . $prod['total'] . "</th>";

    echo "</tr>";

    $total = $total + $prod['total'];

}
// unset the value to prevent an error
unset($value);


// Total Row
echo "<tr>";
echo "<th colspan= 3 class='t1'> To Cost</th>";
echo "<th class='t1'>" . $total  . "</th>";



echo "</tr>";


echo "</table>";

// foreach ($_POST as $value) {
//     echo$value;
//   }
// print_r($_POST);
