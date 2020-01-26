<div class="paginator">
	<ul class="pagination">
		<?= 'Pagina Atual', $this->Paginator->current($controller); ?>
		<?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
		<?= $this->Paginator->prev('< ' . __('Anterior')) ?>
		<?= $this->Paginator->numbers() ?>
		<?= $this->Paginator->next(__('Proximo') . ' >') ?>
		<?= $this->Paginator->last(__('Último') . ' >>') ?>
	</ul>
	<p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
</div>