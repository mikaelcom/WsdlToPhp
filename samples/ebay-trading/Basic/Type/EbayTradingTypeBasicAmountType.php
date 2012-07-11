<?php
/**
 * Class file for EbayTradingTypeBasicAmountType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBasicAmountType
 * @date 04/07/2012
 */
class EbayTradingTypeBasicAmountType extends EbayTradingWsdlClass
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
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $currencyID;
	/**
	 * Constructor
	 * @param string _
	 * @param EbayTradingTypeCurrencyCodeType currencyID
	 * @return EbayTradingTypeBasicAmountType
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