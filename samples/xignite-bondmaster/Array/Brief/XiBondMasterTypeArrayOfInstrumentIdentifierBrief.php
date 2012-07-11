<?php
/**
 * Class file for XiBondMasterTypeArrayOfInstrumentIdentifierBrief
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeArrayOfInstrumentIdentifierBrief
 * @date 08/07/2012
 */
class XiBondMasterTypeArrayOfInstrumentIdentifierBrief extends XiBondMasterWsdlClass
{
	/**
	 * The InstrumentIdentifierBrief
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondMasterTypeInstrumentIdentifierBrief
	 */
	public $InstrumentIdentifierBrief;
	/**
	 * Constructor
	 * @param XiBondMasterTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @return XiBondMasterTypeArrayOfInstrumentIdentifierBrief
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
	 * @return XiBondMasterTypeInstrumentIdentifierBrief
	 */
	public function getInstrumentIdentifierBrief()
	{
		return $this->InstrumentIdentifierBrief;
	}
	/**
	 * Returns the current element
	 * @see XiBondMasterWsdlClass::current()
	 * @return XiBondMasterTypeInstrumentIdentifierBrief
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondMasterWsdlClass::item()
	 * @param int
	 * @return XiBondMasterTypeInstrumentIdentifierBrief
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::first()
	 * @return XiBondMasterTypeInstrumentIdentifierBrief
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::last()
	 * @return XiBondMasterTypeInstrumentIdentifierBrief
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondMasterTypeInstrumentIdentifierBrief
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