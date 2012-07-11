<?php
/**
 * Class file for SPUserGroupTypeGetUserCollectionFromSiteResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetUserCollectionFromSiteResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetUserCollectionFromSiteResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetUserCollectionFromSiteResult
	 * @var SPUserGroupTypeGetUserCollectionFromSiteResult
	 */
	public $GetUserCollectionFromSiteResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetUserCollectionFromSiteResult GetUserCollectionFromSiteResult
	 * @return SPUserGroupTypeGetUserCollectionFromSiteResponse
	 */
	public function __construct($_GetUserCollectionFromSiteResult = null)
	{
		parent::__construct(array('GetUserCollectionFromSiteResult'=>$_GetUserCollectionFromSiteResult));
	}
	/**
	 * Set GetUserCollectionFromSiteResult
	 * @param GetUserCollectionFromSiteResult GetUserCollectionFromSiteResult
	 * @return GetUserCollectionFromSiteResult
	 */
	public function setGetUserCollectionFromSiteResult($_GetUserCollectionFromSiteResult)
	{
		return ($this->GetUserCollectionFromSiteResult = $_GetUserCollectionFromSiteResult);
	}
	/**
	 * Get GetUserCollectionFromSiteResult
	 * @return SPUserGroupTypeGetUserCollectionFromSiteResult
	 */
	public function getGetUserCollectionFromSiteResult()
	{
		return $this->GetUserCollectionFromSiteResult;
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