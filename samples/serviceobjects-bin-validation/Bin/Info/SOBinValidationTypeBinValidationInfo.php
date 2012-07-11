<?php
/**
 * Class file for SOBinValidationTypeBinValidationInfo
 * @date 08/07/2012
 */
/**
 * Class SOBinValidationTypeBinValidationInfo
 * @date 08/07/2012
 */
class SOBinValidationTypeBinValidationInfo extends SOBinValidationWsdlClass
{
	/**
	 * The BIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BIN;
	/**
	 * The BankName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BankName;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PaymentMethod;
	/**
	 * The CardType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CardType;
	/**
	 * The CountryAbbreviation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryAbbreviation;
	/**
	 * The CountryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryName;
	/**
	 * The PhoneNumbers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumbers;
	/**
	 * The DEBUG
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DEBUG;
	/**
	 * Constructor
	 * @param string BIN
	 * @param string BankName
	 * @param string PaymentMethod
	 * @param string CardType
	 * @param string CountryAbbreviation
	 * @param string CountryName
	 * @param string PhoneNumbers
	 * @param string DEBUG
	 * @return SOBinValidationTypeBinValidationInfo
	 */
	public function __construct($_BIN = null,$_BankName = null,$_PaymentMethod = null,$_CardType = null,$_CountryAbbreviation = null,$_CountryName = null,$_PhoneNumbers = null,$_DEBUG = null)
	{
		parent::__construct(array('BIN'=>$_BIN,'BankName'=>$_BankName,'PaymentMethod'=>$_PaymentMethod,'CardType'=>$_CardType,'CountryAbbreviation'=>$_CountryAbbreviation,'CountryName'=>$_CountryName,'PhoneNumbers'=>$_PhoneNumbers,'DEBUG'=>$_DEBUG));
	}
	/**
	 * Set BIN
	 * @param string BIN
	 * @return string
	 */
	public function setBIN($_BIN)
	{
		return ($this->BIN = $_BIN);
	}
	/**
	 * Get BIN
	 * @return string
	 */
	public function getBIN()
	{
		return $this->BIN;
	}
	/**
	 * Set BankName
	 * @param string BankName
	 * @return string
	 */
	public function setBankName($_BankName)
	{
		return ($this->BankName = $_BankName);
	}
	/**
	 * Get BankName
	 * @return string
	 */
	public function getBankName()
	{
		return $this->BankName;
	}
	/**
	 * Set PaymentMethod
	 * @param string PaymentMethod
	 * @return string
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = $_PaymentMethod);
	}
	/**
	 * Get PaymentMethod
	 * @return string
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * Set CardType
	 * @param string CardType
	 * @return string
	 */
	public function setCardType($_CardType)
	{
		return ($this->CardType = $_CardType);
	}
	/**
	 * Get CardType
	 * @return string
	 */
	public function getCardType()
	{
		return $this->CardType;
	}
	/**
	 * Set CountryAbbreviation
	 * @param string CountryAbbreviation
	 * @return string
	 */
	public function setCountryAbbreviation($_CountryAbbreviation)
	{
		return ($this->CountryAbbreviation = $_CountryAbbreviation);
	}
	/**
	 * Get CountryAbbreviation
	 * @return string
	 */
	public function getCountryAbbreviation()
	{
		return $this->CountryAbbreviation;
	}
	/**
	 * Set CountryName
	 * @param string CountryName
	 * @return string
	 */
	public function setCountryName($_CountryName)
	{
		return ($this->CountryName = $_CountryName);
	}
	/**
	 * Get CountryName
	 * @return string
	 */
	public function getCountryName()
	{
		return $this->CountryName;
	}
	/**
	 * Set PhoneNumbers
	 * @param string PhoneNumbers
	 * @return string
	 */
	public function setPhoneNumbers($_PhoneNumbers)
	{
		return ($this->PhoneNumbers = $_PhoneNumbers);
	}
	/**
	 * Get PhoneNumbers
	 * @return string
	 */
	public function getPhoneNumbers()
	{
		return $this->PhoneNumbers;
	}
	/**
	 * Set DEBUG
	 * @param string DEBUG
	 * @return string
	 */
	public function setDEBUG($_DEBUG)
	{
		return ($this->DEBUG = $_DEBUG);
	}
	/**
	 * Get DEBUG
	 * @return string
	 */
	public function getDEBUG()
	{
		return $this->DEBUG;
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