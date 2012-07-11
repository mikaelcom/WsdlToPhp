<?php
/**
 * Class file for OvhTypeTelephonySmsSetQuotaNotification
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsSetQuotaNotification
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsSetQuotaNotification extends OvhWsdlClass
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
	 * The support
	 * @var string
	 */
	public $support;
	/**
	 * The alertNumber
	 * @var string
	 */
	public $alertNumber;
	/**
	 * The alertThreshold
	 * @var string
	 */
	public $alertThreshold;
	/**
	 * Constructor
	 * @param string session
	 * @param string smsAccount
	 * @param string login
	 * @param string support
	 * @param string alertNumber
	 * @param string alertThreshold
	 * @return OvhTypeTelephonySmsSetQuotaNotification
	 */
	public function __construct($_session = null,$_smsAccount = null,$_login = null,$_support = null,$_alertNumber = null,$_alertThreshold = null)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'login'=>$_login,'support'=>$_support,'alertNumber'=>$_alertNumber,'alertThreshold'=>$_alertThreshold));
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
	 * Set support
	 * @param string support
	 * @return string
	 */
	public function setSupport($_support)
	{
		return ($this->support = $_support);
	}
	/**
	 * Get support
	 * @return string
	 */
	public function getSupport()
	{
		return $this->support;
	}
	/**
	 * Set alertNumber
	 * @param string alertNumber
	 * @return string
	 */
	public function setAlertNumber($_alertNumber)
	{
		return ($this->alertNumber = $_alertNumber);
	}
	/**
	 * Get alertNumber
	 * @return string
	 */
	public function getAlertNumber()
	{
		return $this->alertNumber;
	}
	/**
	 * Set alertThreshold
	 * @param string alertThreshold
	 * @return string
	 */
	public function setAlertThreshold($_alertThreshold)
	{
		return ($this->alertThreshold = $_alertThreshold);
	}
	/**
	 * Get alertThreshold
	 * @return string
	 */
	public function getAlertThreshold()
	{
		return $this->alertThreshold;
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