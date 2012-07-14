<?php
/**
 * Class file for PayPalTypeAmountType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAmountType
 * @date 14/07/2012
 */
class PayPalTypeAmountType extends PayPalWsdlClass
{
	/**
	 * The _
	 * @var double
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
	 * @param double _
	 * @param PayPalTypeCurrencyCodeType currencyID
	 * @return PayPalTypeAmountType
	 */
	public function __construct($__ = null,$_currencyID = null)
	{
		parent::__construct(array('_'=>$__,'currencyID'=>$_currencyID));
	}
	/**
	 * Set _
	 * @param double _
	 * @return double
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return double
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