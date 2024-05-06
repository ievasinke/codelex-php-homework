<?php
/*
 * Create a 2D associative array in 2nd dimension with fruits and their weight.
 * Create a function that determines if fruit has weight over 10kg.
 * Create a secondary array with shipping costs per weight.
 * Meaning that you can say that over 10 kg shipping costs are 2 euros,
 * otherwise its 1 euro. Using foreach loop print out the values of the fruits and
 * how much it would cost to ship this product.
 */

$shippingInventory = [
    'fruits' => [
        'apples' => 11,
        'oranges' => 7,
        'pineapples' => 15,
    ],
    'shippingCosts' => [
        'under10kg' => 1,
        'over10kg' => 2,
    ],
];

function calculateShippingCost(int $weight, array $shippingCosts): int
{
    if ($weight < 10) {
        return $shippingCosts['under10kg'] * $weight;
    } else {
        return $shippingCosts['over10kg'] * $weight;
    }
}

foreach ($shippingInventory['fruits'] as $fruit => $weight) {
    $shippingCost = calculateShippingCost($weight, $shippingInventory['shippingCosts']);
    echo "The shipping cost for $fruit is $shippingCost euro(s).\n";
}