<?php

$numberOfMessages = (int) readline("Digite o número de mensagem a serem exibidas: ");

for($count = 0; $count < $numberOfMessages; $count++){
    echo"{$count} - Mensagem\n";

}
