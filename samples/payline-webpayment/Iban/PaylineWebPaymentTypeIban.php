<?php
/**
 * Class file for PaylineWebPaymentTypeIban
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeIban
 * Documentation : This element contains IBAN information
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeIban extends PaylineWebPaymentWsdlClass
{
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The checkKey
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $checkKey;
	/**
	 * The BBAN
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $BBAN;
	/**
	 * The BIC
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $BIC;
	/**
	 * Constructor
	 * @param string CountryCode
	 * @param string checkKey
	 * @param string BBAN
	 * @param string BIC
	 * @return PaylineWebPaymentTypeIban
	 */
	public function __construct($_CountryCode = null,$_checkKey = null,$_BBAN = null,$_BIC = null)
	{
		parent::__construct(array('CountryCode'=>$_CountryCode,'checkKey'=>$_checkKey,'BBAN'=>$_BBAN,'BIC'=>$_BIC));
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
	 * Set checkKey
	 * @param string checkKey
	 * @return string
	 */
	public function setCheckKey($_checkKey)
	{
		return ($this->checkKey = $_checkKey);
	}
	/**
	 * Get checkKey
	 * @return string
	 */
	public function getCheckKey()
	{
		return $this->checkKey;
	}
	/**
	 * Set BBAN
	 * @param string BBAN
	 * @return string
	 */
	public function setBBAN($_BBAN)
	{
		return ($this->BBAN = $_BBAN);
	}
	/**
	 * Get BBAN
	 * @return string
	 */
	public function getBBAN()
	{
		return $this->BBAN;
	}
	/**
	 * Set BIC
	 * @param string BIC
	 * @return string
	 */
	public function setBIC($_BIC)
	{
		return ($this->BIC = $_BIC);
	}
	/**
	 * Get BIC
	 * @return string
	 */
	public function getBIC()
	{
		return $this->BIC;
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