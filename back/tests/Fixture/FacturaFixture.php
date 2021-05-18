<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FacturaFixture
 */
class FacturaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'factura';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'idPedido' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'numero' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'precioTotal' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => ''],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_factura_pedido' => ['type' => 'index', 'columns' => ['idPedido'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['numero', 'idPedido'], 'length' => []],
            'FK_factura_pedido' => ['type' => 'foreign', 'columns' => ['idPedido'], 'references' => ['pedido', 'idPedido'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_0900_ai_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idPedido' => 1,
                'numero' => 1,
                'precioTotal' => 1,
                'fecha' => '2021-05-18',
            ],
        ];
        parent::init();
    }
}
