<?php
/**
 * Class file for SPUserGroupTypeGetGroupCollectionFromRoleResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetGroupCollectionFromRoleResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetGroupCollectionFromRoleResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetGroupCollectionFromRoleResult
	 * @var SPUserGroupTypeGetGroupCollectionFromRoleResult
	 */
	public $GetGroupCollectionFromRoleResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetGroupCollectionFromRoleResult GetGroupCollectionFromRoleResult
	 * @return SPUserGroupTypeGetGroupCollectionFromRoleResponse
	 */
	public function __construct($_GetGroupCollectionFromRoleResult = null)
	{
		parent::__construct(array('GetGroupCollectionFromRoleResult'=>$_GetGroupCollectionFromRoleResult));
	}
	/**
	 * Set GetGroupCollectionFromRoleResult
	 * @param GetGroupCollectionFromRoleResult GetGroupCollectionFromRoleResult
	 * @return GetGroupCollectionFromRoleResult
	 */
	public function setGetGroupCollectionFromRoleResult($_GetGroupCollectionFromRoleResult)
	{
		return ($this->GetGroupCollectionFromRoleResult = $_GetGroupCollectionFromRoleResult);
	}
	/**
	 * Get GetGroupCollectionFromRoleResult
	 * @return SPUserGroupTypeGetGroupCollectionFromRoleResult
	 */
	public function getGetGroupCollectionFromRoleResult()
	{
		return $this->GetGroupCollectionFromRoleResult;
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