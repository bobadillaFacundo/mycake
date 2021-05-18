<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrecioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrecioTable Test Case
 */
class PrecioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrecioTable
     */
    protected $Precio;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Precio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Precio') ? [] : ['className' => PrecioTable::class];
        $this->Precio = $this->getTableLocator()->get('Precio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Precio);

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
