<?php
/**
 * Class file for SPUserGroupTypeGetRoleCollectionResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetRoleCollectionResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetRoleCollectionResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetRoleCollectionResult
	 * @var SPUserGroupTypeGetRoleCollectionResult
	 */
	public $GetRoleCollectionResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetRoleCollectionResult GetRoleCollectionResult
	 * @return SPUserGroupTypeGetRoleCollectionResponse
	 */
	public function __construct($_GetRoleCollectionResult = null)
	{
		parent::__construct(array('GetRoleCollectionResult'=>$_GetRoleCollectionResult));
	}
	/**
	 * Set GetRoleCollectionResult
	 * @param GetRoleCollectionResult GetRoleCollectionResult
	 * @return GetRoleCollectionResult
	 */
	public function setGetRoleCollectionResult($_GetRoleCollectionResult)
	{
		return ($this->GetRoleCollectionResult = $_GetRoleCollectionResult);
	}
	/**
	 * Get GetRoleCollectionResult
	 * @return SPUserGroupTypeGetRoleCollectionResult
	 */
	public function getGetRoleCollectionResult()
	{
		return $this->GetRoleCollectionResult;
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