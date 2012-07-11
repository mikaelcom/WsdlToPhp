<?php
/**
 * Class file for XiBondsRealTimeTypePriceComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypePriceComposite
 * @date 08/07/2012
 */
class XiBondsRealTimeTypePriceComposite extends XiBondsRealTimeTypeCommon
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
	 * The TradedPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeTradedPrice
	 */
	public $TradedPrice;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsRealTimeTypeTradedPrice TradedPrice
	 * @return XiBondsRealTimeTypePriceComposite
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_TradedPrice = null)
	{
		XiBondsRealTimeWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'TradedPrice'=>$_TradedPrice));
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
	 * Set TradedPrice
	 * @param TradedPrice TradedPrice
	 * @return TradedPrice
	 */
	public function setTradedPrice($_TradedPrice)
	{
		return ($this->TradedPrice = $_TradedPrice);
	}
	/**
	 * Get TradedPrice
	 * @return XiBondsRealTimeTypeTradedPrice
	 */
	public function getTradedPrice()
	{
		return $this->TradedPrice;
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