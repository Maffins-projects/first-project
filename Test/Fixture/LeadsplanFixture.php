<?php
/**
 * LeadsplanFixture
 *
 */
class LeadsplanFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'leadsplan';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'total' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'leads_plan' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_from' => array('type' => 'date', 'null' => false, 'default' => '0000-00-00'),
		'date_to' => array('type' => 'date', 'null' => false, 'default' => '0000-00-00'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
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
			'company_id' => 1,
			'total' => 1,
			'leads_plan' => 'Lorem ipsum dolor sit amet',
			'date_from' => '2015-08-29',
			'date_to' => '2015-08-29',
			'created' => '2015-08-29 21:01:56'
		),
	);

}
