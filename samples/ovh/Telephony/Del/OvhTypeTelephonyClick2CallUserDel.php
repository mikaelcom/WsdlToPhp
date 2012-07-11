<?php
/**
 * Class file for OvhTypeTelephonyClick2CallUserDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyClick2CallUserDel
 * @date 02/07/2012
 */
class OvhTypeTelephonyClick2CallUserDel extends OvhWsdlClass
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
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string login
	 * @return OvhTypeTelephonyClick2CallUserDel
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_login = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'login'=>$_login));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>