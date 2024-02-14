<?php

/**
 * @param array<string> $board
 * @return boolean
 */
function isBoardFull(array $board): bool
{
    if (in_array(BLANK_ICON, $board)) {
        return false;
    } else {
        return true;
    }
}