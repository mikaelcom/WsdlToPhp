<?php
/**
 * Class file for XiHousingTypeArrayOfRecord
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeArrayOfRecord
 * @date 08/07/2012
 */
class XiHousingTypeArrayOfRecord extends XiHousingWsdlClass
{
	/**
	 * The Record
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHousingTypeRecord
	 */
	public $Record;
	/**
	 * Constructor
	 * @param XiHousingTypeRecord Record
	 * @return XiHousingTypeArrayOfRecord
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
	 * @return XiHousingTypeRecord
	 */
	public function getRecord()
	{
		return $this->Record;
	}
	/**
	 * Returns the current element
	 * @see XiHousingWsdlClass::current()
	 * @return XiHousingTypeRecord
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHousingWsdlClass::item()
	 * @param int
	 * @return XiHousingTypeRecord
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::first()
	 * @return XiHousingTypeRecord
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::last()
	 * @return XiHousingTypeRecord
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::offsetGet()
	 * @param int
	 * @return XiHousingTypeRecord
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