<?php

    require_once __DIR__ . '/constants.php';
    require_once __DIR__ . '/variables.php';
    require_once __DIR__ . '/getPlayersName.php';
    require_once __DIR__ . '/buildBoard.php';
    require_once __DIR__ . '/showBoard.php';
    require_once __DIR__ . '/isPositionCorrect.php';
    require_once __DIR__ . '/validate.php';
    require_once __DIR__ . '/isBoardFull.php';
    require_once __DIR__ . '/swapPlayer.php';
    require_once __DIR__ . '/showWinner.php';
    require_once __DIR__ . '/playAgain.php';

 do {
        $players = getPlayersName();
        $player = PLAYER_ONE_ICON;
        $board = buildBoard();
        $winner = null;

     while ($winner === null) {
        echo showBoard($board);
        $position = (int) readline("Player {$player}, digite a sua posição: "); 

        if(!isPositionCorrect($position, $board)) {
           continue;
        }

        $board[$position] = $player;

        if(validate($board, PLAYER_ONE_ICON)) {
            $winner = PLAYER_ONE_ICON;
        } elseif(validate($board, PLAYER_TWO_ICON)){
            $winner = PLAYER_TWO_ICON;
        } else{
            $winner = null;
        }

        if (isboardFull($board)) {
            break;
        }

        $player = swapPlayer($player);
    }

        echo showBoard($board);
        echo showWinner($winner, $players);

        $playAgain = playAgain();

        echo"\n";
    } while ($playAgain === true);
