<?php
/**
 * Class file for SPUserGroupTypeGetUserCollectionFromGroupResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetUserCollectionFromGroupResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetUserCollectionFromGroupResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetUserCollectionFromGroupResult
	 * @var SPUserGroupTypeGetUserCollectionFromGroupResult
	 */
	public $GetUserCollectionFromGroupResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetUserCollectionFromGroupResult GetUserCollectionFromGroupResult
	 * @return SPUserGroupTypeGetUserCollectionFromGroupResponse
	 */
	public function __construct($_GetUserCollectionFromGroupResult = null)
	{
		parent::__construct(array('GetUserCollectionFromGroupResult'=>$_GetUserCollectionFromGroupResult));
	}
	/**
	 * Set GetUserCollectionFromGroupResult
	 * @param GetUserCollectionFromGroupResult GetUserCollectionFromGroupResult
	 * @return GetUserCollectionFromGroupResult
	 */
	public function setGetUserCollectionFromGroupResult($_GetUserCollectionFromGroupResult)
	{
		return ($this->GetUserCollectionFromGroupResult = $_GetUserCollectionFromGroupResult);
	}
	/**
	 * Get GetUserCollectionFromGroupResult
	 * @return SPUserGroupTypeGetUserCollectionFromGroupResult
	 */
	public function getGetUserCollectionFromGroupResult()
	{
		return $this->GetUserCollectionFromGroupResult;
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