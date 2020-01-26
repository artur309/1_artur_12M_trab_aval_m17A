<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class BookmarksTable extends Table
{
	public function initialize(array $config): void
	{
		parent::initialize($config);
		
		$this->setTable('receitas');
		$this->setDisplayField('nome');
		$this->setPrimaryKey('id');
	}

	public function validationDefault(Validator $validator): Validator
	{
		$validator
		->integer('id')
		->allowEmptyString('id', null, 'create');

		$validator
		->scalar('nome')
		->maxLength('nome', 50)
		->allowEmptyString('nome');

		$validator
		->scalar('descricao')
		->allowEmptyString('descricao');

		return $validator;
	}
}