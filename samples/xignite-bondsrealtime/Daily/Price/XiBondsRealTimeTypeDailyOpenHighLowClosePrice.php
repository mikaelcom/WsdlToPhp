<?php
/**
 * Class file for XiBondsRealTimeTypeDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeDailyOpenHighLowClosePrice extends XiBondsRealTimeTypeCommon
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
	 * The DailyOpenHighLowClose
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeDailyOpenHighLowClose
	 */
	public $DailyOpenHighLowClose;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsRealTimeTypeDailyOpenHighLowClose DailyOpenHighLowClose
	 * @return XiBondsRealTimeTypeDailyOpenHighLowClosePrice
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_DailyOpenHighLowClose = null)
	{
		XiBondsRealTimeWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'DailyOpenHighLowClose'=>$_DailyOpenHighLowClose));
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
	 * Set DailyOpenHighLowClose
	 * @param DailyOpenHighLowClose DailyOpenHighLowClose
	 * @return DailyOpenHighLowClose
	 */
	public function setDailyOpenHighLowClose($_DailyOpenHighLowClose)
	{
		return ($this->DailyOpenHighLowClose = $_DailyOpenHighLowClose);
	}
	/**
	 * Get DailyOpenHighLowClose
	 * @return XiBondsRealTimeTypeDailyOpenHighLowClose
	 */
	public function getDailyOpenHighLowClose()
	{
		return $this->DailyOpenHighLowClose;
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