<?php
/**
 * Class file for OvhTypeServiceLightStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceLightStruct
 * @date 02/07/2012
 */
class OvhTypeServiceLightStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The expiry
	 * @var string
	 */
	public $expiry;
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
	 * @param string expiry
	 * @param string nicadmin
	 * @param string nictech
	 * @param string nicbilling
	 * @param string autorenew
	 * @param string reverse
	 * @return OvhTypeServiceLightStruct
	 */
	public function __construct($_domain = null,$_expiry = null,$_nicadmin = null,$_nictech = null,$_nicbilling = null,$_autorenew = null,$_reverse = null)
	{
		parent::__construct(array('domain'=>$_domain,'expiry'=>$_expiry,'nicadmin'=>$_nicadmin,'nictech'=>$_nictech,'nicbilling'=>$_nicbilling,'autorenew'=>$_autorenew,'reverse'=>$_reverse));
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