<?php
/**
 * Class file for SPUserGroupTypeGetUserLoginFromEmailResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetUserLoginFromEmailResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetUserLoginFromEmailResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetUserLoginFromEmailResult
	 * @var SPUserGroupTypeGetUserLoginFromEmailResult
	 */
	public $GetUserLoginFromEmailResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetUserLoginFromEmailResult GetUserLoginFromEmailResult
	 * @return SPUserGroupTypeGetUserLoginFromEmailResponse
	 */
	public function __construct($_GetUserLoginFromEmailResult = null)
	{
		parent::__construct(array('GetUserLoginFromEmailResult'=>$_GetUserLoginFromEmailResult));
	}
	/**
	 * Set GetUserLoginFromEmailResult
	 * @param GetUserLoginFromEmailResult GetUserLoginFromEmailResult
	 * @return GetUserLoginFromEmailResult
	 */
	public function setGetUserLoginFromEmailResult($_GetUserLoginFromEmailResult)
	{
		return ($this->GetUserLoginFromEmailResult = $_GetUserLoginFromEmailResult);
	}
	/**
	 * Get GetUserLoginFromEmailResult
	 * @return SPUserGroupTypeGetUserLoginFromEmailResult
	 */
	public function getGetUserLoginFromEmailResult()
	{
		return $this->GetUserLoginFromEmailResult;
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