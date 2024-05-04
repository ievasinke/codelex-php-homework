<?php
/*
 * Code an interactive, two-player game of Tic-Tac-Toe.
 * You'll use a two-dimensional array of chars.
 * 'O', choose your location (row, column): 0 1
 * 'X', choose your location (row, column): 2 0
 * The game is a tie.
 */
function display_board($gameBoard)
{
    echo " {$gameBoard[0][0]} | {$gameBoard[0][1]} | {$gameBoard[0][2]} \n";
    echo "---+---+---\n";
    echo " {$gameBoard[1][0]} | {$gameBoard[1][1]} | {$gameBoard[1][2]} \n";
    echo "---+---+---\n";
    echo " {$gameBoard[2][0]} | {$gameBoard[2][1]} | {$gameBoard[2][2]} \n";
}

function hasWinner(array $winningCombinations, array $gameBoard, string $player): bool
{
    foreach ($winningCombinations as $combination) {
        $is_winner = true;
        foreach ($combination as $position) {
            if ($gameBoard[$position[0]][$position[1]] !== $player) {
                $is_winner = false;
                break;
            }
        }
        if ($is_winner) {
            return true;
        }
    }
    return false;
}

$gameBoard = [[" ", " ", " "], [" ", " ", " "], [" ", " ", " "]];
$winningCombinations = [
    [[0, 0], [0, 1], [0, 2]],
    [[1, 0], [1, 1], [1, 2]],
    [[2, 0], [2, 1], [2, 2]],
    [[0, 0], [1, 1], [2, 2]],
    [[0, 2], [1, 1], [2, 0]],
    [[0, 0], [1, 0], [2, 0]],
    [[0, 1], [1, 1], [2, 1]],
    [[0, 2], [1, 2], [2, 2]]
];
$player = 'X';
$counter = 0;

while ($counter < 9) {
    display_board($gameBoard);
    echo "Player $player's turn.\n";
    $row = (int)readline("Enter row (1-3): ");
    $column = (int)readline("Enter column (1-3): ");
    if ($row < 1 || $row > 3 || $column < 1 || $column > 3) {
        echo "Invalid move: Out of bounds.\n";
        continue;
    }
    if ($gameBoard[$row - 1][$column - 1] !== ' ') {
        echo "Invalid move: Spot taken.\n";
        continue;
    }
    $gameBoard[$row - 1][$column - 1] = $player;
    if (hasWinner($winningCombinations, $gameBoard, $player)) {
        display_board($gameBoard);
        echo "Player $player wins!\n";
        exit;
    }
    $counter++;
    $player = ($player == 'X') ? 'O' : 'X';
}
display_board($gameBoard);
echo "It's a tie!\n";
