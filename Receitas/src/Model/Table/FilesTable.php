<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class FilesTable extends Table
{
	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}

	public function validationDefault(Validator $validator)
	{
		$validator->notEmpty('filename');
		return $validator;
	}
}