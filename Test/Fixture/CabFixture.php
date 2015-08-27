<?php
/**
 * CabFixture
 *
 */
class CabFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cab';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'number_of_passengers' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'direction' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'payment_method' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'trailer' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'baby_seat' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'pickup_address' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pickup_city' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pickup_province' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pickup_postal_code' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pickup_datetime' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'to_address' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_city' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_province' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_postal_code' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_datetime' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'user_id' => 1,
			'number_of_passengers' => 1,
			'direction' => 'Lorem ipsum dolor sit amet',
			'payment_method' => 'Lorem ipsum dolor sit amet',
			'trailer' => 1,
			'baby_seat' => 1,
			'pickup_address' => 'Lorem ipsum dolor sit amet',
			'pickup_city' => 'Lorem ipsum dolor sit amet',
			'pickup_province' => 'Lorem ipsum dolor sit amet',
			'pickup_postal_code' => 'Lorem ipsum dolor sit amet',
			'pickup_datetime' => '2014-01-23 21:27:08',
			'to_address' => 'Lorem ipsum dolor sit amet',
			'to_city' => 'Lorem ipsum dolor sit amet',
			'to_province' => 'Lorem ipsum dolor sit amet',
			'to_postal_code' => 'Lorem ipsum dolor sit amet',
			'to_datetime' => '2014-01-23 21:27:08',
			'modified' => '2014-01-23 21:27:08',
			'created' => '2014-01-23 21:27:08'
		),
	);

}
