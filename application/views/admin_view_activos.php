<?php 
// Include the WURFL Cloud Client 
// You'll need to edit this path 
/*require_once '../wurflCloud/Client/Client.php'; 
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
echo "pasa";*/
?>
<html>
<head>
<title><?=$titulo?></title>
</head>
<body>
<? include('menu.php'); ?>
<h1><?=$Encabezado?></h1>
<?=form_open('blog_admin/delete_comment');?>
<ol>
<?
foreach($query->result() as $item):
?>
<h3><?=$item->email?></h3>
<p><?=$item->comentario?></p>
<?=anchor('admin/delete_comment/'.$item->NPK_idcomentario, 'Desactivar Comentario')?>
<hr>
<?
	endforeach;
?>
</ol>
</body>
</html>
