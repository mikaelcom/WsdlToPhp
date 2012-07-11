<?php
/**
 * Class file for OvhTypeSqlpriveMysqlDatabasePrivilegeStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlDatabasePrivilegeStruct
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlDatabasePrivilegeStruct extends OvhWsdlClass
{
	/**
	 * The databaseName
	 * @var string
	 */
	public $databaseName;
	/**
	 * The databaseUsers
	 * @var OvhTypeMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
	 */
	public $databaseUsers;
	/**
	 * Constructor
	 * @param string databaseName
	 * @param OvhTypeMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType databaseUsers
	 * @return OvhTypeSqlpriveMysqlDatabasePrivilegeStruct
	 */
	public function __construct($_databaseName = null,$_databaseUsers = null)
	{
		parent::__construct(array('databaseName'=>$_databaseName,'databaseUsers'=>new OvhTypeMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType($_databaseUsers)));
	}
	/**
	 * Set databaseName
	 * @param string databaseName
	 * @return string
	 */
	public function setDatabaseName($_databaseName)
	{
		return ($this->databaseName = $_databaseName);
	}
	/**
	 * Get databaseName
	 * @return string
	 */
	public function getDatabaseName()
	{
		return $this->databaseName;
	}
	/**
	 * Set databaseUsers
	 * @param MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType databaseUsers
	 * @return MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
	 */
	public function setDatabaseUsers($_databaseUsers)
	{
		return ($this->databaseUsers = $_databaseUsers);
	}
	/**
	 * Get databaseUsers
	 * @return OvhTypeMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
	 */
	public function getDatabaseUsers()
	{
		return $this->databaseUsers;
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