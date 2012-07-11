<?php
/**
 * Class file for SPUserGroupTypeAddUserToRole
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeAddUserToRole
 * @date 06/07/2012
 */
class SPUserGroupTypeAddUserToRole extends SPUserGroupWsdlClass
{
	/**
	 * The roleName
	 * @var string
	 */
	public $roleName;
	/**
	 * The userName
	 * @var string
	 */
	public $userName;
	/**
	 * The userLoginName
	 * @var string
	 */
	public $userLoginName;
	/**
	 * The userEmail
	 * @var string
	 */
	public $userEmail;
	/**
	 * The userNotes
	 * @var string
	 */
	public $userNotes;
	/**
	 * Constructor
	 * @param string roleName
	 * @param string userName
	 * @param string userLoginName
	 * @param string userEmail
	 * @param string userNotes
	 * @return SPUserGroupTypeAddUserToRole
	 */
	public function __construct($_roleName = null,$_userName = null,$_userLoginName = null,$_userEmail = null,$_userNotes = null)
	{
		parent::__construct(array('roleName'=>$_roleName,'userName'=>$_userName,'userLoginName'=>$_userLoginName,'userEmail'=>$_userEmail,'userNotes'=>$_userNotes));
	}
	/**
	 * Set roleName
	 * @param string roleName
	 * @return string
	 */
	public function setRoleName($_roleName)
	{
		return ($this->roleName = $_roleName);
	}
	/**
	 * Get roleName
	 * @return string
	 */
	public function getRoleName()
	{
		return $this->roleName;
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
	 * Set userLoginName
	 * @param string userLoginName
	 * @return string
	 */
	public function setUserLoginName($_userLoginName)
	{
		return ($this->userLoginName = $_userLoginName);
	}
	/**
	 * Get userLoginName
	 * @return string
	 */
	public function getUserLoginName()
	{
		return $this->userLoginName;
	}
	/**
	 * Set userEmail
	 * @param string userEmail
	 * @return string
	 */
	public function setUserEmail($_userEmail)
	{
		return ($this->userEmail = $_userEmail);
	}
	/**
	 * Get userEmail
	 * @return string
	 */
	public function getUserEmail()
	{
		return $this->userEmail;
	}
	/**
	 * Set userNotes
	 * @param string userNotes
	 * @return string
	 */
	public function setUserNotes($_userNotes)
	{
		return ($this->userNotes = $_userNotes);
	}
	/**
	 * Get userNotes
	 * @return string
	 */
	public function getUserNotes()
	{
		return $this->userNotes;
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