<div class="row">
	<aside class="column">
		<div class="side-nav">
			<h4 class="heading"><?= __('Actions') ?></h4>
			<div class="buttons">
				<?= $this->Html->link(__('Editar Ingrediente'), ['action' => 'edit', $ingrediente->id], ['class' => 'button float-left']) ?>
				<?= $this->Form->postLink(__('Apagar Ingrediente'), ['action' => 'delete', $ingrediente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingrediente->id), 'class' => 'button float-left']) ?>
				<?= $this->Html->link(__('Listar Ingredientes'), ['action' => 'index'], ['class' => 'button float-left']) ?>
				<?= $this->Html->link(__('Novo Ingrediente'), ['action' => 'add'], ['class' => 'button float-left']) ?>
			</div>
		</div>
	</aside>
	<div class="column-responsive column-80">
		<div class="bookmarks view content">
			<h3><?= h($ingrediente->nome) ?></h3>
			<table>
				<tr>
					<th><?= __('id') ?></th>
					<td><?= $this->Number->format($ingrediente->id) ?></td>
				</tr>
				<tr>
					<th><?= __('Nome') ?></th>
					<td><?= h($ingrediente->nome) ?></td>
				</tr> 
			</table>
		</div>
	</div>
</div>

<?= $this->element('infoRodape'); //rodape de informacao ?>