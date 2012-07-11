<?php
/**
 * Class file for XiBondsRealTimeTypeDurationAndConvexity
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeDurationAndConvexity
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeDurationAndConvexity extends XiBondsRealTimeTypeCommon
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
	 * Constructor
	 * @param XiBondsRealTimeTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsRealTimeTypeBondDuration BondDuration
	 * @param XiBondsRealTimeTypeBondConvexity BondConvexity
	 * @return XiBondsRealTimeTypeDurationAndConvexity
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_BondDuration = null,$_BondConvexity = null)
	{
		XiBondsRealTimeWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'BondDuration'=>$_BondDuration,'BondConvexity'=>$_BondConvexity));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>