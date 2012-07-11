<?php
/**
 * Class file for XiRatesTypeHistoricalLIBORRates
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeHistoricalLIBORRates
 * @date 08/07/2012
 */
class XiRatesTypeHistoricalLIBORRates extends XiRatesTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORCurrencyTypes
	 */
	public $Currency;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
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
	 * @param XiRatesTypeLIBORTypes Type
	 * @param XiRatesTypeLIBORCurrencyTypes Currency
	 * @param string Source
	 * @param XiRatesTypeRateDescription Description
	 * @param XiRatesTypeArrayOfRate Rates
	 * @return XiRatesTypeHistoricalLIBORRates
	 */
	public function __construct($_Type,$_Currency,$_Source = null,$_Description = null,$_Rates = null)
	{
		XiRatesWsdlClass::__construct(array('Type'=>$_Type,'Currency'=>$_Currency,'Source'=>$_Source,'Description'=>$_Description,'Rates'=>new XiRatesTypeArrayOfRate($_Rates)));
	}
	/**
	 * Set Type
	 * @param LIBORTypes Type
	 * @return LIBORTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeLIBORTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeLIBORTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param LIBORCurrencyTypes Currency
	 * @return LIBORCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiRatesTypeLIBORCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiRatesTypeLIBORCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
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