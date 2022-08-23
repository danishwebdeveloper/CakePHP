<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity
{
    protected $_accessible = [
        // Means allow to all fields in article table to modify except id and slug
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}