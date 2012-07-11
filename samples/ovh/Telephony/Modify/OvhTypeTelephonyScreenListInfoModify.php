<?php
/**
 * Class file for OvhTypeTelephonyScreenListInfoModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyScreenListInfoModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyScreenListInfoModify extends OvhWsdlClass
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
	 * The numbersScreen
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $numbersScreen;
	/**
	 * The naturesScreen
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $naturesScreen;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string screenListType
	 * @param OvhTypeMyArrayOfStringType numbersScreen
	 * @param OvhTypeMyArrayOfStringType naturesScreen
	 * @return OvhTypeTelephonyScreenListInfoModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_screenListType = null,$_numbersScreen = null,$_naturesScreen = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'screenListType'=>$_screenListType,'numbersScreen'=>new OvhTypeMyArrayOfStringType($_numbersScreen),'naturesScreen'=>new OvhTypeMyArrayOfStringType($_naturesScreen)));
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
	 * Set numbersScreen
	 * @param MyArrayOfStringType numbersScreen
	 * @return MyArrayOfStringType
	 */
	public function setNumbersScreen($_numbersScreen)
	{
		return ($this->numbersScreen = $_numbersScreen);
	}
	/**
	 * Get numbersScreen
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getNumbersScreen()
	{
		return $this->numbersScreen;
	}
	/**
	 * Set naturesScreen
	 * @param MyArrayOfStringType naturesScreen
	 * @return MyArrayOfStringType
	 */
	public function setNaturesScreen($_naturesScreen)
	{
		return ($this->naturesScreen = $_naturesScreen);
	}
	/**
	 * Get naturesScreen
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getNaturesScreen()
	{
		return $this->naturesScreen;
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