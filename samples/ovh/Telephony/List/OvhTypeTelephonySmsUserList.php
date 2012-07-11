<?php
/**
 * Class file for OvhTypeTelephonySmsUserList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserList
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserList extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string smsAccount
	 * @return OvhTypeTelephonySmsUserList
	 */
	public function __construct($_session = null,$_smsAccount = null)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>