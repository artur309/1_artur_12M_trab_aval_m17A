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

		$this->setTable('receitas_ingredientes');
		$this->setPrimaryKey('id');
		$this->setPrimaryKey('id');

		$this->addBehavior('Timestamp');
	}
	public function validationDefault(Validator $validator): Validator
	{
		$validator
		->integer('id')
		->allowEmptyString('id', null, 'create');

		$validator
		->scalar('title')
		->maxLength('title', 50)
		->allowEmptyString('title');

		$validator
		->scalar('description')
		->allowEmptyString('description');

		$validator
		->scalar('url')
		->allowEmptyString('url');

		return $validator;
	}

}