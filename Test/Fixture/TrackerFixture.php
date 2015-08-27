<?php
/**
 * TrackerFixture
 *
 */
class TrackerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tracker';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nodeID' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sourceID' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'http_referrer' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'machine' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'machine_footprint' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'added' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'ip' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'monthly_mileage' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'campaignID' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'referer_domain' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lead_type' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lead_accepted' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'nodeID' => 'Lorem ipsum dolor sit amet',
			'sourceID' => 'Lorem ipsum dolor sit amet',
			'http_referrer' => 'Lorem ipsum dolor sit amet',
			'machine' => 'Lorem ipsum dolor sit amet',
			'machine_footprint' => 'Lorem ipsum dolor sit amet',
			'added' => '2014-02-06 01:50:15',
			'ip' => 'Lorem ipsum dolor sit amet',
			'monthly_mileage' => 'Lorem ipsum dolor sit amet',
			'campaignID' => 1,
			'referer_domain' => 'Lorem ipsum dolor sit amet',
			'lead_type' => 'Lorem ipsum dolor sit amet',
			'lead_accepted' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-06 01:50:15'
		),
	);

}
