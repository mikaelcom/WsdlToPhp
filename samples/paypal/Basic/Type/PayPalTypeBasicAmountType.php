<?php
/**
 * Class file for PayPalTypeBasicAmountType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBasicAmountType
 * Documentation : On requests, you must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
 * @date 14/07/2012
 */
class PayPalTypeBasicAmountType extends PayPalWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * The currencyID
	 * Meta informations :
	 * 	- use : required
	 * @var PayPalTypeCurrencyCodeType
	 */
	public $currencyID;
	/**
	 * Constructor
	 * @param string _
	 * @param PayPalTypeCurrencyCodeType currencyID
	 * @return PayPalTypeBasicAmountType
	 */
	public function __construct($__ = null,$_currencyID = null)
	{
		parent::__construct(array('_'=>$__,'currencyID'=>$_currencyID));
	}
	/**
	 * Set _
	 * @param string _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return string
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set currencyID
	 * @param CurrencyCodeType currencyID
	 * @return CurrencyCodeType
	 */
	public function setCurrencyID($_currencyID)
	{
		return ($this->currencyID = PayPalTypeCurrencyCodeType::valueIsValid($_currencyID)?$_currencyID:null);
	}
	/**
	 * Get currencyID
	 * @return PayPalTypeCurrencyCodeType
	 */
	public function getCurrencyID()
	{
		return $this->currencyID;
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