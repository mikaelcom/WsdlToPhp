<?php
/**
 * Class file for SPUserGroupTypeGetGroupInfoResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetGroupInfoResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetGroupInfoResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetGroupInfoResult
	 * @var SPUserGroupTypeGetGroupInfoResult
	 */
	public $GetGroupInfoResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetGroupInfoResult GetGroupInfoResult
	 * @return SPUserGroupTypeGetGroupInfoResponse
	 */
	public function __construct($_GetGroupInfoResult = null)
	{
		parent::__construct(array('GetGroupInfoResult'=>$_GetGroupInfoResult));
	}
	/**
	 * Set GetGroupInfoResult
	 * @param GetGroupInfoResult GetGroupInfoResult
	 * @return GetGroupInfoResult
	 */
	public function setGetGroupInfoResult($_GetGroupInfoResult)
	{
		return ($this->GetGroupInfoResult = $_GetGroupInfoResult);
	}
	/**
	 * Get GetGroupInfoResult
	 * @return SPUserGroupTypeGetGroupInfoResult
	 */
	public function getGetGroupInfoResult()
	{
		return $this->GetGroupInfoResult;
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