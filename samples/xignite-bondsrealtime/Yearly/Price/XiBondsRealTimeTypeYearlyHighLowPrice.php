<?php
/**
 * Class file for XiBondsRealTimeTypeYearlyHighLowPrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeYearlyHighLowPrice
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeYearlyHighLowPrice extends XiBondsRealTimeTypeCommon
{
	/**
	 * The InstrumentIdentifierBrief
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeInstrumentIdentifierBrief
	 */
	public $InstrumentIdentifierBrief;
	/**
	 * The YearlyHighLow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeYearlyHighLow
	 */
	public $YearlyHighLow;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsRealTimeTypeYearlyHighLow YearlyHighLow
	 * @return XiBondsRealTimeTypeYearlyHighLowPrice
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_YearlyHighLow = null)
	{
		XiBondsRealTimeWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'YearlyHighLow'=>$_YearlyHighLow));
	}
	/**
	 * Set InstrumentIdentifierBrief
	 * @param InstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @return InstrumentIdentifierBrief
	 */
	public function setInstrumentIdentifierBrief($_InstrumentIdentifierBrief)
	{
		return ($this->InstrumentIdentifierBrief = $_InstrumentIdentifierBrief);
	}
	/**
	 * Get InstrumentIdentifierBrief
	 * @return XiBondsRealTimeTypeInstrumentIdentifierBrief
	 */
	public function getInstrumentIdentifierBrief()
	{
		return $this->InstrumentIdentifierBrief;
	}
	/**
	 * Set YearlyHighLow
	 * @param YearlyHighLow YearlyHighLow
	 * @return YearlyHighLow
	 */
	public function setYearlyHighLow($_YearlyHighLow)
	{
		return ($this->YearlyHighLow = $_YearlyHighLow);
	}
	/**
	 * Get YearlyHighLow
	 * @return XiBondsRealTimeTypeYearlyHighLow
	 */
	public function getYearlyHighLow()
	{
		return $this->YearlyHighLow;
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