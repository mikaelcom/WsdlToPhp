<?php
/**
 * Class file for OvhTypeMultiDomainModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMultiDomainModify
 * @date 02/07/2012
 */
class OvhTypeMultiDomainModify extends OvhWsdlClass
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
	 * The multidomain
	 * @var string
	 */
	public $multidomain;
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
	 * The ownLog
	 * @var boolean
	 */
	public $ownLog;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string multidomain
	 * @param string target
	 * @param string country
	 * @param boolean ownLog
	 * @return OvhTypeMultiDomainModify
	 */
	public function __construct($_session = null,$_domain = null,$_multidomain = null,$_target = null,$_country = null,$_ownLog = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'multidomain'=>$_multidomain,'target'=>$_target,'country'=>$_country,'ownLog'=>$_ownLog));
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
	 * Set multidomain
	 * @param string multidomain
	 * @return string
	 */
	public function setMultidomain($_multidomain)
	{
		return ($this->multidomain = $_multidomain);
	}
	/**
	 * Get multidomain
	 * @return string
	 */
	public function getMultidomain()
	{
		return $this->multidomain;
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
	 * Set ownLog
	 * @param boolean ownLog
	 * @return boolean
	 */
	public function setOwnLog($_ownLog)
	{
		return ($this->ownLog = $_ownLog);
	}
	/**
	 * Get ownLog
	 * @return boolean
	 */
	public function getOwnLog()
	{
		return $this->ownLog;
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