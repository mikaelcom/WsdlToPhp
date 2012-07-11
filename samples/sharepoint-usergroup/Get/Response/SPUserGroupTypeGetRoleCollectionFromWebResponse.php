<?php
/**
 * Class file for SPUserGroupTypeGetRoleCollectionFromWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetRoleCollectionFromWebResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetRoleCollectionFromWebResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetRoleCollectionFromWebResult
	 * @var SPUserGroupTypeGetRoleCollectionFromWebResult
	 */
	public $GetRoleCollectionFromWebResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetRoleCollectionFromWebResult GetRoleCollectionFromWebResult
	 * @return SPUserGroupTypeGetRoleCollectionFromWebResponse
	 */
	public function __construct($_GetRoleCollectionFromWebResult = null)
	{
		parent::__construct(array('GetRoleCollectionFromWebResult'=>$_GetRoleCollectionFromWebResult));
	}
	/**
	 * Set GetRoleCollectionFromWebResult
	 * @param GetRoleCollectionFromWebResult GetRoleCollectionFromWebResult
	 * @return GetRoleCollectionFromWebResult
	 */
	public function setGetRoleCollectionFromWebResult($_GetRoleCollectionFromWebResult)
	{
		return ($this->GetRoleCollectionFromWebResult = $_GetRoleCollectionFromWebResult);
	}
	/**
	 * Get GetRoleCollectionFromWebResult
	 * @return SPUserGroupTypeGetRoleCollectionFromWebResult
	 */
	public function getGetRoleCollectionFromWebResult()
	{
		return $this->GetRoleCollectionFromWebResult;
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