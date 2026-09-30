<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/config.php';

$device = $_POST['device'] ?? 'Unknown';
$version = $_POST['version'] ?? 'Unknown';

$message  = "🟢 <b>INSTALLATION COMPLETED</b>\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= "🖥️ <b>Device:</b> " . htmlspecialchars($device, ENT_QUOTES, 'UTF-8') . "\n";
$message .= "📦 <b>Application:</b> installed Application\n";
$message .= "🔢 <b>Version:</b> " . htmlspecialchars($version, ENT_QUOTES, 'UTF-8') . "\n";
$message .= "💻 <b>OS:</b> Windows\n";
$message .= "📅 <b>Date:</b> " . gmdate('d F Y') . "\n";
$message .= "⏰ <b>Time:</b> " . gmdate('H:i:s') . " UTC\n";
$message .= "━━━━━━━━━━━━━━━━━━\n";
$message .= "✅ <b>Status:</b> Installation completed";

sendTelegramMessage($message);

header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'status' => 'installation_completed'
]);
