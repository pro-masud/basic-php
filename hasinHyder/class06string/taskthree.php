<?php

// Create the transactions array
$transactions = [
    [
        'Transaction ID' => 1,
        'Date' => '2023-01-15',
        'Amount' => 1000,
        'Type' => 'Deposit',
    ],
    [
        'Transaction ID' => 2,
        'Date' => '2023-02-10',
        'Amount' => 500,
        'Type' => 'Withdrawal',
    ],
    [
        'Transaction ID' => 3,
        'Date' => '2023-03-05',
        'Amount' => 700,
        'Type' => 'Deposit',
    ],
    [
        'Transaction ID' => 4,
        'Date' => '2023-04-20',
        'Amount' => 300,
        'Type' => 'Withdrawal',
    ],
    [
        'Transaction ID' => 5,
        'Date' => '2023-05-12',
        'Amount' => 1200,
        'Type' => 'Deposit',
    ],
    [
        'Transaction ID' => 6,
        'Date' => '2023-06-25',
        'Amount' => 200,
        'Type' => 'Withdrawal',
    ],
];

// Calculate and print the total amount of all "Deposit" transactions
$totalDeposits = 0;
foreach ($transactions as $transaction) {
    if ($transaction['Type'] === 'Deposit') {
        $totalDeposits += $transaction['Amount'];
    }
}
echo "Total Deposits: $" . number_format($totalDeposits, 2) . PHP_EOL;

// Calculate and print the total amount of all "Withdrawal" transactions
$totalWithdrawals = 0;
foreach ($transactions as $transaction) {
    if ($transaction['Type'] === 'Withdrawal') {
        $totalWithdrawals += $transaction['Amount'];
    }
}
echo "Total Withdrawals: $" . number_format($totalWithdrawals, 2) . PHP_EOL;

// Calculate and print the net balance
$netBalance = $totalDeposits - $totalWithdrawals;
echo "Net Balance: $" . number_format($netBalance, 2) . PHP_EOL;

// Find and print the date of the first "Deposit" transaction
$firstDepositDate = null;
foreach ($transactions as $transaction) {
    if ($transaction['Type'] === 'Deposit') {
        $firstDepositDate = $transaction['Date'];
        break;
    }
}
echo "Date of the first Deposit: " . $firstDepositDate . PHP_EOL;

// Create a new array named recent_transactions containing only transactions from the last three months
$recent_transactions = [];
$currentDate = date('Y-m-d');
$threeMonthsAgo = date('Y-m-d', strtotime('-3 months'));

foreach ($transactions as $transaction) {
    if ($transaction['Date'] >= $threeMonthsAgo && $transaction['Date'] <= $currentDate) {
        $recent_transactions[] = $transaction;
    }
}

// Print the recent_transactions array
echo "Recent Transactions (Last 3 Months):\n";
print_r($recent_transactions);
?>
