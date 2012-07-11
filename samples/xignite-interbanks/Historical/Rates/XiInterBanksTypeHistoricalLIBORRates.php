<?php
/**
 * Class file for XiInterBanksTypeHistoricalLIBORRates
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeHistoricalLIBORRates
 * @date 08/07/2012
 */
class XiInterBanksTypeHistoricalLIBORRates extends XiInterBanksTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeLIBORTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeLIBORCurrencyTypes
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
	 * @param XiInterBanksTypeLIBORTypes Type
	 * @param XiInterBanksTypeLIBORCurrencyTypes Currency
	 * @param string Source
	 * @param XiInterBanksTypeRateDescription Description
	 * @param XiInterBanksTypeArrayOfRate Rates
	 * @return XiInterBanksTypeHistoricalLIBORRates
	 */
	public function __construct($_Type,$_Currency,$_Source = null,$_Description = null,$_Rates = null)
	{
		XiInterBanksWsdlClass::__construct(array('Type'=>$_Type,'Currency'=>$_Currency,'Source'=>$_Source,'Description'=>$_Description,'Rates'=>new XiInterBanksTypeArrayOfRate($_Rates)));
	}
	/**
	 * Set Type
	 * @param LIBORTypes Type
	 * @return LIBORTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiInterBanksTypeLIBORTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiInterBanksTypeLIBORTypes
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