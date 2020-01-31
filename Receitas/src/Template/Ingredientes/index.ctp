<div class="buttons">
	<?= $this->Html->link(__('Galeria de Receitas'), ['controller' => 'Files','action' => 'index'], ['class' => 'button left']) ?>
	<?= $this->Html->link(__('Novo Ingrediente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
	<?= $this->Html->link(__('Listar Receitas'), ['controller' => 'Receitas','action' => 'index'], ['class' => 'button float-right']) ?>
</div>

<div class="ingredientes index content">	
	<h3><?= __('Ingredientes') ?></h3>
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
					<th><?= $this->Paginator->sort(__('nome')) ?></th> 
					<th class="actions"><?= __('Ações') ?></th>
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
							<?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $ingrediente->id], ['confirm' => __('Tens a certeza que queres apagar # {0}?', $ingrediente->id)]) ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<?= $this->element('paginacao', ["controller" => 'Ingredientes']);//paginacao da view especificada ?> 
</div>
