<?php
/**
 * Class file for OvhTypeMyArrayOfSqlpriveCronStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfSqlpriveCronStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfSqlpriveCronStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeSqlpriveCronStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeSqlpriveCronStruct item
	 * @return OvhTypeMyArrayOfSqlpriveCronStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param sqlpriveCronStruct item
	 * @return sqlpriveCronStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypesqlpriveCronStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeSqlpriveCronStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeSqlpriveCronStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeSqlpriveCronStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeSqlpriveCronStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeSqlpriveCronStruct
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'item'
	 */
	public function getAttributeName()
	{
		return 'item';
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