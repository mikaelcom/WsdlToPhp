<?php
/**
 * Class file for OvhTypeTelephonyPlugAndPhoneSkinModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPlugAndPhoneSkinModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyPlugAndPhoneSkinModify extends OvhWsdlClass
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
	 * The skin
	 * @var string
	 */
	public $skin;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string skin
	 * @return OvhTypeTelephonyPlugAndPhoneSkinModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_skin = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'skin'=>$_skin));
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
	 * Set skin
	 * @param string skin
	 * @return string
	 */
	public function setSkin($_skin)
	{
		return ($this->skin = $_skin);
	}
	/**
	 * Get skin
	 * @return string
	 */
	public function getSkin()
	{
		return $this->skin;
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