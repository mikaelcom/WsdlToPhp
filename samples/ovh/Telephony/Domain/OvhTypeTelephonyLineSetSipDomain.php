<?php
/**
 * Class file for OvhTypeTelephonyLineSetSipDomain
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineSetSipDomain
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineSetSipDomain extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string domain
	 * @return OvhTypeTelephonyLineSetSipDomain
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_domain = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'domain'=>$_domain));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>