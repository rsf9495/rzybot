<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('180869068:AAEjtAbKZmoyl77eNG97elqrBtoFEF4yY40');

$updates = $telegram->getUpdates();

foreach($updates as $update){
    $telegram->sendMessage([
        "chat_id" => $update->getMessage()->getChat()->getId(),
        "text" => "You Say : ".$update->getMessage()->getText()
    ]);
}