<?php
/**
 * Class file for OvhTypeDedicatedAddServiceMonitoringAlertEmail
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedAddServiceMonitoringAlertEmail
 * @date 02/07/2012
 */
class OvhTypeDedicatedAddServiceMonitoringAlertEmail extends OvhWsdlClass
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
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * Constructor
	 * @param string session
	 * @param string ip
	 * @param int port
	 * @param int itemId
	 * @param string email
	 * @return OvhTypeDedicatedAddServiceMonitoringAlertEmail
	 */
	public function __construct($_session = null,$_ip = null,$_port = null,$_itemId = null,$_email = null)
	{
		parent::__construct(array('session'=>$_session,'ip'=>$_ip,'port'=>$_port,'itemId'=>$_itemId,'email'=>$_email));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>