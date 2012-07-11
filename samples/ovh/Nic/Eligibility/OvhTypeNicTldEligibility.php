<?php
/**
 * Class file for OvhTypeNicTldEligibility
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicTldEligibility
 * @date 02/07/2012
 */
class OvhTypeNicTldEligibility extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The tld
	 * @var string
	 */
	public $tld;
	/**
	 * Constructor
	 * @param string session
	 * @param string nic
	 * @param string tld
	 * @return OvhTypeNicTldEligibility
	 */
	public function __construct($_session = null,$_nic = null,$_tld = null)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic,'tld'=>$_tld));
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
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set tld
	 * @param string tld
	 * @return string
	 */
	public function setTld($_tld)
	{
		return ($this->tld = $_tld);
	}
	/**
	 * Get tld
	 * @return string
	 */
	public function getTld()
	{
		return $this->tld;
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