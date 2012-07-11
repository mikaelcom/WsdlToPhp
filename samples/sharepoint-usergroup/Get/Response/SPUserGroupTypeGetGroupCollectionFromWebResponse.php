<?php
/**
 * Class file for SPUserGroupTypeGetGroupCollectionFromWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetGroupCollectionFromWebResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetGroupCollectionFromWebResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetGroupCollectionFromWebResult
	 * @var SPUserGroupTypeGetGroupCollectionFromWebResult
	 */
	public $GetGroupCollectionFromWebResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetGroupCollectionFromWebResult GetGroupCollectionFromWebResult
	 * @return SPUserGroupTypeGetGroupCollectionFromWebResponse
	 */
	public function __construct($_GetGroupCollectionFromWebResult = null)
	{
		parent::__construct(array('GetGroupCollectionFromWebResult'=>$_GetGroupCollectionFromWebResult));
	}
	/**
	 * Set GetGroupCollectionFromWebResult
	 * @param GetGroupCollectionFromWebResult GetGroupCollectionFromWebResult
	 * @return GetGroupCollectionFromWebResult
	 */
	public function setGetGroupCollectionFromWebResult($_GetGroupCollectionFromWebResult)
	{
		return ($this->GetGroupCollectionFromWebResult = $_GetGroupCollectionFromWebResult);
	}
	/**
	 * Get GetGroupCollectionFromWebResult
	 * @return SPUserGroupTypeGetGroupCollectionFromWebResult
	 */
	public function getGetGroupCollectionFromWebResult()
	{
		return $this->GetGroupCollectionFromWebResult;
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