<?php 

echo '<h1>Artigos Formulário</h1>';

echo $this->Form->create($articles);
echo $this->Form->input('Identificação do post em questão: ', array('value' => $identify));
echo $this->Form->input('Título do post', array('value' => $message));
echo $this->Form->button(__('Salvar post'));
echo $this->Form->input('Origem:', array('type' => 'file'));
echo $this->Form->end();
echo 'Último ID: ', $identify;