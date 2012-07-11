<?php
/**
 * Class file for OvhTypeSqlpriveMysqlDatabasePrivilegeListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlDatabasePrivilegeListResponse
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlDatabasePrivilegeListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSqlpriveMysqlDatabasePrivilegeStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSqlpriveMysqlDatabasePrivilegeStructType return
	 * @return OvhTypeSqlpriveMysqlDatabasePrivilegeListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSqlpriveMysqlDatabasePrivilegeStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSqlpriveMysqlDatabasePrivilegeStructType return
	 * @return MyArrayOfSqlpriveMysqlDatabasePrivilegeStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSqlpriveMysqlDatabasePrivilegeStructType
	 */
	public function getReturn()
	{
		return $this->return;
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