<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidoproductoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidoproductoTable Test Case
 */
class PedidoproductoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidoproductoTable
     */
    protected $Pedidoproducto;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pedidoproducto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pedidoproducto') ? [] : ['className' => PedidoproductoTable::class];
        $this->Pedidoproducto = $this->getTableLocator()->get('Pedidoproducto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pedidoproducto);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
