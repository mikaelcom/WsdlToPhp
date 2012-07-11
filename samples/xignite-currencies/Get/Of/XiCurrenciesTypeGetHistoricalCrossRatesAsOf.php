<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRatesAsOf
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRatesAsOf
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRatesAsOf extends XiCurrenciesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * The Periods
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Periods;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param dateTime EndDate
	 * @param XiCurrenciesTypePeriodTypes PeriodType
	 * @param int Periods
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesAsOf
	 */
	public function __construct($_Symbol = null,$_EndDate,$_PeriodType,$_Periods)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'EndDate'=>$_EndDate,'PeriodType'=>$_PeriodType,'Periods'=>$_Periods));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set EndDate
	 * @param dateTime EndDate
	 * @return dateTime
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return dateTime
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiCurrenciesTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiCurrenciesTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set Periods
	 * @param int Periods
	 * @return int
	 */
	public function setPeriods($_Periods)
	{
		return ($this->Periods = $_Periods);
	}
	/**
	 * Get Periods
	 * @return int
	 */
	public function getPeriods()
	{
		return $this->Periods;
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