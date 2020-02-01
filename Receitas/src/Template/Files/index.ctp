<div>
	<?= $this->Html->link(__('Listar Receitas'), ['controller' => 'Receitas','action' => 'index'], ['class' => 'button float-right']) ?>
	<?= $this->Html->link(__('Listar Ingredientes'), ['controller' => 'Ingredientes','action' => 'index'], ['class' => 'button float-left']) ?>
</div>

<div>
	<?php echo $this->Form->create('Files', ['type' => 'file']); ?>
	<center><h1><?= __('Galeria de Receitas')?></h1></center>
	<?php
	echo $this->Form->file('uploadfile.', ['multiple'],['value' => '']);
	echo $this->Form->button(__('Submeter'), ['type' => 'submit'],['controller' => 'Files','action' => 'index']);
	echo $this->Form->end();
	?>
</div>

<div>
	<?php foreach ($files as $img):?>
		<?= $this->Html->image(
			'uploads/'.$img->filename.'?'.time(),
			array('width' => '200px','height'=>'200px','alt'=>$img->filename
		));?>
	<?php endforeach; ?>
</div>

<?= $this->element('paginacao', ["controller" => 'Files']); //paginacao da view especificada?> 


<?= $this->element('infoRodape'); //rodape de informacao ?>