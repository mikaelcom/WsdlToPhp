<?php
/**
 * Class file for SPUserGroupTypeGetUserCollectionResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetUserCollectionResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetUserCollectionResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetUserCollectionResult
	 * @var SPUserGroupTypeGetUserCollectionResult
	 */
	public $GetUserCollectionResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetUserCollectionResult GetUserCollectionResult
	 * @return SPUserGroupTypeGetUserCollectionResponse
	 */
	public function __construct($_GetUserCollectionResult = null)
	{
		parent::__construct(array('GetUserCollectionResult'=>$_GetUserCollectionResult));
	}
	/**
	 * Set GetUserCollectionResult
	 * @param GetUserCollectionResult GetUserCollectionResult
	 * @return GetUserCollectionResult
	 */
	public function setGetUserCollectionResult($_GetUserCollectionResult)
	{
		return ($this->GetUserCollectionResult = $_GetUserCollectionResult);
	}
	/**
	 * Get GetUserCollectionResult
	 * @return SPUserGroupTypeGetUserCollectionResult
	 */
	public function getGetUserCollectionResult()
	{
		return $this->GetUserCollectionResult;
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