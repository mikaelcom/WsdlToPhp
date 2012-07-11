<?php
/**
 * Class file for OvhTypeServiceStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceStruct
 * @date 02/07/2012
 */
class OvhTypeServiceStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The component
	 * @var string
	 */
	public $component;
	/**
	 * The componentSubType
	 * @var string
	 */
	public $componentSubType;
	/**
	 * The creation
	 * @var string
	 */
	public $creation;
	/**
	 * The modification
	 * @var string
	 */
	public $modification;
	/**
	 * The expiry
	 * @var string
	 */
	public $expiry;
	/**
	 * The nicowner
	 * @var string
	 */
	public $nicowner;
	/**
	 * The nicadmin
	 * @var string
	 */
	public $nicadmin;
	/**
	 * The nictech
	 * @var string
	 */
	public $nictech;
	/**
	 * The nicbilling
	 * @var string
	 */
	public $nicbilling;
	/**
	 * The nicreseller
	 * @var string
	 */
	public $nicreseller;
	/**
	 * The autorenew
	 * @var string
	 */
	public $autorenew;
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * Constructor
	 * @param string domain
	 * @param string component
	 * @param string componentSubType
	 * @param string creation
	 * @param string modification
	 * @param string expiry
	 * @param string nicowner
	 * @param string nicadmin
	 * @param string nictech
	 * @param string nicbilling
	 * @param string nicreseller
	 * @param string autorenew
	 * @param string reverse
	 * @return OvhTypeServiceStruct
	 */
	public function __construct($_domain = null,$_component = null,$_componentSubType = null,$_creation = null,$_modification = null,$_expiry = null,$_nicowner = null,$_nicadmin = null,$_nictech = null,$_nicbilling = null,$_nicreseller = null,$_autorenew = null,$_reverse = null)
	{
		parent::__construct(array('domain'=>$_domain,'component'=>$_component,'componentSubType'=>$_componentSubType,'creation'=>$_creation,'modification'=>$_modification,'expiry'=>$_expiry,'nicowner'=>$_nicowner,'nicadmin'=>$_nicadmin,'nictech'=>$_nictech,'nicbilling'=>$_nicbilling,'nicreseller'=>$_nicreseller,'autorenew'=>$_autorenew,'reverse'=>$_reverse));
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set component
	 * @param string component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Get component
	 * @return string
	 */
	public function getComponent()
	{
		return $this->component;
	}
	/**
	 * Set componentSubType
	 * @param string componentSubType
	 * @return string
	 */
	public function setComponentSubType($_componentSubType)
	{
		return ($this->componentSubType = $_componentSubType);
	}
	/**
	 * Get componentSubType
	 * @return string
	 */
	public function getComponentSubType()
	{
		return $this->componentSubType;
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
	 * Set modification
	 * @param string modification
	 * @return string
	 */
	public function setModification($_modification)
	{
		return ($this->modification = $_modification);
	}
	/**
	 * Get modification
	 * @return string
	 */
	public function getModification()
	{
		return $this->modification;
	}
	/**
	 * Set expiry
	 * @param string expiry
	 * @return string
	 */
	public function setExpiry($_expiry)
	{
		return ($this->expiry = $_expiry);
	}
	/**
	 * Get expiry
	 * @return string
	 */
	public function getExpiry()
	{
		return $this->expiry;
	}
	/**
	 * Set nicowner
	 * @param string nicowner
	 * @return string
	 */
	public function setNicowner($_nicowner)
	{
		return ($this->nicowner = $_nicowner);
	}
	/**
	 * Get nicowner
	 * @return string
	 */
	public function getNicowner()
	{
		return $this->nicowner;
	}
	/**
	 * Set nicadmin
	 * @param string nicadmin
	 * @return string
	 */
	public function setNicadmin($_nicadmin)
	{
		return ($this->nicadmin = $_nicadmin);
	}
	/**
	 * Get nicadmin
	 * @return string
	 */
	public function getNicadmin()
	{
		return $this->nicadmin;
	}
	/**
	 * Set nictech
	 * @param string nictech
	 * @return string
	 */
	public function setNictech($_nictech)
	{
		return ($this->nictech = $_nictech);
	}
	/**
	 * Get nictech
	 * @return string
	 */
	public function getNictech()
	{
		return $this->nictech;
	}
	/**
	 * Set nicbilling
	 * @param string nicbilling
	 * @return string
	 */
	public function setNicbilling($_nicbilling)
	{
		return ($this->nicbilling = $_nicbilling);
	}
	/**
	 * Get nicbilling
	 * @return string
	 */
	public function getNicbilling()
	{
		return $this->nicbilling;
	}
	/**
	 * Set nicreseller
	 * @param string nicreseller
	 * @return string
	 */
	public function setNicreseller($_nicreseller)
	{
		return ($this->nicreseller = $_nicreseller);
	}
	/**
	 * Get nicreseller
	 * @return string
	 */
	public function getNicreseller()
	{
		return $this->nicreseller;
	}
	/**
	 * Set autorenew
	 * @param string autorenew
	 * @return string
	 */
	public function setAutorenew($_autorenew)
	{
		return ($this->autorenew = $_autorenew);
	}
	/**
	 * Get autorenew
	 * @return string
	 */
	public function getAutorenew()
	{
		return $this->autorenew;
	}
	/**
	 * Set reverse
	 * @param string reverse
	 * @return string
	 */
	public function setReverse($_reverse)
	{
		return ($this->reverse = $_reverse);
	}
	/**
	 * Get reverse
	 * @return string
	 */
	public function getReverse()
	{
		return $this->reverse;
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