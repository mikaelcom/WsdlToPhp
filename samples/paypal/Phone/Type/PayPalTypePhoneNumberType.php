<?php
/**
 * Class file for PayPalTypePhoneNumberType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePhoneNumberType
 * @date 14/07/2012
 */
class PayPalTypePhoneNumberType extends PayPalWsdlClass
{
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Country code associated with this phone number.
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The PhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Phone number associated with this phone.
	 * @var string
	 */
	public $PhoneNumber;
	/**
	 * The Extension
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Extension associated with this phone number.
	 * @var string
	 */
	public $Extension;
	/**
	 * Constructor
	 * @param string CountryCode
	 * @param string PhoneNumber
	 * @param string Extension
	 * @return PayPalTypePhoneNumberType
	 */
	public function __construct($_CountryCode = null,$_PhoneNumber = null,$_Extension = null)
	{
		parent::__construct(array('CountryCode'=>$_CountryCode,'PhoneNumber'=>$_PhoneNumber,'Extension'=>$_Extension));
	}
	/**
	 * Set CountryCode
	 * @param string CountryCode
	 * @return string
	 */
	public function setCountryCode($_CountryCode)
	{
		return ($this->CountryCode = $_CountryCode);
	}
	/**
	 * Get CountryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * Set PhoneNumber
	 * @param string PhoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_PhoneNumber)
	{
		return ($this->PhoneNumber = $_PhoneNumber);
	}
	/**
	 * Get PhoneNumber
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
	}
	/**
	 * Set Extension
	 * @param string Extension
	 * @return string
	 */
	public function setExtension($_Extension)
	{
		return ($this->Extension = $_Extension);
	}
	/**
	 * Get Extension
	 * @return string
	 */
	public function getExtension()
	{
		return $this->Extension;
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