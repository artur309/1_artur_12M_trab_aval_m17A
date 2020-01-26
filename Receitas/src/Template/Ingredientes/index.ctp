<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookmark[]|\Cake\Collection\CollectionInterface $bookmarks
 */
?>

<style type="text/css">
	body {
		background: orange;
	}
	.top-nav-title span {
		color: black;
	}
	.button, button{
		margin: 0 5px;
		margin-bottom: 1.0rem;
		background-color: orange;
		border-color: orange;
	}
	.button:hover, button:hover{
		transition: all 0.3s cubic-bezier(0.15, 0.9, 0.34, 0);
		margin: 0 5px;
		margin-bottom: 1.0rem;
		background-color: red;
		border-color: red;
	}
	.top-nav-title a, .top-nav-links a {
		font-weight: bold;
		color: white;
	}
	.actions a{
		padding: 0 0.4rem;
		color: orange;
	}
	.actions a: hover{
		color: red;
		font-weight: bold;
		padding: 0 0.4rem;
	}
	a:focus, a:hover {
		color: red;
	}
</style>

<div class="ingredientes index content">
	<?= $this->Html->link(__('Nova Ingrediente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
	<?= $this->Html->link(__('Lista de Receitas'), ['controller' => 'Receitas','action' => 'index'], ['class' => 'button float-right']) ?>
	<h3><?= __('Ingredientes') ?></h3>
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
					<th><?= $this->Paginator->sort('nome') ?></th> 
					<th class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($ingrediente as $ingrediente): ?>
					<tr>
						<td><?= $this->Number->format($ingrediente->id) ?></td>
						<td><?= h($ingrediente->nome) ?></td> 
						<td class="actions">
							<?= $this->Html->link(__('Ver'), ['action' => 'view', $ingrediente->id]) ?>
							<?= $this->Html->link(__('Editar'), ['action' => 'edit', $ingrediente->id]) ?>
							<?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $ingrediente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ingrediente->id)]) ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div class="paginator">
		<ul class="pagination">
			<?= $this->Paginator->first('<< ' . __('first')) ?>
			<?= $this->Paginator->prev('< ' . __('previous')) ?>
			<?= $this->Paginator->numbers() ?>
			<?= $this->Paginator->next(__('next') . ' >') ?>
			<?= $this->Paginator->last(__('last') . ' >>') ?>
		</ul>
		<p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
	</div>
</div>
