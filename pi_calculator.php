<?php

function calculate_pi($iterations)
{
    $pi = 0;
    $sign = 1;

    for ($i = 1; $i <= $iterations * 2; $i += 2) {
        $pi += $sign * (4 / $i);
        $sign *= -1;
    }

    return $pi;
}

$iterations = 1;
while (true) {
    echo "Current value of PI: " . calculate_pi($iterations) . PHP_EOL;
    echo "Enter 'S' to select a new number of iterations or 'Q' to quit: ";

    $choice = strtoupper(trim(fgets(STDIN)));

    if ($choice === 'S') {
        echo "Enter the number of iterations: ";
        $new_iterations = (int) trim(fgets(STDIN));

        if ($new_iterations > 0) {
            $iterations = $new_iterations;
        } else {
            echo "Invalid input. Please enter a positive integer." . PHP_EOL;
        }
    } elseif ($choice === 'Q') {
        break;
    } else {
        echo "Invalid choice. Please try again." . PHP_EOL;
    }
}
