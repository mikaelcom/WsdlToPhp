<?php
/**
 * Class file for OvhTypeTelephonyOfferInfoSipAccountStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyOfferInfoSipAccountStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyOfferInfoSipAccountStruct extends OvhWsdlClass
{
	/**
	 * The username
	 * @var string
	 */
	public $username;
	/**
	 * The extension
	 * @var string
	 */
	public $extension;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The lastLogin
	 * @var string
	 */
	public $lastLogin;
	/**
	 * The localAdress
	 * @var string
	 */
	public $localAdress;
	/**
	 * The publicAdress
	 * @var string
	 */
	public $publicAdress;
	/**
	 * Constructor
	 * @param string username
	 * @param string extension
	 * @param string domain
	 * @param string lastLogin
	 * @param string localAdress
	 * @param string publicAdress
	 * @return OvhTypeTelephonyOfferInfoSipAccountStruct
	 */
	public function __construct($_username = null,$_extension = null,$_domain = null,$_lastLogin = null,$_localAdress = null,$_publicAdress = null)
	{
		parent::__construct(array('username'=>$_username,'extension'=>$_extension,'domain'=>$_domain,'lastLogin'=>$_lastLogin,'localAdress'=>$_localAdress,'publicAdress'=>$_publicAdress));
	}
	/**
	 * Set username
	 * @param string username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->username = $_username);
	}
	/**
	 * Get username
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
	/**
	 * Set extension
	 * @param string extension
	 * @return string
	 */
	public function setExtension($_extension)
	{
		return ($this->extension = $_extension);
	}
	/**
	 * Get extension
	 * @return string
	 */
	public function getExtension()
	{
		return $this->extension;
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
	 * Set lastLogin
	 * @param string lastLogin
	 * @return string
	 */
	public function setLastLogin($_lastLogin)
	{
		return ($this->lastLogin = $_lastLogin);
	}
	/**
	 * Get lastLogin
	 * @return string
	 */
	public function getLastLogin()
	{
		return $this->lastLogin;
	}
	/**
	 * Set localAdress
	 * @param string localAdress
	 * @return string
	 */
	public function setLocalAdress($_localAdress)
	{
		return ($this->localAdress = $_localAdress);
	}
	/**
	 * Get localAdress
	 * @return string
	 */
	public function getLocalAdress()
	{
		return $this->localAdress;
	}
	/**
	 * Set publicAdress
	 * @param string publicAdress
	 * @return string
	 */
	public function setPublicAdress($_publicAdress)
	{
		return ($this->publicAdress = $_publicAdress);
	}
	/**
	 * Get publicAdress
	 * @return string
	 */
	public function getPublicAdress()
	{
		return $this->publicAdress;
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