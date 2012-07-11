<?php
/**
 * Class file for OvhTypeTelephonyLineLogsNotificationOptionsReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineLogsNotificationOptionsReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineLogsNotificationOptionsReturn extends OvhWsdlClass
{
	/**
	 * The frequency
	 * @var string
	 */
	public $frequency;
	/**
	 * The sendIfNull
	 * @var boolean
	 */
	public $sendIfNull;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * Constructor
	 * @param string frequency
	 * @param boolean sendIfNull
	 * @param string email
	 * @return OvhTypeTelephonyLineLogsNotificationOptionsReturn
	 */
	public function __construct($_frequency = null,$_sendIfNull = null,$_email = null)
	{
		parent::__construct(array('frequency'=>$_frequency,'sendIfNull'=>$_sendIfNull,'email'=>$_email));
	}
	/**
	 * Set frequency
	 * @param string frequency
	 * @return string
	 */
	public function setFrequency($_frequency)
	{
		return ($this->frequency = $_frequency);
	}
	/**
	 * Get frequency
	 * @return string
	 */
	public function getFrequency()
	{
		return $this->frequency;
	}
	/**
	 * Set sendIfNull
	 * @param boolean sendIfNull
	 * @return boolean
	 */
	public function setSendIfNull($_sendIfNull)
	{
		return ($this->sendIfNull = $_sendIfNull);
	}
	/**
	 * Get sendIfNull
	 * @return boolean
	 */
	public function getSendIfNull()
	{
		return $this->sendIfNull;
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