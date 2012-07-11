<?php
/**
 * Class file for OvhTypeTelephonyFunctionKeyModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFunctionKeyModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyFunctionKeyModify extends OvhWsdlClass
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
	 * The function
	 * @var string
	 */
	public $function;
	/**
	 * The relatedNumber
	 * @var string
	 */
	public $relatedNumber;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param int keyNum
	 * @param string function
	 * @param string relatedNumber
	 * @return OvhTypeTelephonyFunctionKeyModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_keyNum = null,$_function = null,$_relatedNumber = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'keyNum'=>$_keyNum,'function'=>$_function,'relatedNumber'=>$_relatedNumber));
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
	 * Set function
	 * @param string function
	 * @return string
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
	}
	/**
	 * Get function
	 * @return string
	 */
	public function getFunction()
	{
		return $this->function;
	}
	/**
	 * Set relatedNumber
	 * @param string relatedNumber
	 * @return string
	 */
	public function setRelatedNumber($_relatedNumber)
	{
		return ($this->relatedNumber = $_relatedNumber);
	}
	/**
	 * Get relatedNumber
	 * @return string
	 */
	public function getRelatedNumber()
	{
		return $this->relatedNumber;
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