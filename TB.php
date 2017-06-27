<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('287012447:AAGb1CdvxcSKH-b4sUcPkF7X79F7Rba34o8');

$updates = $telegram->getUpdates();

foreach($updates as $update){
    $telegram->sendMessage([
        "chat_id" => $update->getMessage()->getChat()->getId(),
        "text" => "You Say : ".$update->getMessage()->getText()
    ]);
}
