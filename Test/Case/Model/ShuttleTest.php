<?php
App::uses('Shuttle', 'Model');

/**
 * Shuttle Test Case
 *
 */
class ShuttleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shuttle',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Shuttle = ClassRegistry::init('Shuttle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Shuttle);

		parent::tearDown();
	}

}
