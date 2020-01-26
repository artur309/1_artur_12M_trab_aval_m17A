<?php echo $this->Form->create('Files', ['type' => 'file']); ?>
<label>Ficheiros</label>
<?php
	echo $this->Form->file('uploadfile.', ['multiple']);
	echo $this->Form->button('Submeter', ['type' => 'submit']);
	echo $this->Form->end();
 ?>