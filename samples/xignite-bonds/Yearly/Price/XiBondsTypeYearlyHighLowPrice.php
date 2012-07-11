<?php
/**
 * Class file for XiBondsTypeYearlyHighLowPrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeYearlyHighLowPrice
 * @date 08/07/2012
 */
class XiBondsTypeYearlyHighLowPrice extends XiBondsTypeCommon
{
	/**
	 * The InstrumentIdentifierBrief
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeInstrumentIdentifierBrief
	 */
	public $InstrumentIdentifierBrief;
	/**
	 * The YearlyHighLow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeYearlyHighLow
	 */
	public $YearlyHighLow;
	/**
	 * Constructor
	 * @param XiBondsTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsTypeYearlyHighLow YearlyHighLow
	 * @return XiBondsTypeYearlyHighLowPrice
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_YearlyHighLow = null)
	{
		XiBondsWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'YearlyHighLow'=>$_YearlyHighLow));
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
	 * @return XiBondsTypeInstrumentIdentifierBrief
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
	 * @return XiBondsTypeYearlyHighLow
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