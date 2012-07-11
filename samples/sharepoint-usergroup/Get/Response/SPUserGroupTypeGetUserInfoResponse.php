<?php
/**
 * Class file for SPUserGroupTypeGetUserInfoResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetUserInfoResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetUserInfoResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetUserInfoResult
	 * @var SPUserGroupTypeGetUserInfoResult
	 */
	public $GetUserInfoResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetUserInfoResult GetUserInfoResult
	 * @return SPUserGroupTypeGetUserInfoResponse
	 */
	public function __construct($_GetUserInfoResult = null)
	{
		parent::__construct(array('GetUserInfoResult'=>$_GetUserInfoResult));
	}
	/**
	 * Set GetUserInfoResult
	 * @param GetUserInfoResult GetUserInfoResult
	 * @return GetUserInfoResult
	 */
	public function setGetUserInfoResult($_GetUserInfoResult)
	{
		return ($this->GetUserInfoResult = $_GetUserInfoResult);
	}
	/**
	 * Get GetUserInfoResult
	 * @return SPUserGroupTypeGetUserInfoResult
	 */
	public function getGetUserInfoResult()
	{
		return $this->GetUserInfoResult;
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