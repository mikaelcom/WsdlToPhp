<?php
/**
 * Class file for SPUserGroupTypeGetUserCollectionFromWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetUserCollectionFromWebResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetUserCollectionFromWebResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetUserCollectionFromWebResult
	 * @var SPUserGroupTypeGetUserCollectionFromWebResult
	 */
	public $GetUserCollectionFromWebResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetUserCollectionFromWebResult GetUserCollectionFromWebResult
	 * @return SPUserGroupTypeGetUserCollectionFromWebResponse
	 */
	public function __construct($_GetUserCollectionFromWebResult = null)
	{
		parent::__construct(array('GetUserCollectionFromWebResult'=>$_GetUserCollectionFromWebResult));
	}
	/**
	 * Set GetUserCollectionFromWebResult
	 * @param GetUserCollectionFromWebResult GetUserCollectionFromWebResult
	 * @return GetUserCollectionFromWebResult
	 */
	public function setGetUserCollectionFromWebResult($_GetUserCollectionFromWebResult)
	{
		return ($this->GetUserCollectionFromWebResult = $_GetUserCollectionFromWebResult);
	}
	/**
	 * Get GetUserCollectionFromWebResult
	 * @return SPUserGroupTypeGetUserCollectionFromWebResult
	 */
	public function getGetUserCollectionFromWebResult()
	{
		return $this->GetUserCollectionFromWebResult;
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