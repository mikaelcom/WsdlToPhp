<?php
/**
 * Class file for EbayTradingTypeAmountType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAmountType
 * Documentation : Currency in which the monetary amount is specified.<br> <br> In the AddItem family of calls, the currency can be specified in the Item.Currency field in requests instead. If you do specify this attribute in the AddItem family of calls, the value must match the site currency (i.e., it must be the same as the value in Item.Currency) unless otherwise stated.<br> <br> In the AddItem family of calls, listing fees are returned in the currency of the user's registration site. For example, a user who is registered on the eBay US site always sees their fees returned in USD, even when their listing request is sent to another site, such as eBay UK or eBay Germany.
 * @date 04/07/2012
 */
class EbayTradingTypeAmountType extends EbayTradingWsdlClass
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
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $currencyID;
	/**
	 * Constructor
	 * @param double _
	 * @param EbayTradingTypeCurrencyCodeType currencyID
	 * @return EbayTradingTypeAmountType
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
		return ($this->currencyID = EbayTradingTypeCurrencyCodeType::valueIsValid($_currencyID)?$_currencyID:null);
	}
	/**
	 * Get currencyID
	 * @return EbayTradingTypeCurrencyCodeType
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