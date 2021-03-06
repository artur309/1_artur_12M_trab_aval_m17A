<h1><?=__('WEBGRAFIA')?></h1>

<!-- geral e  imagens -->
<div class="webgrafia">
	<a href="https://book.cakephp.org/3/en" target="_blank">
		<?=__('Documentação Framework CakePHP')?>
	</a>
	
	<a href="https://stackoverflow.com/questions/16868653/how-can-show-image-at-view-from-webroot" target="_blank">
		<?=__('View das Imagens no Webroot')?>
	</a>

	<a href="https://stackoverflow.com/questions/37375160/cakephp-3-refresh-page-after-form-submit" target="_blank">
		<?=__('Atualizar e Limpar formulário para as imagens')?>
	</a>

	<a href="https://stackoverflow.com/questions/6879230/cakephp-picture-upload-does-not-update-right-away" target="_blank">
		<?=__('Tempo e Hora')?>
	</a>
</div>

<!-- tradutor -->
<div class="webgrafia">
	<a href="https://book.cakephp.org/3/en/core-libraries/internationalization-and-localization.html"  target="_blank">
		<?=__('Internationalization e Localization')?>
	</a>

	<a href="https://www.tutorialspoint.com/cakephp/cakephp_internationalization.htm"  target="_blank">
		<?=__('Tutorial Point traducao TUtorial')?>
	</a>	

	<a href="https://book.cakephp.org/3/en/console-and-shells/i18n-shell.Html"  target="_blank">
		<?=__('Tradução')?>
	</a>	

	<a href="https://poeditor.com/" target="_blank">
		<?=__('Aplicação para as traduções automáticas')?>
	</a>

	<a href="http://www.localeplanet.com/icu/" target="_blank">
		<?=__('Nome para as pastas de traduções')?>
	</a>
</div>

<!-- OpenweatherMap API-->
<div class="webgrafia">
	<a href="https://openweathermap.org/api" target="_blank">
		<?=__('Openweather API')?>
	</a>

	<a href="https://www.youtube.com/watch?v=bjaHeXMtiCM" target="_blank">
		<?=__('Tutorial Openweather API')?>
	</a>	
</div>

<div class="buttons">
	<?= $this->Html->link(__('Galeria de Receitas'), ['controller' => 'Files','action' => 'index'], ['class' => 'button left']) ?>
	<?= $this->Html->link(__('Listar Receitas'), ['controller' => 'Receitas','action' => 'index'], ['class' => 'button float-right']) ?>
	<?= $this->Html->link(__('Listar Ingredientes'), ['controller' => 'Ingredientes','action' => 'index'], ['class' => 'button float-left']) ?>
</div>