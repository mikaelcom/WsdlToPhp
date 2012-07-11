<?php
/**
 * Class file for OvhTypeMyArrayOfSqlpriveMysqlProcessStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfSqlpriveMysqlProcessStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfSqlpriveMysqlProcessStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeSqlpriveMysqlProcessStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeSqlpriveMysqlProcessStruct item
	 * @return OvhTypeMyArrayOfSqlpriveMysqlProcessStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param sqlpriveMysqlProcessStruct item
	 * @return sqlpriveMysqlProcessStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypesqlpriveMysqlProcessStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeSqlpriveMysqlProcessStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeSqlpriveMysqlProcessStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeSqlpriveMysqlProcessStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeSqlpriveMysqlProcessStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeSqlpriveMysqlProcessStruct
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