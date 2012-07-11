<?php
/**
 * Class file for SPUserGroupTypeUpdateUserInfo
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeUpdateUserInfo
 * @date 06/07/2012
 */
class SPUserGroupTypeUpdateUserInfo extends SPUserGroupWsdlClass
{
	/**
	 * The userLoginName
	 * @var string
	 */
	public $userLoginName;
	/**
	 * The userName
	 * @var string
	 */
	public $userName;
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
	 * @param string userLoginName
	 * @param string userName
	 * @param string userEmail
	 * @param string userNotes
	 * @return SPUserGroupTypeUpdateUserInfo
	 */
	public function __construct($_userLoginName = null,$_userName = null,$_userEmail = null,$_userNotes = null)
	{
		parent::__construct(array('userLoginName'=>$_userLoginName,'userName'=>$_userName,'userEmail'=>$_userEmail,'userNotes'=>$_userNotes));
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