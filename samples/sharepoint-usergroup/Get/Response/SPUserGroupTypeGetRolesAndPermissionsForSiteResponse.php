<?php
/**
 * Class file for SPUserGroupTypeGetRolesAndPermissionsForSiteResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetRolesAndPermissionsForSiteResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetRolesAndPermissionsForSiteResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetRolesAndPermissionsForSiteResult
	 * @var SPUserGroupTypeGetRolesAndPermissionsForSiteResult
	 */
	public $GetRolesAndPermissionsForSiteResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetRolesAndPermissionsForSiteResult GetRolesAndPermissionsForSiteResult
	 * @return SPUserGroupTypeGetRolesAndPermissionsForSiteResponse
	 */
	public function __construct($_GetRolesAndPermissionsForSiteResult = null)
	{
		parent::__construct(array('GetRolesAndPermissionsForSiteResult'=>$_GetRolesAndPermissionsForSiteResult));
	}
	/**
	 * Set GetRolesAndPermissionsForSiteResult
	 * @param GetRolesAndPermissionsForSiteResult GetRolesAndPermissionsForSiteResult
	 * @return GetRolesAndPermissionsForSiteResult
	 */
	public function setGetRolesAndPermissionsForSiteResult($_GetRolesAndPermissionsForSiteResult)
	{
		return ($this->GetRolesAndPermissionsForSiteResult = $_GetRolesAndPermissionsForSiteResult);
	}
	/**
	 * Get GetRolesAndPermissionsForSiteResult
	 * @return SPUserGroupTypeGetRolesAndPermissionsForSiteResult
	 */
	public function getGetRolesAndPermissionsForSiteResult()
	{
		return $this->GetRolesAndPermissionsForSiteResult;
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