<?php
/**
 * Class file for XiGlobalmasterTypeArrayOfRecord
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeArrayOfRecord
 * @date 08/07/2012
 */
class XiGlobalmasterTypeArrayOfRecord extends XiGlobalmasterWsdlClass
{
	/**
	 * The Record
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalmasterTypeRecord
	 */
	public $Record;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeRecord Record
	 * @return XiGlobalmasterTypeArrayOfRecord
	 */
	public function __construct($_Record = null)
	{
		parent::__construct(array('Record'=>$_Record));
	}
	/**
	 * Set Record
	 * @param Record Record
	 * @return Record
	 */
	public function setRecord($_Record)
	{
		return ($this->Record = $_Record);
	}
	/**
	 * Get Record
	 * @return XiGlobalmasterTypeRecord
	 */
	public function getRecord()
	{
		return $this->Record;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalmasterWsdlClass::current()
	 * @return XiGlobalmasterTypeRecord
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalmasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalmasterTypeRecord
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::first()
	 * @return XiGlobalmasterTypeRecord
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::last()
	 * @return XiGlobalmasterTypeRecord
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalmasterTypeRecord
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Record'
	 */
	public function getAttributeName()
	{
		return 'Record';
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