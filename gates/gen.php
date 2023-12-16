<?php

function generateRandomCreditCardNumber() {
    $number = '';
    for ($i = 0; $i < 16; $i++) {
        $number .= mt_rand(0, 9);
    }
    return $number;
}

function generateRandomCVV() {
    return str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);
}

function generateRandomExpirationDate() {
    // Generating a random expiration date in the future (within the next 10 years)
    $month = str_pad(mt_rand(1, 12), 2, '0', STR_PAD_LEFT);
    $year = date('Y') + mt_rand(1, 10);

    return $month . '/' . $year;
}

function generateRandomCreditCard() {
    $creditCardNumber = generateRandomCreditCardNumber();
    $cvv = generateRandomCVV();
    $expirationDate = generateRandomExpirationDate();

    $creditCard = [
        'number' => $creditCardNumber,
        'cvv' => $cvv,
        'expiration_date' => $expirationDate
    ];

    return $creditCard;
}

// Generate a random credit card
$randomCreditCard = generateRandomCreditCard();

// Display the generated random credit card details
echo "Random Credit Card Details: \n";
echo "Card Number: " . $randomCreditCard['number'] . "\n";
echo "CVV: " . $randomCreditCard['cvv'] . "\n";
echo "Expiration Date: " . $randomCreditCard['expiration_date'] . "\n";

?>
