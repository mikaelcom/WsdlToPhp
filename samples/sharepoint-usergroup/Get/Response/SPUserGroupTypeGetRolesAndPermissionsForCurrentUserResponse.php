<?php
/**
 * Class file for SPUserGroupTypeGetRolesAndPermissionsForCurrentUserResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetRolesAndPermissionsForCurrentUserResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetRolesAndPermissionsForCurrentUserResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetRolesAndPermissionsForCurrentUserResult
	 * @var SPUserGroupTypeGetRolesAndPermissionsForCurrentUserResult
	 */
	public $GetRolesAndPermissionsForCurrentUserResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetRolesAndPermissionsForCurrentUserResult GetRolesAndPermissionsForCurrentUserResult
	 * @return SPUserGroupTypeGetRolesAndPermissionsForCurrentUserResponse
	 */
	public function __construct($_GetRolesAndPermissionsForCurrentUserResult = null)
	{
		parent::__construct(array('GetRolesAndPermissionsForCurrentUserResult'=>$_GetRolesAndPermissionsForCurrentUserResult));
	}
	/**
	 * Set GetRolesAndPermissionsForCurrentUserResult
	 * @param GetRolesAndPermissionsForCurrentUserResult GetRolesAndPermissionsForCurrentUserResult
	 * @return GetRolesAndPermissionsForCurrentUserResult
	 */
	public function setGetRolesAndPermissionsForCurrentUserResult($_GetRolesAndPermissionsForCurrentUserResult)
	{
		return ($this->GetRolesAndPermissionsForCurrentUserResult = $_GetRolesAndPermissionsForCurrentUserResult);
	}
	/**
	 * Get GetRolesAndPermissionsForCurrentUserResult
	 * @return SPUserGroupTypeGetRolesAndPermissionsForCurrentUserResult
	 */
	public function getGetRolesAndPermissionsForCurrentUserResult()
	{
		return $this->GetRolesAndPermissionsForCurrentUserResult;
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