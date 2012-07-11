<?php
/**
 * Class file for PaylineWebPaymentTypeRib
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeRib
 * Documentation : This element contains RIB information
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeRib extends PaylineWebPaymentWsdlClass
{
	/**
	 * The tellerCode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $tellerCode;
	/**
	 * The accountNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $accountNumber;
	/**
	 * The key
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $key;
	/**
	 * Constructor
	 * @param string tellerCode
	 * @param string accountNumber
	 * @param string key
	 * @return PaylineWebPaymentTypeRib
	 */
	public function __construct($_tellerCode = null,$_accountNumber = null,$_key = null)
	{
		parent::__construct(array('tellerCode'=>$_tellerCode,'accountNumber'=>$_accountNumber,'key'=>$_key));
	}
	/**
	 * Set tellerCode
	 * @param string tellerCode
	 * @return string
	 */
	public function setTellerCode($_tellerCode)
	{
		return ($this->tellerCode = $_tellerCode);
	}
	/**
	 * Get tellerCode
	 * @return string
	 */
	public function getTellerCode()
	{
		return $this->tellerCode;
	}
	/**
	 * Set accountNumber
	 * @param string accountNumber
	 * @return string
	 */
	public function setAccountNumber($_accountNumber)
	{
		return ($this->accountNumber = $_accountNumber);
	}
	/**
	 * Get accountNumber
	 * @return string
	 */
	public function getAccountNumber()
	{
		return $this->accountNumber;
	}
	/**
	 * Set key
	 * @param string key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->key = $_key);
	}
	/**
	 * Get key
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
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