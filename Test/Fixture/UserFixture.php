<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'fname' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lname' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'username' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cellnumber' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'daytimenumber' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fname' => 'Lorem ipsum dolor sit amet',
			'lname' => 'Lorem ipsum dolor sit amet',
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'cellnumber' => 'Lorem ipsum dolor sit amet',
			'daytimenumber' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-01-23 21:34:33',
			'created' => '2014-01-23 21:34:33'
		),
	);

}
