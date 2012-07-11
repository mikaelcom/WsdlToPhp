<?php
/**
 * Class file for OvhTypeTelephonyLineSwitchOldOfferPossibility
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineSwitchOldOfferPossibility
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineSwitchOldOfferPossibility extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The numbers
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $numbers;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string session
	 * @param OvhTypeMyArrayOfStringType numbers
	 * @param string country
	 * @return OvhTypeTelephonyLineSwitchOldOfferPossibility
	 */
	public function __construct($_session = null,$_numbers = null,$_country = null)
	{
		parent::__construct(array('session'=>$_session,'numbers'=>new OvhTypeMyArrayOfStringType($_numbers),'country'=>$_country));
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
	 * Set numbers
	 * @param MyArrayOfStringType numbers
	 * @return MyArrayOfStringType
	 */
	public function setNumbers($_numbers)
	{
		return ($this->numbers = $_numbers);
	}
	/**
	 * Get numbers
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getNumbers()
	{
		return $this->numbers;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>