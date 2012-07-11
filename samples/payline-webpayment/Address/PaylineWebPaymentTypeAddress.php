<?php
/**
 * Class file for PaylineWebPaymentTypeAddress
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeAddress
 * Documentation : This element contains information about the address
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeAddress extends PaylineWebPaymentWsdlClass
{
	/**
	 * The name
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The street1
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $street1;
	/**
	 * The street2
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $street2;
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
	 * @param string name
	 * @param string street1
	 * @param string street2
	 * @param string cityName
	 * @param string zipCode
	 * @param string country
	 * @param string phone
	 * @return PaylineWebPaymentTypeAddress
	 */
	public function __construct($_name = null,$_street1 = null,$_street2 = null,$_cityName = null,$_zipCode = null,$_country = null,$_phone = null)
	{
		parent::__construct(array('name'=>$_name,'street1'=>$_street1,'street2'=>$_street2,'cityName'=>$_cityName,'zipCode'=>$_zipCode,'country'=>$_country,'phone'=>$_phone));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set street1
	 * @param string street1
	 * @return string
	 */
	public function setStreet1($_street1)
	{
		return ($this->street1 = $_street1);
	}
	/**
	 * Get street1
	 * @return string
	 */
	public function getStreet1()
	{
		return $this->street1;
	}
	/**
	 * Set street2
	 * @param string street2
	 * @return string
	 */
	public function setStreet2($_street2)
	{
		return ($this->street2 = $_street2);
	}
	/**
	 * Get street2
	 * @return string
	 */
	public function getStreet2()
	{
		return $this->street2;
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