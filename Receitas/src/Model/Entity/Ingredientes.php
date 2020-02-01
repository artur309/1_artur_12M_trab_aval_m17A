<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Ingredientes extends Entity
{
    protected $_accessible = [
        'name' => true,
    ];
}