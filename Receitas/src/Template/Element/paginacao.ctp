<div class="paginator">
	<ul class="pagination">
		<?= 'Pagina Atual: ', $this->Paginator->current($controller); //recebe o nome do controlador?>
		<?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
		<?= $this->Paginator->prev('< ' . __('Anterior')) ?>
		<?= $this->Paginator->numbers() ?>
		<?= $this->Paginator->next(__('Proximo') . ' >') ?>
		<?= $this->Paginator->last(__('Último') . ' >>') ?>
	</ul>
	<p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro de um total de {{count}} total, começando no registro {{start}}, termiando em {{end}}')) ?></p>
</div>