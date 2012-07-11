<?php
/**
 * Class file for OvhTypeMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct item
	 * @return OvhTypeMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param sqlpriveMysqlDatabaseUserPrivilegeStruct item
	 * @return sqlpriveMysqlDatabaseUserPrivilegeStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypesqlpriveMysqlDatabaseUserPrivilegeStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct
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