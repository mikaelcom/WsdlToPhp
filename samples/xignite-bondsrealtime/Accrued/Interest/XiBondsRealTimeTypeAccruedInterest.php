<?php
/**
 * Class file for XiBondsRealTimeTypeAccruedInterest
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeAccruedInterest
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeAccruedInterest extends XiBondsRealTimeTypeCommon
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
	 * The BondAccruedInterest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeBondAccruedInterest
	 */
	public $BondAccruedInterest;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsRealTimeTypeBondAccruedInterest BondAccruedInterest
	 * @return XiBondsRealTimeTypeAccruedInterest
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_BondAccruedInterest = null)
	{
		XiBondsRealTimeWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'BondAccruedInterest'=>$_BondAccruedInterest));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>