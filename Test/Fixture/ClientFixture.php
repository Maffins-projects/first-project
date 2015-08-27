<?php
/**
 * ClientFixture
 *
 */
class ClientFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'fname' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lname' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telephone' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cellphone' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'type' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'telephone' => 'Lorem ipsum dolor sit amet',
			'cellphone' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-06',
			'modified' => '2014-02-06'
		),
	);

}
