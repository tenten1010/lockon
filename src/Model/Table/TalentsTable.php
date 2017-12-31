<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Talents Model
 *
 * @property \App\Model\Table\MediasTable|\Cake\ORM\Association\HasMany $Medias
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Talent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Talent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Talent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Talent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Talent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Talent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Talent findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TalentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('talents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Medias', [
            'foreignKey' => 'talent_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'talent_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('orders')
            ->allowEmpty('orders');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('name_jp')
            ->maxLength('name_jp', 50)
            ->allowEmpty('name_jp');

        $validator
            ->scalar('thumb')
            ->maxLength('thumb', 255)
            ->allowEmpty('thumb');

        $validator
            ->date('birthday')
            ->allowEmpty('birthday');

        $validator
            ->scalar('birthplace')
            ->maxLength('birthplace', 255)
            ->allowEmpty('birthplace');

        $validator
            ->scalar('bloodtype')
            ->maxLength('bloodtype', 50)
            ->allowEmpty('bloodtype');

        $validator
            ->scalar('size')
            ->maxLength('size', 50)
            ->allowEmpty('size');

        $validator
            ->scalar('hobby')
            ->maxLength('hobby', 255)
            ->allowEmpty('hobby');

        $validator
            ->scalar('skill')
            ->maxLength('skill', 255)
            ->allowEmpty('skill');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('series')
            ->allowEmpty('series');

        $validator
            ->scalar('event')
            ->allowEmpty('event');

        $validator
            ->scalar('drama')
            ->allowEmpty('drama');

        $validator
            ->scalar('cm')
            ->allowEmpty('cm');

        $validator
            ->scalar('movie')
            ->allowEmpty('movie');

        $validator
            ->scalar('radio')
            ->allowEmpty('radio');

        $validator
            ->scalar('magazine')
            ->allowEmpty('magazine');

        $validator
            ->scalar('mook')
            ->allowEmpty('mook');

        $validator
            ->scalar('other')
            ->allowEmpty('other');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->scalar('twitter')
            ->maxLength('twitter', 255)
            ->allowEmpty('twitter');

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 255)
            ->allowEmpty('instagram');

        $validator
            ->scalar('blog')
            ->maxLength('blog', 255)
            ->allowEmpty('blog');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 255)
            ->allowEmpty('facebook');

        $validator
            ->integer('age')
            ->allowEmpty('age');

        return $validator;
    }
}
