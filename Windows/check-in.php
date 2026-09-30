<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/config.php';

header('Content-Type: application/json');

$deviceId = trim($_POST['device_id'] ?? '');
$enrollmentKey = trim($_POST['enrollment_key'] ?? '');
$version = trim($_POST['version'] ?? 'Unknown');

if ($deviceId === '' || $enrollmentKey === '') {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => 'Missing check-in information'
    ]);
    exit;
}

$devices = [
    'TEST-LAPTOP-01' => 'REPLACE_WITH_DEVICE_KEY'
];

if (
    !isset($devices[$deviceId]) ||
    !hash_equals($devices[$deviceId], $enrollmentKey)
) {
    http_response_code(403);
    echo json_encode([
        'success' => false,
        'error' => 'Invalid device credentials'
    ]);
    exit;
}

$checkIn = [
    'device_id' => $deviceId,
    'version' => $version,
    'last_check_in' => gmdate('Y-m-d H:i:s') . ' UTC'
];

file_put_contents(
    __DIR__ . '/device-status.json',
    json_encode($checkIn, JSON_PRETTY_PRINT)
);

$message  = "🟢 <b>APPLICATION ONLINE</b>\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= "🖥️ <b>Device:</b> " . htmlspecialchars($deviceId) . "\n";
$message .= "📦 <b>Version:</b> " . htmlspecialchars($version) . "\n";
$message .= "📅 <b>Date:</b> " . gmdate('d F Y') . "\n";
$message .= "⏰ <b>Last Check-in:</b> " . gmdate('H:i:s') . " UTC\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= "✅ <b>Status:</b> Online";

sendTelegramMessage($message);

echo json_encode([
    'success' => true,
    'status' => 'online'
]);
