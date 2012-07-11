<?php
/**
 * Class file for XiBondsTypeDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
class XiBondsTypeDailyOpenHighLowClosePrice extends XiBondsTypeCommon
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
	 * The DailyOpenHighLowClose
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeDailyOpenHighLowClose
	 */
	public $DailyOpenHighLowClose;
	/**
	 * Constructor
	 * @param XiBondsTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsTypeDailyOpenHighLowClose DailyOpenHighLowClose
	 * @return XiBondsTypeDailyOpenHighLowClosePrice
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_DailyOpenHighLowClose = null)
	{
		XiBondsWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'DailyOpenHighLowClose'=>$_DailyOpenHighLowClose));
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
	 * @return XiBondsTypeDailyOpenHighLowClose
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