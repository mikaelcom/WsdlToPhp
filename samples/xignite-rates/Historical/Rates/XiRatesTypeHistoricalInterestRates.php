<?php
/**
 * Class file for XiRatesTypeHistoricalInterestRates
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeHistoricalInterestRates
 * @date 08/07/2012
 */
class XiRatesTypeHistoricalInterestRates extends XiRatesTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTypes
	 */
	public $Type;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateDescription
	 */
	public $Description;
	/**
	 * The Rates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfRate
	 */
	public $Rates;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTypes Type
	 * @param XiRatesTypeRateDescription Description
	 * @param XiRatesTypeArrayOfRate Rates
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function __construct($_Type,$_Description = null,$_Rates = null)
	{
		XiRatesWsdlClass::__construct(array('Type'=>$_Type,'Description'=>$_Description,'Rates'=>new XiRatesTypeArrayOfRate($_Rates)));
	}
	/**
	 * Set Type
	 * @param RateTypes Type
	 * @return RateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeRateTypes
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
	 * @return XiRatesTypeRateDescription
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
	 * @return XiRatesTypeArrayOfRate
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