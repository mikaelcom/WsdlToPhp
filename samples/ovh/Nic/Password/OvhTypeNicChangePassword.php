<?php
/**
 * Class file for OvhTypeNicChangePassword
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicChangePassword
 * @date 02/07/2012
 */
class OvhTypeNicChangePassword extends OvhWsdlClass
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
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * Constructor
	 * @param string session
	 * @param string nic
	 * @param string password
	 * @return OvhTypeNicChangePassword
	 */
	public function __construct($_session = null,$_nic = null,$_password = null)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic,'password'=>$_password));
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
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
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