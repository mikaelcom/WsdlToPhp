<?php
/**
 * Class file for XiInterBanksTypeHistoricalInterestRates
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeHistoricalInterestRates
 * @date 08/07/2012
 */
class XiInterBanksTypeHistoricalInterestRates extends XiInterBanksTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateTypes
	 */
	public $Type;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateDescription
	 */
	public $Description;
	/**
	 * The Rates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeArrayOfRate
	 */
	public $Rates;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateTypes Type
	 * @param XiInterBanksTypeRateDescription Description
	 * @param XiInterBanksTypeArrayOfRate Rates
	 * @return XiInterBanksTypeHistoricalInterestRates
	 */
	public function __construct($_Type,$_Description = null,$_Rates = null)
	{
		XiInterBanksWsdlClass::__construct(array('Type'=>$_Type,'Description'=>$_Description,'Rates'=>new XiInterBanksTypeArrayOfRate($_Rates)));
	}
	/**
	 * Set Type
	 * @param RateTypes Type
	 * @return RateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiInterBanksTypeRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiInterBanksTypeRateTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Description
	 * @param RateDescription Description
	 * @return RateDescription
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return XiInterBanksTypeRateDescription
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Rates
	 * @param ArrayOfRate Rates
	 * @return ArrayOfRate
	 */
	public function setRates($_Rates)
	{
		return ($this->Rates = $_Rates);
	}
	/**
	 * Get Rates
	 * @return XiInterBanksTypeArrayOfRate
	 */
	public function getRates()
	{
		return $this->Rates;
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