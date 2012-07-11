<?php
/**
 * Class file for OvhTypeSqlpriveAlertSet
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveAlertSet
 * @date 02/07/2012
 */
class OvhTypeSqlpriveAlertSet extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The smsNumber
	 * @var string
	 */
	public $smsNumber;
	/**
	 * The alert
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $alert;
	/**
	 * Constructor
	 * @param string session
	 * @param string server
	 * @param string email
	 * @param string smsAccount
	 * @param string smsNumber
	 * @param OvhTypeMyArrayOfStringType alert
	 * @return OvhTypeSqlpriveAlertSet
	 */
	public function __construct($_session = null,$_server = null,$_email = null,$_smsAccount = null,$_smsNumber = null,$_alert = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'email'=>$_email,'smsAccount'=>$_smsAccount,'smsNumber'=>$_smsNumber,'alert'=>new OvhTypeMyArrayOfStringType($_alert)));
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
	 * Set server
	 * @param string server
	 * @return string
	 */
	public function setServer($_server)
	{
		return ($this->server = $_server);
	}
	/**
	 * Get server
	 * @return string
	 */
	public function getServer()
	{
		return $this->server;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
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
	 * Set smsNumber
	 * @param string smsNumber
	 * @return string
	 */
	public function setSmsNumber($_smsNumber)
	{
		return ($this->smsNumber = $_smsNumber);
	}
	/**
	 * Get smsNumber
	 * @return string
	 */
	public function getSmsNumber()
	{
		return $this->smsNumber;
	}
	/**
	 * Set alert
	 * @param MyArrayOfStringType alert
	 * @return MyArrayOfStringType
	 */
	public function setAlert($_alert)
	{
		return ($this->alert = $_alert);
	}
	/**
	 * Get alert
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getAlert()
	{
		return $this->alert;
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