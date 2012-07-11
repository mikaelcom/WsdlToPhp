<?php
/**
 * Class file for OvhTypeSqlpriveAlertInfotReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveAlertInfotReturn
 * @date 02/07/2012
 */
class OvhTypeSqlpriveAlertInfotReturn extends OvhWsdlClass
{
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The alert
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $alert;
	/**
	 * The smsNumber
	 * @var string
	 */
	public $smsNumber;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * Constructor
	 * @param string email
	 * @param OvhTypeMyArrayOfStringType alert
	 * @param string smsNumber
	 * @param string smsAccount
	 * @return OvhTypeSqlpriveAlertInfotReturn
	 */
	public function __construct($_email = null,$_alert = null,$_smsNumber = null,$_smsAccount = null)
	{
		parent::__construct(array('email'=>$_email,'alert'=>new OvhTypeMyArrayOfStringType($_alert),'smsNumber'=>$_smsNumber,'smsAccount'=>$_smsAccount));
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