<?php
/**
 * Class file for XiBondsRealTimeTypeBondCalculation
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeBondCalculation
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeBondCalculation extends XiBondsRealTimeTypeCommon
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
	 * The BondYield
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeBondYield
	 */
	public $BondYield;
	/**
	 * The BondAccruedInterest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeBondAccruedInterest
	 */
	public $BondAccruedInterest;
	/**
	 * The BondDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeBondDuration
	 */
	public $BondDuration;
	/**
	 * The BondConvexity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeBondConvexity
	 */
	public $BondConvexity;
	/**
	 * The BondOptionAdjustedSpread
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeBondOptionAdjustedSpread
	 */
	public $BondOptionAdjustedSpread;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsRealTimeTypeTradedPrice TradedPrice
	 * @param XiBondsRealTimeTypeBondYield BondYield
	 * @param XiBondsRealTimeTypeBondAccruedInterest BondAccruedInterest
	 * @param XiBondsRealTimeTypeBondDuration BondDuration
	 * @param XiBondsRealTimeTypeBondConvexity BondConvexity
	 * @param XiBondsRealTimeTypeBondOptionAdjustedSpread BondOptionAdjustedSpread
	 * @return XiBondsRealTimeTypeBondCalculation
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_TradedPrice = null,$_BondYield = null,$_BondAccruedInterest = null,$_BondDuration = null,$_BondConvexity = null,$_BondOptionAdjustedSpread = null)
	{
		XiBondsRealTimeWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'TradedPrice'=>$_TradedPrice,'BondYield'=>$_BondYield,'BondAccruedInterest'=>$_BondAccruedInterest,'BondDuration'=>$_BondDuration,'BondConvexity'=>$_BondConvexity,'BondOptionAdjustedSpread'=>$_BondOptionAdjustedSpread));
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
	 * Set BondYield
	 * @param BondYield BondYield
	 * @return BondYield
	 */
	public function setBondYield($_BondYield)
	{
		return ($this->BondYield = $_BondYield);
	}
	/**
	 * Get BondYield
	 * @return XiBondsRealTimeTypeBondYield
	 */
	public function getBondYield()
	{
		return $this->BondYield;
	}
	/**
	 * Set BondAccruedInterest
	 * @param BondAccruedInterest BondAccruedInterest
	 * @return BondAccruedInterest
	 */
	public function setBondAccruedInterest($_BondAccruedInterest)
	{
		return ($this->BondAccruedInterest = $_BondAccruedInterest);
	}
	/**
	 * Get BondAccruedInterest
	 * @return XiBondsRealTimeTypeBondAccruedInterest
	 */
	public function getBondAccruedInterest()
	{
		return $this->BondAccruedInterest;
	}
	/**
	 * Set BondDuration
	 * @param BondDuration BondDuration
	 * @return BondDuration
	 */
	public function setBondDuration($_BondDuration)
	{
		return ($this->BondDuration = $_BondDuration);
	}
	/**
	 * Get BondDuration
	 * @return XiBondsRealTimeTypeBondDuration
	 */
	public function getBondDuration()
	{
		return $this->BondDuration;
	}
	/**
	 * Set BondConvexity
	 * @param BondConvexity BondConvexity
	 * @return BondConvexity
	 */
	public function setBondConvexity($_BondConvexity)
	{
		return ($this->BondConvexity = $_BondConvexity);
	}
	/**
	 * Get BondConvexity
	 * @return XiBondsRealTimeTypeBondConvexity
	 */
	public function getBondConvexity()
	{
		return $this->BondConvexity;
	}
	/**
	 * Set BondOptionAdjustedSpread
	 * @param BondOptionAdjustedSpread BondOptionAdjustedSpread
	 * @return BondOptionAdjustedSpread
	 */
	public function setBondOptionAdjustedSpread($_BondOptionAdjustedSpread)
	{
		return ($this->BondOptionAdjustedSpread = $_BondOptionAdjustedSpread);
	}
	/**
	 * Get BondOptionAdjustedSpread
	 * @return XiBondsRealTimeTypeBondOptionAdjustedSpread
	 */
	public function getBondOptionAdjustedSpread()
	{
		return $this->BondOptionAdjustedSpread;
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