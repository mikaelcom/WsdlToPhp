<?php
/**
 * Class file for OvhTypeDnsReset
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDnsReset
 * @date 02/07/2012
 */
class OvhTypeDnsReset extends OvhWsdlClass
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
	 * The minimized
	 * @var boolean
	 */
	public $minimized;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string hosting
	 * @param boolean minimized
	 * @return OvhTypeDnsReset
	 */
	public function __construct($_session = null,$_domain = null,$_hosting = null,$_minimized = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'hosting'=>$_hosting,'minimized'=>$_minimized));
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
	 * Set minimized
	 * @param boolean minimized
	 * @return boolean
	 */
	public function setMinimized($_minimized)
	{
		return ($this->minimized = $_minimized);
	}
	/**
	 * Get minimized
	 * @return boolean
	 */
	public function getMinimized()
	{
		return $this->minimized;
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