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

<div class="row">
	<aside class="column">
		<div class="side-nav">
			<h4 class="heading"><?= __('Actions') ?></h4>
			<?= $this->Html->link(__('Edit Bookmark'), ['action' => 'edit', $receita->id], ['class' => 'side-nav-item']) ?>
			<?= $this->Form->postLink(__('Delete Bookmark'), ['action' => 'delete', $receita->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receita->id), 'class' => 'side-nav-item']) ?>
			<?= $this->Html->link(__('List Bookmarks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
			<?= $this->Html->link(__('New Bookmark'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
		</div>
	</aside>
	<div class="column-responsive column-80">
		<div class="bookmarks view content">
			<h3><?= h($receita->title) ?></h3>
			<table>
				
				<tr>
					<th><?= __('Id') ?></th>
					<td><?= $this->Number->format($receita->id) ?></td>
				</tr>
				<tr>
					<th><?= __('Nome') ?></th>
					<td><?= h($receita->nome) ?></td>
				</tr>
				<tr>
					<th><?= __('Descrição') ?></th>
					<td><?= h($receita->descricao) ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>