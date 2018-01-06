<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Talent Entity
 *
 * @property int $id
 * @property int $orders
 * @property string $name
 * @property string $name_jp
 * @property string $thumb
 * @property \Cake\I18n\FrozenDate $birthday
 * @property string $birthplace
 * @property string $bloodtype
 * @property string $size
 * @property string $hobby
 * @property string $skill
 * @property string $description
 * @property string $series
 * @property string $event
 * @property string $drama
 * @property string $cm
 * @property string $movie
 * @property string $radio
 * @property string $magazine
 * @property string $mook
 * @property string $other
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $twitter
 * @property string $instagram
 * @property string $blog
 * @property string $facebook
 * @property int $age
 *
 * @property \App\Model\Entity\Media[] $medias
 * @property \App\Model\Entity\User[] $users
 */
class Talent extends Entity
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
        'orders' => true,
        'name' => true,
        'name_jp' => true,
        'thumb' => true,
        'birthday' => true,
        'birthplace' => true,
        'bloodtype' => true,
        'size' => true,
        'hobby' => true,
        'skill' => true,
        'description' => true,
        'series' => true,
        'event' => true,
        'drama' => true,
        'cm' => true,
        'movie' => true,
        'radio' => true,
        'magazine' => true,
        'mook' => true,
        'other' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'twitter' => true,
        'instagram' => true,
        'blog' => true,
        'facebook' => true,
        'age' => true,
        'medias' => true,
        'users' => true
    ];
}
