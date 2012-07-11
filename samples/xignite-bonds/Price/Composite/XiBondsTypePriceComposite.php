<?php
/**
 * Class file for XiBondsTypePriceComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypePriceComposite
 * @date 08/07/2012
 */
class XiBondsTypePriceComposite extends XiBondsTypeCommon
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
	 * The TradedPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeTradedPrice
	 */
	public $TradedPrice;
	/**
	 * Constructor
	 * @param XiBondsTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsTypeTradedPrice TradedPrice
	 * @return XiBondsTypePriceComposite
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_TradedPrice = null)
	{
		XiBondsWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'TradedPrice'=>$_TradedPrice));
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
	 * @return XiBondsTypeTradedPrice
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