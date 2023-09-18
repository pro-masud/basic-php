<?php

// 1. Create an indexed array named `transactions` with at least ten transactions.
$transactions = array(
    array(
        'Transaction ID' => 1,
        'Date' => '2023-01-15',
        'Amount' => 1000,
        'Type' => 'Deposit'
    ),
    array(
        'Transaction ID' => 2,
        'Date' => '2023-02-02',
        'Amount' => 500,
        'Type' => 'Withdrawal'
    ),
    array(
        'Transaction ID' => 3,
        'Date' => '2023-03-10',
        'Amount' => 750,
        'Type' => 'Deposit'
    ),
    array(
        'Transaction ID' => 4,
        'Date' => '2023-04-20',
        'Amount' => 300,
        'Type' => 'Withdrawal'
    ),
    array(
        'Transaction ID' => 5,
        'Date' => '2023-05-05',
        'Amount' => 1200,
        'Type' => 'Deposit'
    ),
    array(
        'Transaction ID' => 6,
        'Date' => '2023-06-15',
        'Amount' => 200,
        'Type' => 'Withdrawal'
    ),
    array(
        'Transaction ID' => 7,
        'Date' => '2023-07-01',
        'Amount' => 900,
        'Type' => 'Deposit'
    ),
    array(
        'Transaction ID' => 8,
        'Date' => '2023-08-10',
        'Amount' => 450,
        'Type' => 'Withdrawal'
    ),
    array(
        'Transaction ID' => 9,
        'Date' => '2023-09-05',
        'Amount' => 800,
        'Type' => 'Deposit'
    ),
    array(
        'Transaction ID' => 10,
        'Date' => '2023-10-12',
        'Amount' => 600,
        'Type' => 'Withdrawal'
    ),
);

// 2. Calculate and print the total amount of all "Deposit" transactions.
$totalDeposits = 0;
foreach ($transactions as $transaction) {
    if ($transaction['Type'] === 'Deposit') {
        $totalDeposits += $transaction['Amount'];
    }
}
echo "Total Deposits: $totalDeposits\n";

// 3. Calculate and print the total amount of all "Withdrawal" transactions.
$totalWithdrawals = 0;
foreach ($transactions as $transaction) {
    if ($transaction['Type'] === 'Withdrawal') {
        $totalWithdrawals += $transaction['Amount'];
    }
}
echo "Total Withdrawals: $totalWithdrawals\n";

// 4. Calculate and print the net balance (total deposits - total withdrawals).
$netBalance = $totalDeposits - $totalWithdrawals;
echo "Net Balance: $netBalance\n";

// 5. Find and print the date of the first "Deposit" transaction.
$firstDepositDate = null;
foreach ($transactions as $transaction) {
    if ($transaction['Type'] === 'Deposit') {
        $firstDepositDate = $transaction['Date'];
        break; // Exit the loop after finding the first deposit
    }
}
if ($firstDepositDate !== null) {
    echo "Date of the First Deposit: $firstDepositDate\n";
} else {
    echo "No Deposit Transactions Found\n";
}

// 6. Create a new array named `recent_transactions` containing only transactions from the last three months.
$currentDate = date('Y-m-d'); // Get the current date in 'YYYY-MM-DD' format
$recent_transactions = array_filter($transactions, function ($transaction) use ($currentDate) {
    $transactionDate = $transaction['Date'];
    $threeMonthsAgo = date('Y-m-d', strtotime('-3 months', strtotime($currentDate)));
    return $transactionDate >= $threeMonthsAgo;
});

// Print the recent transactions
echo "Recent Transactions (Last 3 Months):\n";
print_r($recent_transactions);










// Task 4: Array Transformation and Reporting

// 7. Create an indexed array named student_scores to store the scores of students in a class.

$student_scores = array(
    array(
        "Student Name" => "Alice",
        "Scores" => array(85, 92, 78, 89, 95)
    ),
    array(
        "Student Name" => "Bob",
        "Scores" => array(75, 88, 90, 79, 92)
    ),
    array(
        "Student Name" => "Charlie",
        "Scores" => array(94, 87, 91, 88, 85)
    ),
    array(
        "Student Name" => "David",
        "Scores" => array(80, 79, 82, 78, 88)
    ),
    array(
        "Student Name" => "Eve",
        "Scores" => array(92, 90, 91, 87, 94)
    )
);

// 8. Calculate and print the average score for each student.

foreach ($student_scores as $student) {
    $studentName = $student["Student Name"];
    $scores = $student["Scores"];
    $averageScore = array_sum($scores) / count($scores);
    echo "Average score for $studentName: $averageScore<br>";
}

// 8. Identify and print the student with the highest average score.

$maxAverageScore = -1;
$studentWithHighestAverage = "";

foreach ($student_scores as $student) {
    $studentName = $student["Student Name"];
    $scores = $student["Scores"];
    $averageScore = array_sum($scores) / count($scores);
    
    if ($averageScore > $maxAverageScore) {
        $maxAverageScore = $averageScore;
        $studentWithHighestAverage = $studentName;
    }
}

echo "Student with the highest average score: $studentWithHighestAverage ($maxAverageScore)<br>";

// 8. Create a new array named students_above_average containing students whose average score is above 80.

$students_above_average = array();

foreach ($student_scores as $student) {
    $studentName = $student["Student Name"];
    $scores = $student["Scores"];
    $averageScore = array_sum($scores) / count($scores);
    
    if ($averageScore > 80) {
        $students_above_average[] = $student;
    }
}

echo "Students with average scores above 80:<br>";
foreach ($students_above_average as $student) {
    $studentName = $student["Student Name"];
    $averageScore = array_sum($student["Scores"]) / count($student["Scores"]);
    echo "$studentName ($averageScore)<br>";
}

?>











<?php

// Task 5: Searching and Modifying Arrays

// 9. Create an indexed array named colors containing the names of various colors.

$colors = array("red", "green", "blue", "yellow", "purple");

// 10. Check if the color "green" exists in the colors array and print the result.

if (in_array("green", $colors)) {
    echo "The color 'green' exists in the colors array.<br>";
} else {
    echo "The color 'green' does not exist in the colors array.<br>";
}

// 10. Remove the color "blue" from the colors array.

$key = array_search("blue", $colors);
if ($key !== false) {
    array_splice($colors, $key, 1);
    echo "The color 'blue' has been removed from the colors array.<br>";
} else {
    echo "The color 'blue' was not found in the colors array.<br>";
}

// 10. Add the color "orange" to the beginning of the colors array.

array_unshift($colors, "orange");
echo "The color 'orange' has been added to the beginning of the colors array.<br>";

// Print the modified colors array.

echo "Modified colors array: " . implode(", ", $colors) . "<br>";

?>
