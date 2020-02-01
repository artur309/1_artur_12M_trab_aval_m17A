<div class="row">
	<aside class="column">
		<div class="side-nav">
			<h4 class="heading"><?= __('Ações') ?></h4>
			<div class="buttons">
				<?= $this->Form->postLink(
					__('Apagar'),
					['action' => 'delete', $ingrediente->id],
					['confirm' => __('Tens a certeza que queres apagar # {0}?', $ingrediente->id), 'class' => 'button float-left']
				) ?>
				<?= $this->Html->link(__('Listar Ingredientes'), ['action' => 'index'], ['class' => 'button float-left']) ?>
			</div>
		</div>
	</aside>
	<div class="column-responsive column-80">
		<div class="receitas form content">
			<?= $this->Form->create($ingrediente) ?>
			<fieldset>
				<legend><?= __('Editar Ingrediente') ?></legend>
				<?php echo $this->Form->control(__('nome')); ?>
			</fieldset>
			<?= $this->Form->button(__('Submeter')) ?>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>

<?= $this->element('infoRodape'); //rodape de informacao ?>