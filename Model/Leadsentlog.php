<?php
App::uses('AppModel', 'Model');
/**
 * Leadsentlog Model
 *
 * @property Client $Client
 * @property Campaign $Campaign
 * @property ClientReference $ClientReference
 */
class Leadsentlog extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'leadsentlog';
  
  //Get all the campaigns
  public function getAllCampaigns($type)
  {
    $query = "select cs.id as campid, cs.name, cs.company_id, cs.campaign_type, cs.start_date, cs.end_date, cs.status, cs.total_leads, cs.leads_per_day, cm.c_name, cm.c_surname, cm.c_telephone, cm.c_email, cm.contacted, cm.company_name
      from campaigns cs
       join companies cm on cm.id = cs.company_id
    where cs.campaign_type = '{$type}' and cs.status = 'active' ";
    return $this->query($query);
  }
  
  //Count the overall number of leads sent per particular campaign
  public function overallLeads($campaign_id)
  {
    $countquery = "select count(*) as total from leadsentlog where campaign_id = {$campaign_id}";
    return $this->query($countquery);
  }
  
  //Save the lead now
  public function saveLead($data)
  {
    $insert = "insert into leadsentlog (company_id, campaign_id, lead_type, datesent, leadID, client_reference_id, status, created)
               values('{$data['company_id']}', '{$data['campaign_id']}', '{$data['lead_type']}', NOW(), '{$data['leadID']}', '{$data['client_reference_id']}', '{$data['status']}', CURDATE())
              ";
   // echo $insert;die;          
    $this->query($insert);          
  }
  
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'company_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'campaign_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lead_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'datesent' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Campaign' => array(
			'className' => 'Campaign',
			'foreignKey' => 'campaign_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
