<?php

$choices = ["rock", "paper", "scissors", "lizard", "spock"];

$pairs = [
    "rock" => ["scissors", "lizard"],
    "paper" => ["rock", "spock"],
    "scissors" => ["paper", "lizard"],
    "lizard" => ["paper", "spock"],
    "spock" => ["rock", "scissors"]
];

$userChoise = strtolower(readline("Rock, Paper, Scissors, Lizard or Spock?"));

if (!in_array($userChoise, $choices)) {
    echo "Invalid choice!";
    exit;
}

$computerChoice = $choices[array_rand($choices)];

echo "Computer's choice: $computerChoice\n";

if ($userChoise === $computerChoice) {
    echo "It's a draw";
} elseif (in_array($computerChoice, $pairs[$userChoise])) {
    echo "Player wins!";
} else {
    echo "Computer wins!";
}

?>

