<h1>WEBGRAFIA</h1>

<div class="webgrafia">
	<a href="https://book.cakephp.org/3/en" target="_blank">
		Documentação Framework CakePHP
	</a>
	<a href="https://stackoverflow.com/questions/16868653/how-can-show-image-at-view-from-webroot" target="_blank">
		View das Imagens no Webroot
	</a>
	<a href="https://stackoverflow.com/questions/37375160/cakephp-3-refresh-page-after-form-submit" target="_blank">
		Refresh e Limpar formulario para as imagens
	</a>
	<a href="https://stackoverflow.com/questions/6879230/cakephp-picture-upload-does-not-update-right-away" target="_blank">
		Time
	</a>
</div>

<div class="buttons">
	<?= $this->Html->link(__('Galeria de Receitas'), ['controller' => 'Files','action' => 'index'], ['class' => 'button left']) ?>
	<?= $this->Html->link(__('Lista de Receitas'), ['controller' => 'Receitas','action' => 'index'], ['class' => 'button float-right']) ?>
	<?= $this->Html->link(__('Lista de Ingredientes'), ['controller' => 'Ingredientes','action' => 'index'], ['class' => 'button float-left']) ?>
</div>