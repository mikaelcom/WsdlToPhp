<?php
/**
 * Class file for SPUserGroupTypeGetRoleInfoResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetRoleInfoResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetRoleInfoResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetRoleInfoResult
	 * @var SPUserGroupTypeGetRoleInfoResult
	 */
	public $GetRoleInfoResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetRoleInfoResult GetRoleInfoResult
	 * @return SPUserGroupTypeGetRoleInfoResponse
	 */
	public function __construct($_GetRoleInfoResult = null)
	{
		parent::__construct(array('GetRoleInfoResult'=>$_GetRoleInfoResult));
	}
	/**
	 * Set GetRoleInfoResult
	 * @param GetRoleInfoResult GetRoleInfoResult
	 * @return GetRoleInfoResult
	 */
	public function setGetRoleInfoResult($_GetRoleInfoResult)
	{
		return ($this->GetRoleInfoResult = $_GetRoleInfoResult);
	}
	/**
	 * Get GetRoleInfoResult
	 * @return SPUserGroupTypeGetRoleInfoResult
	 */
	public function getGetRoleInfoResult()
	{
		return $this->GetRoleInfoResult;
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