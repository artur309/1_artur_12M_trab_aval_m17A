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

<?= $this->Html->link(__('Galeria de Receitas'), ['controller' => 'Files','action' => 'upload'], ['class' => 'button left']) ?>

<div class="receitas index content">
	<?= $this->Html->link(__('Nova Receita'), ['action' => 'add'], ['class' => 'button float-right']) ?>
	<?= $this->Html->link(__('Lista de Ingredientes'), ['controller' => 'Ingredientes','action' => 'index'], ['class' => 'button float-right']) ?>
	<h3><?= __('Receitas') ?></h3>
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
					<th><?= $this->Paginator->sort('nome') ?></th>
					<th><?= $this->Paginator->sort('descrição') ?></th> 
					<th class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($receita as $receita): ?>
					<tr>
						<td><?= $this->Number->format($receita->id) ?></td>
						<td><?= h($receita->nome) ?></td>
						<td><?= h($receita->descricao) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Ver'), ['action' => 'view', $receita->id]) ?>
							<?= $this->Html->link(__('Editar'), ['action' => 'edit', $receita->id]) ?>
							<?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $receita->id], ['confirm' => __('Tens a certeza que queres apagar a receita #{0}?', $receita->id)]) ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?= $this->element('paginacao', [ "controller" => 'Receitas']); ?>
	</div>
</div>

<?= $this->element('infoRodape'); ?>