<?php
/**
 * Class file for OvhTypeDedicatedMonitoringStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The destination
	 * @var string
	 */
	public $destination;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The service
	 * @var string
	 */
	public $service;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * Constructor
	 * @param int id
	 * @param string destination
	 * @param string language
	 * @param string status
	 * @param string service
	 * @param string smsAccount
	 * @return OvhTypeDedicatedMonitoringStruct
	 */
	public function __construct($_id = null,$_destination = null,$_language = null,$_status = null,$_service = null,$_smsAccount = null)
	{
		parent::__construct(array('id'=>$_id,'destination'=>$_destination,'language'=>$_language,'status'=>$_status,'service'=>$_service,'smsAccount'=>$_smsAccount));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set destination
	 * @param string destination
	 * @return string
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
	}
	/**
	 * Get destination
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
	}
	/**
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set service
	 * @param string service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get service
	 * @return string
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set smsAccount
	 * @param string smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get smsAccount
	 * @return string
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>