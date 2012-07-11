<?php
/**
 * Class file for XiBondsTypeLastSale
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeLastSale
 * @date 08/07/2012
 */
class XiBondsTypeLastSale extends XiBondsTypeCommon
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
	 * The BondLastSale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondLastSale
	 */
	public $BondLastSale;
	/**
	 * Constructor
	 * @param XiBondsTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsTypeBondLastSale BondLastSale
	 * @return XiBondsTypeLastSale
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_BondLastSale = null)
	{
		XiBondsWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'BondLastSale'=>$_BondLastSale));
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
	 * @return XiBondsTypeBondLastSale
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