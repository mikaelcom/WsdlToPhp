<?php
/**
 * Class file for SPUserGroupTypeGetRoleCollectionFromUserResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetRoleCollectionFromUserResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetRoleCollectionFromUserResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetRoleCollectionFromUserResult
	 * @var SPUserGroupTypeGetRoleCollectionFromUserResult
	 */
	public $GetRoleCollectionFromUserResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetRoleCollectionFromUserResult GetRoleCollectionFromUserResult
	 * @return SPUserGroupTypeGetRoleCollectionFromUserResponse
	 */
	public function __construct($_GetRoleCollectionFromUserResult = null)
	{
		parent::__construct(array('GetRoleCollectionFromUserResult'=>$_GetRoleCollectionFromUserResult));
	}
	/**
	 * Set GetRoleCollectionFromUserResult
	 * @param GetRoleCollectionFromUserResult GetRoleCollectionFromUserResult
	 * @return GetRoleCollectionFromUserResult
	 */
	public function setGetRoleCollectionFromUserResult($_GetRoleCollectionFromUserResult)
	{
		return ($this->GetRoleCollectionFromUserResult = $_GetRoleCollectionFromUserResult);
	}
	/**
	 * Get GetRoleCollectionFromUserResult
	 * @return SPUserGroupTypeGetRoleCollectionFromUserResult
	 */
	public function getGetRoleCollectionFromUserResult()
	{
		return $this->GetRoleCollectionFromUserResult;
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