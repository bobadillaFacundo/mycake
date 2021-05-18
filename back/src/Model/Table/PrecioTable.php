<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Precio Model
 *
 * @method \App\Model\Entity\Precio newEmptyEntity()
 * @method \App\Model\Entity\Precio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Precio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Precio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Precio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Precio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Precio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Precio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Precio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Precio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Precio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Precio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Precio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PrecioTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('precio');
        $this->setDisplayField('idProducto');
        $this->setPrimaryKey(['idProducto', 'fecha']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('idProducto')
            ->allowEmptyString('idProducto', null, 'create');

        $validator
            ->date('fecha')
            ->allowEmptyDate('fecha', null, 'create');

        $validator
            ->numeric('monto')
            ->requirePresence('monto', 'create')
            ->notEmptyString('monto');

        return $validator;
    }
}
