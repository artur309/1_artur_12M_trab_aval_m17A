<div class="row">
	<aside class="column">
		<div class="side-nav">
			<h4 class="heading"><?= __('Ações') ?></h4>
			<?= $this->Html->link(__('Listar Receitas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
		</div>
	</aside>
	<div class="column-responsive column-80">
		<div class="Receitas form content">
			<?= $this->Form->create($receita) ?>
			<fieldset>
				<legend><?= __('Adicionar Receita') ?></legend>
				<?php
				echo $this->Form->control('nome');
				echo $this->Form->control('descricao');
				?>
			</fieldset>
			<?= $this->Form->button(__('Submit')) ?>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>

<?= $this->element('infoRodape'); //rodape de informacao ?>