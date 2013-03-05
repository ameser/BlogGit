<html>
<head>
<title><?=$titulo?></title>
</head>
<body>
<? include('menu.php');?>
<h1><?=$Encabezado?></h1>
<ol>
<? if($query->num_rows() > 0): ?>
<?
foreach($query->result() as $item):
?>
<h3><?=$item->email?></h3>
<p><?=$item->comentario?></p>

<hr>
<?
	endforeach;
?>
<? endif; ?>
<p><?=anchor('blog', 'back to blog!');?></p>
<?=form_open('blog/comment_insert');?>
<?=form_hidden('NFK_idEntrada', $this->uri->segment(3));?>
<?=form_hidden('estatus', 1);?>
<p><input type="text" name="email" /></p>
<p><textarea name="comentario" rows="10"></textarea></p>
<p><input type="submit" value="post" /></p>
</form>
</ol>
</body>
</html>