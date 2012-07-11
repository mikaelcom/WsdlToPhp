<?php
/**
 * Class file for OvhTypeDomainInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainInfoReturn
 * @date 02/07/2012
 */
class OvhTypeDomainInfoReturn extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
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
	 * The expiration
	 * @var string
	 */
	public $expiration;
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
	 * The authinfo
	 * @var string
	 */
	public $authinfo;
	/**
	 * The dns
	 * @var OvhTypeMyArrayOfNsStructType
	 */
	public $dns;
	/**
	 * Constructor
	 * @param string domain
	 * @param string creation
	 * @param string modification
	 * @param string expiration
	 * @param string nicowner
	 * @param string nicadmin
	 * @param string nictech
	 * @param string nicbilling
	 * @param string authinfo
	 * @param OvhTypeMyArrayOfNsStructType dns
	 * @return OvhTypeDomainInfoReturn
	 */
	public function __construct($_domain = null,$_creation = null,$_modification = null,$_expiration = null,$_nicowner = null,$_nicadmin = null,$_nictech = null,$_nicbilling = null,$_authinfo = null,$_dns = null)
	{
		parent::__construct(array('domain'=>$_domain,'creation'=>$_creation,'modification'=>$_modification,'expiration'=>$_expiration,'nicowner'=>$_nicowner,'nicadmin'=>$_nicadmin,'nictech'=>$_nictech,'nicbilling'=>$_nicbilling,'authinfo'=>$_authinfo,'dns'=>new OvhTypeMyArrayOfNsStructType($_dns)));
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
	 * Set expiration
	 * @param string expiration
	 * @return string
	 */
	public function setExpiration($_expiration)
	{
		return ($this->expiration = $_expiration);
	}
	/**
	 * Get expiration
	 * @return string
	 */
	public function getExpiration()
	{
		return $this->expiration;
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
	 * Set authinfo
	 * @param string authinfo
	 * @return string
	 */
	public function setAuthinfo($_authinfo)
	{
		return ($this->authinfo = $_authinfo);
	}
	/**
	 * Get authinfo
	 * @return string
	 */
	public function getAuthinfo()
	{
		return $this->authinfo;
	}
	/**
	 * Set dns
	 * @param MyArrayOfNsStructType dns
	 * @return MyArrayOfNsStructType
	 */
	public function setDns($_dns)
	{
		return ($this->dns = $_dns);
	}
	/**
	 * Get dns
	 * @return OvhTypeMyArrayOfNsStructType
	 */
	public function getDns()
	{
		return $this->dns;
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