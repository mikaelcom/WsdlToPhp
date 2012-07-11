<?php
/**
 * Class file for OvhTypeTelephonySmsUserDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserDel
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserDel extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * Constructor
	 * @param string session
	 * @param string smsAccount
	 * @param string login
	 * @return OvhTypeTelephonySmsUserDel
	 */
	public function __construct($_session = null,$_smsAccount = null,$_login = null)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'login'=>$_login));
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
	 * Set smsAccount
	 * @param string smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get smsAccount
	 * @return string
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set login
	 * @param string login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get login
	 * @return string
	 */
	public function getLogin()
	{
		return $this->login;
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