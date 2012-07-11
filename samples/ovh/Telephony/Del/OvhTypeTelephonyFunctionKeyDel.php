<?php
/**
 * Class file for OvhTypeTelephonyFunctionKeyDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFunctionKeyDel
 * @date 02/07/2012
 */
class OvhTypeTelephonyFunctionKeyDel extends OvhWsdlClass
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
	 * The keyNum
	 * @var int
	 */
	public $keyNum;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param int keyNum
	 * @return OvhTypeTelephonyFunctionKeyDel
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_keyNum = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'keyNum'=>$_keyNum));
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
	 * Set keyNum
	 * @param int keyNum
	 * @return int
	 */
	public function setKeyNum($_keyNum)
	{
		return ($this->keyNum = $_keyNum);
	}
	/**
	 * Get keyNum
	 * @return int
	 */
	public function getKeyNum()
	{
		return $this->keyNum;
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