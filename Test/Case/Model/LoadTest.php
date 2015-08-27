<?php
App::uses('Load', 'Model');

/**
 * Load Test Case
 *
 */
class LoadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.load',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Load = ClassRegistry::init('Load');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Load);

		parent::tearDown();
	}

}
