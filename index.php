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
            $channel->sendMessage("", false, [
                'image' => [
                    'url' => 'https://i.pinimg.com/564x/fe/cc/5a/fecc5af878fd4dcb540c1cd451f45de3.jpg',
                ],
                "color" => '15158332', 
                "title" => "### SEJA MUITO BEM-VINDO ###", 
                "description" => "Servidor: House's Alien",
                'fields' =>array(
                        '0' => array(
                            'name' => 'COMUNIDADE AMIGÁVEL',
                            'value' => 'Prezamos pela ajuda ao próximo!',
                            'inline' => true,
                        ),
                        '1' => array(
                            'name' => 'DIVERSÃO',
                            'value' => 'Diversão a todo momento!',
                            'inline' => true,
                        ),
                    ),
                    'footer' => array(
                        'icon_url'  => 'https://discord.gg/CE9dUe3K8D',
                        'text'  => "© House's Alien - Developed by victorDev",
                    ),
                ]);
            break;
        case '!help':
            $channel->sendMessage("", false, [
                'image' => [
                    'url' => 'https://www.teclasap.com.br/wp-content/uploads/2010/02/help.png',
                ],
                "color" => '3447003', 
                "title" => "### PRECISANDO DE AJUDA? ###", 
                "description" => 'Veja nossas regras!',
                'fields' =>array(
                        '0' => array(
                            'name' => 'REGRA #1',
                            'value' => 'O que acontece no Discord, fica no Discord!',
                            'inline' => true,
                        ),
                    ),
                'footer' => array(
                    'icon_url'  => 'https://discord.gg/CE9dUe3K8D',
                    'text'  => "© House's Alien - Developed by victorDev",
                ),
            ]);
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