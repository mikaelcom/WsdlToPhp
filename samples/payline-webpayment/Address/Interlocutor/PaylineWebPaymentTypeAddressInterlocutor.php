<?php
/**
 * Class file for PaylineWebPaymentTypeAddressInterlocutor
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeAddressInterlocutor
 * Documentation : This element contains information about Interlocutor address
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeAddressInterlocutor extends PaylineWebPaymentWsdlClass
{
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
	 * The city
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $city;
	/**
	 * The zipCode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $zipCode;
	/**
	 * The state
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $state;
	/**
	 * The country
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string street1
	 * @param string street2
	 * @param string city
	 * @param string zipCode
	 * @param string state
	 * @param string country
	 * @return PaylineWebPaymentTypeAddressInterlocutor
	 */
	public function __construct($_street1 = null,$_street2 = null,$_city = null,$_zipCode = null,$_state = null,$_country = null)
	{
		parent::__construct(array('street1'=>$_street1,'street2'=>$_street2,'city'=>$_city,'zipCode'=>$_zipCode,'state'=>$_state,'country'=>$_country));
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
	 * Set city
	 * @param string city
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Get city
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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