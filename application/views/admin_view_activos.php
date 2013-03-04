<html>
<head>
<title><?=$titulo?></title>
</head>
<body>
<?=anchor('admin/banned_comments/', 'Ir a comentarios Desactivados...');?>
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
