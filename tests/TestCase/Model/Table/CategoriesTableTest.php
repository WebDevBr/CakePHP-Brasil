<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\CategoriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriesTable Test Case
 */
class CategoriesTableTest extends TestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Categories') ? [] : ['className' => 'App\Model\Table\CategoriesTable'];
		$this->Categories = TableRegistry::get('Categories', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categories);

		parent::tearDown();
	}

}
