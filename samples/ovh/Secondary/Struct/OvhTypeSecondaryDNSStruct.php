<?php
/**
 * Class file for OvhTypeSecondaryDNSStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSecondaryDNSStruct
 * @date 02/07/2012
 */
class OvhTypeSecondaryDNSStruct extends OvhWsdlClass
{
	/**
	 * The zone
	 * @var string
	 */
	public $zone;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The nameserver
	 * @var string
	 */
	public $nameserver;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The creation
	 * @var string
	 */
	public $creation;
	/**
	 * The deactivation
	 * @var string
	 */
	public $deactivation;
	/**
	 * Constructor
	 * @param string zone
	 * @param string type
	 * @param string nameserver
	 * @param string state
	 * @param string creation
	 * @param string deactivation
	 * @return OvhTypeSecondaryDNSStruct
	 */
	public function __construct($_zone = null,$_type = null,$_nameserver = null,$_state = null,$_creation = null,$_deactivation = null)
	{
		parent::__construct(array('zone'=>$_zone,'type'=>$_type,'nameserver'=>$_nameserver,'state'=>$_state,'creation'=>$_creation,'deactivation'=>$_deactivation));
	}
	/**
	 * Set zone
	 * @param string zone
	 * @return string
	 */
	public function setZone($_zone)
	{
		return ($this->zone = $_zone);
	}
	/**
	 * Get zone
	 * @return string
	 */
	public function getZone()
	{
		return $this->zone;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set nameserver
	 * @param string nameserver
	 * @return string
	 */
	public function setNameserver($_nameserver)
	{
		return ($this->nameserver = $_nameserver);
	}
	/**
	 * Get nameserver
	 * @return string
	 */
	public function getNameserver()
	{
		return $this->nameserver;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set creation
	 * @param string creation
	 * @return string
	 */
	public function setCreation($_creation)
	{
		return ($this->creation = $_creation);
	}
	/**
	 * Get creation
	 * @return string
	 */
	public function getCreation()
	{
		return $this->creation;
	}
	/**
	 * Set deactivation
	 * @param string deactivation
	 * @return string
	 */
	public function setDeactivation($_deactivation)
	{
		return ($this->deactivation = $_deactivation);
	}
	/**
	 * Get deactivation
	 * @return string
	 */
	public function getDeactivation()
	{
		return $this->deactivation;
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