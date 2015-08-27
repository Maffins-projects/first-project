<?php
App::uses('Component', 'Controller');
class SendleadsComponent extends Component 
{
    public function __construct() 
    {
      $this->Leadsentlog = ClassRegistry::init('Leadsentlog');
    }
    
    //Save the actual lead*
    public function saveSendLead($data) 
    {
      $this->Leadsentlog->saveLead($data); 
    } 
    
    /**
    * This functin returns the campaigns
    * pass the type of campaign that is being dealt with                    
    */
    public function getCampaigns($type)
    {
      return $this->Leadsentlog->getAllCampaigns($type);
    }
    
    /**
    * This functin returns the campaigns
    * pass the type of campaign that is being dealt with                    
    */
    public function countOveralLeadsSent($campaign_id)
    {
      return $this->Leadsentlog->overallLeads($campaign_id);
    }
}
?>