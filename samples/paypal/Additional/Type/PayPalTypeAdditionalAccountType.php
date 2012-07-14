<?php
/**
 * Class file for PayPalTypeAdditionalAccountType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAdditionalAccountType
 * Documentation : The AdditionalAccount component represents historical data related to accounts that the user held with a country of residency other than the current one. eBay users can have one active account at a time. For users who change their country of residency and modify their eBay registration to reflect this change, the new country of residence becomes the currently active account. Any account associated with a previous country is treated as an additional account. Because the currency for these additional accounts are different than the active account, each additional account includes an indicator of the currency for that account. Users who never change their country of residence will not have any additional accounts.
 * @date 14/07/2012
 */
class PayPalTypeAdditionalAccountType extends PayPalWsdlClass
{
	/**
	 * The Balance
	 * @var PayPalTypeAmountType
	 */
	public $Balance;
	/**
	 * The Currency
	 * @var PayPalTypeCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The AccountCode
	 * @var string
	 */
	public $AccountCode;
	/**
	 * Constructor
	 * @param PayPalTypeAmountType Balance
	 * @param PayPalTypeCurrencyCodeType Currency
	 * @param string AccountCode
	 * @return PayPalTypeAdditionalAccountType
	 */
	public function __construct($_Balance = null,$_Currency = null,$_AccountCode = null)
	{
		parent::__construct(array('Balance'=>$_Balance,'Currency'=>$_Currency,'AccountCode'=>$_AccountCode));
	}
	/**
	 * Set Balance
	 * @param AmountType Balance
	 * @return AmountType
	 */
	public function setBalance($_Balance)
	{
		return ($this->Balance = $_Balance);
	}
	/**
	 * Get Balance
	 * @return PayPalTypeAmountType
	 */
	public function getBalance()
	{
		return $this->Balance;
	}
	/**
	 * Set Currency
	 * @param CurrencyCodeType Currency
	 * @return CurrencyCodeType
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = PayPalTypeCurrencyCodeType::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return PayPalTypeCurrencyCodeType
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set AccountCode
	 * @param string AccountCode
	 * @return string
	 */
	public function setAccountCode($_AccountCode)
	{
		return ($this->AccountCode = $_AccountCode);
	}
	/**
	 * Get AccountCode
	 * @return string
	 */
	public function getAccountCode()
	{
		return $this->AccountCode;
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