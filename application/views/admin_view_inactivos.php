<html>
<head>
<title><?=$titulo?></title>
</head>
<body>
<? include('menu.php');?>
<h1><?=$Encabezado?></h1>
<ol>
<?
foreach($query->result() as $item):
?>
<h3><?=$item->email?></h3>
<p><?=$item->comentario?></p>
<?=anchor('admin/activate_comment/'.$item->NPK_idcomentario, 'Activar Comentario')?>
<hr>
<?
	endforeach;
?>
</ol>
</body>
</html>
