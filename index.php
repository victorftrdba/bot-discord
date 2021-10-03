<?php

ini_set('memory_limit', '-1');
 
use Discord\Discord;
use Discord\Parts\Embed\Embed;
use Discord\WebSockets\Event;
 
include 'vendor/autoload.php';
 
$discord = new Discord([
    'token' => 'ODk0MDE0Nzk2Nzc1NjkwMjcw.YVj2KQ.9JSNsgXHFHnxmXLXQzPQCPmoV50',
]);

$discord->on('message', function ($message) use ($discord) {
    if($message->author->id === $discord->id) return;

    $guild = $discord->guilds->get('id', '823057085037543444');
    $channel = $guild->channels->get('id', '850530914852143134');

    switch($message->content) {
        case '!bot':
            $channel->sendFile('imgs/be014.gif');
            break;
        case '!help':
            $channel->sendMessage('Precisando de ajuda? Consulte a documentação do Discord! https://support.discord.com/hc/pt-br/articles/360045138571-Guia-do-Iniciante-para-Discord');
            break;
        case 'bot burro':
            $channel->sendFile('imgs/laranjo1.jpg');
            break;
        case '!':
            $channel->sendMessage('Desculpe, não conheço este comando!');
            break;
    }
});
 
$discord->run();