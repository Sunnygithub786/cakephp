<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id * @property string $username * @property string $password * @property string $role */
class User extends Entity
{

 
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
    
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
