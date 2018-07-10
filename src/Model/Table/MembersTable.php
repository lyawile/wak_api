<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Members Model
 *
 * @method \App\Model\Entity\Member get($primaryKey, $options = [])
 * @method \App\Model\Entity\Member newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Member[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Member|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Member|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Member patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Member[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Member findOrCreate($search, callable $callback = null, $options = [])
 */
class MembersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('members');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->scalar('first_name')
                ->maxLength('first_name', 25)
                ->requirePresence('first_name', 'create')
                ->notEmpty('first_name');

        $validator
                ->scalar('middle_name')
                ->maxLength('middle_name', 25)
                ->requirePresence('middle_name', 'create')
                ->notEmpty('middle_name');

        $validator
                ->scalar('phone_number')
                ->maxLength('phone_number', 20)
                ->requirePresence('phone_number', 'create')
                ->notEmpty('phone_number');

        $validator
                ->scalar('region')
                ->maxLength('region', 25)
                ->requirePresence('region', 'create')
                ->notEmpty('region');

        $validator
                ->scalar('password')
                ->maxLength('password', 50)
                ->requirePresence('password', 'create')
                ->notEmpty('password');

        return $validator;
    }

}
