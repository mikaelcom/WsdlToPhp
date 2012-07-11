<?php
/**
 * Class file for XiBondsTypeBondCalculation
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeBondCalculation
 * @date 08/07/2012
 */
class XiBondsTypeBondCalculation extends XiBondsTypeCommon
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
	 * The BondYield
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondYield
	 */
	public $BondYield;
	/**
	 * The BondAccruedInterest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondAccruedInterest
	 */
	public $BondAccruedInterest;
	/**
	 * The BondDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondDuration
	 */
	public $BondDuration;
	/**
	 * The BondConvexity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondConvexity
	 */
	public $BondConvexity;
	/**
	 * The BondOptionAdjustedSpread
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondOptionAdjustedSpread
	 */
	public $BondOptionAdjustedSpread;
	/**
	 * Constructor
	 * @param XiBondsTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsTypeTradedPrice TradedPrice
	 * @param XiBondsTypeBondYield BondYield
	 * @param XiBondsTypeBondAccruedInterest BondAccruedInterest
	 * @param XiBondsTypeBondDuration BondDuration
	 * @param XiBondsTypeBondConvexity BondConvexity
	 * @param XiBondsTypeBondOptionAdjustedSpread BondOptionAdjustedSpread
	 * @return XiBondsTypeBondCalculation
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_TradedPrice = null,$_BondYield = null,$_BondAccruedInterest = null,$_BondDuration = null,$_BondConvexity = null,$_BondOptionAdjustedSpread = null)
	{
		XiBondsWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'TradedPrice'=>$_TradedPrice,'BondYield'=>$_BondYield,'BondAccruedInterest'=>$_BondAccruedInterest,'BondDuration'=>$_BondDuration,'BondConvexity'=>$_BondConvexity,'BondOptionAdjustedSpread'=>$_BondOptionAdjustedSpread));
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
	 * @return XiBondsTypeBondYield
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
	 * @return XiBondsTypeBondAccruedInterest
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
	 * @return XiBondsTypeBondDuration
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
	 * @return XiBondsTypeBondConvexity
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
	 * @return XiBondsTypeBondOptionAdjustedSpread
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