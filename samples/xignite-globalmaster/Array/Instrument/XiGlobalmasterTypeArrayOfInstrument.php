<?php
/**
 * Class file for XiGlobalmasterTypeArrayOfInstrument
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeArrayOfInstrument
 * @date 08/07/2012
 */
class XiGlobalmasterTypeArrayOfInstrument extends XiGlobalmasterWsdlClass
{
	/**
	 * The Instrument
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalmasterTypeInstrument
	 */
	public $Instrument;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeInstrument Instrument
	 * @return XiGlobalmasterTypeArrayOfInstrument
	 */
	public function __construct($_Instrument = null)
	{
		parent::__construct(array('Instrument'=>$_Instrument));
	}
	/**
	 * Set Instrument
	 * @param Instrument Instrument
	 * @return Instrument
	 */
	public function setInstrument($_Instrument)
	{
		return ($this->Instrument = $_Instrument);
	}
	/**
	 * Get Instrument
	 * @return XiGlobalmasterTypeInstrument
	 */
	public function getInstrument()
	{
		return $this->Instrument;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalmasterWsdlClass::current()
	 * @return XiGlobalmasterTypeInstrument
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalmasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalmasterTypeInstrument
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::first()
	 * @return XiGlobalmasterTypeInstrument
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::last()
	 * @return XiGlobalmasterTypeInstrument
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalmasterTypeInstrument
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Instrument'
	 */
	public function getAttributeName()
	{
		return 'Instrument';
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