<?php
// Array of employees with their details: [ID, Name, Department, Salary]
$employees = [
    [1, "Alice", "Marketing", 50000],
    [2, "Bob", "Finance", 60000],
    [3, "Charlie", "HR", 55000],
    [4, "David", "Marketing", 70000],
    [5, "Eve", "Finance", 80000],
    [6, "Frank", "HR", 75000],
];

// Function to increment salaries based on department
function increment_salaries(&$employees) {
    foreach ($employees as &$employee) {
        if ($employee[2] == "Marketing") {
            $employee[3] *= 1.10;  // Increase by 10%
        } elseif ($employee[2] == "Finance") {
            $employee[3] *= 1.08;  // Increase by 8%
        } elseif ($employee[2] == "HR") {
            $employee[3] *= 1.09;  // Increase by 9%
        }
    }
}

// Increment the salaries
increment_salaries($employees);

// Print the updated employee details
foreach ($employees as $employee) {
    printf("ID: %d, Name: %s, Department: %s, Updated Salary: %.2f\n", $employee[0], $employee[1], $employee[2], $employee[3]);
}
?>
