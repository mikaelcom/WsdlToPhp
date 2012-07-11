<?php
/**
 * Class file for OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct extends OvhWsdlClass
{
	/**
	 * The userName
	 * @var string
	 */
	public $userName;
	/**
	 * The userPriv
	 * @var string
	 */
	public $userPriv;
	/**
	 * Constructor
	 * @param string userName
	 * @param string userPriv
	 * @return OvhTypeSqlpriveMysqlDatabaseUserPrivilegeStruct
	 */
	public function __construct($_userName = null,$_userPriv = null)
	{
		parent::__construct(array('userName'=>$_userName,'userPriv'=>$_userPriv));
	}
	/**
	 * Set userName
	 * @param string userName
	 * @return string
	 */
	public function setUserName($_userName)
	{
		return ($this->userName = $_userName);
	}
	/**
	 * Get userName
	 * @return string
	 */
	public function getUserName()
	{
		return $this->userName;
	}
	/**
	 * Set userPriv
	 * @param string userPriv
	 * @return string
	 */
	public function setUserPriv($_userPriv)
	{
		return ($this->userPriv = $_userPriv);
	}
	/**
	 * Get userPriv
	 * @return string
	 */
	public function getUserPriv()
	{
		return $this->userPriv;
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