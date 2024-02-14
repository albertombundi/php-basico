<?php

function getPlayersName(): array
{
    return[
        readline('Player 1 (' .PLAYER_ONE_ICON. ') -> Digite o seu nome: '),
        readline('Player 2 (' .PLAYER_TWO_ICON. ') -> Digite o seu nome: '),
    ];
}
