<?php
// Task 1: Array Operations and Sorting

// 1. Create an indexed array named `sales` representing monthly sales figures.
$sales = [];
for ($i = 0; $i < 12; $i++) {
    $sales[] = rand(10000, 50000); // Generating random values between $10,000 and $50,000 (inclusive).
}

// 2. Find and print the total annual sales.
$totalAnnualSales = array_sum($sales);
echo "Total Annual Sales: $" . number_format($totalAnnualSales, 2) . "\n";

// 3. Identify and print the month with the highest sales.
$highestSalesMonth = array_search(max($sales), $sales);
echo "Month with Highest Sales: " . date("F", mktime(0, 0, 0, $highestSalesMonth + 1, 1)) . "\n";

// 4. Identify and print the month with the lowest sales.
$lowestSalesMonth = array_search(min($sales), $sales);
echo "Month with Lowest Sales: " . date("F", mktime(0, 0, 0, $lowestSalesMonth + 1, 1)) . "\n";

// 5. Sort the `sales` array in descending order and print it.
rsort($sales);
echo "Sales Array Sorted in Descending Order:\n";
foreach ($sales as $month => $salesValue) {
    echo date("F", mktime(0, 0, 0, $month + 1, 1)) . ": $" . number_format($salesValue, 2) . "\n";
}
?>



<?php

// Create the student_scores array
$student_scores = array(
    array(
        "Student Name" => "John",
        "Scores" => array(85, 92, 78, 89, 95)
    ),
    array(
        "Student Name" => "Alice",
        "Scores" => array(76, 88, 92, 80, 89)
    ),
    array(
        "Student Name" => "Bob",
        "Scores" => array(90, 87, 84, 79, 92)
    ),
    array(
        "Student Name" => "Emily",
        "Scores" => array(88, 95, 91, 78, 86)
    ),
    array(
        "Student Name" => "David",
        "Scores" => array(82, 79, 75, 88, 90)
    )
);

// Function to calculate the average score for a student
function calculateAverageScore($student) {
    $scores = $student["Scores"];
    $totalScore = array_sum($scores);
    $numExams = count($scores);
    return $totalScore / $numExams;
}

// Initialize variables to store the lowest average score and the corresponding student
$lowestAverageScore = PHP_FLOAT_MAX;
$lowestScoringStudent = null;

// Calculate the lowest average score and the corresponding student
foreach ($student_scores as $student) {
    $averageScore = calculateAverageScore($student);
    if ($averageScore < $lowestAverageScore) {
        $lowestAverageScore = $averageScore;
        $lowestScoringStudent = $student['Student Name'];
    }
}

// Print the student with the lowest average score
echo "Student with the Lowest Average Score: $lowestAverageScore\n";

?>
