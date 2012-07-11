<?php
/**
 * Class file for XiMoneyMarketsTypeGetTreasuryRateFamily
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetTreasuryRateFamily
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetTreasuryRateFamily extends XiMoneyMarketsWsdlClass
{
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeTreasuryCurrencyTypes
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeTreasuryCurrencyTypes Currency
	 * @return XiMoneyMarketsTypeGetTreasuryRateFamily
	 */
	public function __construct($_Currency)
	{
		parent::__construct(array('Currency'=>$_Currency));
	}
	/**
	 * Set Currency
	 * @param TreasuryCurrencyTypes Currency
	 * @return TreasuryCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMoneyMarketsTypeTreasuryCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMoneyMarketsTypeTreasuryCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
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