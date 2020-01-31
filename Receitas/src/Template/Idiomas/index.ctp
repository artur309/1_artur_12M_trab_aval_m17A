<?php
//selecao de idiomas
echo $this->Form->create("Idiomas",array('url'=>'/Receitas'));
echo $this->Form->radio("Idiomas",[
	['value'=>'de_DE','text'=>'German'],
	['value'=>'en_US','text'=>'English'],
	['value'=>'fr_FR','text'=>'French'],
	['value'=>'ja_JP','text'=>'Japanese'],
	['value'=>'pt_PT','text'=>'Portuguese'],
	['value'=>'ru_RU','text'=>'Russo'],
]);
echo $this->Form->button('Change Language');
echo $this->Form->end();
?>
<?= $this->element('infoRodape'); //rodape de informacao ?>