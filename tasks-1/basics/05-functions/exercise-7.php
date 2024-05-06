<?php
/*
 * Imagine you own a gun store.
 * Only certain guns can be purchased with license types.
 * Create an object (person) that will be the requester to purchase a gun
 * (object) Person object has a name, valid licenses (multiple) & cash.
 * Guns are objects stored within an array. Each gun has license letter, price & name.
 * Using PHP in-built functions determine if the requester (person) can buy a gun from the store.
 */

$person = [
    'name' => 'John Smith',
    'licenses' => ['MAG', 'HKG', 'LER'],
    'cash' => 10000,
];
$guns = [
    [
        'license' => 'MAG',
        'price' => 11900,
        'name' => 'Magnum Revolver',
    ],
    [
        'license' => 'AK',
        'price' => 1500,
        'name' => 'AK-47',
    ],
    [
        'license' => 'LER',
        'price' => 850,
        'name' => 'Lee Enfield Rifle',
    ],
];
function canPurchaseGun(array $person, array $gun): string
{
    if (!in_array($gun['license'], $person['licenses'])) {
        return "Cannot buy {$gun['name']}. Missing required license: {$gun['license']}.";
    }
    if ($person['cash'] < $gun['price']) {
        return "Cannot buy " . $gun['name'] . ". Not enough cash.";
    }
    return "{$person['name']} can buy {$gun['name']}.";
}

foreach ($guns as $gun) {
    echo canPurchaseGun($person, $gun) . PHP_EOL;
}