<html>
<head>
<title><?=$titulo?></title>
</head>
<body>
<h1><?=$Encabezado?></h1>
<?=anchor('admin/', 'admin')?>
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