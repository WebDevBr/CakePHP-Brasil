<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\BlogsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlogsTable Test Case
 */
class BlogsTableTest extends TestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'app.blogs',
		'app.users',
		'app.likes',
		'app.tags',
		'app.categories'
	];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Blogs') ? [] : ['className' => 'App\Model\Table\BlogsTable'];
		$this->Blogs = TableRegistry::get('Blogs', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Blogs);

		parent::tearDown();
	}

}
