<?php
/**
 * Class file for OvhTypeTelephonyLineLogsNotificationOptionsModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineLogsNotificationOptionsModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineLogsNotificationOptionsModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
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
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string frequency
	 * @param boolean sendIfNull
	 * @param string email
	 * @return OvhTypeTelephonyLineLogsNotificationOptionsModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_frequency = null,$_sendIfNull = null,$_email = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'frequency'=>$_frequency,'sendIfNull'=>$_sendIfNull,'email'=>$_email));
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
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
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