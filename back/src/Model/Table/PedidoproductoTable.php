<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedidoproducto Model
 *
 * @method \App\Model\Entity\Pedidoproducto newEmptyEntity()
 * @method \App\Model\Entity\Pedidoproducto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pedidoproducto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pedidoproducto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pedidoproducto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pedidoproducto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pedidoproducto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pedidoproducto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedidoproducto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedidoproducto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pedidoproducto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pedidoproducto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pedidoproducto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PedidoproductoTable extends Table
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

        $this->setTable('pedidoproducto');
        $this->setDisplayField('idPedido');
        $this->setPrimaryKey(['idPedido', 'idProducto']);
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
            ->integer('idPedido')
            ->allowEmptyString('idPedido', null, 'create');

        $validator
            ->integer('idProducto')
            ->allowEmptyString('idProducto', null, 'create');

        $validator
            ->numeric('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        $validator
            ->integer('cantidad')
            ->notEmptyString('cantidad');

        $validator
            ->scalar('estado')
            ->notEmptyString('estado');

        return $validator;
    }
}
