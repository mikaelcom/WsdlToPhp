<?php
/**
 * Class file for XiBondsTypeAccruedInterest
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeAccruedInterest
 * @date 08/07/2012
 */
class XiBondsTypeAccruedInterest extends XiBondsTypeCommon
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
	 * The BondAccruedInterest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondAccruedInterest
	 */
	public $BondAccruedInterest;
	/**
	 * Constructor
	 * @param XiBondsTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsTypeBondAccruedInterest BondAccruedInterest
	 * @return XiBondsTypeAccruedInterest
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_BondAccruedInterest = null)
	{
		XiBondsWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'BondAccruedInterest'=>$_BondAccruedInterest));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>