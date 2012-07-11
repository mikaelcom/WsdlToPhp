<?php
/**
 * Class file for XiBondsRealTimeTypeYield
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeYield
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeYield extends XiBondsRealTimeTypeCommon
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
	 * The BondYield
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeBondYield
	 */
	public $BondYield;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsRealTimeTypeBondYield BondYield
	 * @return XiBondsRealTimeTypeYield
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_BondYield = null)
	{
		XiBondsRealTimeWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'BondYield'=>$_BondYield));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>