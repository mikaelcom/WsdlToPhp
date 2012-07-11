<?php
/**
 * Class file for PaylineWebPaymentTypeAddressOwner
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeAddressOwner
 * Documentation : This element contains information about the address
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeAddressOwner extends PaylineWebPaymentWsdlClass
{
	/**
	 * The street
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $street;
	/**
	 * The cityName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $cityName;
	/**
	 * The zipCode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $zipCode;
	/**
	 * The country
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The phone
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $phone;
	/**
	 * Constructor
	 * @param string street
	 * @param string cityName
	 * @param string zipCode
	 * @param string country
	 * @param string phone
	 * @return PaylineWebPaymentTypeAddressOwner
	 */
	public function __construct($_street = null,$_cityName = null,$_zipCode = null,$_country = null,$_phone = null)
	{
		parent::__construct(array('street'=>$_street,'cityName'=>$_cityName,'zipCode'=>$_zipCode,'country'=>$_country,'phone'=>$_phone));
	}
	/**
	 * Set street
	 * @param string street
	 * @return string
	 */
	public function setStreet($_street)
	{
		return ($this->street = $_street);
	}
	/**
	 * Get street
	 * @return string
	 */
	public function getStreet()
	{
		return $this->street;
	}
	/**
	 * Set cityName
	 * @param string cityName
	 * @return string
	 */
	public function setCityName($_cityName)
	{
		return ($this->cityName = $_cityName);
	}
	/**
	 * Get cityName
	 * @return string
	 */
	public function getCityName()
	{
		return $this->cityName;
	}
	/**
	 * Set zipCode
	 * @param string zipCode
	 * @return string
	 */
	public function setZipCode($_zipCode)
	{
		return ($this->zipCode = $_zipCode);
	}
	/**
	 * Get zipCode
	 * @return string
	 */
	public function getZipCode()
	{
		return $this->zipCode;
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
	 * Set phone
	 * @param string phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Get phone
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
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