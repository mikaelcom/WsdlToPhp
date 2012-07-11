<?php
/**
 * Class file for OvhTypeTelephonySmsSetUserQuota
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsSetUserQuota
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsSetUserQuota extends OvhWsdlClass
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
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The quotaDiff
	 * @var string
	 */
	public $quotaDiff;
	/**
	 * Constructor
	 * @param string session
	 * @param string smsAccount
	 * @param string login
	 * @param string status
	 * @param string quotaDiff
	 * @return OvhTypeTelephonySmsSetUserQuota
	 */
	public function __construct($_session = null,$_smsAccount = null,$_login = null,$_status = null,$_quotaDiff = null)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'login'=>$_login,'status'=>$_status,'quotaDiff'=>$_quotaDiff));
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
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set quotaDiff
	 * @param string quotaDiff
	 * @return string
	 */
	public function setQuotaDiff($_quotaDiff)
	{
		return ($this->quotaDiff = $_quotaDiff);
	}
	/**
	 * Get quotaDiff
	 * @return string
	 */
	public function getQuotaDiff()
	{
		return $this->quotaDiff;
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