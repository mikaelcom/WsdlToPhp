<?php
/**
 * Class file for OvhTypeTelephonyScreenListInfo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyScreenListInfo
 * @date 02/07/2012
 */
class OvhTypeTelephonyScreenListInfo extends OvhWsdlClass
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
	 * The screenListType
	 * @var string
	 */
	public $screenListType;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string screenListType
	 * @return OvhTypeTelephonyScreenListInfo
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_screenListType = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'screenListType'=>$_screenListType));
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
	 * Set screenListType
	 * @param string screenListType
	 * @return string
	 */
	public function setScreenListType($_screenListType)
	{
		return ($this->screenListType = $_screenListType);
	}
	/**
	 * Get screenListType
	 * @return string
	 */
	public function getScreenListType()
	{
		return $this->screenListType;
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