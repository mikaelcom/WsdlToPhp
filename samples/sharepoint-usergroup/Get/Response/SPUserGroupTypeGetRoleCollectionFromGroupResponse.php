<?php
/**
 * Class file for SPUserGroupTypeGetRoleCollectionFromGroupResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetRoleCollectionFromGroupResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetRoleCollectionFromGroupResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetRoleCollectionFromGroupResult
	 * @var SPUserGroupTypeGetRoleCollectionFromGroupResult
	 */
	public $GetRoleCollectionFromGroupResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetRoleCollectionFromGroupResult GetRoleCollectionFromGroupResult
	 * @return SPUserGroupTypeGetRoleCollectionFromGroupResponse
	 */
	public function __construct($_GetRoleCollectionFromGroupResult = null)
	{
		parent::__construct(array('GetRoleCollectionFromGroupResult'=>$_GetRoleCollectionFromGroupResult));
	}
	/**
	 * Set GetRoleCollectionFromGroupResult
	 * @param GetRoleCollectionFromGroupResult GetRoleCollectionFromGroupResult
	 * @return GetRoleCollectionFromGroupResult
	 */
	public function setGetRoleCollectionFromGroupResult($_GetRoleCollectionFromGroupResult)
	{
		return ($this->GetRoleCollectionFromGroupResult = $_GetRoleCollectionFromGroupResult);
	}
	/**
	 * Get GetRoleCollectionFromGroupResult
	 * @return SPUserGroupTypeGetRoleCollectionFromGroupResult
	 */
	public function getGetRoleCollectionFromGroupResult()
	{
		return $this->GetRoleCollectionFromGroupResult;
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