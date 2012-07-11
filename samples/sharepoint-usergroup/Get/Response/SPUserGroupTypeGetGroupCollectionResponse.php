<?php
/**
 * Class file for SPUserGroupTypeGetGroupCollectionResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetGroupCollectionResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetGroupCollectionResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetGroupCollectionResult
	 * @var SPUserGroupTypeGetGroupCollectionResult
	 */
	public $GetGroupCollectionResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetGroupCollectionResult GetGroupCollectionResult
	 * @return SPUserGroupTypeGetGroupCollectionResponse
	 */
	public function __construct($_GetGroupCollectionResult = null)
	{
		parent::__construct(array('GetGroupCollectionResult'=>$_GetGroupCollectionResult));
	}
	/**
	 * Set GetGroupCollectionResult
	 * @param GetGroupCollectionResult GetGroupCollectionResult
	 * @return GetGroupCollectionResult
	 */
	public function setGetGroupCollectionResult($_GetGroupCollectionResult)
	{
		return ($this->GetGroupCollectionResult = $_GetGroupCollectionResult);
	}
	/**
	 * Get GetGroupCollectionResult
	 * @return SPUserGroupTypeGetGroupCollectionResult
	 */
	public function getGetGroupCollectionResult()
	{
		return $this->GetGroupCollectionResult;
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