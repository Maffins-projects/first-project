<?php
App::uses('Leadsplan', 'Model');

/**
 * Leadsplan Test Case
 *
 */
class LeadsplanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.leadsplan',
		'app.company'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Leadsplan = ClassRegistry::init('Leadsplan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Leadsplan);

		parent::tearDown();
	}

}
