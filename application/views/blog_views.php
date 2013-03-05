<? 
include 'DeviceAtlasCloud/Client.php';
// get the data - this automatically uses the browser/device User-Agent
$test_mode = false; // if TRUE then a test device will be used to query DeviceAtlas Cloud
$da_data = DeviceAtlasCloudClient::getDeviceData($test_mode);
?>
<html>
<head>
<title><?=$titulo?></title>
</head>
<body>
<? include('menu.php');?>
<h1><?=$Encabezado?></h1>
<h3><? echo "Marca=>".$da_data['properties']['vendor']."</br>";
	echo "Modelo=>".$da_data['properties']['model']."</br>";
?></h3>
<?=form_open('blog/comment_insert');?>
<ol>
<?
foreach($query->result() as $item):
?>
<h3><?=$item->titulo?></h3>
<p><?=$item->contenido?></p>
<?=anchor('blog/comments/'.$item->NPK_identrada, 'Comments')?>
<hr>
<?
	endforeach;
?>
</ol>
</body>
</html>