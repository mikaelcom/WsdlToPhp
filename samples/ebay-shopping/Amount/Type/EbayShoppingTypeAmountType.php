<?php
/**
 * Class file for EbayShoppingTypeAmountType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeAmountType
 * Documentation : Currency in which the monetary amount is specified. See CurrencyCodeType for applicable values.
 * @date 05/07/2012
 */
class EbayShoppingTypeAmountType extends EbayShoppingWsdlClass
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
	 * @var EbayShoppingTypeCurrencyCodeType
	 */
	public $currencyID;
	/**
	 * Constructor
	 * @param double _
	 * @param EbayShoppingTypeCurrencyCodeType currencyID
	 * @return EbayShoppingTypeAmountType
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
		return ($this->currencyID = EbayShoppingTypeCurrencyCodeType::valueIsValid($_currencyID)?$_currencyID:null);
	}
	/**
	 * Get currencyID
	 * @return EbayShoppingTypeCurrencyCodeType
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