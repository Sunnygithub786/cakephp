<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity.
 *
 * @property int $id * @property string $pizzaSize * @property string $crustType * @property string $toppings * @property int $customer * @property bool $completed * @property float $total */
class Order extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
