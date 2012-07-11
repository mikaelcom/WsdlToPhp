<?php
/**
 * Class file for OvhTypeTelephonyVoicemailModifyPassword
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailModifyPassword
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailModifyPassword extends OvhWsdlClass
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
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The forcePassword
	 * @var boolean
	 */
	public $forcePassword;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string password
	 * @param boolean forcePassword
	 * @return OvhTypeTelephonyVoicemailModifyPassword
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_password = null,$_forcePassword = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'password'=>$_password,'forcePassword'=>$_forcePassword));
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
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set forcePassword
	 * @param boolean forcePassword
	 * @return boolean
	 */
	public function setForcePassword($_forcePassword)
	{
		return ($this->forcePassword = $_forcePassword);
	}
	/**
	 * Get forcePassword
	 * @return boolean
	 */
	public function getForcePassword()
	{
		return $this->forcePassword;
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