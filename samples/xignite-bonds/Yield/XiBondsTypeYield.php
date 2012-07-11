<?php
/**
 * Class file for XiBondsTypeYield
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeYield
 * @date 08/07/2012
 */
class XiBondsTypeYield extends XiBondsTypeCommon
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
	 * The BondYield
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondYield
	 */
	public $BondYield;
	/**
	 * Constructor
	 * @param XiBondsTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsTypeBondYield BondYield
	 * @return XiBondsTypeYield
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_BondYield = null)
	{
		XiBondsWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'BondYield'=>$_BondYield));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>