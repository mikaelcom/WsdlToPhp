<?php
/**
 * Class file for SPUserGroupTypeGetGroupCollectionFromUserResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetGroupCollectionFromUserResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetGroupCollectionFromUserResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetGroupCollectionFromUserResult
	 * @var SPUserGroupTypeGetGroupCollectionFromUserResult
	 */
	public $GetGroupCollectionFromUserResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetGroupCollectionFromUserResult GetGroupCollectionFromUserResult
	 * @return SPUserGroupTypeGetGroupCollectionFromUserResponse
	 */
	public function __construct($_GetGroupCollectionFromUserResult = null)
	{
		parent::__construct(array('GetGroupCollectionFromUserResult'=>$_GetGroupCollectionFromUserResult));
	}
	/**
	 * Set GetGroupCollectionFromUserResult
	 * @param GetGroupCollectionFromUserResult GetGroupCollectionFromUserResult
	 * @return GetGroupCollectionFromUserResult
	 */
	public function setGetGroupCollectionFromUserResult($_GetGroupCollectionFromUserResult)
	{
		return ($this->GetGroupCollectionFromUserResult = $_GetGroupCollectionFromUserResult);
	}
	/**
	 * Get GetGroupCollectionFromUserResult
	 * @return SPUserGroupTypeGetGroupCollectionFromUserResult
	 */
	public function getGetGroupCollectionFromUserResult()
	{
		return $this->GetGroupCollectionFromUserResult;
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