<?php
/**
 * Class file for XiSecurityTypeArrayOfRecord
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeArrayOfRecord
 * @date 08/07/2012
 */
class XiSecurityTypeArrayOfRecord extends XiSecurityWsdlClass
{
	/**
	 * The Record
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiSecurityTypeRecord
	 */
	public $Record;
	/**
	 * Constructor
	 * @param XiSecurityTypeRecord Record
	 * @return XiSecurityTypeArrayOfRecord
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
	 * @return XiSecurityTypeRecord
	 */
	public function getRecord()
	{
		return $this->Record;
	}
	/**
	 * Returns the current element
	 * @see XiSecurityWsdlClass::current()
	 * @return XiSecurityTypeRecord
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiSecurityWsdlClass::item()
	 * @param int
	 * @return XiSecurityTypeRecord
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::first()
	 * @return XiSecurityTypeRecord
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::last()
	 * @return XiSecurityTypeRecord
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::offsetGet()
	 * @param int
	 * @return XiSecurityTypeRecord
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