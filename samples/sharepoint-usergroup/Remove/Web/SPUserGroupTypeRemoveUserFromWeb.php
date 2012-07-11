<?php
/**
 * Class file for SPUserGroupTypeRemoveUserFromWeb
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeRemoveUserFromWeb
 * @date 06/07/2012
 */
class SPUserGroupTypeRemoveUserFromWeb extends SPUserGroupWsdlClass
{
	/**
	 * The userLoginName
	 * @var string
	 */
	public $userLoginName;
	/**
	 * Constructor
	 * @param string userLoginName
	 * @return SPUserGroupTypeRemoveUserFromWeb
	 */
	public function __construct($_userLoginName = null)
	{
		parent::__construct(array('userLoginName'=>$_userLoginName));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>