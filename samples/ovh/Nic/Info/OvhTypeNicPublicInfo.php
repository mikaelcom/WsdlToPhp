<?php
/**
 * Class file for OvhTypeNicPublicInfo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicPublicInfo
 * @date 02/07/2012
 */
class OvhTypeNicPublicInfo extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string nic
	 * @return OvhTypeNicPublicInfo
	 */
	public function __construct($_session = null,$_nic = null)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>