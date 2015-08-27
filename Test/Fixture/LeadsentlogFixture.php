<?php
/**
 * LeadsentlogFixture
 *
 */
class LeadsentlogFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'leadsentlog';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'campaign_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'lead_type' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datesent' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'leadID' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'client_reference_id' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'client_id' => 1,
			'campaign_id' => 1,
			'lead_type' => 'Lorem ipsum dolor sit amet',
			'datesent' => '2014-02-06 01:49:49',
			'leadID' => 1,
			'client_reference_id' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-06'
		),
	);

}
