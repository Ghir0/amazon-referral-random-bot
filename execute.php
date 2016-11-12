<?php
// recupero il contenuto inviato da Telegram
$content = file_get_contents("php://input");
// converto il contenuto da JSON ad array PHP
$update = json_decode($content, true);
// se la richiesta è null interrompo lo script
if(!$update)
{
  exit;
}
$affiliate = "&tag=miketama-21"; // This is what is in all of my Amazon Affiliate links. To get yours, make an affiliate link, then look for where it has a "?" then copy all the characters from the "?" to the "=" including those two signs.
// assegno alle seguenti variabili il contenuto ricevuto da Telegram
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
// pulisco il messaggio ricevuto togliendo eventuali spazi prima e dopo il testo
$text = trim($text);
$text = strtolower($text);


// gestisco la richiesta
$response = '';
if(strpos($text, "/start") === 0 || $text=="ciao")
{
	$response = "Hi $firstname! Send me an Amazon link";
}
elseif((bool)parse_url($text);)
{
	//parse e modifica URL
$response = "URL VALIDO"
}
else
{
	$response = "Send me an Amazon link please!";
}
$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);


return $result
}


function isValidURL($url) { return (bool)parse_url($url); }


header("Content-Type: application/json");
$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
