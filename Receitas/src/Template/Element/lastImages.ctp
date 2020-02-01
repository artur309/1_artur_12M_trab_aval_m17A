<?php $files = json_decode($this->requestAction('Files/lastImages/1',['controller' => 'Files']));?>

<h2>Ultimas Fotos</h2>

<table>
	<tr>
		<th>ID</th><th>Filename</th><th>Imagem</th>
	</tr>
	<?php foreach($files as $img): ?>
		<tr>
			<td><?= $img->id?></td>
			<td><?= $img->filename?></td>
			<td>
				<?= $this->Html->image(
					'uploads/'.$img->filename.'?'.time(),
					array('width' => '200px','height'=>'200px','alt'=>$img->filename
				));?>
			</td>
		</tr>
	<?php endforeach ?>
</table>