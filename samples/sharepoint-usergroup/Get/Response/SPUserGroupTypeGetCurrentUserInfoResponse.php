<?php
/**
 * Class file for SPUserGroupTypeGetCurrentUserInfoResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetCurrentUserInfoResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetCurrentUserInfoResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetCurrentUserInfoResult
	 * @var SPUserGroupTypeGetCurrentUserInfoResult
	 */
	public $GetCurrentUserInfoResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetCurrentUserInfoResult GetCurrentUserInfoResult
	 * @return SPUserGroupTypeGetCurrentUserInfoResponse
	 */
	public function __construct($_GetCurrentUserInfoResult = null)
	{
		parent::__construct(array('GetCurrentUserInfoResult'=>$_GetCurrentUserInfoResult));
	}
	/**
	 * Set GetCurrentUserInfoResult
	 * @param GetCurrentUserInfoResult GetCurrentUserInfoResult
	 * @return GetCurrentUserInfoResult
	 */
	public function setGetCurrentUserInfoResult($_GetCurrentUserInfoResult)
	{
		return ($this->GetCurrentUserInfoResult = $_GetCurrentUserInfoResult);
	}
	/**
	 * Get GetCurrentUserInfoResult
	 * @return SPUserGroupTypeGetCurrentUserInfoResult
	 */
	public function getGetCurrentUserInfoResult()
	{
		return $this->GetCurrentUserInfoResult;
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