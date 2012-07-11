<?php
/**
 * Class file for XiBondMasterTypeArrayOfSinkingFundSchedule
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeArrayOfSinkingFundSchedule
 * @date 08/07/2012
 */
class XiBondMasterTypeArrayOfSinkingFundSchedule extends XiBondMasterWsdlClass
{
	/**
	 * The SinkingFundSchedule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondMasterTypeSinkingFundSchedule
	 */
	public $SinkingFundSchedule;
	/**
	 * Constructor
	 * @param XiBondMasterTypeSinkingFundSchedule SinkingFundSchedule
	 * @return XiBondMasterTypeArrayOfSinkingFundSchedule
	 */
	public function __construct($_SinkingFundSchedule = null)
	{
		parent::__construct(array('SinkingFundSchedule'=>$_SinkingFundSchedule));
	}
	/**
	 * Set SinkingFundSchedule
	 * @param SinkingFundSchedule SinkingFundSchedule
	 * @return SinkingFundSchedule
	 */
	public function setSinkingFundSchedule($_SinkingFundSchedule)
	{
		return ($this->SinkingFundSchedule = $_SinkingFundSchedule);
	}
	/**
	 * Get SinkingFundSchedule
	 * @return XiBondMasterTypeSinkingFundSchedule
	 */
	public function getSinkingFundSchedule()
	{
		return $this->SinkingFundSchedule;
	}
	/**
	 * Returns the current element
	 * @see XiBondMasterWsdlClass::current()
	 * @return XiBondMasterTypeSinkingFundSchedule
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondMasterWsdlClass::item()
	 * @param int
	 * @return XiBondMasterTypeSinkingFundSchedule
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::first()
	 * @return XiBondMasterTypeSinkingFundSchedule
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::last()
	 * @return XiBondMasterTypeSinkingFundSchedule
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondMasterTypeSinkingFundSchedule
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SinkingFundSchedule'
	 */
	public function getAttributeName()
	{
		return 'SinkingFundSchedule';
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