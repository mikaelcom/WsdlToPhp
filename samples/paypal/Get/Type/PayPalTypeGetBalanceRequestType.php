<?php
/**
 * Class file for PayPalTypeGetBalanceRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBalanceRequestType
 * @date 14/07/2012
 */
class PayPalTypeGetBalanceRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The ReturnAllCurrencies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReturnAllCurrencies;
	/**
	 * Constructor
	 * @param string ReturnAllCurrencies
	 * @return PayPalTypeGetBalanceRequestType
	 */
	public function __construct($_ReturnAllCurrencies = null)
	{
		PayPalWsdlClass::__construct(array('ReturnAllCurrencies'=>$_ReturnAllCurrencies));
	}
	/**
	 * Set ReturnAllCurrencies
	 * @param string ReturnAllCurrencies
	 * @return string
	 */
	public function setReturnAllCurrencies($_ReturnAllCurrencies)
	{
		return ($this->ReturnAllCurrencies = $_ReturnAllCurrencies);
	}
	/**
	 * Get ReturnAllCurrencies
	 * @return string
	 */
	public function getReturnAllCurrencies()
	{
		return $this->ReturnAllCurrencies;
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