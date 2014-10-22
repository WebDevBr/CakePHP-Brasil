<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\LikesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LikesTable Test Case
 */
class LikesTableTest extends TestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Likes') ? [] : ['className' => 'App\Model\Table\LikesTable'];
		$this->Likes = TableRegistry::get('Likes', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Likes);

		parent::tearDown();
	}

}
