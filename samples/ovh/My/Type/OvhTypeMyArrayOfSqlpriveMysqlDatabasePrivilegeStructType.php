<?php
/**
 * Class file for OvhTypeMyArrayOfSqlpriveMysqlDatabasePrivilegeStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfSqlpriveMysqlDatabasePrivilegeStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfSqlpriveMysqlDatabasePrivilegeStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeSqlpriveMysqlDatabasePrivilegeStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeSqlpriveMysqlDatabasePrivilegeStruct item
	 * @return OvhTypeMyArrayOfSqlpriveMysqlDatabasePrivilegeStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param sqlpriveMysqlDatabasePrivilegeStruct item
	 * @return sqlpriveMysqlDatabasePrivilegeStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypesqlpriveMysqlDatabasePrivilegeStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeSqlpriveMysqlDatabasePrivilegeStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeSqlpriveMysqlDatabasePrivilegeStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeSqlpriveMysqlDatabasePrivilegeStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeSqlpriveMysqlDatabasePrivilegeStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeSqlpriveMysqlDatabasePrivilegeStruct
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