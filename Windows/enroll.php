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
        'error' => 'Missing enrollment information'
    ]);
    exit;
}

/*
 * Replace these with your organization's enrolled devices.
 * Store real enrollment keys securely, preferably outside the web root.
 */
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
        'error' => 'Invalid enrollment credentials'
    ]);
    exit;
}

$record = [
    'device_id' => $deviceId,
    'version' => $version,
    'enrolled_at' => gmdate('Y-m-d H:i:s') . ' UTC'
];

file_put_contents(
    __DIR__ . '/enrolled-devices.json',
    json_encode($record, JSON_PRETTY_PRINT)
);

$message  = "🟢 <b>DEVICE ENROLLED</b>\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= "🖥️ <b>Device:</b> " . htmlspecialchars($deviceId) . "\n";
$message .= "📦 <b>Version:</b> " . htmlspecialchars($version) . "\n";
$message .= "📅 <b>Date:</b> " . gmdate('d F Y') . "\n";
$message .= "⏰ <b>Time:</b> " . gmdate('H:i:s') . " UTC\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= "✅ <b>Status:</b> Enrolled";

sendTelegramMessage($message);

echo json_encode([
    'success' => true,
    'status' => 'enrolled'
]);
