<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <div class="buttons">
                <?= $this->Html->link(__('Listar Ingredientes'), ['action' => 'index'], ['class' => 'button float-left']) ?>
            </div>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="Receitas form content">
            <?= $this->Form->create($ingrediente) ?>
            <fieldset>
                <legend><?= __('Adicionar Ingrediente') ?></legend>
                <?php echo $this->Form->control(__('nome')); ?>
            </fieldset>
            <?= $this->Form->button(__('Submeter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?= $this->element('infoRodape'); //rodape de informacao ?>