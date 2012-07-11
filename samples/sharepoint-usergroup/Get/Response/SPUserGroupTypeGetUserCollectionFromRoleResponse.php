<?php
/**
 * Class file for SPUserGroupTypeGetUserCollectionFromRoleResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetUserCollectionFromRoleResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetUserCollectionFromRoleResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetUserCollectionFromRoleResult
	 * @var SPUserGroupTypeGetUserCollectionFromRoleResult
	 */
	public $GetUserCollectionFromRoleResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetUserCollectionFromRoleResult GetUserCollectionFromRoleResult
	 * @return SPUserGroupTypeGetUserCollectionFromRoleResponse
	 */
	public function __construct($_GetUserCollectionFromRoleResult = null)
	{
		parent::__construct(array('GetUserCollectionFromRoleResult'=>$_GetUserCollectionFromRoleResult));
	}
	/**
	 * Set GetUserCollectionFromRoleResult
	 * @param GetUserCollectionFromRoleResult GetUserCollectionFromRoleResult
	 * @return GetUserCollectionFromRoleResult
	 */
	public function setGetUserCollectionFromRoleResult($_GetUserCollectionFromRoleResult)
	{
		return ($this->GetUserCollectionFromRoleResult = $_GetUserCollectionFromRoleResult);
	}
	/**
	 * Get GetUserCollectionFromRoleResult
	 * @return SPUserGroupTypeGetUserCollectionFromRoleResult
	 */
	public function getGetUserCollectionFromRoleResult()
	{
		return $this->GetUserCollectionFromRoleResult;
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