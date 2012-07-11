<?php
/**
 * Class file for XiBondsRealTimeTypeLastSale
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeLastSale
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeLastSale extends XiBondsRealTimeTypeCommon
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
	 * The BondLastSale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeBondLastSale
	 */
	public $BondLastSale;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsRealTimeTypeBondLastSale BondLastSale
	 * @return XiBondsRealTimeTypeLastSale
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_BondLastSale = null)
	{
		XiBondsRealTimeWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'BondLastSale'=>$_BondLastSale));
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
	 * Set BondLastSale
	 * @param BondLastSale BondLastSale
	 * @return BondLastSale
	 */
	public function setBondLastSale($_BondLastSale)
	{
		return ($this->BondLastSale = $_BondLastSale);
	}
	/**
	 * Get BondLastSale
	 * @return XiBondsRealTimeTypeBondLastSale
	 */
	public function getBondLastSale()
	{
		return $this->BondLastSale;
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