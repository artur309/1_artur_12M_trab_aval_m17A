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

		$this->setTable('ingredientes');
		$this->setDisplayField('nome');
		$this->setPrimaryKey('id');

		$this->addBehavior('Timestamp');
	}

	public function validationDefault(Validator $validator): Validator
	{
		$validator
		->integer('id')
		->allowEmptyString('id', null, 'create');

		$validator
		->scalar('nome')
		->maxLength('nome', 100)
		->allowEmptyString('nome');

		return $validator;
	}
}