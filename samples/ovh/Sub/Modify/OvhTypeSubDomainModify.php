<?php
/**
 * Class file for OvhTypeSubDomainModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSubDomainModify
 * @date 02/07/2012
 */
class OvhTypeSubDomainModify extends OvhWsdlClass
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
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string subdomain
	 * @param string target
	 * @param string country
	 * @return OvhTypeSubDomainModify
	 */
	public function __construct($_session = null,$_domain = null,$_subdomain = null,$_target = null,$_country = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdomain'=>$_subdomain,'target'=>$_target,'country'=>$_country));
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
	 * Set subdomain
	 * @param string subdomain
	 * @return string
	 */
	public function setSubdomain($_subdomain)
	{
		return ($this->subdomain = $_subdomain);
	}
	/**
	 * Get subdomain
	 * @return string
	 */
	public function getSubdomain()
	{
		return $this->subdomain;
	}
	/**
	 * Set target
	 * @param string target
	 * @return string
	 */
	public function setTarget($_target)
	{
		return ($this->target = $_target);
	}
	/**
	 * Get target
	 * @return string
	 */
	public function getTarget()
	{
		return $this->target;
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