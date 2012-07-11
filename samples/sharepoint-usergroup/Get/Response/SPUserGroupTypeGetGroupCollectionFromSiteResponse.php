<?php
/**
 * Class file for SPUserGroupTypeGetGroupCollectionFromSiteResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetGroupCollectionFromSiteResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetGroupCollectionFromSiteResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetGroupCollectionFromSiteResult
	 * @var SPUserGroupTypeGetGroupCollectionFromSiteResult
	 */
	public $GetGroupCollectionFromSiteResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetGroupCollectionFromSiteResult GetGroupCollectionFromSiteResult
	 * @return SPUserGroupTypeGetGroupCollectionFromSiteResponse
	 */
	public function __construct($_GetGroupCollectionFromSiteResult = null)
	{
		parent::__construct(array('GetGroupCollectionFromSiteResult'=>$_GetGroupCollectionFromSiteResult));
	}
	/**
	 * Set GetGroupCollectionFromSiteResult
	 * @param GetGroupCollectionFromSiteResult GetGroupCollectionFromSiteResult
	 * @return GetGroupCollectionFromSiteResult
	 */
	public function setGetGroupCollectionFromSiteResult($_GetGroupCollectionFromSiteResult)
	{
		return ($this->GetGroupCollectionFromSiteResult = $_GetGroupCollectionFromSiteResult);
	}
	/**
	 * Get GetGroupCollectionFromSiteResult
	 * @return SPUserGroupTypeGetGroupCollectionFromSiteResult
	 */
	public function getGetGroupCollectionFromSiteResult()
	{
		return $this->GetGroupCollectionFromSiteResult;
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