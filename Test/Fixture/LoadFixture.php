<?php
/**
 * LoadFixture
 *
 */
class LoadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'from_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'from_province' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'from_postal_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'from_floor' => array('type' => 'integer', 'null' => true, 'default' => null),
		'from_elevator' => array('type' => 'integer', 'null' => true, 'default' => null),
		'from_rooms' => array('type' => 'integer', 'null' => true, 'default' => null),
		'to_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_province' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_postal_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'to_floor' => array('type' => 'integer', 'null' => true, 'default' => null),
		'to_elavator' => array('type' => 'integer', 'null' => true, 'default' => null),
		'to_rooms' => array('type' => 'integer', 'null' => true, 'default' => null),
		'require_storage' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'require_full_assembly' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'packaging_service' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'move_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'inventory_list' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tips' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'from_address' => 'Lorem ipsum dolor sit amet',
			'from_province' => 'Lorem ipsum dolor sit amet',
			'from_postal_code' => 'Lorem ipsum dolor sit amet',
			'from_floor' => 1,
			'from_elevator' => 1,
			'from_rooms' => 1,
			'to_address' => 'Lorem ipsum dolor sit amet',
			'to_province' => 'Lorem ipsum dolor sit amet',
			'to_postal_code' => 'Lorem ipsum dolor sit amet',
			'to_floor' => 1,
			'to_elavator' => 1,
			'to_rooms' => 1,
			'require_storage' => 'Lorem ipsum dolor sit amet',
			'require_full_assembly' => 'Lorem ipsum dolor sit amet',
			'packaging_service' => 'Lorem ipsum dolor sit amet',
			'move_date' => '2014-01-23 21:31:52',
			'inventory_list' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tips' => 1,
			'modified' => '2014-01-23 21:31:52',
			'created' => '2014-01-23 21:31:52'
		),
	);

}
