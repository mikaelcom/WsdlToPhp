<?php
/**
 * Class file for XiGlobalBondMasterTypeArrayOfInstrumentIdentifierBrief
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeArrayOfInstrumentIdentifierBrief
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeArrayOfInstrumentIdentifierBrief extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The InstrumentIdentifierBrief
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalBondMasterTypeInstrumentIdentifierBrief
	 */
	public $InstrumentIdentifierBrief;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @return XiGlobalBondMasterTypeArrayOfInstrumentIdentifierBrief
	 */
	public function __construct($_InstrumentIdentifierBrief = null)
	{
		parent::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief));
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
	 * @return XiGlobalBondMasterTypeInstrumentIdentifierBrief
	 */
	public function getInstrumentIdentifierBrief()
	{
		return $this->InstrumentIdentifierBrief;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalBondMasterWsdlClass::current()
	 * @return XiGlobalBondMasterTypeInstrumentIdentifierBrief
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalBondMasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalBondMasterTypeInstrumentIdentifierBrief
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::first()
	 * @return XiGlobalBondMasterTypeInstrumentIdentifierBrief
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::last()
	 * @return XiGlobalBondMasterTypeInstrumentIdentifierBrief
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalBondMasterTypeInstrumentIdentifierBrief
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'InstrumentIdentifierBrief'
	 */
	public function getAttributeName()
	{
		return 'InstrumentIdentifierBrief';
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