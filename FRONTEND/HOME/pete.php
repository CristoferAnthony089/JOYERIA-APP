<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://openrouter.ai/api/v1/chat/completions');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer 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',
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'model' => 'openai/gpt-oss-20b:free',
    'messages' => [
        ['role' => 'user', 'content' => 'Si tengo algun pensamiento negativo o suicida, ¿cómo puedo cambiarlo por uno positivo?']
    ],
    'max_tokens' => 300
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_error($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);   