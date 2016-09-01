<?php

// ----------------------------------------------------------------------------- COMPLETED

$pizza = [
    'toppings' => ['pepperoni', 'green peppers', 'onions'],
    'crust'    => 'stuffed',
    'delivery' => true,
];

// output the type of crust for the pizza
echo 'The type of crust for the first pizza: ' . PHP_EOL;

echo $pizza['crust'] . PHP_EOL;




// ----------------------------------------------------------------------------- 

$orders = [
    [
        'toppings' => ['pepperoni', 'green peppers', 'onions'],
        'crust'    => 'stuffed',
        'delivery' => true,
        'price'    => 1295
    ],
    [
        'toppings' => ['onion', 'salami'],
        'crust'    => 'pretzel',
        'delivery' => false,
        'price'    => 1195
    ],
    [
        'toppings' => ['pineapple', 'ham'],
        'crust'    => 'regular',
        'delivery' => true,
        'special instructions' => 'extra crispy crust',
        'price'    => 995
    ]
];

// output all the different crust types DONE
// foreach ($orders as $order) {
//     echo $order['crust'] . PHP_EOL;
// }

// output information about all the orders for delivery
foreach ($orders as $index => $order) {
    // if the order is not for delivery skip it
    if (! $order['delivery']) {
       continue; 
    } else {
        foreach ($order as $name => $info) {
            if (is_array($info)) {
                echo 'Toppings = ';
                foreach ($info as $topping) {
                    echo $topping . ' ';
                }
                echo PHP_EOL;
            } else {
                echo $name . ' = ' . $info . PHP_EOL;
            }
        }
    }
}


//         foreach ($order['toppings'] as $topping) {
//             echo $topping . ' ';
//         }
//         echo $order['toppings'] . PHP_EOL;
//         echo $order['crust'] . PHP_EOL;
//         echo $order['delivery'] . PHP_EOL;
//         echo $order['price'] . PHP_EOL;
//     }
//     echo PHP_EOL;
// // }

// }




    // human friendly order number
    $orderNumber = $index + 1;
    // turn our price in cents into a price in dollars and add a '$'
    $formattedPrice = '$' . (float) $order['price'] / 100;

    echo  "---------------- Order # $orderNumber --------------" . PHP_EOL;

    // display all the toppings
    echo 'Toppings:' . PHP_EOL;
    foreach ($order['toppings'] as $topping) {
        echo "  - $topping" . PHP_EOL;
    }

    echo "Crust: {$order['crust']}" . PHP_EOL;

    // if the order has special instructions display them
    if (isset($order['special instructions']) {
        echo "Special Prep: {$order['special instructions']}" . PHP_EOL;
    }
    
    echo "Total: $formattedPrice" . PHP_EOL;
}