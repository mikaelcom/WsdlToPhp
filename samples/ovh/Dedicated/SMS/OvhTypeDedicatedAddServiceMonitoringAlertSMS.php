<?php
/**
 * Class file for OvhTypeDedicatedAddServiceMonitoringAlertSMS
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedAddServiceMonitoringAlertSMS
 * @date 02/07/2012
 */
class OvhTypeDedicatedAddServiceMonitoringAlertSMS extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The port
	 * @var int
	 */
	public $port;
	/**
	 * The itemId
	 * @var int
	 */
	public $itemId;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The phoneNumberTo
	 * @var string
	 */
	public $phoneNumberTo;
	/**
	 * Constructor
	 * @param string session
	 * @param string ip
	 * @param int port
	 * @param int itemId
	 * @param string smsAccount
	 * @param string phoneNumberTo
	 * @return OvhTypeDedicatedAddServiceMonitoringAlertSMS
	 */
	public function __construct($_session = null,$_ip = null,$_port = null,$_itemId = null,$_smsAccount = null,$_phoneNumberTo = null)
	{
		parent::__construct(array('session'=>$_session,'ip'=>$_ip,'port'=>$_port,'itemId'=>$_itemId,'smsAccount'=>$_smsAccount,'phoneNumberTo'=>$_phoneNumberTo));
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
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set port
	 * @param int port
	 * @return int
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get port
	 * @return int
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set itemId
	 * @param int itemId
	 * @return int
	 */
	public function setItemId($_itemId)
	{
		return ($this->itemId = $_itemId);
	}
	/**
	 * Get itemId
	 * @return int
	 */
	public function getItemId()
	{
		return $this->itemId;
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
	 * Set phoneNumberTo
	 * @param string phoneNumberTo
	 * @return string
	 */
	public function setPhoneNumberTo($_phoneNumberTo)
	{
		return ($this->phoneNumberTo = $_phoneNumberTo);
	}
	/**
	 * Get phoneNumberTo
	 * @return string
	 */
	public function getPhoneNumberTo()
	{
		return $this->phoneNumberTo;
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