<?php
namespace App\Model\Entity;
use Cake\ORM\Entity; 

class Receitas extends Entity
{
    protected $_accessible = [
        'nome' => true,
        'descricao' => true,
    ];
}