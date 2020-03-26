<div class="buttons">
	<?= $this->Html->link(__('Galeria de Receitas'), ['controller' => 'Files','action' => 'index'], ['class' => 'button left']) ?>
	<?= $this->Html->link(__('Nova Receita'), ['action' => 'add'], ['class' => 'button float-left']) ?>
	<?= $this->Html->link(__('Listar Ingredientes'), ['controller' => 'Ingredientes','action' => 'index'], ['class' => 'button float-left']) ?>
</div>

<div class="receitas index content">

	<h3><?= __('Receitas') ?></h3>
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
					<th><?= $this->Paginator->sort(__('nome')) ?></th>
					<th><?= $this->Paginator->sort(__('descrição')) ?></th> 
					<th class="actions"><?= __('Ações') ?></th>
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
		<?= $this->element('paginacao', ["controller" => 'Receitas']);//paginacao da view especificada ?> 
	</div>
</div>

<?= $this->element('infoRodape'); //rodape de informacao ?>