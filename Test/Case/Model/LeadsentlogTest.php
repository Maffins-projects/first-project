<?php
App::uses('Leadsentlog', 'Model');

/**
 * Leadsentlog Test Case
 *
 */
class LeadsentlogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.leadsentlog',
		'app.client',
		'app.campaign',
		'app.client_reference'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Leadsentlog = ClassRegistry::init('Leadsentlog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Leadsentlog);

		parent::tearDown();
	}

}
