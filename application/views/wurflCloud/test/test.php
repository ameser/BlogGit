<?php 
// Include the WURFL Cloud Client 
// You'll need to edit this path 
require_once 'Client/Client.php'; 
// Create a configuration object  
$config = new WurflCloud_Client_Config();  
// Set your WURFL Cloud API Key  
$config->api_key = '433709:h1Gg6OQcweV7zqPvWntfdJAji4pZum3o';   
// Create the WURFL Cloud Client  
$client = new WurflCloud_Client_Client($config);  
// Detect your device  
$client->detectDevice();  
// Use the capabilities  
if ($client->getDeviceCapability('is_wireless_device')) {  
    echo "This is a mobile device";  
} else {  
    echo "This is a desktop device";  
} 
?>