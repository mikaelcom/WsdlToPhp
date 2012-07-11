<?php
/**
 * Class file for OvhTypeDnsGeolocalizeHosting
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDnsGeolocalizeHosting
 * @date 02/07/2012
 */
class OvhTypeDnsGeolocalizeHosting extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The hosting
	 * @var string
	 */
	public $hosting;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string hosting
	 * @param string country
	 * @return OvhTypeDnsGeolocalizeHosting
	 */
	public function __construct($_session = null,$_domain = null,$_hosting = null,$_country = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'hosting'=>$_hosting,'country'=>$_country));
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
	 * Set hosting
	 * @param string hosting
	 * @return string
	 */
	public function setHosting($_hosting)
	{
		return ($this->hosting = $_hosting);
	}
	/**
	 * Get hosting
	 * @return string
	 */
	public function getHosting()
	{
		return $this->hosting;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>