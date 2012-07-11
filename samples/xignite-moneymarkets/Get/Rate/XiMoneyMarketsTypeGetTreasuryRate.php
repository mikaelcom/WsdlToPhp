<?php
/**
 * Class file for XiMoneyMarketsTypeGetTreasuryRate
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetTreasuryRate
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetTreasuryRate extends XiMoneyMarketsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeTreasuryRateTypes
	 */
	public $Type;
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
	 * @param XiMoneyMarketsTypeTreasuryRateTypes Type
	 * @param XiMoneyMarketsTypeTreasuryCurrencyTypes Currency
	 * @return XiMoneyMarketsTypeGetTreasuryRate
	 */
	public function __construct($_Type,$_Currency)
	{
		parent::__construct(array('Type'=>$_Type,'Currency'=>$_Currency));
	}
	/**
	 * Set Type
	 * @param TreasuryRateTypes Type
	 * @return TreasuryRateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMoneyMarketsTypeTreasuryRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMoneyMarketsTypeTreasuryRateTypes
	 */
	public function getType()
	{
		return $this->Type;
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