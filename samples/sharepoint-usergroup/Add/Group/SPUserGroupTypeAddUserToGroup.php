<?php
/**
 * Class file for SPUserGroupTypeAddUserToGroup
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeAddUserToGroup
 * @date 06/07/2012
 */
class SPUserGroupTypeAddUserToGroup extends SPUserGroupWsdlClass
{
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
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
	 * @param string groupName
	 * @param string userName
	 * @param string userLoginName
	 * @param string userEmail
	 * @param string userNotes
	 * @return SPUserGroupTypeAddUserToGroup
	 */
	public function __construct($_groupName = null,$_userName = null,$_userLoginName = null,$_userEmail = null,$_userNotes = null)
	{
		parent::__construct(array('groupName'=>$_groupName,'userName'=>$_userName,'userLoginName'=>$_userLoginName,'userEmail'=>$_userEmail,'userNotes'=>$_userNotes));
	}
	/**
	 * Set groupName
	 * @param string groupName
	 * @return string
	 */
	public function setGroupName($_groupName)
	{
		return ($this->groupName = $_groupName);
	}
	/**
	 * Get groupName
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->groupName;
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