<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VediosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VediosTable Test Case
 */
class VediosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VediosTable
     */
    public $Vedios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vedios',
        'app.categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vedios') ? [] : ['className' => VediosTable::class];
        $this->Vedios = TableRegistry::get('Vedios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vedios);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
