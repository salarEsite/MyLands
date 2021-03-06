<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LandType Entity
 *
 * @property int $admin_id
 * @property int $id
 * @property string $name
 * @property string $remarks
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Admin $admin
 * @property \App\Model\Entity\Land[] $lands
 */
class LandType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'admin_id' => true,
        'name' => true,
        'remarks' => true,
        'created' => true,
        'modified' => true,
        'admin' => true,
        'lands' => true
    ];
}
