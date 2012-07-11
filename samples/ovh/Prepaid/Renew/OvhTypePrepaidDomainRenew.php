<?php
/**
 * Class file for OvhTypePrepaidDomainRenew
 * @date 02/07/2012
 */
/**
 * Class OvhTypePrepaidDomainRenew
 * @date 02/07/2012
 */
class OvhTypePrepaidDomainRenew extends OvhWsdlClass
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
	 * The dryRun
	 * @var boolean
	 */
	public $dryRun;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param boolean dryRun
	 * @return OvhTypePrepaidDomainRenew
	 */
	public function __construct($_session = null,$_domain = null,$_dryRun = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'dryRun'=>$_dryRun));
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
	 * Set dryRun
	 * @param boolean dryRun
	 * @return boolean
	 */
	public function setDryRun($_dryRun)
	{
		return ($this->dryRun = $_dryRun);
	}
	/**
	 * Get dryRun
	 * @return boolean
	 */
	public function getDryRun()
	{
		return $this->dryRun;
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