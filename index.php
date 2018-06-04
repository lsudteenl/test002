$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<cVEzC6zHrhzVc5gHgNwQ4LhEi/4w+uGMqTaJEtYFWNmtiobUlcMOkab5Ay2sHA7OXxxozIhjQ1h5ikQkVUQHZv4eld7MGeUR7Vu++UvHRZB7s0ykSwwLjf5ilqwyLPej9SPZk3s3bfyQzHEqmwlcSAdB04t89/1O/w1cDnyilFU=
>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<5532695f618d2202f4b24527c9bf74cb>']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('<cVEzC6zHrhzVc5gHgNwQ4LhEi/4w+uGMqTaJEtYFWNmtiobUlcMOkab5Ay2sHA7OXxxozIhjQ1h5ikQkVUQHZv4eld7MGeUR7Vu++UvHRZB7s0ykSwwLjf5ilqwyLPej9SPZk3s3bfyQzHEqmwlcSAdB04t89/1O/w1cDnyilFU=
>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
