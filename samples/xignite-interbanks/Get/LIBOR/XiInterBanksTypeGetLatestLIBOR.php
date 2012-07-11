<?php
/**
 * Class file for XiInterBanksTypeGetLatestLIBOR
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetLatestLIBOR
 * @date 08/07/2012
 */
class XiInterBanksTypeGetLatestLIBOR extends XiInterBanksWsdlClass
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateTypes
	 */
	public $RateType;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeLIBORCurrencyTypes
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateTypes RateType
	 * @param XiInterBanksTypeLIBORCurrencyTypes Currency
	 * @return XiInterBanksTypeGetLatestLIBOR
	 */
	public function __construct($_RateType,$_Currency)
	{
		parent::__construct(array('RateType'=>$_RateType,'Currency'=>$_Currency));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiInterBanksTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiInterBanksTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
	}
	/**
	 * Set Currency
	 * @param LIBORCurrencyTypes Currency
	 * @return LIBORCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiInterBanksTypeLIBORCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiInterBanksTypeLIBORCurrencyTypes
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