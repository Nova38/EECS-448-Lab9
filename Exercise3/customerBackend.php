<?php
//access the global array called $_POST to get the values from the text fields


echo '<link rel="stylesheet" href="style.css">';

$products = [
    [
        'name' => $_POST['prod_1_name'],
        'num' => $_POST['prod_1_num'],
        'price' => $_POST['prod_1_price']
    ],
    [
        'name' => $_POST['prod_2_name'],
        'num' => $_POST['prod_2_num'],
        'price' => $_POST['prod_2_price']
    ],
    [
        'name' => $_POST['prod_3_name'],
        'num' => $_POST['prod_3_num'],
        'price' => $_POST['prod_3_price']
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

echo "<table>\n<tr>";
echo "<th> </th>";
echo "<th>Quantity</th>";
echo "<th>Cost per Item</th>";
echo "<th>Sub Total</th>";




// foreach ($_POST as $value) {
//     echo$value;
//   }
// print_r($_POST);
