<?php
/**
 * Class file for OvhTypeDomainResellerSet
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainResellerSet
 * @date 02/07/2012
 */
class OvhTypeDomainResellerSet extends OvhWsdlClass
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
	 * The profile
	 * @var string
	 */
	public $profile;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string profile
	 * @return OvhTypeDomainResellerSet
	 */
	public function __construct($_session = null,$_domain = null,$_profile = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'profile'=>$_profile));
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
	 * Set profile
	 * @param string profile
	 * @return string
	 */
	public function setProfile($_profile)
	{
		return ($this->profile = $_profile);
	}
	/**
	 * Get profile
	 * @return string
	 */
	public function getProfile()
	{
		return $this->profile;
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